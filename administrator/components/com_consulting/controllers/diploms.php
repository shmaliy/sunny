<?php 
/**
* ClientsControllerClient
* @package Content
* @subpackage Clients
*/
class ConsultingControllerDiploms extends ConsultingController{
	/**
	* @var string $view вид
	*/	
	var $view      = 'diploms';
	/**
	* @var string $component компонент
	*/
	var $component = 'com_consulting';
	var $model;
	
	function __construct(){
		parent::__construct();
		$this->registerTask('add', 'edit');
		$this->registerTask('save', 'save');
		$this->registerTask('publish', 'publish');
		$this->registerTask('unpublish', 'unpublish');
		$this->registerTask('removeselect', 'removeSelect');
		$this->registerTask('saveorder', 'saveOrder');
		
		$this->model = $this->getModel('Diploms');
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
		$id_consultant     = JRequest::getInt('id_consultant');
		$title       = mysql_real_escape_string(JRequest::getVar('title'));
		
		$image = JRequest::getVar('image', null, 'files', 'array' );
		$image_hid = JRequest::getVar('image_hid');
		
		if( $image['name'] && $image['name'] != '' ):
			$time = time();
			$ext = JString::extSpot($image['type']);
			$tmp_dest 	= JPath::clean(JPATH_ROOT.DS.'images\sunny\consultant').DS.'d_'.$time.$ext;
			$tmp_src	= $image['tmp_name'];
			jimport('joomla.filesystem.file');
			JFile::upload($tmp_src, $tmp_dest);
			$img = "d_{$time}{$ext}";
		else:
			$img = $image_hid;
		endif;		
		
		if( !$id ):
			$this->model->_save($id_consultant, $img, $title);
			$this->setRedirect("index.php?option={$this->component}&view={$this->view}", JText::_('Изменения сохранены'));
		else:
			$this->model->_update($id, $id_consultant, $img, $title);
			$this->setRedirect("index.php?option={$this->component}&view={$this->view}", JText::_('Изменения сохранены'));
		endif;
				
	}
}

?>