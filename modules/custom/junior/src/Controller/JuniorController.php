<?php

namespace Drupal\junior\Controller;
use Drupal\Core\Controller\ControllerBase;


/**
 * Created by PhpStorm.
 * User: patrickkahnke
 * Date: 9/23/16
 * Time: 5:07 PM
 */
class JuniorController extends ControllerBase
{
  public function content()
  {
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('Hello, World!'),
    );
  }
}