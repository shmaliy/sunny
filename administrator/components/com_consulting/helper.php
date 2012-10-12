<?php
class ConsultingHelper{
	
	function getMenuName($view){
		$menu = array();
		$menu['services']   = JText::_('услуги');
		$menu['partners']   = JText::_('партнеры');
		$menu['consultant'] = JText::_('консультанты');
		$menu['diploms']    = JText::_('дипломы');
		$menu['projects']   = JText::_('проекты');
		$string             = JString::strtolower($menu[$view]);
		return $string;
	}	
	
	function selectList($array, $id, $text, $active = NULL){
		$list[] = JHTML::_('select.option', '0', '- '.JText::_($text).' -');

		if( is_array($array) ):
			$list   = array_merge($list, $array);
		endif;
		$category = JHTML::_('select.genericlist',  $list, $id, 'class="inputbox" size="1" style="width:200px" "', 'value', 'text', $active);
		return $category;
	}

}

?>