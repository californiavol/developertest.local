<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 namespace Person\Model;

class Person {
    
    private $FName;
    private $LName;
    private $Age;
    
    public function getFName()
    {
        return $this->FName;
    }
    
    public function setFName(\Zend\XmlRpc\Value\String $FName)
    {
        $this->FName = $FName;
    }

    public function getLName()
    {
        return $this->LName;
    }
    
    public function setLName(\Zend\XmlRpc\Value\String $LName)
    {
        $this->LName = $LName;
    }
    
    public function getAge()
    {
        return $this->Age;
    }
    
    public function setAge(Int $Age)
    {
        $this->Age = $Age;
    }
    


}