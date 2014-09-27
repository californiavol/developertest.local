<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 namespace Person\Model;

class Person {
    
    public $firstName;
    public $lastName;
    public $age;
    
    public function getFirstName()
    {
        return $this->firstName;
    }
    
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }
    
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    
    public function getAge()
    {
        return $this->age;
    }
    
    public function setAge($age)
    {
        $this->age = $age;
    }
    
    public function exchangeArray(array $data)
    {
        $this->firstName = (isset($data['fname'])) ? $data['fname'] : null;
        $this->lastName  = (isset($data['lname'])) ? $data['lname'] : null;
        $this->age       = (isset($data['age']))   ? $data['age']   : null;
    }  

}