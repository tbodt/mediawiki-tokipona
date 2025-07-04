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
	'Activeusers' => [ 'jan pali lon' ],
	'Allmessages' => [ 'toki ilo ale' ],
	'Allpages' => [ 'lipu ale' ],
	'ApiSandbox' => [ 'lipu ken API' ],
	'AutoblockList' => [ 'ilo lawa li weka e kan pali tan jan ni', 'pakala ilo' ],
	'BlockList' => [ 'lawa li weka e ken pali tan jan ni', 'jan pakala' ],
	'Booksources' => [ 'tan lipu' ],
	'BotPasswords' => [ 'nimi nanpa ilo' ],
	'BrokenRedirects' => [ 'lipu tawa pakala' ],
	'Categories' => [ 'kulupu lipu' ],
	'ChangeCredentials' => [ 'ante pi nasin awen' ],
	'ComparePages' => [ 'ante lipu' ],
	'Contributions' => [ 'ante' ],
	'CreateAccount' => [ 'sijelo sin' ],
	'Deadendpages' => [ 'linja ala' ],
	'Diff' => [ 'lipu la tenpo tu la ante', 'ante ante' ],
	'DoubleRedirects' => [ 'lipu tawa li tawa lipu tawa ante', 'lipu tawa nasa' ],
	'EditPage' => [ 'o ante e lipu', 'ante lipu' ],
	'ExpandTemplates' => [ 'suli kipisi' ],
	'Export' => [ 'o poki e lipu mute', 'pana' ],
	'Fewestrevisions' => [ 'ante pi mute lili' ],
	'Import' => [ 'o moku e lipu mute tan poki' ],
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
	'Mostcategories' => [ 'kulupu ni la lipu mute li lon', 'kulupu mute' ],
	'Mostimages' => [ 'sitelen ni la lipu mute li kepeken', 'ijo suli' ],
	'Mostinterwikis' => [ 'ma lipu ante ni la lipu mute li tawa ona', 'linja mute tawa lipu ante' ],
	'Mostlinked' => [ 'lipu ni la lipu mute li tawa ona', 'lipu suli' ],
	'Mostlinkedcategories' => [ 'kulupu ni la lipu mute li toki', 'kulupu suli' ],
	'Mostlinkedtemplates' => [ 'kipisi ni la lipu mute li kepeken', 'sama mute' ],
	'Mostrevisions' => [ 'ante mute' ],
	'Newimages' => [ 'sitelen ni li sin', 'ijo sin' ],
	'Newpages' => [ 'lipu ni li sin', 'lipu sin' ],
	'PageHistory' => [ 'pini lipu' ],
	'PageInfo' => [ 'lipu la sona', 'sona lipu' ],
	'PagesWithProp' => [ 'nasin lipu' ],
	'PasswordPolicies' => [ 'lawa pi nimi awen' ],
	'PermanentLink' => [ 'linja wawa' ],
	'Preferences' => [ 'wile' ],
	'Prefixindex' => [ 'open nimi la lipu ale sama', 'open pi nimi lipu' ],
	'Protectedpages' => [ 'lipu awen' ],
	'Protectedtitles' => [ 'nimi lipu awen' ],
	'Purge' => [ 'o sin e lipu', 'sin lipu' ],
	'RandomInCategory' => [ 'tan kulupu la o pana e lipu wan', 'lipu pi sona ala lon kulupu' ],
	'Randompage' => [ 'o pana e lipu wan', 'lipu pi sona ala' ],
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
	'Uncategorizedcategories' => [ 'kulupu ni li lon kulupu ala', 'kulupu pi kulupu ala' ],
	'Uncategorizedimages' => [ 'sitelen ni li lon kulupu ala', 'ijo pi kulupu ala' ],
	'Uncategorizedpages' => [ 'lipu ni li lon kulupu ala', 'lipu pi kulupu ala' ],
	'Uncategorizedtemplates' => [ 'kipisi ni li lon kulupu ala', 'kipisi pi kulupu ala' ],
	'Unusedcategories' => [ 'kulupu ni la ala li kepeken', 'kulupu weka' ],
	'Unusedimages' => [ 'sitelen ni la ala li kepeken', 'ijo weka' ],
	'Unusedtemplates' => [ 'kipisi ni la ala li kepeken', 'kipisi weka' ],
	'Userlogin' => [ 'o kama sijelo', 'kama sijelo' ],
	'Userrights' => [ 'ken jan' ],
	'Version' => [ 'nanpa pi sin ilo' ],
	'Wantedcategories' => [ 'lipu li wile lon kulupu ni', 'kulupu wile' ],
	'Wantedfiles' => [ 'lipu li wile e sitelen ni', 'ijo wile' ],
	'Wantedpages' => [ 'lipu li wile e lipu ni', 'lipu wile' ],
	'Wantedtemplates' => [ 'lipu li wile e kipisi ni', 'kipisi wile' ],
	'Watchlist' => [ 'lipu lukin' ],
	'Whatlinkshere' => [ 'linja tawa lipu' ],
	'Withoutinterwiki' => [ 'linja ala tawa lipu pi toki ante' ],
];
