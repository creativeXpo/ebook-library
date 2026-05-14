<?php
// This file is generated. Do not modify it manually.
return array(
	'ebook-library' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/ebook-library',
		'version' => '0.1.0',
		'title' => 'Ebook Library',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'' => array(
			'showStartingYear' => array(
				'type' => 'boolean'
			),
			'startingYear' => array(
				'type' => 'string'
			)
		),
		'supports' => array(
			'color' => array(
				'background' => false,
				'text' => true
			),
			'html' => false,
			'typography' => array(
				'fontSize' => true
			)
		),
		'textdomain' => 'ebook-library',
		'editorScript' => 'file:./index.js',
		'render' => 'file:./render.php'
	)
);
