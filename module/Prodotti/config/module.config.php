<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Prodotti;

return array(
    'router' => array(
        'routes' => array(

            'prodotti' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/prodotti',
                    'defaults' => array(
                        'controller' => 'Prodotti\Controller\Index',
                        'action' => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'codice' => array(
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
            'Prodotti\Controller\Index' => Controller\ProdottiController::class
        ),
    ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),

        // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
