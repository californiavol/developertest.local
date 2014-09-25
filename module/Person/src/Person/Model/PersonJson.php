<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Person\Model;

class PersonJson {
    
    protected $json;
    
    public function __construct() {
        $this->json = file_get_contents('http://jservers.com/kashman/DevTestData.json');
    }
    
    public function fetchAll()
    {
        $result = json_decode($this->json);
        return $result;
    }
    
    
}