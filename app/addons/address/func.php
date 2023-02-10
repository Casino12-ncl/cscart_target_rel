<?php

/***************************************************************************

****************************************************************************/

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
}

function fn_address_render_block_content_after()
{
    $url_base = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "$_SERVER[HTTP_HOST]";
    // $url_base = "$_SERVER[HTTP_HOST]";
    $blank = 'target = "_blank"';
    $rel = 'rel="nofollow"';
    $url = fn_url(Registry::get('config.current_url'));
    $html = file_get_contents('http://test.ruru');
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
 

    $xpath = new DOMXPath($dom);
    $hrefs = $xpath->evaluate("href");
 
    for ($i = 0; $i < $hrefs->length; $i++) {
        $href = $hrefs->item($i);
        $url = $href->getAttribute('href');
            fn_print_r($href);
        echo $url.'
    ';
    }

    if ($url !== $url_base){
        
        if ((!empty($address_settings['rel']) && !empty($address_settings['blank']))){
            $url = fn_url(Registry::get('config.current_url'), AREA, $blank, $rel);
        
        } elseif (!empty($address_settings['rel'])) {
            $url = fn_url(Registry::get('config.current_url'), AREA, $rel);
        } elseif (!empty($address_settings['blank'])) {
            $url = fn_url(Registry::get('config.current_url'), AREA, $blank);
        }

    $view->assign('ga_pageview_url', $url);
    }
}
