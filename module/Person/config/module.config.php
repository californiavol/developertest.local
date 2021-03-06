<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Person\Controller\Index' => 'Person\Controller\IndexController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'person' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/person',
                    'defaults' => array(
                        'controller' => 'Person\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /person/:controller/:action
            'person' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/person',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Person\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'person' => __DIR__ . '/../view',
        ),
    ),
);