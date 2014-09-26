<?php

namespace Person\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{

    public function indexAction()
    {   
        return new ViewModel(array(
            'people' => $this->getPersonJson()->fetchAll(),
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

