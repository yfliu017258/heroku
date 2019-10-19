<?php
	error_reporting(E_ALL); @ini_set('display_errors', true);
	$tz = @date_default_timezone_get(); @date_default_timezone_set($tz ? $tz : 'UTC');
	$pages = array(
		'0'	=> array('id' => '1', 'alias' => 'home', 'file' => '1.php','controllers' => array())
	);
	$forms = array(

	);
	$langs = null;
	$def_lang = null;
	$base_lang = 'en';
	$site_id = "c6539ccb";
	$base_dir = dirname(__FILE__);
	$base_url = '/';
	$user_domain = 'imgrandom.000webhostapp.com';
	$home_page = '1';
	$mod_rewrite = true;
	$show_comments = false;
	$comment_callback = "http://us.zyro.com/comment_callback/";
	$user_key = "hhSdfrJ1vmUjRiQfAVGuvF/SaITA3svZSXKw";
	$user_hash = "c909c9f4c4fa4bec";
	$ga_code = (is_file($ga_code_file = dirname(__FILE__).'/ga_code') ? file_get_contents($ga_code_file) : null);
	require_once dirname(__FILE__).'/src/SiteInfo.php';
	require_once dirname(__FILE__).'/src/SiteModule.php';
	require_once dirname(__FILE__).'/polyfill.php';
	require_once dirname(__FILE__).'/functions.inc.php';
	$siteInfo = SiteInfo::build(array('siteId' => $site_id, 'domain' => $user_domain, 'homePageId' => $home_page, 'baseDir' => $base_dir, 'baseUrl' => $base_url, 'defLang' => $def_lang, 'baseLang' => $base_lang, 'userKey' => $user_key, 'userHash' => $user_hash, 'commentsCallback' => $comment_callback, 'langs' => $langs, 'pages' => $pages, 'forms' => $forms, 'modRewrite' => $mod_rewrite, 'gaCode' => $ga_code, 'gaAnonymizeIp' => false,));
	SiteModule::init(null, $siteInfo);
	list($page_id, $lang, $urlArgs, $route) = parse_uri($siteInfo);
	$preview = false;
	$requestInfo = SiteRequestInfo::build(array('page' => (isset($pages[$page_id]) ? $pages[$page_id] : null), 'lang' => $lang, 'urlArgs' => $urlArgs, 'route' => $route,));
	SiteModule::setLang($requestInfo->{'lang'});
	$hr_out = '';
	$page = $requestInfo->{'page'};
	if (!is_null($page)) {
		handleComments($page['id'], $siteInfo);
		if (isset($_POST["wb_form_id"])) handleForms($page['id'], $siteInfo);
	}
	ob_start();
	if ($page) {
		$fl = dirname(__FILE__).'/'.$page['file'];
		if (is_file($fl)) {
			ob_start();
			include $fl;
			$out = ob_get_clean();
			$ga_out = '';
			if ($lang && $langs) {
				foreach ($langs as $ln => $default) {
					$pageUri = getPageUri($page['id'], $ln, $siteInfo);
					$out = str_replace(urlencode('{{lang_'.$ln.'}}'), $pageUri, $out);
				}
			}
			if (is_file($ga_tpl = dirname(__FILE__).'/ga.php')) {
				ob_start(); include $ga_tpl; $ga_out = ob_get_clean();
			}
			$out = str_replace('<ga-code/>', $ga_out, $out);
			$baseUrl = (isHttps() ? 'https' : 'http').'://'.(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost').'/';
			$out = str_replace('{{base_url}}', $baseUrl, $out);
			$out = str_replace('{{curr_url}}', $baseUrl.($lang && $lang != $def_lang ? $lang.'/' : '').$route, $out);
			$out = str_replace('{{hr_out}}', $hr_out, $out);
			header('Content-type: text/html; charset=utf-8', true);
			echo $out;
		}
	} else {
		header("Content-type: text/html; charset=utf-8", true, 404);
		if (is_file(dirname(__FILE__).'/404.html')) {
			include '404.html';
		} else {
			echo "<!DOCTYPE html>\n";
			echo "<html>\n";
			echo "<head>\n";
			echo "<title>404 Not found</title>\n";
			echo "</head>\n";
			echo "<body>\n";
			echo "404 Not found\n";
			echo "</body>\n";
			echo "</html>";
		}
	}
	ob_end_flush();

?>