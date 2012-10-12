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
		return eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);
	}	
	
	function sendMail(){
		
		$message = JRequest::getVar('message');
		$mailTo  = JRequest::getVar('mailTo');
		$name    = JRequest::getVar('name');
		$fName   = JRequest::getVar('fName');
		$subj    = JRequest::getVar('subj');
		
		if(isset($message) && isset($mailTo) && isset($name)){
			
			if(!$this->isValidEmail($fName)){
				echo "Имейл не верный";
				return ;	
			}
			if($_REQUEST['message'] == ''){
				echo "Вы не ввели сообщение";
				return ;	
			}
			
			$email 		= "site@sunny.net.ua"; 
			$subj 		= $subj;
			$subject	= "Письмо с сайта sunny.net.ua от $name ($mailTo)";
			$msg		= "Вы получили письмо отправленное с сайта sunny.net.ua<br />";
			$msg		.="$name оставил Вам сообщение по теме '$subj'<br />";
			$msg		.=$message;
			$msg		.="<br/><br/><a href='mailto:".$mailTo."'>$mailTo</a>";
			
			$subject = utf8_to_win($subject);
			$msg = utf8_to_win($msg);
			$name = utf8_to_win($name);
			$fName = utf8_to_win($fName);
			
			$header ="Content-type: text/html; charset=windows-1251;";

			if(mail( $email, $subject, $msg, $header ))
				echo "Ваше сообщение отправленно";
			else
				echo "Ошибка при отправке сообщения";
		}else{
			echo "Ошибка при отправке сообщения";  
		}		
	}
}
?>