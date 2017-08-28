<?php
/*
Plugin Name: 我的第一隻外掛
Plugin URI: https://nodejs-tw.org/index.php
Description: 這是我的第一隻外掛，測試
Version: 0.1
Author: JenFu Her
Author URI: https://nodejs-tw.org/index.php
Text Domain: pkher-first
Domain Path: /languages
 */

function pkher_quotes(){
    $quotes = array(
        "今日事，今日畢",
        "知識就是力量",
        "今日你不做計劃，明日就成為別人的計劃"
    );
    echo "<p id='my-quotes'>" . $quotes[rand(0, count($quotes))] . "</p>";
}
add_action('admin_notices', 'pkher_quotes');

function pkher_quotes_css(){
    echo "
    <style type='text/css'>
    #my-quotes {
        background-color: #8f8;
        padding: 5px 5px 5px 5px;
        font-size: 1.5em;
    }
    </style>
    ";
}
add_action("admin_head", "pkher_quotes_css");
?>