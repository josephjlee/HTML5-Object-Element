<?php

$classes = array(
	'Dmount\Core\Html\Internal\ElementsLibrary'           => __DIR__.'/Html/Internal/ElementsLibrary.php',
	'Dmount\Core\Html\Internal\AttributesLibrary'         => __DIR__.'/Html/Internal/AttributesLibrary.php',
	'Dmount\Core\Html\Internal\ValuesLibrary'             => __DIR__.'/Html/Internal/ValuesLibrary.php',
	'Dmount\Core\Html\Internal\PutElementsObject'         => __DIR__.'/Html/Internal/PutElementsObject.php',
	'Dmount\Core\Html\Html_OBJElement'                    => __DIR__.'/Html/Html_OBJElement.php',
	'Dmount\Core\Html\Internal\Setters'                   => __DIR__.'/Html/Internal/Setters.php',
);

spl_autoload_register(
  function ($class) use ($classes) 
  {
    if(isset($classes[$class])) 
	{
      require $classes[$class];
    }
  }
);

//Html Core
$HtmlOBJElementInstance = new Dmount\Core\Html\Html_OBJElement();

//Examples:
print_r($HtmlOBJElementInstance->obj['Meta']['link']);
print_r($HtmlOBJElementInstance->val['Meta']['link']);
print_r(json_encode($HtmlOBJElementInstance->val['Meta']['link']));

?>