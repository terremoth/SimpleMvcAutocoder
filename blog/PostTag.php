<?php

class PostTag
{
    private $id;
    private $Post;
    private $Tag;
    
    public function getId() {
        return $this->id;
    }

    public function getPost() {
        return $this->Post;
    }

    public function getTag() {
        return $this->Tag;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setPost($Post) {
        $this->Post = $Post;
    }

    public function setTag($Tag) {
        $this->Tag = $Tag;
    }

}
