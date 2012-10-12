<?php 
/**
* ServicesControllerServices
* @package Content
* @subpackage Menu
*/
class ServicesControllerServices extends ServicesController{
	/**
	* @var string $view вид
	*/	
	var $view      = 'services';
	/**
	* @var string $component компонент
	*/
	var $component = 'com_services';
	var $model;
	
	function __construct(){
		parent::__construct();
		$this->registerTask('add', 'edit');
		$this->registerTask('save', 'save');
		$this->registerTask('publish', 'publish');
		$this->registerTask('unpublish', 'unpublish');
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
		$id_category = JRequest::getInt('id_category');
		$ordering_hid = JRequest::getInt('ordering_hid');
		
		$title       = mysql_real_escape_string(JRequest::getVar('title'));

		$s_desc      = mysql_real_escape_string(JRequest::getVar( 's_desc', '', 'post', 'string', JREQUEST_ALLOWHTML ));
		$desc        = mysql_real_escape_string(JRequest::getVar( 'desc', '', 'post', 'string', JREQUEST_ALLOWHTML ));
		$published   = JRequest::getInt('published');
		
		$alias       = JString::translit(JRequest::getVar('alias'));
		if( empty($alias) ):
			$alias = JString::translit($title);
		endif;
		$alias       = mysql_real_escape_string($alias);
		
		$maxOrdering = $this->model->getMaxOrdering();
		$ordering = ($maxOrdering) ? ($maxOrdering + 1) : 1;
	
		if( !$id ):
			$this->model->_save($id_category, $title, $alias, $s_desc, $desc, $published, $ordering);
			$this->setRedirect("index.php?option={$this->component}&view={$this->view}", JText::_('Изменения сохранены'));
		else:
			$this->model->_update($id, $id_category, $title, $alias, $s_desc, $desc, $published, $ordering_hid);
			$this->setRedirect("index.php?option={$this->component}&view={$this->view}", JText::_('Изменения сохранены'));
		endif;
				
	}
}

?>