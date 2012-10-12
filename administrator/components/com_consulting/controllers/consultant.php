<?php 
class ConsultingControllerConsultant extends ConsultingController{
	/**
	* @var string $view вид
	*/	
	var $view      = 'consultant';
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
		
		$this->model = $this->getModel('Consultant');
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
		
		$id     = JRequest::getInt('id');	
		$fio    = mysql_real_escape_string(JRequest::getVar('fio'));
		$alias  = mysql_real_escape_string(JRequest::getVar('alias'));
		$post   = mysql_real_escape_string(JRequest::getVar('post'));
		$desc   = mysql_real_escape_string(JRequest::getVar('desc'));
		$email  = mysql_real_escape_string(JRequest::getVar('email'));
			
		$published   = JRequest::getInt('published');
		
		$alias       = JString::translit(JRequest::getVar('alias'));
		if( empty($alias) ):
			$alias = JString::translit($title);
		endif;
		$alias       = mysql_real_escape_string($alias);
		
		$teaser = JRequest::getVar('teaser', null, 'files', 'array' );
		$teaser_hid = JRequest::getVar('teaser_hid');
		
		$thumb = JRequest::getVar('thumb', null, 'files', 'array' );
		$thumb_hid = JRequest::getVar('thumb_hid');

		if( $teaser['name'] && $teaser['name'] != '' ):
			$time = time();
			$ext = JString::extSpot($teaser['type']);
			$tmp_dest 	= JPath::clean(JPATH_ROOT.DS.'images\sunny\consultant').DS.'c_t_'.$time.$ext;
			$tmp_src	= $teaser['tmp_name'];
			jimport('joomla.filesystem.file');
			JFile::upload($tmp_src, $tmp_dest);
			$teaserImg = "c_t_{$time}{$ext}";
		else:
			$teaserImg = $teaser_hid;
		endif;	
		
		if( $thumb['name'] && $thumb['name'] != '' ):
			$time = time();
			$ext = JString::extSpot($thumb['type']);
			$tmp_dest 	= JPath::clean(JPATH_ROOT.DS.'images\sunny\consultant').DS.'c_th_'.$time.$ext;
			$tmp_src	= $thumb['tmp_name'];
			jimport('joomla.filesystem.file');
			JFile::upload($tmp_src, $tmp_dest);
			$thumbImg = "c_th_{$time}{$ext}";
		else:
			$thumbImg = $thumb_hid;
		endif;	
				
		if( !$id ):
			$this->model->_save($fio, $alias, $post, $desc, $email, $published, $teaserImg, $thumbImg);
			$this->setRedirect("index.php?option={$this->component}&view={$this->view}", JText::_('Изменения сохранены'));
		else:
			$this->model->_update($id, $fio, $alias, $post, $desc, $email, $published, $teaserImg, $thumbImg);
			$this->setRedirect("index.php?option={$this->component}&view={$this->view}", JText::_('Изменения сохранены'));
		endif;
				
	}
}

?>