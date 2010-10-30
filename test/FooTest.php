<?php
require_once dirname(__FILE__) . '/../lib/Foo.php';
class FooTest extends PHPUnit_Framework_TestCase
{
  protected function setUp()
  {
    require_once dirname(__FILE__) . '/FooAutoload.php';
  }
  public function testEndpoint()
  {
    $foo = new Foo();
    $this->assertEquals('http://example.org/end_point', $foo->example());
  }
}
