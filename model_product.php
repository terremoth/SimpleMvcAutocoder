<?php
require_once './ActiveRecord.php';

class Product extends ActiveRecord
{
    private $id;
    private $name;
    private $quantity;
    private $releaseDate;
    private $active;
    
    public function getId() 
    {
        return $this->id;
    }

    public function getName() 
    {
        return $this->name;
    }

    public function getQuantity() 
    {
        return $this->quantity;
    }

    public function getReleaseDate() 
    {
        return $this->releaseDate;
    }

    public function getActive() 
    {
        return $this->active;
    }

    public function setId($id) 
    {
        $this->id = $id;
    }

    public function setName($name) 
    {
        $this->name = $name;
    }

    public function setQuantity($quantity) 
    {
        $this->quantity = $quantity;
    }

    public function setReleaseDate($releaseDate) 
    {
        $this->releaseDate = $releaseDate;
    }

    public function setActive($active) 
    {
        $this->active = $active;
    }

}
