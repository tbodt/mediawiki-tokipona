<?php
$GROUPROOT = dirname(__DIR__);
$wgTranslateGroupRoot = $GROUPROOT;

$wgTranslateGroupFiles[] = "$GROUPROOT/nasa-pi-ilo-ante/MediaWiki.yml";

/*
$wgHooks['TranslatePostInitGroups'][] = function ( &$list, &$deps, &$autoload ) use ( $GROUPROOT ) {
	$def = "$GROUPROOT/extensions/mediawiki-extensions.txt";
	$path = '%GROUPROOT%/extensions/';

	$foo = new PremadeMediawikiExtensionGroups( $def, $path );
	$foo->register( $list, $deps, $autoload );
};

$wgHooks['TranslatePostInitGroups'][] = function ( &$list, &$deps, &$autoload ) use ( $GROUPROOT ) {
	$def = "$GROUPROOT/skins/mediawiki-skins.txt";
	$path = '%GROUPROOT%/skins/';

	$foo = new PremadeMediawikiExtensionGroups( $def, $path );
	$foo->register( $list, $deps, $autoload );
};
 */
