<?php

namespace Person\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class IndexController extends AbstractActionController
{

    public function indexAction()
    {   
        $people = array();
        $people = $this->getPersonJson()->getAllPeople();
        $people = sort($people);
        //var_dump($people);
        
        return new ViewModel(array(
            'people' => $people,
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


}

