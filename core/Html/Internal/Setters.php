<?php
/*
* @namespace
*/
namespace Dmount\Core\Html\Internal;

/*
* @trait Setters
* @desc 
* @author Salvatore Gonda <salvatore.gonda@web.de>       
* @version 0.0.1
*/
trait Setters {

/*
* @method
* @desc
* @param
* @returns
*/
  protected function setElement()
  {

    $prepare  = str_replace('Dmount\Core\Html\Elements\\','',get_class($this));
	$prepare  = explode('\\',$prepare);
	$prepare  = explode("_",$prepare[1]);
	$prepare  = $prepare[3];
    $this->el = strtolower($prepare);

  }//Eof Method "setElement"

/*
* @method
* @desc
* @param
* @returns
*/	
  public function setContainer(array $args=array())
  {

    $str  = '';
	$str .= '<'.$this->el.$this->setAttributes($args).'>'.(($this->void)?'':'</'.$this->el.'>');  
	$this->container = $str;
	 
  }//Eof Method "setContainer"

/*
* @method
* @desc
* @param
* @returns
*/
  public function setAttributes(array $args=array()) : string
  {
  
    $str='';

    if(count($args)>0)
	{
      foreach($args as $key => $value)
	  {
        $this->attributes[$key]=$args[$key];
        if(strlen($this->attributes[$key])>0)
		{
		  $str.=' '.$key.'="'.$this->attributes[$key].'"';	
		}
	  }
	}
    else
	{
	  if(count($this->attributes)===2)
	  {
	    if(empty($this->attributes['id']) && empty($this->attributes['class']))
		{
	      $str.=' id="" class=""';
		}
	  }
	}
	
	return $str;
	
  }//Eof Method "setAttributes"

}//Eof Trait "Setters"

?>