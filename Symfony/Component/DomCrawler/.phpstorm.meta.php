<?php

namespace PHPSTORM_META {

	// Source: https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	registerArgumentsSet('symfony_html_attributes',
		'accept',
		'accept-charset',
		'accesskey',
		'action',
		'align',
		'allow',
		'alt',
		'async',
		'autocapitalize',
		'autocomplete',
		'autofocus',
		'autoplay',
		'bgcolor',
		'border',
		'buffered',
		'challenge',
		'charset',
		'checked',
		'cite',
		'class',
		'code',
		'codebase',
		'color',
		'cols',
		'colspan',
		'content',
		'contenteditable',
		'contextmenu',
		'controls',
		'coords',
		'crossorigin',
		'data',
		'data-',
		'datetime',
		'decoding',
		'default',
		'defer',
		'dir',
		'dirname',
		'disabled',
		'download',
		'draggable',
		'dropzone',
		'enctype',
		'for',
		'form',
		'formaction',
		'headers',
		'height',
		'hidden',
		'high',
		'href',
		'hreflang',
		'http-equiv',
		'icon',
		'id',
		'integrity',
		'ismap',
		'itemprop',
		'keytype',
		'kind',
		'label',
		'lang',
		'language',
		'list',
		'loop',
		'low',
		'manifest',
		'max',
		'maxlength',
		'minlength',
		'media',
		'method',
		'min',
		'multiple',
		'muted',
		'name',
		'novalidate',
		'open',
		'optimum',
		'pattern',
		'ping',
		'placeholder',
		'poster',
		'preload',
		'radiogroup',
		'readonly',
		'referrerpolicy',
		'rel',
		'required',
		'reversed',
		'rows',
		'rowspan',
		'sandbox',
		'scope',
		'scoped',
		'selected',
		'shape',
		'size',
		'sizes',
		'slot',
		'span',
		'spellcheck',
		'src',
		'srcdoc',
		'srclang',
		'srcset',
		'start',
		'step',
		'style',
		'summary',
		'tabindex',
		'target',
		'title',
		'translate',
		'type',
		'usemap',
		'value',
		'width',
		'wrap'
	);
	expectedArguments(\Symfony\Component\DomCrawler\Crawler::attr(), 0, argumentsSet('symfony_html_attributes'));
	expectedArguments(\Symfony\Component\DomCrawler\Crawler::extract(), 0, '_text');
	expectedArguments(\Symfony\Component\DomCrawler\Crawler::extract(), 0, argumentsSet('symfony_html_attributes'));
	//expectedArguments(\Symfony\Component\DomCrawler\Crawler::extract(), 0, '_text', argumentsSet('symfony_html_attributes'));  // uncomment when shipped: https://youtrack.jetbrains.com/issue/WI-46120
	//expectedArguments(\Symfony\Component\DomCrawler\Crawler::extract(), 0, array(argumentsSet('symfony_html_attributes')));  // uncomment when shipped: https://youtrack.jetbrains.com/issue/WI-46049

	registerArgumentsSet('libxml_options',
		LIBXML_NONET |
		LIBXML_BIGLINES |
		LIBXML_COMPACT |
		LIBXML_DTDATTR |
		LIBXML_DTDLOAD |
		LIBXML_DTDVALID |
		LIBXML_HTML_NOIMPLIED |
		LIBXML_HTML_NODEFDTD |
		LIBXML_NOBLANKS |
		LIBXML_NOCDATA |
		LIBXML_NOENT |
		LIBXML_NOERROR |
		LIBXML_NOWARNING |
		LIBXML_NSCLEAN |
		LIBXML_PARSEHUGE |
		LIBXML_PEDANTIC |
		LIBXML_XINCLUDE
	);
	expectedArguments(\Symfony\Component\DomCrawler\Crawler::addXmlContent(), 2, argumentsSet('libxml_options'));

	expectedArguments(\Symfony\Component\DomCrawler\Crawler::sibling(), 1, 'nextSibling', 'previousSibling');
}