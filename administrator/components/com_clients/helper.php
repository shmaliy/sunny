<?php
class ClientsHelper{
	
	function getMenuName($view){
		$menu = array();
		$menu['categoryt'] = JText::_('категории товаров');
		$menu['category'] = JText::_('категории');
		$menu['client']   = JText::_('клиенты');
		$menu['tovar']     = JText::_('товары');
		$menu['work']     = JText::_('работы');
		$menu['images']   = JText::_('изображения');
		$string           = JString::strtolower($menu[$view]);
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