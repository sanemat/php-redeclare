<?php
class FooTest extends PHPUnit_Framework_TestCase
{
  protected function setUp()
  {
    require dirname(__FILE__) . '/FooAutoload.php';
    require dirname(__FILE__) . '/../lib/Foo.php';
  }
  public function testEndpoint()
  {
    $foo = new Foo();
    $this->assertEquals('http://example.org/end_point', $foo->example());
  }
}
