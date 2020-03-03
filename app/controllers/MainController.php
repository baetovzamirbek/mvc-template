<?php

namespace app\controllers;

use app\core\Controller;

class MainController extends Controller
{
  public function indexAction()
  {
    //$result = $this->model->getData();
    //$vars = ['product' => $result,];
    $this->view->render();
  }
}
