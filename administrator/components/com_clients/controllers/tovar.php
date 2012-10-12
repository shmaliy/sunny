<?php 
/**
* ClientsControllerClient
* @package Content
* @subpackage Clients
*/
class ClientsControllerTovar extends ClientsController{
	/**
	* @var string $view вид
	*/	
	var $view      = 'tovar';
	/**
	* @var string $component компонент
	*/
	var $component = 'com_clients';
	var $model;
	
	function __construct(){
		parent::__construct();
		$this->registerTask('add', 'edit');
		$this->registerTask('save', 'save');
		$this->registerTask('publish', 'publish');
		$this->registerTask('unpublish', 'unpublish');
		$this->registerTask('removeselect', 'removeSelect');
		$this->registerTask('saveorder', 'saveOrder');
		
		$this->model = $this->getModel('Tovar');
	}
	/**
	* сохраняет порядок вывода записей
	*/
	function saveOrder()
	{
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

		$id_catt = JRequest::getInt('id_catt');
		
		$title       = mysql_real_escape_string(JRequest::getVar('title'));
		
		$desc        = mysql_real_escape_string(JRequest::getVar( 'desc', '', 'post', 'string', JREQUEST_ALLOWHTML ));
		$cena        = JRequest::getInt('cena');

		
		$published   = JRequest::getInt('published');
		
		$alias       = JString::translit(JRequest::getVar('alias'));
		if( empty($alias) ):
			$alias = JString::translit($title);
		endif;
		$alias       = mysql_real_escape_string($alias);

		$maxOrdering = $this->model->getMaxOrdering();
		$ordering = ( $maxOrdering ) ? ($maxOrdering+1) : 1;		
		
		if( !$id ):
			$this->model->_save($title, $alias, $desc, $cena, $published, $id_catt, $ordering);
			$this->setRedirect("index.php?option={$this->component}&view={$this->view}", JText::_('Изменения сохранены'));
		else:
			$this->model->_update($id, $title, $alias, $desc, $cena, $published, $id_catt);
			$this->setRedirect("index.php?option={$this->component}&view={$this->view}", JText::_('Изменения сохранены'));
		endif;
				
	}
}

?>