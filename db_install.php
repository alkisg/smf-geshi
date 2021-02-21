<?php
//	cb|GeSHi-mod (c) 2012-2013, codebirth
// 	Website: http://codebirth.com

if (!defined('SMF'))
	die('Hacking attempt...');

global $smcFunc;

db_extend('packages');

$geshi_default_values = 
	array(
		'code_container' => '1',
		'enable_footer' => '0',
		'enable_header' => '0',
		'enable_language_selector' => '1',
		'enable_pre_header' => '1',
		'fancy_line_number' => '2',
		'footer' => '',
		'header' => '',
		'highlight_lines_extra_style' => '',
		'language_selector' => 'javascript:Javascript,html5:HTML,mysql:MySQL,php:PHP,xml:XML',
		'line_numbers' => '2',
		'line_style' => 'padding: 0 5px; background-color: #fff; line-height: 16px; border-bottom: 1px solid #efefef; border-left: 1px solid #999;',
		'line_style_fancy' => 'padding: 0 5px; background-color: #f9f9f9; line-height: 16px; border-bottom: 1px solid #efefef; border-left: 1px solid #999;',
		'pre_header' => '{CODE}: {LANGUAGE}',
	);

foreach ($geshi_default_values as $key => $value) {
	$smcFunc['db_insert']("ignore",
		"{db_prefix}themes",
		array(
			'id_member' => 'int',
			'id_theme' => 'int',
			'variable' => 'string',
			'value' => 'string',
		),
		array(
			0,
			1,
			'geshi_'.$key,
			$value,
		),
		array('id_member', 'id_theme', 'variable')
	);
}

?>
