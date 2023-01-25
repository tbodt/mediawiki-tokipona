<?php
/** Toki Pona (Toki Pona)
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
	NS_USER_TALK        => 'toki_jan',
	NS_PROJECT_TALK     => 'toki_$1',
	NS_FILE             => 'sitelen',
	NS_FILE_TALK        => 'toki_sitelen',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'toki_Mediawiki',
	NS_TEMPLATE         => 'kipisi',
	NS_TEMPLATE_TALK    => 'toki_kipisi',
	NS_HELP             => 'nasin_ilo',
	NS_HELP_TALK        => 'toki_pi_nasin_ilo',
	NS_CATEGORY         => 'kulupu',
	NS_CATEGORY_TALK    => 'toki_kulupu',
];

$namespaceAliases = [
	'ijo' => NS_FILE,
	'toki_ijo' => NS_FILE_TALK,
];

$datePreferences = [
	'ISO 8601',
];
$defaultDateFormat = 'ISO 8601';

$specialPageAliases = [
	'Categories' => [ 'kulupu lipu' ],
	'BrokenRedirects' => [ 'lipu tawa pakala' ],
	'DeadendPages' => [ 'linja ala' ],
	'DoubleRedirects' => [ 'lipu tawa nasa' ],
	'LongPages' => [ 'lipu suli' ],
	'OldestPages' => [ 'lipu majuna' ],
	'FewestRevisions' => [ 'ante pi mute lili' ],
	'WithoutInterwiki' => [ 'linja ala tawa lipu pi toki ante' ],
	'ProtectedPages' => [ 'lipu awen' ],
	'ProtectedTitles' => [ 'nimi lipu awen' ],
	'ShortPages' => [ 'lipu lili' ],
	'UncategorizedCategories' => [ 'kulupu pi kulupu ala' ],
	'UncategorizedFiles' => [ 'ijo pi kulupu ala' ],
	'UncategorizedPages' => [ 'lipu pi kulupu ala' ],
	'UncategorizedTemplates' => [ 'kipisi pi kulupu ala' ],
	'UnusedCategories' => [ 'kulupu weka' ],
	'UnusedFiles' => [ 'ijo weka' ],
	'UnusedTemplates' => [ 'kipisi weka' ],
	'WantedCategories' => [ 'kulupu wile' ],
	'WantedFiles' => [ 'ijo wile' ],
	'WantedPages' => [ 'lipu wile' ],
	'WantedTemplates' => [ 'kipisi wile' ],
	'LonelyPages' => [ 'lipu weka' ],
	'PrefixIndex' => [ 'open pi nimi lipu' ],
	'LinkSearch' => [ 'alasa linja' ],
	'ListRedirects' => [ 'lipu tawa ale' ],
	'PagesWithProp' => [ 'nasin lipu' ],
	'TrackingCategories' => [ 'kulupu lukin' ],
	'AllPages' => [ 'lipu ale' ],
	'Search' => [ 'alasa' ],
	'UserLogin' => [ 'kama sijelo' ],
	'CreateAccount' => [ 'sijelo sin' ],
	'ActiveUsers' => [ 'jan pali lon' ],
	'Autoblocks' => [ 'pakala ilo' ],
	'BlockList' => [ 'jan pakala' ],
	'BotPasswords' => [ 'nimi nanpa ilo' ],
	'ChangeCredentials' => [ 'ante pi nasin awen' ],
	'Grants' => [ 'ken ilo' ],
	'Notifications' => [ 'sin' ],
	'PasswordPolicies' => [ 'lawa pi nimi awen' ],
	'RemoveCredentials' => [ 'weka pi nasin awen' ],
	'ResetTokens' => [ 'sin pi nanpa awen' ],
	'ListGroupRights' => [ 'ken kulupu' ],
	'ListUsers' => [ 'jan ale' ],
	'UserRights' => [ 'ken jan' ],
	'Contributions' => [ 'ante' ],
	'Preferences' => [ 'wile' ],
	'NewFiles' => [ 'ijo sin' ],
	'Log' => [ 'pali' ],
	'NewPages' => [ 'lipu sin' ],
	'Tags' => [ 'toki nasin' ],
	'RecentChangesLinked' => [ 'ante pi pini poka lon lipu linja' ],
	'RecentChanges' => [ 'ante pi pini poka' ],
	'Watchlist' => [ 'lipu lukin' ],
	'ListFiles' => [ 'ijo ale' ],
	'ListDuplicatedFiles' => [ 'ijo ike' ],
	'MIMESearch' => [ 'alasa pi nasin MIME' ],
	'MediaStatistics' => [ 'sona ijo' ],
	'FileDuplicateSearch' => [ 'alasa pi ijo ike' ],
	'ApiSandbox' => [ 'lipu ken API' ],
	'BookSources' => [ 'tan lipu' ],
	'ExpandTemplates' => [ 'suli kipisi' ],
	'Statistics' => [ 'sona' ],
	'AllMessages' => [ 'toki ilo ale' ],
	'Version' => [ 'nanpa pi sin ilo' ],
	'Interwiki' => [ 'lipu ante' ],
	'Diff' => [ 'ante ante' ],
	'EditPage' => [ 'ante lipu' ],
	'PageHistory' => [ 'pini lipu' ],
	'PageInfo' => [ 'sona lipu' ],
	'PermanentLink' => [ 'linja wawa' ],
	'Purge' => [ 'sin lipu' ],
	'RandomInCategory' => [ 'lipu pi sona ala lon kulupu' ],
	'RandomRedirect' => [ 'lipu tawa pi sona ala' ],
	'RandomRootPage' => [ 'lipu mama pi sona ala' ],
	'Redirect' => [ 'lipu tawa' ],
	'Random' => [ 'lipu pi sona ala' ],
	'MostLinkedCategories' => [ 'kulupu suli' ],
	'MostLinkedFiles' => [ 'ijo suli' ],
	'MostLinkedPages' => [ 'lipu suli' ],
	'MostTranscludedPages' => [ 'sama mute' ],
	'MostCategories' => [ 'kulupu mute' ],
	'MostInterwikis' => [ 'linja mute tawa lipu ante' ],
	'MostRevisions' => [ 'ante mute' ],
	'ComparePages' => [ 'ante lipu' ],
	'Export' => [ 'pana' ],
	'WhatLinksHere' => [ 'linja tawa lipu' ],
	'Translations' => [ 'ante toki ale' ],
	'ExportTranslations' => [ 'pana pi ante toki' ],
	'LanguageStats' => [ 'sona toki' ],
	'ManageMessageGroups' => [ 'lawa pi kulupu toki' ],
	'MessageGroupStatistics' => [ 'sona pi kulupu toki' ],
	'PageTranslation' => [ 'ante toki lipu' ],
	'SearchTranslations' => [ 'alasa pi ante toki' ],
	'SupportedLanguages' => [ 'toki pali' ],
	'Translate' => [ 'ante toki' ],
	'TranslationStats' => [ 'sona pi ante toki' ]
];
