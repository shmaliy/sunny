<?php 
jimport('joomla.application.component.controller');
/**
* Services Controller
* @package		SunNY
* @subpackage	Content
*/
class ConsultingController extends JController
{
	/**
	* отображает вид
	* @access	public
	*/
	function display(){	
		parent::display();
	}
	function removeComment()
	{
		$id_comment = JRequest::getInt('id_comment', 0);
		$model     = $this->getModel('Club');
		$model->removeComment($id_comment);
	}
	
	/**
	* редактирует комментарий
	* @return void
	*/
	function editComment()
	{
		$id_comment = JRequest::getInt('id_comment', 0);
		$text       = mysql_real_escape_string(JRequest::getVar( 'comment_text', '', 'post', 'string', JREQUEST_ALLOWHTML ));
		$model      = $this->getModel('Club');
		$model->updateComment($id_comment, $text);
		
		echo '{"id":['.$id_comment.'],"text":"'.$text.'"}';
	}
	/**
	* добавление комментария
	* @return string строка с данными о комментарии в JSON формате
	*/
	function addComment()
	{
		$text       = mysql_real_escape_string(JRequest::getVar('comment_text'));
		$user       = mysql_real_escape_string(JRequest::getVar('comment_user'));
		$date       = date("Y-m-d H:i:s");
		$id_article = JRequest::getInt('id_article');
		
		$model = $this->getModel('Club');
		$id = $model->addComment($id_article, $date, $text, $user);
		
		
		list($date, $time) = explode(' ', JHTML::_('date', $date, JText::_('DATE_FORMAT_LC2')));
		$date = JHTML::_('date', $date, JText::_('DATE_FORMAT_LC5'));
		$base = JURI::base();

		
		echo "{
			   'id'        : '{$id}',
			   'date'      : '{$date}', 
			   'user'	    : '{$user}',
			   'time'      : '{$time}', 
			   'text'      : '{$text}',
			}";
	}
		function sendMessage()
	{
		$textf        = mysql_real_escape_string(JRequest::getVar('text'));
		$email       = mysql_real_escape_string(JRequest::getVar('email'));
		$name        = mysql_real_escape_string(JRequest::getVar('name'));
		$phone        = mysql_real_escape_string(JRequest::getVar('phone'));
		$tovars        = mysql_real_escape_string(JRequest::getVar('tovars'));

		$admin_email = 'site@sunny.net.ua';
		
$textr		= "Вы получили письмо отправленное с сайта sunny.net.ua<br />";
			$textr		.="$name оставил Вам сообщение по теме заказ товаров<br />";
			$textr		.="$name номер телефона '$phone'<br />";
			$textr		.="Сообщение: $textf<br />";
			$textr		.="$tovars";

$text=str_replace(array("\r","\n"),"",$textr);
		jimport( 'joomla.mail.mail' ); 
		$config =& JFactory::getConfig();
		$mail   =& JMail::getInstance(); 

		$mail->setBody($text); 
		$mail->setSubject( 'Заказ с сайта '.$config->getValue('config.sitename') );
		$mail->setSender(array( $email, $name, )); 
		$mail->isHTML( true ); 
		$mail->addRecipient( $admin_email );
		$mail->Send();	
		//возврат пользователю


		
		
$textr		= "Вы сделали заказ на сайте компании SunNY Creative Tecnologies <br />(http://sunny.net.ua).<br />";
			$textr		.="$tovars<br />";
			$textr		.="Мы постараемся связаться с вами как можно скорее.<br />С уважением,<br />Компания SunNY Creative Tecnologies<br />+380(67)6798999<br />site@sunny.net.ua<br />";

$text=str_replace(array("\r","\n"),"",$textr);
		jimport( 'joomla.mail.mail' ); 
		$config =& JFactory::getConfig();
		$mail   =& JMail::getInstance(); 

		$mail->setBody($text); 
		$mail->setSubject( 'Заказ с сайта '.$config->getValue('config.sitename') );
		$mail->setSender(array( $admin_email, "SunNY Creative Tecnologies", )); 
		$mail->isHTML( true ); 
		$mail->addRecipient( $email );
		$mail->Send();	
	}
}
?>