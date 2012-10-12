<?php 
jimport('joomla.application.component.controller');
/**
* Services Controller
* @package		SunNY
* @subpackage	Content
*/
class ServicesController extends JController
{
	/**
	* отображает вид
	* @access	public
	*/
	function display(){	
		parent::display();
	}
	
	function randomTeaser(){
		$model = $this->getModel('Portfolio');
		$tizer = $model->getRandomTeaser();
		$href = JRoute::_("index.php?option=com_services&view=portfolio&id={$tizer->id_work}&Itemid=46");
		$img = JURI::base() . "images/sunny/client/{$tizer->logo}";
		
		echo "<div id='teaser_content'>
			<div class='visible_title'><a href='{$href}'>{$tizer->title}</a></div>
			<a href='{$href}'><img src='{$img}' class='left'/></a>
			<div class='our_work_right'>{$tizer->desc}</div>
		</div>";
	}

	function isValidEmail($email){
     $email_arr=explode('@',$email);
     $email_arr2=@explode('.',$email_arr[1]);
     switch (true){
         case count($email_arr)!=2:
             return false;
         case strlen($email_arr[1])<4:
             return false;
         case count($email_arr2)<2:
             return false;
         case strlen($email_arr2[0])<2:
             return false;
         case strlen($email_arr2[1])<2:
             return false;
         default:
             return true;
     }
	 }
	
	function sendMail()
	{
		$message = JRequest::getVar('message');
		$mailTo  = JRequest::getVar('mailTo');
		$name    = JRequest::getVar('name');
		$fName   = JRequest::getVar('fName');
		$subj    = JRequest::getVar('subj');
		$email 		= "site@sunny.net.ua"; 
		
$msg		= "Вы получили письмо отправленное с сайта sunny.net.ua<br />";
			$msg		.="$name оставил Вам сообщение по теме '$subj'<br />";
			$msg		.=$message;


		jimport( 'joomla.mail.mail' ); 
		$config =& JFactory::getConfig();
		$mail   =& JMail::getInstance(); 

		$mail->setBody($msg); 
		$mail->setSubject( 'Письмо '.$config->getValue('config.sitename') );
		$mail->setSender(array( $mailTo, $name, )); 
		$mail->isHTML( true ); 
		$mail->addRecipient( $email );
		$mail->Send();	
	}
}
?>