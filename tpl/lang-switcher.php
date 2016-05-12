<?php
/**
 * Created by IntelliJ IDEA.
 * User: rankun203
 * Date: 4/12/16
 * Time: 7:40 PM
 */

if ( ! function_exists( 'get_lang_switcher_html' ) ) {
	function get_lang_switcher_html() {
		$en_url = qtranxf_convertURL( "", "en" );
		$zh_url = qtranxf_convertURL( "", "zh" );

		$en_active = $zh_active = '';
		global $q_config;
		if ( 'en' == $q_config['language'] ) {
			$en_active = 'active';
		}
		if ( 'zh' == $q_config['language'] ) {
			$zh_active = 'active';
		}

		$html = <<<EOF
<div class='lang-switcher'>
	<a title="English" class="lang-link {$en_active}" href="{$en_url}">English</a>
	<span class="delimiter">|</span>
	<a title="简体中文" class="lang-link {$zh_active}" href="{$zh_url}">简体中文</a>
</div>
EOF;

		return $html;
	}
}

if ( ! function_exists( 'get_opposite_lang_html' ) ) {
	function get_opposite_lang_html() {
		$en_url = qtranxf_convertURL( "", "en" );
		$zh_url = qtranxf_convertURL( "", "zh" );

		global $q_config;
		if ( 'en' == $q_config['language'] ) {
      $target_url = $zh_url;
      $target_txt = "中文版";
		}
		if ( 'zh' == $q_config['language'] ) {
      $target_url = $en_url;
      $target_txt = "English";
		}

		$html = '<a class="lang_link" href="'.$target_url.'">'.$target_txt.'</a>';

		return $html;
	}
}
