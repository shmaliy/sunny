<?php 
/**
* ServicesControllerServices
* @package Content
* @subpackage Menu
*/
class partnersControllerpartners extends PartnersController{
	/**
	* @var string $view вид
	*/	
	var $view      = 'partners';
	/**
	* @var string $component компонент
	*/
	var $component = 'com_partners';
	var $model;
	
	function __construct(){
		parent::__construct();
		$this->registerTask('add', 'edit');
		$this->registerTask('save', 'save');
		$this->registerTask('publish', 'publish');
		$this->registerTask('unpublish', 'unpublish');
		$this->registerTask('removeselect', 'removeSelect');
		
		$this->model = $this->getModel();
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
		$title       = mysql_real_escape_string(JRequest::getVar('title'));
		$href        = mysql_real_escape_string(JRequest::getVar('href'));
		$type        = JRequest::getInt('type');

		$published   = JRequest::getInt('published');
		
		$alias       = JString::translit(JRequest::getVar('alias'));
		if( empty($alias) ):
			$alias = JString::translit($title);
		endif;
		$alias       = mysql_real_escape_string($alias);

		$image = JRequest::getVar('image', null, 'files', 'array' );
		$image_hid = JRequest::getVar('image_hid');

		if( $image['name'] && $image['name'] != '' ):
			$time = time();
			$ext = JString::extSpot($image['type']);
			$tmp_dest 	= JPath::clean(JPATH_ROOT.DS.'images\sunny\partners').DS.'p_'.$time.$ext;
			$tmp_src	= $image['tmp_name'];
			jimport('joomla.filesystem.file');
			JFile::upload($tmp_src, $tmp_dest);
			$img = "p_{$time}{$ext}";
		else:
			$img = $image_hid;
		endif;		
		
		if( !$id ):
			$this->model->_save($title, $alias, $img, $href, $type, $published);
			$this->setRedirect("index.php?option={$this->component}&view={$this->view}", JText::_('Изменения сохранены'));
		else:
			$this->model->_update($id, $title, $alias, $img, $href, $type, $published);
			$this->setRedirect("index.php?option={$this->component}&view={$this->view}", JText::_('Изменения сохранены'));
		endif;
				
	}
}

?>