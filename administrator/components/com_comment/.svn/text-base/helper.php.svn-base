<?php

class CommentHelper
{
	/**
	* выводит список select
	* @param array $array массив 'значение' => текст
	* @param string $id атрибут ID
	* @param string $text текст нулевого индекса
	* @param int $active ID активного 
	*/		
	function selectList($array, $id, $text, $active = NULL)
	{
		$list[] = JHTML::_('select.option', '0', '- '.JText::_($text).' -');

		if( is_array($array) ):
			$list   = array_merge($list, $array);
		endif;
		$category = JHTML::_('select.genericlist',  $list, $id, 'class="inputbox" size="1" style="width:200px" "', 'value', 'text', $active);
		return $category;
	}

}

?>