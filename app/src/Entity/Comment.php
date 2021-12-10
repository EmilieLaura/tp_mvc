<?php

namespace App\Entity;

class Comment extends BaseEntity
{
    private int $id_post;
    private string $title_comment;
    private string $content_comment;
    private \Datetime $date_comment;
    private int $member_comment;

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
    public function getTitleComment(): string
    {
        return $this->title_comment;
    }

    /**
     * @param string $title_comment
     */
    public function setTitleComment(string $title_comment): void
    {
        $this->title_comment = $title_comment;
    }

    /**
     * @return string
     */
    public function getContentComment(): string
    {
        return $this->content_comment;
    }

    /**
     * @param string $content_comment
     */
    public function setContentComment(string $content_comment): void
    {
        $this->content_comment = $content_comment;
    }

    /**
     * @return \Datetime
     */
    public function getDateComment(): \Datetime
    {
        return $this->date_comment;
    }

    /**
     * @param \Datetime $date_comment
     */
    public function setDateComment(\Datetime $date_comment): void
    {
        $this->date_comment = $date_comment;
    }

    /**
     * @return int
     */
    public function getMemberComment(): int
    {
        return $this->member_comment;
    }

    /**
     * @param int $member_comment
     */
    public function setMemberComment(int $member_comment): void
    {
        $this->member_comment = $member_comment;
    }
}