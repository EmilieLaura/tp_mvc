<?php

namespace App\Model;

use App\Entity\Member;

class MemberManager extends BaseManager
{
    public function createMember(Member $member): Member
    {
        if( isset($_POST['lastname']) &&
            isset($_POST['firstname']) &&
            isset($_POST['email']) &&
            isset($_POST['pseudo']) &&
            isset($_POST['password']) )
        {
            $lastname = trim($_POST['lastname']);
            $firstname = trim($_POST['firstname']);
            $email = trim($_POST['email']);
            $pseudo = trim($_POST['pseudo']);
            $password = trim($_POST['password']);

            // Cryptage du mot de passe :
            $password = password_hash($password, PASSWORD_DEFAULT);

            $createMember = $this->pdo->prepare("INSERT INTO members (lastname, firstname, email, pseudo, password, date_inscription) VALUES (:lastname, :firstname, :email, :pseudo, :password, CURDATE())");

            $createMember->bindParam(':lastname', $lastname, \PDO::PARAM_STR);
            $createMember->bindParam(':firstname', $firstname, \PDO::PARAM_STR);
            $createMember->bindParam(':email', $email, \PDO::PARAM_STR);
            $createMember->bindParam(':pseudo', $pseudo, \PDO::PARAM_STR);
            $createMember->bindParam(':password', $password, \PDO::PARAM_STR);

            $createMember->execute();

            return $this->getEmail($member->getEmail());
        }
    }

    // Read :

    /**
     * @param int $id_member
     * @return Member
     */
    public function getMemberById(int $id_member): Member
    {
        $getMember = $this->pdo->prepare('SELECT * FROM members WHERE id_member = :id_member');
        $getMember->bindValue(':id_member', $id_member, \PDO::PARAM_INT);
        $getMember->execute();
        $getMember->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\Member');

        return $getMember->fetch();
    }

}