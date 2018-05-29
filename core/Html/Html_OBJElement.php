<?php
/*
* @namespace
*/
namespace Dmount\Core\Html;

/*
* @desc import traits
*/
use Dmount\Core\Html\ {
	Internal\ElementsLibrary as ELib,
	Internal\AttributesLibrary as ALib,
    Internal\ValuesLibrary as VLib,
	Internal\PutElementsObject as Putter
};

/*
* @class Html_OBJElements
* @desc 
* @author Salvatore Gonda <salvatore.gonda@web.de>       
* @version 0.6.3
*/
class Html_OBJElement {

  /*
  * @desc call traits
  */ 
  use ELib;
  use ALib;
  use VLib;
  use Putter;

  /*
  * @var protected string dir
  * @desc
  */
  protected $dir;
  
  /*
  * @var protected array el
  * @desc
  */
  protected $el = array();
  
  /*
  * @var protected array attr
  * @desc
  */
  protected $attr = array();
 
  /*
  * @var protected string prefixClass
  * @desc
  */
  protected $prefixClass = 'Html_Elements_';
  
  /*
  * @var public array obj
  * @desc
  */
  public $obj = array();

  /*
  * @var public array obj
  * @desc
  */
  public $val = array();

/*
* @construct
* @desc
* @param
* @returns
*/	
  public function __construct()
  {
    
	if(isset($_GET['install']))
	{
	  $this->setElementsPath();
	  $this->register();
	  spl_autoload_register(array($this,'load'));
	  $this->initialize();
	}
	
  }//Eof Construct

/*
* @method public register
* @desc
* @param
* @returns
*/
  public function register()
  {
	
	$class  = '';
	$handle = '';
	$file   = '';
	$subDir = array('.', '..','Void','Internal','Embed','Root','Meta','Script','Sections','Group','Text','Modification','Table','Form','Interactive');
	
	$this->listElementsCategoryName();

    if($this->putElementsDirFile()) 
	{
	  
	  foreach($this->el as $elDir => $elFiles)
	  {
		$elDir = ucfirst($elDir);
		if($elDir !== 'Void')
		{
		  
          $handle = opendir($this->dir.$elDir); 
          while(false !== ($file = readdir($handle)))
          {
			  
		    if(!in_array($file,$subDir))
		    {
			  if(file_exists($this->dir.$elDir.'/'.$file))
			  {
		        $element                     = str_replace('.php','',$file);
			    $class                       = __NAMESPACE__.'\Elements\\'.$elDir.'\\'.$element;
                $this->obj[$elDir][$element] = $class;
			  }
		    }
			
          }
	      closedir($handle);
		}
	  }
	  
    }
	ksort($this->obj,SORT_STRING);
	return $this;
	
  }//Eof Method "register"

/*
* @method public load
* @desc
* @param
* @returns
*/
  public function load()
  {

    foreach($this->obj as $subDir => $file)
	{
	  foreach($file as $filename => $classname)
	  {
	    require_once $this->dir.$subDir.'/'.$filename.'.php';
	    spl_autoload($classname);
	  }
	}
	return $this;
	
  }//Eof Method "load"

/*
* @method public initialize
* @desc
* @param
* @returns
*/
  public function initialize()
  {

	foreach($this->obj as $dir => $file)
	{
	  foreach($file as $filename => $classname)
	  {

	    /*
		* @desc 
		*/
		$element                   = str_replace($this->prefixClass.$dir.'_','',$filename);
		$element                   = strtolower($element);
	    $this->obj[$dir][$element] = new $classname;
		
		/*
		* @desc 
		*/
		$methods = get_class_methods($classname);
        foreach($methods as $methodName) 
		{
		  if($methodName !== '__construct')
		  {
			$prepMethodName = strtolower(str_replace('__setAttr_','',$methodName));
			$arrMethodName  = explode('_',$prepMethodName);
			if(count($arrMethodName)>1)
			{
              $this->val[$dir][$element][$arrMethodName[0]][$arrMethodName[1]] = call_user_func(array($this->obj[$dir][$element],$methodName));
			}
		  }
        }
		unset($this->obj[$dir][$filename]);
	  }
	}
	//return $this;
	  
  }//Eof Method "initialize"

/*
* @method 
* @desc
* @param
* @returns
*/
  public static function requireOnce(string $name=NULL)
  {
    
	$this->obj[] = ucfirst($name);
	require_once $this->dir.$this->obj.'.php';
	
  }//Eof Method "get"

/*
* @method 
* @desc
* @param
* @returns
*/
  public static function set(array $args=NULL) 
  {
	
	$name = __NAMESPACE__.'\Elements\\'.$this->prefixClass.$this->obj;
	call_user_func(array($name, 'setAttributes'), $args);
    $str = call_user_func(array($name, 'setContainer'));
	
	return $str;
	
  }//Eof Method "set"

/*
* @method setElementsPath
* @desc
* @param
* @returns
*/
  protected function setElementsPath()
  {
	  
	$this->dir = CORE.str_replace(array(__NAMESPACE__.'\Html','OBJ','_'),array('Html','','/'),get_class($this)).'s/';
	
  }//Eof Method "setElementPath"

}//Eof class "Html_Elements"

?>