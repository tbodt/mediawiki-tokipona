<?php
/** Toki Pona (toki pona)
 *
 * @ingroup Language
 * @file
 *
 * @author tbodt
 * @author TamzinHadasa
 */

$namespaceNames = [
	NS_SPECIAL          => 'ilo',
	NS_TALK             => 'toki',
	NS_USER             => 'jan',
	NS_USER_TALK        => 'jan_la_toki',
	NS_PROJECT_TALK     => '$1_la_toki',
	NS_FILE             => 'sitelen',
	NS_FILE_TALK        => 'sitelen_la_toki',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_la_toki',
	NS_TEMPLATE         => 'kipisi',
	NS_TEMPLATE_TALK    => 'kipisi_la_toki',
	NS_HELP             => 'nasin_ilo',
	NS_HELP_TALK        => 'nasin_ilo_la_toki',
	NS_CATEGORY         => 'kulupu',
	NS_CATEGORY_TALK    => 'kulupu_la_toki',
];

$namespaceAliases = [
	# ijo => sitelen
	'ijo' => NS_FILE,
	'toki_ijo' => NS_FILE_TALK,

	# toki_$1 => $1_la_toki
	'toki_jan' => NS_USER_TALK,
	'toki_sitelen' => NS_FILE_TALK,
	'toki_MediaWiki' => NS_MEDIAWIKI_TALK,
	'toki_kipisi' => NS_TEMPLATE_TALK,
	'toki_pi_nasin_ilo' => NS_HELP_TALK,
	'toki_kulupu' => NS_CATEGORY_TALK,
];

$datePreferences = [
	'ISO 8601',
];
$defaultDateFormat = 'ISO 8601';

/** @phpcs-require-sorted-array */
$specialPageAliases = [
	'ActiveUsers' => [ 'jan pali lon' ],
	'AllMessages' => [ 'toki ilo ale' ],
	'AllPages' => [ 'lipu ale' ],
	'ApiSandbox' => [ 'lipu ken API' ],
	'Autoblocks' => [ 'pakala ilo' ],
	'BlockList' => [ 'jan pakala' ],
	'BookSources' => [ 'tan lipu' ],
	'BotPasswords' => [ 'nimi nanpa ilo' ],
	'BrokenRedirects' => [ 'lipu tawa pakala' ],
	'Categories' => [ 'kulupu lipu' ],
	'ChangeCredentials' => [ 'ante pi nasin awen' ],
	'ComparePages' => [ 'ante lipu' ],
	'Contributions' => [ 'ante' ],
	'CreateAccount' => [ 'sijelo sin' ],
	'Deadendpages' => [ 'linja ala' ],
	'Diff' => [ 'ante ante' ],
	'DoubleRedirects' => [ 'lipu tawa nasa' ],
	'EditPage' => [ 'ante lipu' ],
	'ExpandTemplates' => [ 'suli kipisi' ],
	'Export' => [ 'pana' ],
	'Fewestrevisions' => [ 'ante pi mute lili' ],
	'FileDuplicateSearch' => [ 'alasa pi ijo ike' ],
	'LinkSearch' => [ 'alasa linja' ],
	'ListDuplicatedFiles' => [ 'ijo ike' ],
	'Listfiles' => [ 'ijo ale' ],
	'Listgrouprights' => [ 'ken kulupu' ],
	'Listredirects' => [ 'lipu tawa ale' ],
	'Listusers' => [ 'jan ale' ],
	'Log' => [ 'pali' ],
	'Lonelypages' => [ 'lipu weka' ],
	'Longpages' => [ 'lipu suli' ],
	'MediaStatistics' => [ 'sona ijo' ],
	'MIMEsearch' => [ 'alasa pi nasin MIME' ],
	'Mostcategories' => [ 'kulupu mute' ],
	'Mostimages' => [ 'ijo suli' ],
	'Mostinterwikis' => [ 'linja mute tawa lipu ante' ],
	'Mostlinked' => [ 'lipu suli' ],
	'Mostlinkedcategories' => [ 'kulupu suli' ],
	'Mostlinkedtemplates' => [ 'sama mute' ],
	'Mostrevisions' => [ 'ante mute' ],
	'Newimages' => [ 'ijo sin' ],
	'Newpages' => [ 'lipu sin' ],
	'PageHistory' => [ 'pini lipu' ],
	'PageInfo' => [ 'sona lipu' ],
	'PagesWithProp' => [ 'nasin lipu' ],
	'PasswordPolicies' => [ 'lawa pi nimi awen' ],
	'PermanentLink' => [ 'linja wawa' ],
	'Preferences' => [ 'wile' ],
	'Prefixindex' => [ 'open pi nimi lipu' ],
	'Protectedpages' => [ 'lipu awen' ],
	'Protectedtitles' => [ 'nimi lipu awen' ],
	'Purge' => [ 'sin lipu' ],
	'RandomInCategory' => [ 'lipu pi sona ala lon kulupu' ],
	'Randompage' => [ 'lipu pi sona ala' ],
	'Randomredirect' => [ 'lipu tawa pi sona ala' ],
	'Randomrootpage' => [ 'lipu mama pi sona ala' ],
	'Recentchanges' => [ 'ante pi pini poka' ],
	'Recentchangeslinked' => [ 'ante pi pini poka lon lipu linja' ],
	'Redirect' => [ 'lipu tawa' ],
	'RemoveCredentials' => [ 'weka pi nasin awen' ],
	'ResetTokens' => [ 'sin pi nanpa awen' ],
	'Search' => [ 'alasa' ],
	'Shortpages' => [ 'lipu lili' ],
	'Statistics' => [ 'sona' ],
	'Tags' => [ 'toki nasin' ],
	'Uncategorizedcategories' => [ 'kulupu pi kulupu ala' ],
	'Uncategorizedimages' => [ 'ijo pi kulupu ala' ],
	'Uncategorizedpages' => [ 'lipu pi kulupu ala' ],
	'Uncategorizedtemplates' => [ 'kipisi pi kulupu ala' ],
	'Unusedcategories' => [ 'kulupu weka' ],
	'Unusedimages' => [ 'ijo weka' ],
	'Unusedtemplates' => [ 'kipisi weka' ],
	'Userlogin' => [ 'kama sijelo' ],
	'Userrights' => [ 'ken jan' ],
	'Version' => [ 'nanpa pi sin ilo' ],
	'Wantedcategories' => [ 'kulupu wile' ],
	'Wantedfiles' => [ 'ijo wile' ],
	'Wantedpages' => [ 'lipu wile' ],
	'Wantedtemplates' => [ 'kipisi wile' ],
	'Watchlist' => [ 'lipu lukin' ],
	'Whatlinkshere' => [ 'linja tawa lipu' ],
	'Withoutinterwiki' => [ 'linja ala tawa lipu pi toki ante' ],
];
