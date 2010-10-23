<?php
class Foo
{
  public function example()
  {
    $proxyUrl = MyConfig::getProxy();
    return $proxyUrl . '/end_point';
  }
}
?>
