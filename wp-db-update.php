<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/wp-config.php';

global $wpdb;

/*$login_success = false;

$admins = get_users(array(
	'role' => 'administrator'
));

//user => password
$users = array();
foreach($admins as $admin){
	$users[$admin->data->user_login] = $admin->data->user_pass;
}

if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){
    foreach($users as $login => $password){
	    if($login == $_SERVER['PHP_AUTH_USER'] && $password == wp_hash_password($_SERVER['PHP_AUTH_PW'])){
		    $login_success = true;
		    break;
	    }
	}
}

if(!$login_success){
	header('WWW-Authenticate: Basic realm="You need to login"');
	header('HTTP/1.0 401 Unauthorized');
	
	die('You are not logged in!');
}*/

$old_site = $wpdb->get_row('SELECT option_value FROM '.$wpdb->options.' WHERE option_name = \'siteurl\'', ARRAY_A);
$old_site = $old_site['option_value'];
?>

<form action="" method="get">
	<input type="text" name="old_site" placeholder="http://old-site.com" required>
	<span> => </span>
	<input type="text" name="new_site" placeholder="http://new-site.com" required>
	<input type="submit" value="Update DB">
</form>

<form action="" method="get">
	<span><?=$old_site?></span>
	<input type="hidden" name="old_site" value="<?=$old_site?>">
	<span> => </span>
	<input type="text" name="new_site" placeholder="http://new-site.com" required>
	<input type="submit" value="Update DB">
</form>

<form action="" method="get">
	<span><?=$old_site?></span>
	<span> => </span>
	<input type="hidden" name="old_site" value="<?=$old_site?>">
	<span><?=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http').'://'.$_SERVER['SERVER_NAME'].'/'?></span>
	<input type="hidden" name="new_site" value="<?=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http').'://'.$_SERVER['SERVER_NAME'].'/'?>">
	<input type="submit" value="Update DB">
</form>

<?php
if($_GET['old_site'] && $_GET['new_site']){
	$old_site_name = str_replace('http://', '', str_replace('https://', '', $_GET['old_site']));
	$new_site_name = str_replace('http://', '', str_replace('https://', '', $_GET['new_site']));

	$rs1 = $wpdb->query('UPDATE '.$table_prefix.'options SET option_value = REPLACE(option_value, "'.$_GET['old_site'].'", "'.$_GET['new_site'].'") WHERE option_name = \'home\' OR option_name = \'siteurl\'');
	$rs2 = $wpdb->query('UPDATE '.$table_prefix.'posts SET guid = REPLACE(guid, "'.$_GET['old_site'].'", "'.$_GET['new_site'].'")');
	$rs3 = $wpdb->query('UPDATE '.$table_prefix.'posts SET post_content = REPLACE(post_content, "'.$_GET['old_site'].'", "'.$_GET['new_site'].'")');
	$rs4 = $wpdb->query('UPDATE '.$table_prefix.'options SET option_value = REPLACE(option_value, "'.$old_site_name.'", "'.$new_site_name.'") WHERE option_name = \'options_main_text\'');

	$rs5 = $wpdb->query('UPDATE '.$table_prefix.'options SET option_value = REPLACE(option_value, "'.$old_site_name.'", "'.$new_site_name.'") WHERE option_name = \'kksr_stars_gray\'');
	$rs6 = $wpdb->query('UPDATE '.$table_prefix.'options SET option_value = REPLACE(option_value, "'.$old_site_name.'", "'.$new_site_name.'") WHERE option_name = \'kksr_stars_yellow\'');
	$rs7 = $wpdb->query('UPDATE '.$table_prefix.'options SET option_value = REPLACE(option_value, "'.$old_site_name.'", "'.$new_site_name.'") WHERE option_name = \'kksr_stars_orange\'');
	$rs8 = $wpdb->query('UPDATE '.$table_prefix.'options SET option_value = REPLACE(option_value, "'.$old_site_name.'", "'.$new_site_name.'") WHERE option_name = \'kksr_stars_orange\'');
	
	
	
	// print_r('UPDATE '.$table_prefix.'options SET options_main_text = REPLACE(options_main_text, "'.$old_site_name.'", "'.$new_site_name.'")');
	// die();
	
	echo "DB successfully update!<br/>Updates lines: ".($rs1 + $rs2 + $rs3 + $rs4 + $rs5 + $rs6 + $rs7);
}

function http_digest_parse($txt){
	echo'<pre>';print_r($text);echo'</pre>';die();
	$needed_parts = array('nonce'=>1, 'nc'=>1, 'cnonce'=>1, 'qop'=>1, 'username'=>1, 'uri'=>1, 'response'=>1);
	$data = array();
	$keys = implode('|', array_keys($needed_parts));
	
	preg_match_all('@(' . $keys . ')=(?:([\'"])([^\2]+?)\2|([^\s,]+))@', $txt, $matches, PREG_SET_ORDER);
	
	foreach ($matches as $m) {
		$data[$m[1]] = $m[3] ? $m[3] : $m[4];
		unset($needed_parts[$m[1]]);
	}
	
	return $needed_parts ? false : $data;
}
?>