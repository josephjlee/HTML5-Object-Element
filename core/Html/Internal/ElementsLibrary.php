<?php
/*
* @namespace
*/
namespace Dmount\Core\Html\Internal;

/*
* @trait ElementsLibrary
* @desc Three lists of arrays with categorized array object ("el")
* @author Salvatore Gonda <salvatore.gonda@web.de>       
* @version 1.2.4
*/
trait ElementsLibrary {
	
/*
* @method listElementsCategoryName
* @desc 
*       Some elements are deprecated, not implemented or experimental.
*       Check also the method "listElementsObsolete"
*       Here are the non-listed elements: 
*         - keygen
*         - dialog
* @param
* @returns
*/
  protected function listElementsCategoryName()
  {
	  
     $this->el['root']         = array('html');
     $this->el['meta']         = array('head','title','base','link','meta','style');
     $this->el['scripting']    = array('script','noscript','canvas');
     $this->el['sectioning']   = array('body','section','nav','article','aside','h1','h2','h3','h4','h5','header','footer','address','main');
     $this->el['text']         = array('blockquote','hr','div','dl','dt','dd','figure','figcaption','ol','ul','li','p','pre');
     $this->el['inline']       = array('a','abbr','b','br','bdi','bdo','em','cite','code','q','dfn','data','time','var','kbd','sub','sup','i','u','mark','ruby','rt','rp','rtc','samp','strong','small','s','span','wbr');
     $this->el['modification'] = array('ins','del');
     $this->el['multimedia']   = array('area','audio','img','map','track','video');
     $this->el['embed']        = array('iframe','embed','object','param','source','svg','math');
     $this->el['table']        = array('table','caption','colgroup','col','tbody','thead','tfoot','tr','td','th');
     $this->el['form']         = array('form','fieldset','legend','label','input','button','select','datalist','optgroup','option','textarea','output','progress','meter');
     $this->el['interactive']  = array('details','summary','command','menu');
     
     return $this;
	 
  }//Eof Method "listElementCategoryName"

/*
* @method listElementsObsolete
* @desc
* @param
* @returns
*/
  protected function listElementsObsolete()
  {
	  
    $this->el['obsolete'] = array('command','keygen');  
    
    return $this;
	
  }//Eof Method "listElementsObsolete"

/*
* @method listElementsVoid
* @desc
* @param
* @returns
*/
  protected function listElementsVoid()
  {
	
    $this->el['void']=array('area','base','br','col','command','embed','hr','img','input','keygen','link','menuitem','meta','param','source','track','wbr');
    return $this;
  
  }//Eof Method "listElementsVoid
	
}//Eof Trait "ElementsLibrary"

?>
