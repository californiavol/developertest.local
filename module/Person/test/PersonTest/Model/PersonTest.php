<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PersonTest\Model;

use Person\Model\Person;
use PHPUnit_Framework_TestCase;

class PersonTest extends PHPUnit_Framework_TestCase
{
    
    public function testPersonInitialState()
    {
        $person = new Person();
        
        $this->assertNull($person->fname, 'fname should initially be null');
        $this->assertNull($person->lname, 'lname should initially be null');
        $this->assertNull($person->age, 'age should initially be null');
    }
    
    public function testExchangeArraySetsPropertiesCorrectly()
    {
        $person = new Person();
        
        $data = array(
            'fname' => 'a greate first name',
            'lname' => 'a great last name',
            'age'   => 'a great age'
        );
        
        $person->exchangeArray($data);
        
        $this->assertSame($data['fname'], $person->fname, 'fname not set correctly');
        $this->assertSame($data['lname'], $person->lname, 'lname not set correctly');
        $this->assertSame($data['age'],   $person->age,   'age not set correctly');        
    }
    
    public function testExchangeArraySetsPropertiesToNullIfKeysAreNotPresent()
    {
        $person = new Person();
        
        $person->exchangeArray(array(
            'fname' => 'a great first name',
            'lname' => 'a great last name',
            'age'   => 'a great age'
        ));
        
        $person->exchangeArray(array());
        
        $this->assertNull($person->fname, 'fname should have defaulted to null');
        $this->assertNull($person->lname, 'lname should have defaulted to null');
        $this->assertNull($person->age, 'age should have defaulted to null');        
    }
    
}