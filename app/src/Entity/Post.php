<?php

namespace App\Entity;

class Post extends BaseEntity
{
    private gitint $id_post;
    private string $title_post;
    private string $content_post;
    private $date_post;
    private int $member_id;

    /**
     * @return int
     */
    public function getIdPost(): int
    {
        return $this->id_post;
    }

    /**
     * @param int $id_post
     */
    public function setIdPost(int $id_post): void
    {
        $this->id_post = $id_post;
    }

    /**
     * @return string
     */
    public function getTitlePost(): string
    {
        return $this->title_post;
    }

    /**
     * @param string $title_post
     */
    public function setTitlePost(string $title_post): void
    {
        $this->title_post = $title_post;
    }

    /**
     * @return string
     */
    public function getContentPost(): string
    {
        return $this->content_post;
    }

    /**
     * @param string $content_post
     */
    public function setContentPost(string $content_post): void
    {
        $this->content_post = $content_post;
    }

    /**
     * @return \DateTime
     */
    public function getDatePost(): \DateTime
    {
        return $this->date_post;
    }

    /**
     * @param \DateTime $date_post
     */
    public function setDatePost(\DateTime $date_post): void
    {
        $this->date_post = $date_post;
    }

    /**
     * @return int
     */
    public function getMemberId(): int
    {
        return $this->member_id;
    }

    /**
     * @param int $member_id
     */
    public function setMemberId(int $member_id): void
    {
        $this->member_id = $member_id;
    }
}