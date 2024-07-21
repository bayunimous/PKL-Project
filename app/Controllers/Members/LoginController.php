<?php

namespace App\Controllers\Members;

use App\Controllers\BaseController;
use App\Models\MemberModel;
use CodeIgniter\I18n\Time;

class LoginController extends BaseController
{
    protected MemberModel $memberModel;

    public function __construct()
    {
        $this->memberModel = new MemberModel();
    }

    public function loginForm()
    {
        return view('members/login');
    }

    public function login()
    {
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('password');

        $member = $this->memberModel->where('email', $email)->first();

        if ($member && $member['phone'] === $phone) {
            session()->set('member_id', $member['id']);
            return redirect()->to('/member/dashboard');
        }

        session()->setFlashdata('error', 'Invalid email or password');
        return redirect()->to('/member/login');
    }
}
