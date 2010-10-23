<?php
require_once dirname(__FILE__) . '/../lib/Foo.php';
class MyConfig
{
  public static function getProxy()
  {
    return 'http://example.org';
  }
}
class FooTest extends PHPUnit_Framework_TestCase
{
  public function testEndpoint()
  {
    $foo = new Foo();
    $this->assertEquals('http://example.org/end_point', $foo->example());
  }
}
