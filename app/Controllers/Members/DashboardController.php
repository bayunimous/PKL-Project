<?php

namespace App\Controllers\Members;

use App\Controllers\BaseController;
use App\Models\LoanModel;
use App\Models\MemberModel;
use CodeIgniter\I18n\Time;

class DashboardController extends BaseController
{
    protected LoanModel $loanModel;
    protected MemberModel $memberModel;

    public function __construct()
    {
        $this->loanModel = new LoanModel();
        $this->memberModel = new MemberModel();
    }

    public function index()
    {
        $memberId = session()->get('member_id');
        if (!$memberId) {
            return redirect()->to('/member/login');
        }

        $member = $this->memberModel->find($memberId);
        if (!$member) {
            return redirect()->to('/member/login');
        }

        $loans = $this->loanModel->select('loans.id, books.title, loans.quantity, loans.loan_date, loans.due_date, loans.return_date')
            ->join('books', 'loans.book_id = books.id')
            ->where('member_id', $memberId)
            ->findAll();

        $data = [
            'loans' => $loans,
            'member' => $member,
            'notifications' => $this->getNotifications($loans),
        ];

        return view('members/dashboard', $data);
    }

    private function getNotifications(array $loans): array
    {
        $notifications = [];
        foreach ($loans as $loan) {
            if ($loan['return_date'] === null && Time::now()->isAfter(Time::parse($loan['due_date']))) {
                $notifications[] = "Book '{$loan['title']}' is overdue.";
            }
        }
        return $notifications;
    }
}
