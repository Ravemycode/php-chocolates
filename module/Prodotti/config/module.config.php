<?php

namespace Prodotti;

return array(
    'router' => array(
        'routes' => array(
            'prodotti' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/tavolette',
                    'defaults' => array(
                        'controller' => 'Prodotti\Controller\Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/:codice',
                            'constraints' => array(
                                'codice' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                                'action' => 'prodotto',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Prodotti\Controller\Index' => Controller\IndexController::class
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
