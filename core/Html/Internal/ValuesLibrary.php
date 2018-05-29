<?php
/*
* @namespace
*/
namespace Dmount\Core\Html\Internal;

/*
* @trait AttributeLibrary 
* @desc 
* @author Salvatore Gonda <salvatore.gonda@web.de>       
* @version 1.0.3
*/
trait ValuesLibrary {
  
/*
* @method protected listGlobalAttrValues
* @desc
* @param
* @returns
*/
  protected function listGlobalValues()
  {
	
	$this->attr['global'] = array('accesskey'       => array(),
	                              'autocapitalize'  => array(),
				      'class'           => array(),
				      'contenteditable' => array(),
				      'contextmenu'     => array(),
	                              'dir'             => array(),
				      'draggable'       => array(),
				      'dropzone'        => array(),
				      'hidden'          => array(),
				      'id'              => array(),
				      'is'              => array(),
				      'itemid'          => array(),
				      'itemprop'        => array(),
				      'itemref'         => array(),
				      'itemscope'       => array(),
				      'itemtype'        => array(),
				      'lang'            => array(),
				      'slot'            => array(),
				      'spellcheck'      => array(),
				      'style'           => array(),
				      'tabindex'        => array(),
				      'title'           => array());
	  
  }//Eof Method "listGlobalAttrValues"

/*
* @method protected listRootAttrValues
* @desc
* @param
* @returns
*/
  protected function listRootValues()
  {
	
    $this->attr['html'] = array('xmlns' => array('http://www.w3.org/1999/xhtml'));
	  
  }//Eof Method "listRootValues"

/*
* @method protected listMetaValues
* @desc   
* @param
* @returns
*/
  protected function listMetaValues()
  {
  
    $this->attr['head']  = array();
	
    $this->attr['title'] = array(); 
	
    $this->attr['base']  = array('href'   => array(),
	                         'target' => array('_blank','_parent','_self','_top'));
								 
    $this->attr['meta']  = array('name'       => array('apple-mobile-web-app-capable','apple-mobile-web-app-title','application-name','author','copyright','creator','description','generator','google','google-site-verification','keywords','referrer','robots','publisher','viewport'),
	                         'charset'    => array('UTF-8'),
				 'content'    => array(),
				 'http-equiv' => array('X-UA-Compatible','content-security-policy'));
								 
	$this->attr['link']  = array('as'             => array(),
	                             'crossorigin'    => array('anonymous','use-credentials'),
	                             'disabled'       => array(),
				     'href'           => array(),
				     'hreflang'       => array(),
				     'integrity'      => array(),
				     'media'          => array('all','print','screen','speech'),
				     'methods'        => array(),
				     'referrerpolicy' => array('no-referrer','no-referrer-when-downgrade','origin','orgin-when-cross-origin','unsafe-url'),
				     'rel'            => array('alternate','author','apple-touch-icon','canonical','dns-prefetch','help','icon','license','manifest','modulepreload','next','pingback','preconnect','prefetch','preload','prerender','prev','search','shortlink','stylesheet'),
				     'sizes'          => array('any','57x57','60x60','72x72','76x76','114x114','120x120','152x152','180x180','192x192'),
				     'type'           => array('text/html','text/css'));
								 
	$this->attr['style'] = array('type'  => array('text/css'),
	                             'media' => array('all','print','screen','speech'),
				     'nonce' => array(),
				     'title' => array());
	
	return $this;
	  
  }//Eof Method "listMetaValues"

/*
* @method protected listScriptingValues
* @desc
* @param
* @returns
*/
  protected function listScriptingValues()
  {
	
	$this->attr['canvas'] = array('width'  => array(),
	                              'height' => array());
								  
	$this->attr['script'] = array('async'       => array(),
	                              'crossorigin' => array(),
				      'defer'       => array(),
				      'integrity'   => array(),
				      'nonce'       => array(),
				      'src'         => array(),
				      'text'        => array(),
				      'type'        => array());
									
	$this->attr['noscript'] = array();
	return $this;
	  
  }//Eof Method "listScriptingValues"

/*
* @method protected listSectioningValues
* @desc
* @param
* @returns
*/
  protected function listSectioningValues()
  {
	
    $this->attr['address'] = array();
    $this->attr['article'] = array();
    $this->attr['aside']   = array();  
    $this->attr['body']    = array();
    $this->attr['h1']      = array();
    $this->attr['h2']      = array();
    $this->attr['h3']      = array();
    $this->attr['h4']      = array();
    $this->attr['h5']      = array();
    $this->attr['header']  = array();
    $this->attr['footer']  = array();
    $this->attr['main']    = array();
    $this->attr['nav']     = array();
    $this->attr['section'] = array();
    
    return $this; 
	  
  }//Eof Method "listSectioningValues"

/*
* @method protected listTextValues
* @desc
* @param
* @returns
*/
  protected function listTextValues()
  {
	  
    $this->attr['blockquote'] = array('cite' => array());
    $this->attr['hr']         = array();
    $this->attr['div']        = array();
    $this->attr['dl']         = array();
    $this->attr['dt']         = array();
    $this->attr['dd']         = array();
    $this->attr['figure']     = array();
    $this->attr['figcaption'] = array();
    $this->attr['li']         = array('value' => array());

    $this->attr['ol']         = array('reversed' => array(),
			              'start'    => array(),
			      	      'type'     => array());

    $this->attr['ul']         = array();
    $this->attr['p']          = array();
    $this->attr['pre']        = array();
	  
    return $this;
	 
  }//eof Method "listTextValues"

/*
* @method protected listInlineValues
* @desc
* @param
* @returns
*/
  protected function listInlineValues()
  {
	  
    $this->attr['a'] = array('download'       => array(),
	                     'href'           => array(),
			     'hreflang'       => array(),
			     'media'          => array(),
			     'ping'           => array(),
			     'referrerpolicy' => array('no-referrer','no-referrer-when-downgrade','origin','orgin-when-cross-origin','strict-origin-when-cross-origin','unsafe-url'),
			     'rel'            => array('alternate','author','bookmark','external','help','license','next','nofollow','noopener','noreferrer','prev','search','tag'),
			     'target'         => array(),
			     'type'           => array());

    $this->attr['abbr']   = array();
    $this->attr['b']      = array();
    $this->attr['br']     = array();
    $this->attr['bdi']    = array();
    $this->attr['bdo']    = array();
    $this->attr['em']     = array();
    $this->attr['cite']   = array();
    $this->attr['code']   = array();
    $this->attr['q']      = array('cite' => array());
    $this->attr['dfn']    = array();
    $this->attr['data']   = array();
    $this->attr['time']   = array('datetime' => array());
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
	 
  }//Eof Method "listInlineValues"

/*
* @method protected listModificationValues
* @desc
* @param
* @returns
*/
  protected function listModificationValues()
  {
	
    $this->attr['ins'] = array();
    $this->attr['del'] = array();
    
    return $this;
	
  }//Eof Method "listModificationValues"

/*
* @method protected listMultimediaValues
* @desc
* @param
* @returns
*/
  protected function listMultimediaValues()
  {
	
    $this->attr['img'] = array('alt'            => array(),
	                       'crossorigin'    => array('anonymous','use-credentials'),
			       'decoding'       => array('sync','async','auto'),
			       'height'         => array(),
			       'ismap'          => array(),
			       'referrerpolicy' => array('no-referrer','no-referrer-when-downgrade','origin','orgin-when-cross-origin','unsafe-url'),
			       'sizes'          => array(),
			       'src'            => array(),
			       'srcset'         => array(),
			       'width'          => array(),
			       'usemap'         => array());
								 
    $this->attr['video'] = array('autoplay'    => array('true','false'),
	                         'buffered'    => array(),
				 'controls'    => array(),
				 'crossorigin' => array('anonymous','use-credentials'),
				 'width'       => array(),
				 'height'      => array(),
				 'src'         => array(),
				 'loop'        => array('true','false'),
				 'muted'       => array('true','false'),
				 'played'      => array(),
				 'preload'     => array('none','metadata','auto'),
				 'poster'      => array(),
				 'playsinline' => array('true','false'));
								 
	$this->attr['audio'] = array('autoplay' => array('true','false'),
	                             'buffered' => array(),
				     'controls' => array(),
				     'src'      => array(),
				     'loop'     => array('true','false'),
				     'muted'    => array('true','false'),
				     'played'   => array(),
				     'preload'  => array(),
				     'volume'   => array());
								 
	$this->attr['track'] = array('default' => array(),
	                             'kind'    => array('subtitles','captions','descriptions','chapters','metadata'),
				     'label'   => array(),
				     'src'     => array(),
				     'srclang' => array());
								 
	$this->attr['map'] = array('name' => array());
	
	$this->attr['area'] = array('alt'      => array(),
	                            'coords'   => array(),
				    'download' => array(),
				    'href'     => array(),
				    'hreflang' => array(),
				    'media'    => array(),
				    'rel'      => array(),
				    'shape'    => array(),
				    'target'   => array(),
				    'type'     => array());
    return $this;
	
  }//Eof Method "listMultimediaValues"

/*
* @method protected listEmbedValues
* @desc
* @param
* @returns
*/
  protected function listEmbedValues()
  {
	
	$this->attr['iframe'] = array('src'         => array(),
	                              'width'       => array(),
				      'height'      => array(),
				      'frameborder' => array(),
				      'name'        => array());
								  
	$this->attr['embed'] = array('width'  => array(),
	                             'height' => array(),
				     'src'    => array(),
				     'type'   => array());
	
	$this->attr['object'] = array('data'   => array(),
	                              'form'   => array(),
				      'height' => array(),
				      'name'   => array(),
				      'type'   => array(),
				      'usemap' => array(),
				      'width'  => array());
	
	$this->attr['param'] = array('name'  => array(),
	                             'value' => array());
	
	$this->attr['source'] = array('sizes'  => array(),
	                              'src'    => array(),
				      'srcset' => array(),
				      'type'   => array(),
				      'media'  => array());
	
	$this->attr['svg'] = array('version'              => array(),
	                           'baseProfile'          => array(),
				   'x'                    => array(),
				   'y'                    => array(),
				   'width'                => array(),
				   'height'               => array(),
				   'preserveAspectRation' => array(),
				   'contentScriptType'    => array(),
				   'contentStyleType'     => array(),
				   'viewBox'              => array());
							   
	$this->attr['math']   = array();
	return $this;
	
  }//Eof Method "listEmbedValues"

/*
* @method protected listTableValues
* @desc
* @param
* @returns
*/
  protected function listTableValues()
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
  
  }//Eof Method "listTableValues"
  
/*
* @method protected listFormValues
* @desc
* @param
* @returns
*/
  protected function listFormValues()
  {
	  
    $this->attr['form'] = array('accept-charset' => array(),
	                        'action'         => array(),
				'autocomplete'   => array(),
				'enctype'        => array(),
				'method'         => array(),
				'name'           => array(),
				'novalidate'     => array(),
				'target'         => array());
								
	$this->attr['fieldset'] = array('disabled' => array(),
	                                'form'     => array(),
					'name'     => array());
									
	$this->attr['legend'] = array();
	
	$this->attr['label'] = array('for' => array());
	
	$this->attr['input'] = array('name'     => array(),
	                             'type'     => array('button','checkbox','color','date','datetime','datetime-local','email','file','hidden','image','month','number','password','radio','range','reset','search','submit','tel','text','time','url','week'),
				     'value'    => array(),
				     'max'      => array(),
				     'min'      => array(),
				     'required' => array());
	
	$this->attr['button'] = array('autofocus'      => array(),
	                              'disabled'       => array(),
				      'form'           => array(),
				      'formaction'     => array(),
				      'formenctype'    => array(),
				      'formmethod'     => array(),
				      'formnovalidate' => array(),
			              'formtarget'     => array(),
				      'name'           => array(),
				      'type'           => array(),
				      'value'          => array());
									
	$this->attr['select'] = array('autofocus' => array(),
	                              'disabled'  => array(),
				      'form'      => array(),
				      'multiple'  => array(),
				      'name'      => array(),
				      'required'  => array(),
				      'size'      => array());
									
	$this->attr['datalist'] = array();
	
	$this->attr['optgroup'] = array('disabled' => array(),
	                                'label'    => array());
	
	$this->attr['option']   = array('disabled',
	                                'label',
					'selected',
					'value');
									
	$this->attr['textarea'] = array('autocomplete' => array(),
	                                'autofocus'    => array(),
					'cols'         => array(),
					'disabled'     => array(),
					'form'         => array(),
					'maxlength'    => array(),
					'minlength'    => array(),
					'name'         => array(),
					'placeholder'  => array(),
					'readonly'     => array(),
					'required'     => array(),
					'rows'         => array(),
					'wrap'         => array());
	
	$this->attr['output'] = array('for'  => array(),
	                              'form' => array(),
				      'name' => array());
								  
	$this->attr['progress'] = array('max',
	                                'value');
									
	$this->attr['keygen']   = array();
	$this->attr['meter' ]   = array('value'   => array(),
	                                'max'     => array(),
					'min'     => array(),
					'low'     => array(),
					'high'    => array(),
					'optimum' => array(),
					'form'    => array());
	return $this;
	 
  }//Eof Method "listFormValues"
  
/*
* @method protected listInteractiveValues
* @desc
* @param
* @returns
*/
  protected function listInteractiveValues()
  {
	  
    $this->attr['details'] = array('open' => array());
    $this->attr['summary'] = array('open' => array());
    $this->attr['command'] = array();
    $this->attr['menu']    = array('type' => array());
    
    return $this;
	  
  }//Eof Method "listInteractiveValues"

}//Eof Trait "ValuesLibrary"

?>
