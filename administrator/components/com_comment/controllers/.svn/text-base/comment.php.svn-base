<?php 
/**
* CommentControllerComment
* @package Comment
* @subpackage Controller
*/
class CommentControllerComment extends CommentController
{
	/**
	* @var string $view вид
	*/
	var $view      = 'comment';
	/**
	* @var string $component компонент
	*/
	var $component = 'com_comment';
	var $model;
	
	function __construct()
	{
		parent::__construct();
		$this->registerTask('publish', 'publish');
		$this->registerTask('unpublish', 'unpublish');
		$this->registerTask('removeselect', 'removeSelect');
		$this->registerTask('save', 'save');
		// получаем модель CommentModelComment
		$this->model = $this->getModel('Comment');
	}
	/**
	* publish
	* опубликовывает выбранные записи
	*/	
	function publish()
	{
		$cid = JRequest::getVar( 'cid', array(), '', 'array' );
		JArrayHelper::toInteger($cid);
		$cids   = implode(',', $cid);
		
		$this->model->_publish($cids);		
		$this->setRedirect('index.php?option='.$this->component.'&view='.$this->view, JText::_(''.count($cid).' комментариев опубликовано'));
	}
	/**
	* unpublish
	* снимает с публикации выбранные записи
	*/
	function unpublish()
	{
		$cid = JRequest::getVar( 'cid', array(), '', 'array' );
		JArrayHelper::toInteger($cid);
		$cids   = implode(',', $cid);
		
		$this->model->_unpublish($cids);			
		$this->setRedirect('index.php?option='.$this->component.'&view='.$this->view, JText::_(''.count($cid).' комментариев снято с публикации'));
	}
	/**
	* removeselect
	* удаляет выбранные записи
	*/
	function removeSelect()
	{
		$db  = & JFactory::getDBO();
		$cid = JRequest::getVar( 'cid', array(), 'post', 'array' );
		JArrayHelper::toInteger($cid);
		$cids   = implode(',', $cid);
		
		$this->model->_removeSelect($cids);
		$this->setRedirect('index.php?option='.$this->component.'&view='.$this->view, JText::_('Выбранные комментариев успешно удалены'));
		
	}
	/**
	 * save
	 * сохраняет выбранные записи
	 */
	function save()
	{
		$cid = JRequest::getVar( 'cid', array(), '', 'array' );
		JArrayHelper::toInteger($cid);
		$id_comment = implode(',', $cid);
		
		$text       = JRequest::getVar( 'text', '', 'post', 'string', JREQUEST_ALLOWHTML );
		$this->model->_update($id_comment, $text);
		$this->setRedirect('index.php?option='.$this->component.'&view='.$this->view, JText::_('Изменения сохранены'));	
	}

}

?>