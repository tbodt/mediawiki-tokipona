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
	'Activeusers' => [ 'jan ni li pali lon tenpo poka', 'jan pali pi tenpo poka', 'jan pali lon' ],
	'Allmessages' => [ 'toki ale pi selo ilo', 'toki ilo ale' ],
	'Allpages' => [ 'lipu ale' ],
	'ApiSandbox' => [ 'ilo API la ilo pi kama sona', 'lipu ken API' ],
	'AutoblockList' => [ 'ilo lawa li weka e ken pali tan jan ni', 'pakala ilo' ],
	'BlockList' => [ 'lawa li weka e ken pali tan jan ni', 'jan pakala' ],
	'Booksources' => [ 'o alasa e lipu kepeken nanpa esun', 'tan lipu' ],
	'BotPasswords' => [ 'nanpa len la ilo li kepeken sijelo', 'nimi nanpa ilo' ],
	'BrokenRedirects' => [ 'lipu tawa pakala' ],
	'Categories' => [ 'kulupu lipu' ],
	'ChangeCredentials' => [ 'o ante e nasin pi kama sijelo', 'ante pi nasin awen' ],
	'ComparePages' => [ 'lipu tu la ante', 'ante lipu' ],
	'Contributions' => [ 'pali jan', 'ante' ],
	'CreateAccount' => [ 'o pali e sijelo', 'sijelo sin' ],
	'Deadendpages' => [ 'lipu ni la linja ala li tan ona', 'linja ala' ],
	'Diff' => [ 'lipu la tenpo tu la ante', 'ante ante' ],
	'DoubleRedirects' => [ 'lipu tawa ni li tawa lipu tawa ante', 'lipu tawa nasa' ],
	'EditPage' => [ 'o ante e lipu', 'ante lipu' ],
	'ExpandTemplates' => [ 'toki ilo li kama lipu', 'suli kipisi' ],
	'Export' => [ 'o pana e lipu mute tawa ilo sina', 'pana' ],
	'Fewestrevisions' => [ 'lipu ni li kama ante pi mute lili', 'ante pi mute lili' ],
	'Import' => [ 'o kama e lipu mute tan ilo sina' ],
	'FileDuplicateSearch' => [ 'o alasa e sitelen pi sama ale', 'alasa pi ijo ike' ],
	'LinkSearch' => [ 'o alasa e linja tawa lipu weka' ],
	'ListDuplicatedFiles' => [ 'sitelen pi sama ale', 'ijo ike' ],
	'Listfiles' => [ 'sitelen ale', 'ijo ale' ],
	'Listgrouprights' => [ 'kulupu ale jan en ken ona', 'ken kulupu' ],
	'Listredirects' => [ 'lipu tawa ale' ],
	'Listusers' => [ 'sijelo ale' ],
	'Log' => [ 'pali namako', 'pali' ],
	'Lonelypages' => [ 'lipu ni la linja ala li tawa ona', 'lipu weka' ],
	'Longpages' => [ 'lipu ni li suli', 'lipu suli' ],
	'MediaStatistics' => [ 'sitelen seme li lon', 'sona ijo' ],
	'MIMEsearch' => [ 'sitelen ale pi nimi MIME wan', 'alasa pi nasin MIME' ],
	'Mostcategories' => [ 'kulupu ni la lipu mute li lon', 'kulupu mute' ],
	'Mostimages' => [ 'sitelen ni la lipu mute li kepeken', 'ijo suli' ],
	'Mostinterwikis' => [ 'lipu ni la linja mute li tawa lipu pi toki ante', 'linja mute tawa lipu ante' ],
	'Mostlinked' => [ 'lipu ni la linja mute li tawa ona', 'lipu suli' ],
	'Mostlinkedcategories' => [ 'lipu mute li toki e kulupu lipu ni', 'kulupu suli' ],
	'Mostlinkedtemplates' => [ 'kipisi ni la lipu mute li kepeken', 'sama mute' ],
	'Mostrevisions' => [ 'lipu ni li kama ante mute', 'ante mute' ],
	'Newimages' => [ 'sitelen ni li sin', 'ijo sin' ],
	'Newpages' => [ 'lipu ni li sin', 'lipu sin' ],
	'PageHistory' => [ 'lipu la tenpo pini', 'pini lipu' ],
	'PageInfo' => [ 'lipu la sona namako', 'sona lipu' ],
	'PagesWithProp' => [ 'o alasa e lipu kepeken sona namako', 'nasin lipu' ],
	'PasswordPolicies' => [ 'lawa pi nimi open sijelo', 'lawa pi nimi awen' ],
	'PermanentLink' => [ 'lipu la tenpo pini wan', 'linja wawa' ],
	'Preferences' => [ 'wile mi', 'wile' ],
	'Prefixindex' => [ 'open nimi la lipu ale sama', 'open pi nimi lipu' ],
	'Protectedpages' => [ 'lipu awen' ],
	'Protectedtitles' => [ 'nimi lipu awen' ],
	'Purge' => [ 'o sin e lipu', 'sin lipu' ],
	'RandomInCategory' => [ 'lipu wan tan kulupu tan nasa', 'lipu pi sona ala lon kulupu' ],
	'Randompage' => [ 'lipu wan tan nasa', 'lipu pi sona ala' ],
	'Randomredirect' => [ 'lipu tawa wan tan nasa', 'lipu tawa pi sona ala' ],
	'Randomrootpage' => [ 'lipu wan tan insa ala pi lipu ante tan nasa' ],
	'Recentchanges' => [ 'pali pi tenpo poka', 'ante pi pini poka' ],
	'Recentchangeslinked' => [ 'ante pi pini poka lon lipu linja' ],
	'Redirect' => [ 'tawa', 'lipu tawa' ],
	'RemoveCredentials' => [ 'o weka e nasin pi kama sijelo', 'weka pi nasin awen' ],
	'ResetTokens' => [ 'o sin e nanpa len', 'sin pi nanpa awen' ],
	'Search' => [ 'alasa' ],
	'Shortpages' => [ 'lipu ni li lili', 'lipu lili' ],
	'Statistics' => [ 'ma lipu la sona namako', 'sona' ],
	'Tags' => [ 'nimi sona namako pi ante lipu', 'toki nasin' ],
	'Uncategorizedcategories' => [ 'kulupu ni li lon kulupu ala', 'kulupu pi kulupu ala' ],
	'Uncategorizedimages' => [ 'sitelen ni li lon kulupu ala', 'ijo pi kulupu ala' ],
	'Uncategorizedpages' => [ 'lipu ni li lon kulupu ala', 'lipu pi kulupu ala' ],
	'Uncategorizedtemplates' => [ 'kipisi ni li lon kulupu ala', 'kipisi pi kulupu ala' ],
	'Unusedcategories' => [ 'kulupu ni la ala li kepeken', 'kulupu weka' ],
	'Unusedimages' => [ 'sitelen ni la ala li kepeken', 'ijo weka' ],
	'Unusedtemplates' => [ 'kipisi ni la ala li kepeken', 'kipisi weka' ],
	'Userlogin' => [ 'o kama sijelo', 'kama sijelo' ],
	'Userrights' => [ 'ken pi jan ni', 'ken jan' ],
	'Version' => [ 'nanpa pi sin ilo' ],
	'Wantedcategories' => [ 'lipu li wile lon kulupu ni', 'kulupu wile' ],
	'Wantedfiles' => [ 'lipu li wile e sitelen ni', 'ijo wile' ],
	'Wantedpages' => [ 'lipu li wile e lipu ni', 'lipu wile' ],
	'Wantedtemplates' => [ 'lipu li wile e kipisi ni', 'kipisi wile' ],
	'Watchlist' => [ 'lipu pi wile lukin sina', 'lipu lukin' ],
	'Whatlinkshere' => [ 'linja tawa lipu' ],
	'Withoutinterwiki' => [ 'lipu ni la linja ala li tawa lipu pi toki ante', 'linja ala tawa lipu pi toki ante' ],
];
