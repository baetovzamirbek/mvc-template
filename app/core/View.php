<?php

namespace app\core;

class View
{
  public $path;
  public $route;
  public $layout = 'default';
  public static $layouts = 'default';

  public function __construct($route)   //   ['controller' => 'main',  'action' => 'index', ]
  {
    $this->route = $route;
    $this->path = $route['controller'] . '/' . $route['action'];   //    main/index
  }

  public function render()
  {
    //extract($vars);
    $path = 'app/views/' . $this->path . '.php';
    if (file_exists($path)) {
      ob_start();
      require $path;
      $content = ob_get_clean();
      require 'app/views/layouts/' . $this->layout . '.php';
    }
  }

  public static function errorCode($code)
  {
    http_response_code($code);
    $path = 'app/views/errors/' . $code . '.php';
    if (file_exists($path)) {
      ob_start();
      require $path;
      $content = ob_get_clean();
      require 'app/views/layouts/' . self::$layouts . '.php';
    }
    exit;
  }
}
