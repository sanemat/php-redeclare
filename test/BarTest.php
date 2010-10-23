<?php
require_once dirname(__FILE__) . '/../lib/Bar.php';
class MyConfig
{
  public static function getMemCachePort()
  {
    return '11211';
  }
}
class BarTest extends PHPUnit_Framework_TestCase
{
  public function testStatement()
  {
    $bar = new Bar();
    $this->assertEquals('localhost:11211', $bar->sample());
  }
}
