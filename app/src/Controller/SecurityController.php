<?php

namespace App\Controller;

use App\Entity\Member;
use App\Model\MemberManager;

class SecurityController extends BaseController
{
    public function executeLogin()
    {
        if (empty($_POST['email']) || empty($_POST['password'])) {
            $this->render('Please login', [], 'Security/login');
        }

    }

    private function logMember(Member $member): void
    {
        $_SESSION['logged_member'] = serialize($member);
    }
}