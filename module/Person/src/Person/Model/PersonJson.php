<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Person\Model;

use Person\Model\Person;

class PersonJson {
    
    protected $json;
    
    public function __construct() {
        $this->json = file_get_contents('http://jservers.com/kashman/DevTestData.json');
    }
    
    public function decodeJson()
    {
        $result = json_decode($this->json, true);
        return $result;        
    }
    
    public function getAllPeople()
    {
        $people = $this->decodeJson();
        //var_dump($people);  
        
        foreach ($people as $person) {
            //$personModel = $this->getPersonModel();
            //var_dump($person);
            $personModel = new Person();
            $personModel->setFirstName($person['FName']);
            $personModel->setLastName($person['LName']);
            $personModel->setAge($person['Age']);
            
            $peopleArray[] = array(
              'FName' => $personModel->getFirstName(),
              'LName' => $personModel->getLastName(),  
              'Age'   => $personModel->getAge()
            );
            
            
        }
        
        $peopleSorted = $this->sortPeople($peopleArray);
        //var_dump($peopleSorted);
        return $peopleSorted;
    }
    
    public function sortPeople($people)
    {
        
        $sortArray = array(); 

        foreach($people as $person){ 
            foreach($person as $key=>$value){ 
                if(!isset($sortArray[$key])){ 
                    $sortArray[$key] = array(); 
                } 
                $sortArray[$key][] = strtoupper($value); 
            } 
        } 

        $orderby = "LName"; //change this to whatever key you want from the array 

        array_multisort($sortArray[$orderby],SORT_DESC,$people); 
        //var_dump($people); 
        
        
        return $people;
    }


    /**
     * Map an array
     *
     * @param array  $json  JSON array structure from json_decode()
     * @param mixed  $array Array or ArrayObject that gets filled with
     *                      data from $json
     * @param string $class Class name for children objects.
     *                      All children will get mapped onto this type.
     *                      Supports class names and simple types
     *                      like "string".
     *
     * @return mixed Mapped $array is returned
     */
    public function mapArray($json, $array, $class = null)
    {
        foreach ($json as $key => $jvalue) {
            if ($class === null) {
                $array[$key] = $jvalue;
            } else if ($this->isFlatType(gettype($jvalue))) {
                //use constructor parameter if we have a class
                // but only a flat type (i.e. string, int)
                if ($jvalue === null) {
                    $array[$key] = null;
                } else {
                    $array[$key] = new $class($jvalue);
                }
            } else {
                $array[$key] = $this->map($jvalue, new $class());
            }
        }
        return $array;
    }
    
}