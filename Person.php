<?php

class Person 
{
    private $name;
    private $birthDate;            
    private $skinColor;            
    private $gender;            
    private $bloodType;
    
    public function getName() 
    {
        return $this->name;
    }

    public function getBirthDate() 
    {
        return $this->birthDate;
    }

    public function getSkinColor() 
    {
        return $this->skinColor;
    }

    public function getGender() 
    {
        return $this->gender;
    }

    public function getBloodType() 
    {
        return $this->bloodType;
    }

    public function setName($name) 
    {
        $this->name = $name;
    }

    public function setBirthDate($birthDate) 
    {
        $this->birthDate = $birthDate;
    }

    public function setSkinColor($skinColor) 
    {
        $this->skinColor = $skinColor;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setBloodType($bloodType) 
    {
        $this->bloodType = $bloodType;
    }
}
