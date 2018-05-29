<?php
/*
* @namespace
*/
namespace Dmount\Core\Html\Internal;

/*
* @trait ContentCategories
* @desc Four lists and two differents objects ("dom" & "cc") for content specification of HTML5 elements
* @author Salvatore Gonda <salvatore.gonda@web.de>       
* @version 1.0.9
*/
trait ContentCategories {
	
/*
* @method protected listElementsDOMInterfaces
* @desc
* @param
* @returns
*/	
  protected function listElementsDOMInterfaces()
  {

    $this->dom['html']         = 'HTMLHtmlElement';
    $this->dom['head']         = 'HTMLHeadElement';
    $this->dom['title']        = 'HTMLTitleElement'; 
    $this->dom['base']         = 'HTMLBaseElement';								 
    $this->dom['meta']         = 'HTMLMetaElement';							 
    $this->dom['link']         = 'HTMLLinkElement';							 
    $this->dom['style']        = 'HTMLStyleElement';
    $this->dom['canvas']       = 'HTMLCanvasElement';
    $this->dom['script']       = 'HTMLScriptElement';
    $this->dom['noscript']     = 'HTMLElement';
    $this->dom['address']      = 'HTMLElement';//HTMLSpanElement
    $this->dom['article']      = 'HTMLElement';
    $this->dom['aside']        = 'HTMLElement';  
    $this->dom['body']         = 'HTMLBodyElement';
    $this->dom['h1']           = 'HTMLHeadingElement';
    $this->dom['h2']           = 'HTMLHeadingElement';
    $this->dom['h3']           = 'HTMLHeadingElement';
    $this->dom['h4']           = 'HTMLHeadingElement';
    $this->dom['h5']           = 'HTMLHeadingElement';
    $this->dom['h6']           = 'HTMLHeadingElement';
    $this->dom['header']       = 'HTMLElement';
    $this->dom['footer']       = 'HTMLElement';
    $this->dom['main']         = 'HTMLElement';
    $this->dom['nav']          = 'HTMLElement';
    $this->dom['section']      = 'HTMLElement';
    $this->dom['blockquote']   = 'HTMLQuoteElement';
    $this->dom['hr']           = 'HTMLHRElement';
    $this->dom['div']          = 'HTMLDivElement';
    $this->dom['dl']           = 'HTMLDListElement';
    $this->dom['dt']           = 'HTMLElement';//HTMLSpanElement
    $this->dom['dd']           = 'HTMLElement';
    $this->dom['figure']       = 'HTMLElement';
    $this->dom['figcaption']   = 'HTMLElement';
    $this->dom['li']           = 'HTMLLIElement';
    $this->dom['ol']           = 'HTMLOListElement';
    $this->dom['ul']           = 'HTMLUListElement';
    $this->dom['p']            = 'HTMLParagraphElement';
    $this->dom['pre']          = 'HTMLPreElement';
    $this->dom['a']            = 'HTMLAnchorElement';
    $this->dom['abbr']         = 'HTMLElement';
    $this->dom['b']            = 'HTMLElement';
    $this->dom['br']           = 'HTMLBRElement';
    $this->dom['bdi']          = 'HTMLElement';//Firefox: HTMLSpanElement
    $this->dom['bdo']          = 'HTMLElement';
    $this->dom['em']           = 'HTMLElement';//Firefox: HTMLSpanElement
    $this->dom['cite']         = 'HTMLElement';//Firefox: HTMLSpanElement
    $this->dom['code']         = 'HTMLElement';//Firefox: HTMLSpanElement
    $this->dom['q']            = 'HTMLQuoteElement';
    $this->dom['dfn']          = 'HTMLELement';
    $this->dom['data']         = 'HTMLDataElement';
    $this->dom['time']         = 'HTMLTimeElement';
    $this->dom['var']          = 'HTMLElement';
    $this->dom['kbd']          = 'HTMLElement';
    $this->dom['i']            = 'HTMLElement';//Firefox: HTMLSpanElement
    $this->dom['u']            = 'HTMLElement';
    $this->dom['mark']         = 'HTMLElement';
    $this->dom['ruby']         = 'HTMLElement';
    $this->dom['rt']           = 'HTMLElement';
    $this->dom['rp']           = 'HTMLElement';
    $this->dom['rtc']          = 'HTMLElement';
    $this->dom['samp']         = 'HTMLElement';
    $this->dom['strong']       = 'HTMLElement';
    $this->dom['small']        = 'HTMLElement';
    $this->dom['s']            = 'HTMLElement';
    $this->dom['span']         = 'HTMLSpanElement';
    $this->dom['sub']          = 'HTMLElement';
    $this->dom['sup']          = 'HTMLElement';
    $this->dom['wbr']          = 'HTMLElement';
    $this->dom['ins']          = 'HTMLModElement';
    $this->dom['del']          = 'HTMLModElement';
    $this->dom['img']          = 'HTMLImageElement';
    $this->dom['video']        = 'HTMLVideoElement';
    $this->dom['audio']        = 'HTMLAudioElement';
    $this->dom['track']        = 'HTMLTrackElement';
    $this->dom['map']          = 'HTMLMapElement';
    $this->dom['area']         = 'HTMLAreaElement';
    $this->dom['iframe']       = 'HTMLIFrameElement';
    $this->dom['embed']        = 'HTMLEmbedElement';
    $this->dom['object']       = 'HTMLObjectElement';
    $this->dom['param']        = 'HTMLParamElement';
    $this->dom['source']       = 'HTMLSourceElement';
    $this->dom['svg']          = '';
    $this->dom['math']         = '';
    $this->dom['table']        = 'HTMLTableElement';
    $this->dom['caption']      = 'HTMLTableCaptionElement';
    $this->dom['colgroup']     = 'HTMLTableColElement';
    $this->dom['col']          = 'HTMLTableColElement';
    $this->dom['tbody']        = 'HTMLTableSectionElement';
    $this->dom['thead']        = 'HTMLTableSectionElement';
    $this->dom['tfoot']        = 'HTMLTableSectionElement';
    $this->dom['tr']           = 'HTMLTableRowElement';
    $this->dom['td']           = 'HTMLTableDataCellElement';
    $this->dom['th']           = 'HTMLTableHeaderCellElement';
    $this->dom['form']         = 'HTMLFormElement';
    $this->dom['fieldset']     = 'HTMLFieldSetElement';
    $this->dom['legend']       = 'HTMLLegendElement';
    $this->dom['label']        = 'HTMLLabelElement';
    $this->dom['input']        = 'HTMLInputElement';
    $this->dom['button']       = 'HTMLButtonElement';
    $this->dom['select']       = 'HTMLSelectElement';
    $this->dom['datalist']     = 'HTMLDataListElement';
    $this->dom['optgroup']     = 'HTMLOptGroupElement';
    $this->dom['option']       = 'HTMLOptionElement';
    $this->dom['textarea']     = 'HTMLTextAreaElement';
    $this->dom['output']       = 'HTMLOutputElement';
    $this->dom['progress']     = 'HTMLProgressElement';
    $this->dom['meter' ]       = 'HTMLMeterElement';
    $this->dom['details']      = 'HTMLDetailsElement';
    $this->dom['summary']      = 'HTMLElement';
    $this->dom['menu']         = 'HTMLMenuElement';
   
  }//Eof Method "listElementsDOMInterfaces"

/*
* @method listMetadataContent
* @desc Elements belonging to the metadata content category modify 
*       the presentation or the behavior of the rest of the document, 
*       set up links to other documents, or convey other out of band 
*       information.
* @param
* @returns
* @throws
*/
  protected function listMetadataContent()
  {
	  
    $this->cc['metadata'] = array('<base>', '<link>', '<meta>', '<noscript>', '<script>', '<style>', '<title>');
	  
  }//Eof Method "listMetadataContent"

/*
* @method listFlowContent
* @desc Elements belonging to the flow content category typically contain text or embedded content
*       A few other elements belong to this category, but only if a specific condition is fulfilled:
*       <area>, if it is a descendant of a <map> element
*       <link>, if the itemprop attribute is present
*       <meta>, if the itemprop attribute is present
* @param
* @returns
* @throws
*/
  protected function listFlowContent()
  {

    $this->cc['flow'] = array('<a>', '<abbr>', '<address>', '<article>', '<aside>', '<audio>', 
		              '<b>', '<bdo>', '<bdi>', '<blockquote>', '<br>', '<button>', 
		              '<canvas>', '<cite>', '<code>', '<command>', 
		              '<data>', '<datalist>', '<del>', '<details>', '<dfn>', '<div>', '<dl>', 
		              '<em>', '<embed>', 
		              '<fieldset>', '<figure>', '<footer>', '<form>', 
		              '<h1>', '<h2>', '<h3>', '<h4>', '<h5>', '<h6>', '<header>', '<hgroup>', '<hr>', 
		              '<i>', '<iframe>', '<img>', '<input>', '<ins>', 
		              '<kbd>', '<keygen>', 
		              '<label>', 
		              '<main>', '<map>', '<mark>', '<math>', '<menu>', '<meter>', 
		              '<nav>', '<noscript>', 
		              '<object>', '<ol>', '<output>', 
		              '<p>', '<pre>', '<progress>', 
		               '<q>', 
		               '<ruby>', 
		               '<s>', '<samp>', '<script>', '<section>', '<select>', '<small>', '<span>', '<strong>', '<sub>', '<sup>', '<svg>', 
		               '<table>', '<template>', '<textarea>', '<time>', 
		               '<ul>', 
		               '<var>', '<video>', 
		               '<wbr>'):
  
  }//Eof Method "listFlowContent"

/*
* @method listPhrasingContent
* @desc Phrasing content defines the text and the mark-up it contains. Runs of phrasing content make up paragraphs
*       A few other elements belong to this category, but only if a specific condition is fulfilled:
*       <a>, if it contains only phrasing content
*       <area>, if it is a descendant of a <map> element
*       <del>, if it contains only phrasing content
*       <ins>, if it contains only phrasing content
*       <link>, if the itemprop attribute is present
*       <map>, if it contains only phrasing content
*       <meta>, if the itemprop attribute is present
* @param
* @returns
* @throws
*/
  protected function listPhrasingContent()
  {
	
	$this->cc['phrasing'] = array('');
	  
  }//Eof Method "listPhrasingContent"
	
}//Eof Trait "ContentCategories"

?>
