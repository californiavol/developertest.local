<?php

namespace Person\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Person\Model\Person;

class IndexController extends AbstractActionController
{

    public function indexAction()
    {   
        $people = array();
        $people = $this->getPersonJson()->getAllPeople();
        var_dump($people);
        
        
        foreach ($people as $person) {
            $personModel = $this->getPersonModel();
            //var_dump($person);
            //$personModel = new Person();
            $personModel->setFirstName($person['FName']);
            $personModel->setLastName($person['LName']);
            $personModel->setAge($person['Age']);
            
            $peopleArray[] = array(
              'FName' => $personModel->getFirstName(),
              'LName' => $personModel->getLastName(),  
              'Age'   => $personModel->getAge()
            );
            
            
        }
        
        return new ViewModel(array(
            'people' => $peopleArray,
        ));
    }
    
    public function getPersonJson()
    {
        if(!$this->personJson) {
            $sm = $this->getServiceLocator();
            $this->personJson = $sm->get('Person\Model\PersonJson');
        }
        return $this->personJson;
    }

    public function getPersonModel()
    {
        if(!$this->personModel) {
            $sm = $this->getServiceLocator();
            $this->personModel = $sm->get('Person\Model\Person');
        }
        return $this->personModel;
    }
}

