<?php
class SetingHelper{
		
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
