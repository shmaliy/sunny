<?php 
defined('_JEXEC') or die('Restricted access');
$outString = "<div id='toggleLang' class='{$curLanguage->getTag()}'>";

$view = JRequest::getVar('view');
$layout = JRequest::getVar('layout');
$option = JRequest::getVar('option');

if ($view == 'frontpage') {
	$class = 'main';
} elseif ($option == 'com_consulting') {
	$class = 'consulting';
} else {
	$class = 'design';
}

foreach( $langActive as $language ) {
	if( $language->code != $curLanguage->getTag() ) {
		$text = ($language->shortcode == 'ru') ? 'Этот сайт по-русски' : 'This site in English';
		
		$href = JFModuleHTML::_createHRef ($language, $params);
		$langImg = JFModuleHTML::getLanguageImageSource($language);
	
		$langImg = str_replace("\\", "/", $langImg);
		$base = JURI::base(false);
		
		$outString .= "<div class='{$class}_{$language->shortcode}'><img src='{$base}{$langImg}' title='{$text}' /><a title='{$text}' href='{$href}'>{$text}</a></div>";
	}
}
$outString .= '</div>';

echo $outString;
