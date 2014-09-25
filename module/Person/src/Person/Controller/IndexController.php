<?php

namespace Person\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{

    public function indexAction()
    {
       $json = '
           [{"FName":"Bob","LName":"Rasputin","Age":"25"},
            {"FName":"Larry","LName":"polanski","Age":"25"},
            {"FName":"Max","LName":"Xzavier","Age":"25"},
            {"FName":"Steve","LName":"filman","Age":"25"},
            {"FName":"Thomas","LName":"Govenator","Age":"25"}]
            '; 
        
       var_dump(json_decode($json));
        
        return new ViewModel();
    }


}

