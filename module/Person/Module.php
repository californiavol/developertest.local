<?php
namespace Person;

use Person\Model\Person;
use Person\Model\PersonJson;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    
    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'Person\Model\Person' => function($sm) {
                    $person = new Person();
                    return $person;
                },
                'Person\Model\PersonJson' => function($sm) {
                    $personJson = new PersonJson();
                    return $personJson;
                }        
            )
        );
    }
    
}
