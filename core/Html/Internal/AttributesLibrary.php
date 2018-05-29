<?php
/*
* @namespace
*/
namespace Dmount\Core\Html\Internal;

/*
* @trait AttributesLibrary
* @desc 
* @author Salvatore Gonda <salvatore.gonda@web.de>       
* @version 1.0.9
*/
trait AttributesLibrary {
  
/*
* @method protected listGlobalAttributes
* @desc
* @param
* @returns
*/
  protected function listGlobalAttributes()
  {
	
	$this->attr['global'] = array('accesskey','autocapitalize','class','contenteditable','contextmenu',
	                              'dir','draggable','dropzone','hidden','id','is',
							      'itemid','itemprop','itemref','itemscope','itemtype',
								  'lang','slot','spellcheck','style','tabindex','title');
	  
  }//Eof Method "listGlobalAttributes"

/*
* @method protected listEventHandlers
* @desc
* @param
* @returns
*/
  protected function listEventHandlers()
  {
	 
    $this->attr['eventhandler'] = array('onabort','onautocomplete','onautocompleteerror','onblur','oncancel','oncanplay',
	                                    'oncanplaythrough','onchange','onclick','onclose','oncontextmenu','oncuechange',
									    'ondblclick','ondrag','ondragend','ondragenter','ondragexit','ondragleave',
										'ondragover','ondragstart','ondrop','ondurationchange','onemptied','onended',
										'onerror','onfocus','oninput','oninvalid','onkeydown','onkeypress','onkeyup','onload',
										'onloadeddata','onloadedmetadata','onloadstart','onmousedown','onmouseenter',
										'onmouseleave','onmousemove','onmouseout','onmouseover','onmouseup','onmousewheel',
										'onpause','onplay','onplaying','onprogress','onratechange','onreset','onresize',
										'onscroll','onseeked','onseeking','onselect','onshow','onsort','onstalled','onsubmit',
										'onsuspend','ontimeupdate','ontoggle','onvolumechange','onwaiting');
   
   return $this;
    
  }//Eof Method "listEventHandlers"

/*
* @method protected listRootAttributes
* @desc
* @param
* @returns
*/
  protected function listRootAttributes()
  {
	
    $this->attr['html'] = array('xmlns');
	return $this;
	 
  }//Eof Method "listRootAttributes"

/*
* @method protected listMetaAttributes
* @desc   
* @param
* @returns
*/
  protected function listMetaAttributes()
  {
  
    $this->attr['head']  = array();
	$this->attr['title'] = array(); 
	$this->attr['base']  = array('href','target');								 
	$this->attr['meta']  = array('name','charset','content','http-equiv');							 
	$this->attr['link']  = array('as','crossorigin','disabled','href','hreflang','integrity','media','methods','referrerpolicy','rel','sizes','type');							 
	$this->attr['style'] = array('type','media','nonce');
	return $this;
	  
  }//Eof Method "listMetaAttributes"

/*
* @method protected listScriptingAttributes
* @desc
* @param
* @returns
*/
  protected function listScriptingAttributes()
  {
	
	$this->attr['canvas']   = array('width','height');
	$this->attr['script']   = array('async','crossorigin','defer','integrity','nonce','src','text','type');
	$this->attr['noscript'] = array();
	return $this;
	  
  }//Eof Method "listScriptingAttributes"

/*
* @method protected listSectioningAttributes
* @desc
* @param
* @returns
*/
  protected function listSectioningAttributes()
  {
	
	$this->attr['address'] = array();
    $this->attr['article'] = array();
	$this->attr['aside']   = array();  
    $this->attr['body']    = array('onafterprint','onbeforeprint','onbeforeunload','onhashchange','onmessage','onoffline','ononline','onpopstate','onredo','onstorage','onundo','onunload');
	$this->attr['h1']      = array();
	$this->attr['h2']      = array();
	$this->attr['h3']      = array();
	$this->attr['h4']      = array();
	$this->attr['h5']      = array();
	$this->attr['h6']      = array();
	$this->attr['header']  = array();
	$this->attr['footer']  = array();
	$this->attr['main']    = array();
	$this->attr['nav']     = array();
	$this->attr['section'] = array();
	return $this; 
	  
  }//Eof Method "listSectioningAttributes"

/*
* @method protected listTextAttributes
* @desc
* @param
* @returns
*/
  protected function listTextAttributes()
  {
	  
    $this->attr['blockquote'] = array('cite');
	$this->attr['hr']         = array();
    $this->attr['div']        = array();
	$this->attr['dl']         = array();
	$this->attr['dt']         = array();
	$this->attr['dd']         = array();
	$this->attr['figure']     = array();
	$this->attr['figcaption'] = array();
	$this->attr['li']         = array('value');
	$this->attr['ol']         = array('reversed','start','type');
	$this->attr['ul']         = array();
	$this->attr['p']          = array();
	$this->attr['pre']        = array();
	return $this;
	 
  }//eof Method "listTextAttributes"

/*
* @method protected listInlineAttributes
* @desc
* @param
* @returns
*/
  protected function listInlineAttributes()
  {
	  
    $this->attr['a']      = array('download','href','hreflang','media','ping','rel','target','type');
	$this->attr['abbr']   = array();
	$this->attr['b']      = array();
	$this->attr['br']     = array();
	$this->attr['bdi']    = array();
	$this->attr['bdo']    = array();
	$this->attr['em']     = array();
	$this->attr['cite']   = array();
	$this->attr['code']   = array();
	$this->attr['q']      = array('cite');
	$this->attr['dfn']    = array();
	$this->attr['data']   = array();
	$this->attr['time']   = array('datetime');
	$this->attr['var']    = array();
	$this->attr['kbd']    = array();
	$this->attr['i']      = array();
	$this->attr['u']      = array();
	$this->attr['mark']   = array();
	$this->attr['ruby']   = array();
	$this->attr['rt']     = array();
	$this->attr['rp']     = array();
	$this->attr['rtc']    = array();
	$this->attr['samp']   = array();
	$this->attr['strong'] = array();
	$this->attr['small']  = array();
	$this->attr['s']      = array();
	$this->attr['span']   = array();
    $this->attr['sub']    = array();
	$this->attr['sup']    = array();
	$this->attr['wbr']    = array();
	return $this;
	 
  }//Eof Method "listInlineAttributes"

/*
* @method protected listModificationAttributes
* @desc
* @param
* @returns
*/
  protected function listModificationAttributes()
  {
	
	$this->attr['ins'] = array();
	$this->attr['del'] = array();
	  
  }//Eof Method "listModificationAttributes"

/*
* @method protected listMultimediaAttributes
* @desc
* @param
* @returns
*/
  protected function listMultimediaAttributes()
  {
	
    $this->attr['img']   = array('alt','crossorigin','height','hspace','ismap','longdesc','referrerpolicy','sizes','src','srcset','width','usemap','vspace');
    $this->attr['video'] = array('autoplay','buffered','controls','crossorigin','width','height','src','loop','muted','played','preload','poster','playsinline');
	$this->attr['audio'] = array('autoplay','buffered','controls','src','loop','muted','played','preload','volume');
	$this->attr['track'] = array('default','kind','label','src','srclang');
	$this->attr['map']   = array('name');
	$this->attr['area']  = array('alt','coords','download','href','hreflang','media','rel','shape','target','type');
    return $this;
	
  }//Eof Method "listMultimediaAttributes"

/*
* @method protected listEmbedAttributes
* @desc
* @param
* @returns
*/
  protected function listEmbedAttributes()
  {
	
	$this->attr['iframe'] = array('src','width','height','frameborder','name');
	$this->attr['embed']  = array('width','height','src','type');
	$this->attr['object'] = array('data','form','height','name','type', 'typemustmatch', 'usemap','width');
	$this->attr['param']  = array('name','value');
	$this->attr['source'] = array('sizes','src','srcset','type','media');
	$this->attr['svg']    = array('version','baseProfile','x','y','width','height','preserveAspectRation','contentScriptType','contentStyleType','viewBox');
	$this->attr['math']   = array();
	return $this;
	
  }//Eof Method "listEmbedAttributes"

/*
* @method protected listTableAttributes
* @desc
* @param
* @returns
*/
  protected function listTableAttributes()
  {

   $this->attr['table']    = array();
   $this->attr['caption']  = array();
   $this->attr['colgroup'] = array('span');
   $this->attr['col']      = array('span');
   $this->attr['tbody']    = array();
   $this->attr['thead']    = array();
   $this->attr['tfoot']    = array();
   $this->attr['tr']       = array();
   $this->attr['td']       = array('colspan','headers','rowspan');
   $this->attr['th']       = array('abbr','colspan','headers','rowspan','scope');
   return $this;
  
  }//Eof Method "listTableAttributes"
  
/*
* @method protected listFormAttributes
* @desc
* @param
* @returns
*/
  protected function listFormAttributes()
  {
	  
    $this->attr['form']     = array('accept-charset','action','autocomplete','enctype','method','name','novalidate','target');
	$this->attr['fieldset'] = array('disabled','form','name');
	$this->attr['legend']   = array();
	$this->attr['label']    = array('for');
	$this->attr['input']    = array('accept','autocomplete','autofocus','capture','checked','disabled','form','formaction','formenctype','formmethod','formnovalidate','formtarget','height','list','max','maxlength','min','minlength','multiple','type','name','pattern','placeholder','readonly','required','selectionDirection','selectionEnd','selectionStart','size','src','step','value','width');
	$this->attr['button']   = array('autofocus','disabled','form','formaction','formenctype','formmethod','formnovalidate','formtarget','name','type','value');
	$this->attr['select']   = array('autofocus','disabled','form','multiple','name','required','size');
	$this->attr['datalist'] = array();
	$this->attr['optgroup'] = array('disabled','label');
	$this->attr['option']   = array('disabled','label','selected','value');
	$this->attr['textarea'] = array('autocomplete','autofocus','cols','disabled','form','maxlength','minlength','name','placeholder','readonly','required','rows','wrap');
	$this->attr['output']   = array('for','form','name');
	$this->attr['progress'] = array('max','value');
	$this->attr['meter' ]   = array('value','max','min','low','high','optimum','form');
	return $this;
	 
  }//Eof Method "listFormAttributes"
  
/*
* @method protected listInteractivAttributes
* @desc
* @param
* @returns
*/
  protected function listInteractiveAttributes()
  {
	  
    $this->attr['details'] = array('open');
	$this->attr['summary'] = array('open');
	$this->attr['command'] = array();
	$this->attr['menu']    = array('type');
	return $this;
	  
  }//Eof Method "listInteractivAttributes"

}//Eof Trait "AttributesLibrary"

?>