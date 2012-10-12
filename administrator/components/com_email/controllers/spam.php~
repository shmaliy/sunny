<?php 
/**
* EmailControllerServices
* @package Content
* @subpackage Menu
*/
class EmailControllerEmail extends EmailController{
	/**
	* @var string $view вид
	*/	
	var $view      = 'email';
	/**
	* @var string $component компонент
	*/
	var $component = 'com_email';
	var $model;
	
	function __construct(){
		parent::__construct();
		$this->registerTask('add', 'edit');
		$this->registerTask('save', 'save');
		$this->registerTask('publish', 'publish');
		$this->registerTask('unpublish', 'unpublish');
				$this->registerTask('signeda', 'signeda');
		$this->registerTask('unsigneda', 'unsigneda');
				$this->registerTask('signedm', 'signedm');
		$this->registerTask('unsignedm', 'unsignedm');
		$this->registerTask('removeselect', 'removeSelect');
		$this->registerTask('saveorder', 'saveOrder');
		
		$this->model = $this->getModel();
	}
	/**
	* сохраняет порядок вывода записей
	*/
	function saveOrder(){
		$itemList = JRequest::getVar('item');
		foreach( $itemList as $key => $val ):
			$this->model->_saveOrder($val, $key);
		endforeach;
		$this->setRedirect("index.php?option={$this->component}&view={$this->view}", JText::_('Изменения сохранены'));
	}
	/**
	* опубликовывает выбранные записи
	*/
	function publish(){
		$cid = JRequest::getVar( 'cid', array(), '', 'array' );
		JArrayHelper::toInteger($cid);
		$cids   = implode(',', $cid);
		
		$this->model->_publish($cids);	
		$this->setRedirect("index.php?option={$this->component}&view={$this->view}", JText::_('Изменения сохранены'));
	}
	/**
	* снимает с публикации выбранные записи
	*/
	function unpublish(){
		$cid = JRequest::getVar( 'cid', array(), '', 'array' );
		JArrayHelper::toInteger($cid);
		$cids   = implode(',', $cid);
		
		$this->model->_unpublish($cids);		
		$this->setRedirect("index.php?option={$this->component}&view={$this->view}", JText::_('Изменения сохранены'));
	}
/**
	* опубликовывает выбранные записи
	*/
	function signeda(){
		$cid = JRequest::getVar( 'cid', array(), '', 'array' );
		JArrayHelper::toInteger($cid);
		$cidsa   = implode(',', $cid);
		
		$this->model->_signeda($cidsa);	
		$this->setRedirect("index.php?option={$this->component}&view={$this->view}", JText::_('Изменения сохранены'));
	}
	/**
	* снимает с публикации выбранные записи
	*/
	function unsigneda(){
		$cid = JRequest::getVar( 'cid', array(), '', 'array' );
		JArrayHelper::toInteger($cid);
		$cidsa   = implode(',', $cid);
		
		$this->model->_unsigneda($cidsa);		
		$this->setRedirect("index.php?option={$this->component}&view={$this->view}", JText::_('Изменения сохранены'));
	}
	/**
	* удаляет выбранные записи
	*/
	/**
	* опубликовывает выбранные записи
	*/
	function signedm(){
		$cid = JRequest::getVar( 'cid', array(), '', 'array' );
		JArrayHelper::toInteger($cid);
		$cidsm   = implode(',', $cid);
		
		$this->model->_signedm($cidsm);	
		$this->setRedirect("index.php?option={$this->component}&view={$this->view}", JText::_('Изменения сохранены'));
	}
	/**
	* снимает с публикации выбранные записи
	*/
	function unsignedm(){
		$cid = JRequest::getVar( 'cid', array(), '', 'array' );
		JArrayHelper::toInteger($cid);
		$cidsm   = implode(',', $cid);
		
		$this->model->_unsignedm($cidsm);		
		$this->setRedirect("index.php?option={$this->component}&view={$this->view}", JText::_('Изменения сохранены'));
	}
	/**
	* удаляет выбранные записи
	*/
	function removeSelect(){
		$cid = JRequest::getVar( 'cid', array(), 'post', 'array' );
		JArrayHelper::toInteger($cid);
		$cids   = implode(',', $cid);
		
		$this->model->_removeSelect($cids);
		$this->setRedirect("index.php?option={$this->component}&view={$this->view}", JText::_('Изменения сохранены'));
		
	}
	/**
	* выводит форму редактирования информации о категории
	*/		
	function edit(){
		JRequest::setVar('view', $this->view);
		JRequest::setVar('layout', 'form');
		parent::display();
	}
	/**
	* редактирует запись
	*/	
	function save(){
		
		$id          = JRequest::getInt('id');
		$ordering_hid = JRequest::getInt('ordering_hid');
		
		$email      = mysql_real_escape_string(JRequest::getVar('email'));
		$fio        = mysql_real_escape_string(JRequest::getVar('fio'));
		
		$activity      = mysql_real_escape_string(JRequest::getVar('activity'));
		

		$comments      = mysql_real_escape_string(JRequest::getVar( 'comments', '', 'post', 'string', JREQUEST_ALLOWHTML ));
$spam_avto   = JRequest::getInt('spam_avto');
$spam_manual   = JRequest::getInt('spam_manual');
		$published   = JRequest::getInt('published');
		
		
		
		$maxOrdering = $this->model->getMaxOrdering();
		$ordering = ($maxOrdering) ? ($maxOrdering + 1) : 1;
	
		if( !$id ):
			$this->model->_save($fio, $email, $activity, $spam_avto, $spam_manual, $comments, $ordering, $published);
			$this->setRedirect("index.php?option={$this->component}&view={$this->view}", JText::_('Изменения сохранены'));
		else:
			$this->model->_update($id, $fio, $email, $activity, $spam_avto, $spam_manual,  $comments, $ordering_hid, $published);
			$this->setRedirect("index.php?option={$this->component}&view={$this->view}", JText::_('Изменения сохранены'));
		endif;
				
	}
}

?>