<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Prodotti\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ProdottiController extends AbstractActionController
{
    public function prodottiAction()
    {
        return new ViewModel();
    }

    public function prodottoAction()
    {
      return new ViewModel([
          'codice' => $this->params()->fromRoute('codice')
      ]);
    }
}
