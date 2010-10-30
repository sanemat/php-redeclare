<?php
class BarTest extends PHPUnit_Framework_TestCase
{
  protected function setUp()
  {
    require_once dirname(__FILE__) . '/BarAutoload.php';
    require_once dirname(__FILE__) . '/../lib/Bar.php';
  }
  public function testStatement()
  {
    $bar = new Bar();
    $this->assertEquals('localhost:11211', $bar->sample());
  }
}
