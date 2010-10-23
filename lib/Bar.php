<?php
class Bar
{
  public function sample()
  {
    $port = MyConfig::getMemCachePort();
    return 'localhost:' . $port;
  }
}
?>
