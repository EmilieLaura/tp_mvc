<?php

namespace App\Entity;

class Member extends BaseEntity
{
    private int $id_member;
    private string $lastname;
    private string $firstname;
    private string $pseudo;
    private string $email;
    private string $password;
    private \DateTime $date_inscription;

    /**
     * @return int
     */
    public function getIdMember(): int
    {
        return $this->id_member;
    }

    /**
     * @param int $id_member
     */
    public function setIdMember(int $id_member): void
    {
        $this->id_member = $id_member;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    /**
     * @param string $pseudo
     */
    public function setPseudo(string $pseudo): void
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return \DateTime
     */
    public function getDateInscription(): \DateTime
    {
        return $this->date_inscription;
    }

    /**
     * @param \DateTime $date_inscription
     */
    public function setDateInscription(\DateTime $date_inscription): void
    {
        $this->date_inscription = $date_inscription;
    }


}