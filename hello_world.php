<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>
<body>

<?php

class Foo {

  var $bar;

  function setBar($value) {
    $this->bar = $value;
  }

  function someFunction($param,$param2) {
    echo $param.' '.$param2.$this->bar."<br/>";  
  }

}

$foo = new Foo();

$foo->setBar("Charles","Dickens");
$foo->someFunction("Hello, ");
$foo->someFunction("Godbye, ");

?>
</body>
</html>
