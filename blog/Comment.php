<?php

class Comment 
{
    private $id;
    private $content;
    private $Author;
    private $commentDate;
    private $commentReference;
    
    public function getId() {
        return $this->id;
    }

    public function getContent() {
        return $this->content;
    }

    public function getAuthor() {
        return $this->Author;
    }

    public function getCommentDate() {
        return $this->commentDate;
    }

    public function getCommentReference() {
        return $this->commentReference;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function setAuthor($Author) {
        $this->Author = $Author;
    }

    public function setCommentDate($commentDate) {
        $this->commentDate = $commentDate;
    }

    public function setCommentReference($commentReference) {
        $this->commentReference = $commentReference;
    }

}
