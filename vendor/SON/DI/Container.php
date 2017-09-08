<?php
namespace SON\DI;

class Container
{
  public static function getModel($model)
  {
    $class = "\\App\\Models\\".ucfirst($model);
    return new $class( Conn::getDb() );
  }
}
