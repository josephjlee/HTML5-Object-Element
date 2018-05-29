<?php
/*
* @namespace
*/
namespace Dmount\Core\Html\Internal;

/*
* @trait PutElementsObject
* @desc 
* @author Salvatore Gonda <salvatore.gonda@web.de>       
* @version 0.0.1
*/
trait PutElementsObject {

/*
* @method 
* @desc
* @param
* @returns
* @htrows 
*/
  protected function putElementsDirFile()
  {

    $num       = 0;
    $numSubDir = count($this->el)-1; 
    if(is_dir($this->dir))
    {
      foreach($this->el as $subDir => $classes)
      {
        $subDir = ucfirst($subDir);
        if(!is_dir($this->dir.$subDir) && $subDir !== 'void')
        {
          mkdir($this->dir.$subDir,0755);
          foreach($classes as $class)
          {
	    $class    = ucfirst($class).'.php';
	    $filename = $this->dir.$subDir.'/'.$this->prefixClass.$subDir.'_'.$class;
	    if(!file_exists($filename)) 
	    {
	      $content = $this->putElementsClass($subDir,str_replace('.php','',$class));
	      file_put_contents($filename,$content);
	    }   
          }
          clearstatcache();
        }
      }
    }
    else
    {
      throw new \Exception($this->dir.' not found');
    }
    return true;
	
  }//Eof Method "checkElementsDir"

/*
* @method putGlobalAttributesAsObject
* @desc
* @param
* @returns
* @throws
*/
  protected function putElementsClassVar(string $element=NULL) : string
  {

    $str  ='';
    $str .= ''.PHP_EOL;
    $str .= '  /*'.PHP_EOL;
    $str .= '  * @var protected '.PHP_EOL;
    $str .= '  */'.PHP_EOL;
    $str .= '  protected $el;'.PHP_EOL;
    $str .= ''.PHP_EOL;
    $str .= '  /*'.PHP_EOL;
    $str .= '  * @var protected '.PHP_EOL;
    $str .= '  */'.PHP_EOL;
    $str .= '  protected $void ='.(in_array(strtolower($element),$this->el['void'])?'true':'false').';'.PHP_EOL;	
    $str .= ''.PHP_EOL;
    $str .= '  /*'.PHP_EOL;
    $str .= '  * @var public '.PHP_EOL;
    $str .= '  */'.PHP_EOL;
    $str .= '  public $container;'.PHP_EOL;
    $str .= ''.PHP_EOL;
    $str .= '  /*'.PHP_EOL;
    $str .= '  * @var public'.PHP_EOL;
    $str .= '  */'.PHP_EOL;
    $str .= '  public $attributes = array();'.PHP_EOL;
	
    return $str;
	 
  }//Eof Method "putElementsClassVar"

/*
* @method putGlobalAttributesAsObject
* @desc
* @param
* @returns
* @throws
*/
  protected function putElementsGlobalAttributesAsVar(string $el=NULL) : string
  {
	
    $str = '';  
    $this->listGlobalAttributes();
    foreach($this->attr['global'] as $publicGlobAttr)
    {
      $str .= ''.PHP_EOL;
      $str .= '  /*'.PHP_EOL;
      $str .= '  * @var public'.PHP_EOL;
      $str .= '  * @desc Global attribute for element'.PHP_EOL;
      $str .= '  */'.PHP_EOL;
      $str .= '  public $'.$publicGlobAttr.' = \'\';'.PHP_EOL;
    }

    return $str;
  
  }//Eof Method "putGlobalAttributesAsObject"
  
/*
* @method putEventHandlerAsObject
* @desc
* @param
* @returns
* @throws
*/  
  protected function putElementsEventHandlerAsVar(string $el=NULL) : string
  {
    
    $str = '';
    $this->listEventHandlers();
    foreach($this->attr['eventhandler'] as $publicEventHandler)
    {
      $str .= ''.PHP_EOL;
      $str .= '  /*'.PHP_EOL;
      $str .= '  * @var public'.PHP_EOL;
      $str .= '  * @desc Eventhandler for element'.PHP_EOL;
      $str .= '  */'.PHP_EOL;
      $str .= '  public $'.$publicEventHandler.' = \'\';'.PHP_EOL;
    }
    return $str;
	
  }//Eof Method "putEventHandlerAsObject"

/*
* @method putSpecificAttributesAsObject
* @desc
* @param
* @returns
* @throws
*/  
  protected function putElementsSpecificAttributesAsVar(string $group=NULL, string $element=NULL) : string
  {

    $str = '';
    call_user_func(array($this,'list'.$group.'Attributes'));
    $keyElement = strtolower($element);
    if(count($this->attr[$keyElement])>0)
    {
	  foreach($this->attr[$keyElement] as $publicSpecAttrName)
	  {
	    $str .= ''.PHP_EOL;
	    $str .= '  /*'.PHP_EOL;
        $str .= '  * @var public'.PHP_EOL;
	    $str .= '  * @desc Specific attribute for element'.PHP_EOL;
        $str .= '  */'.PHP_EOL;
	    $str .= '  public $'.str_replace('-','_',$publicSpecAttrName).' = \'\';'.PHP_EOL;
	  }	
	}
    return $str;
	
  }//Eof Method "putSpecificAttributesAsObject"

/*
* @method putTraits
* @desc
* @param
* @returns
* @throws
*/
  protected function putElementsTraits() : string
  {
    
    $str  = '';
    $str .= ''.PHP_EOL;
    $str .= '  use \\'.__NAMESPACE__.'\Setters;'.PHP_EOL;
    
    return $str;
	
  }//Eof Method "putTraits"

/*
* @method putSpecificAttributesAsObject
* @desc
* @param
* @returns
* @throws
*/
  protected function putElementsConstruct() : string
  {
	
    $str  = ''; 
    $str .= ''.PHP_EOL; 
    $str .= '/*'.PHP_EOL;
    $str .= '* @construct'.PHP_EOL;
    $str .= '* @desc'.PHP_EOL;
    $str .= '* @param'.PHP_EOL;
    $str .= '* @returns'.PHP_EOL; 
    $str .= '* @throws'.PHP_EOL; 
    $str .= '*/'.PHP_EOL;		
    $str .= '  public function __construct()'.PHP_EOL;
    $str .= '  {'.PHP_EOL;
    $str .= ''.PHP_EOL;
    $str .= '    $this->setElement();'.PHP_EOL;
    $str .= '    $this->setContainer();'.PHP_EOL;
    $str .= ''.PHP_EOL;
    $str .= '  }//Eof Construct'.PHP_EOL;
    $str .= ''.PHP_EOL; 
	
    return $str;
	  
  }//Eof Method "putConstruct"

/*
* @method putSetMethodAttrValue
* @desc
* @param
* @returns
* @throws
*/
  protected function putElementsMethodSpecAttrValue(string $group=NULL, string $element=NULL) : string
  {

    $str        = '';
    $keyElement = strtolower($element);
    call_user_func(array($this,'list'.$group.'Values'));
    if(count($this->attr[$keyElement])>0)
    {
      //if($keyElement === 'xxx')
      //{
      foreach($this->attr[$keyElement] as $publicSpecAttr => $publicSpecAttrValues)
      {
			
	$namePublicSpecAttr = $publicSpecAttr;

	if(is_array($publicSpecAttrValues))
	{
	  if(count($publicSpecAttrValues)>0)
	  {
	    foreach($publicSpecAttrValues as $elementAttr => $elementAttrVal)
	    {
			
	      /*
	      * @desc Set first extended name for method
	      */
	      $elAttrName   = '';
	      $prepAttrName = array();
	      $prepAttrName = explode('-',$namePublicSpecAttr);
				
	      if(is_array($prepAttrName))
	      {
	        $numPrepAttrName = count($prepAttrName);
	        if($numPrepAttrName>1)
	        {
		  $elAttrName = $prepAttrName[0].ucfirst($prepAttrName[1]);
	        }
	        else
	       {
	         $elAttrName = ucfirst($prepAttrName[0]);  
	       }
	     }
	     else
	     {
	       $elAttrName = ucfirst($namePublicSpecAttr);
	     }
				
	     /*
	     * @desc Set second extended name for method
	     */
	     $methodExtValName = '';
	     $elAttrValName    = '';
	     $elValue          = $elementAttrVal;
	     $methodElVal      = ucfirst(str_replace(array('//','/','-',':','.'),'_',$elValue));
	     $expMethodElVal   = explode('_',$methodElVal);
	     $numMethodElVal   = count($expMethodElVal);
             if($numMethodElVal>1)
             {
               $i=1;
               foreach($expMethodElVal as $arrKey => $methodExtName)
               {
                 $methodNameDivider = ($i===$numMethodElVal)?'':'_';
                 $methodExtValName .= ucfirst($methodExtName).$methodNameDivider;
                 $i++;
               }
             }
             else
             {
               $methodExtValName = $methodElVal;
             }
				
	     $elAttrValName = str_replace('_','',$methodExtValName);

	     /*
	     * @desc Complete method name
	     */
	     $methodname = '__setAttr_'.$elAttrName.'_'.$elAttrValName;

	     /*
	     * @desc prepare output
	     */
	     $str .= ''.PHP_EOL; 
	     $str .= '/*'.PHP_EOL;
	     $str .= '* @method '.$methodname.PHP_EOL;
	     $str .= '* @desc'.PHP_EOL;
	     $str .= '* @param string $arg'.PHP_EOL;
	     $str .= '* @returns string '.PHP_EOL; 
	     $str .= '*/'.PHP_EOL;		
	     $str .= '  public function '.$methodname.'(string $arg=NULL) : string'.PHP_EOL;
	     $str .= '  {'.PHP_EOL;
	     $str .= ''.PHP_EOL;
	     $str .= '    $str = \'\';'.PHP_EOL;
	     $str .= '    $str .= \' '.$namePublicSpecAttr.'="'.$elValue.'"\';'.PHP_EOL;
	     $str .= '    return $str;'.PHP_EOL;
	     $str .= ''.PHP_EOL;
	     $str .= '  }//Eof Method "'.$methodname.'"'.PHP_EOL;		
	   }
         }
       }
       else
       {
	 /*
	 * @desc no method will put, due no registration from a specific attribute in array library
	 *       or element has no specific attributes
	 */  
       }
     }
   //}
   }
	
    return $str;
	
  }//Eof Method "putSetMethodAttrValue"

/*
* @method 
* @desc
* @param
* @returns
*/
  protected function putElementsClass(string $group=NULL, string $element=NULL) : string
  {

    $classname = $this->prefixClass.$group.'_'.$element;
    $namespace = str_replace('\Internal','',__NAMESPACE__);
    $namespace = $namespace.'\Elements\\'.$group;
    $element   = ucfirst($element);
	
    /*
    * @desc Get Self-Closing Elements
    */
    $this->listElementsVoid();
	
    $str  = '';
    $str .= '<?php'.PHP_EOL;
    $str .= '/*'.PHP_EOL;
    $str .= '* @namespace'.PHP_EOL;
    $str .= '*/'.PHP_EOL;
    $str .= 'namespace '.$namespace.';'.PHP_EOL;
    $str .= ''.PHP_EOL;
    $str .= '/*'.PHP_EOL;
    $str .= '* @class '.$classname.PHP_EOL;
    $str .= '* @desc '.PHP_EOL;
    $str .= '* @author Salvatore Gonda <salvatore.gonda@web.de>'.PHP_EOL;       
    $str .= '* @version 0.0.1'.PHP_EOL;
    $str .= '*/'.PHP_EOL;
    $str .= 'class '.$classname.' {'.PHP_EOL;

    $str .= $this->putElementsClassVar($element);
    $str .= $this->putElementsGlobalAttributesAsVar($element);
    $str .= $this->putElementsEventHandlerAsVar($element);
    $str .= $this->putElementsSpecificAttributesAsVar($group,$element);
    $str .= $this->putElementsTraits();
    $str .= $this->putElementsConstruct();
    $str .= $this->putElementsMethodSpecAttrValue($group,$element);

    $str .= ''.PHP_EOL; 
    $str .= '}//Eof Class "'.$classname.'"'.PHP_EOL;
    $str .= ''.PHP_EOL;
    $str .= '?>'.PHP_EOL;
	
    return $str;
	 
  }//Eof Method "putElementsClass"

}//Eof Trait "PutElementsObject"

?>
