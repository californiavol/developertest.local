<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Person\Model;

use Person\Model\Person;

class PersonJson {
    
    private $json;
    
    public function __construct() {
        $this->json = file_get_contents('http://jservers.com/kashman/DevTestData.json');
    }
    /*
     * return array
     */
    private function _decodeJson()
    {
        $result = json_decode($this->json, true);
        return $result;        
    }
    
    /*
     * return array
     */
    public function getAllPeople()
    {
        $data = $this->_decodeJson();
        
        $people = array();
        foreach ($data as $datum) {
            
            $person = new Person();
            
            $person->setFirstName($datum['FName']);
            $person->setLastName($datum['LName']);
            $person->setAge($datum['Age']);
            
            $people[] = array(
              'FName' => $person->getFirstName(),
              'LName' => $person->getLastName(),  
              'Age'   => $person->getAge()
            );       
        }
        
        return $people;
    }
    
}