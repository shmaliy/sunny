<?php
/*** mysql hostname ***/
$hostname = 'localhost';
/*** mysql username ***/
$username = 'SunNY_sunny';
/*** mysql password ***/
$password = 'adminadmin';
$dbname = 'SunNY_sunny_new';
$news_text = "";
$work_text = "";

    $db = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
//Получаю данные о последнео отправлении
$spam = "SELECT * FROM jos_as_spam";
$resultset = $db->prepare ( $spam );  
$resultset->execute ();  
$tdataset = $resultset->fetchAll(); 

foreach ($tdataset as $rowset){
	$id_work = $rowset['id_work'];
	$id_news = $rowset['id_news'];  
} 
//Получаю новые работы
$work = "SELECT * FROM jos_work";
$resultwork = $db->prepare ( $work );  
$resultwork->execute ();  
$tdatawork = $resultwork->fetchAll(); 

foreach ($tdatawork as $rowwork){
if ($rowwork['id_work'] > $id_work){
	$work_text .= '<li style="margin-bottom: 3px;"><a href="http://sunny.net.ua/ru/portfolio/';
		
		//Получаю alias категории part 1
		$category = "SELECT id_category FROM jos_work_xref WHERE id_work =:id_work ";
		$resultcategory = $db->prepare ( $category ); 
		$resultcategory->bindValue(':id_work',$rowwork['id_work'],PDO::PARAM_STR); 
		$resultcategory->execute ();  
		$tdatacategory = $resultcategory->fetchAll(); 

		foreach ($tdatacategory as $rowcategory){
				//Получаю alias категории part 2
				$alias = "SELECT * FROM jos_category WHERE id_category =:id_category ";
				$resultalias = $db->prepare ( $alias ); 
				$resultalias->bindValue(':id_category',$rowcategory['id_category'],PDO::PARAM_STR); 
				$resultalias->execute ();  
				$tdataalias = $resultalias->fetchAll(); 

				foreach ($tdataalias as $rowalias){
	$work_text .= $rowalias['alias'];
				} 
		} 

	$work_text .= '/';
	$work_text .= $rowwork['alias'];
	//$work_text .= mb_convert_encoding($rowwork['alias'],'utf8','cp1251'); 
	$work_text .= '/" style="color: #0e68cb;">';
	//$work_text .= $rowwork['title'];
	$work_text .= mb_convert_encoding($rowwork['title'],'utf8','cp1251'); 
	$work_text .= '</a></li>';
};
$id_new_work=$rowwork['id_work']; 
}
//Получаю новые новости
$news = " SELECT content.* FROM `jos_content` as `content` ";
$news .= " JOIN `jos_content_xref` as `xref` ON content.id_item = xref.id_item ";
$news .= " WHERE content.published = '1' ";
$news .= " AND xref.id_category = '19' ";
$resultnews = $db->prepare ( $news );  
$resultnews->execute ();  
$tdatanews = $resultnews->fetchAll(); 

foreach ($tdatanews as $rownews){
if ($rownews['id_item'] > $id_news){
$news_text .= '<li style="margin-bottom: 3px;"><a href="http://sunny.net.ua/ru/consulting/club/';
$news_text .= $rownews['alias'];
//$news_text .= mb_convert_encoding($rownews['alias'],'utf8','cp1251'); 
$news_text .= '/" style="color: #0e68cb;">';
//$news_text .= $rownews['title'];
$news_text .= mb_convert_encoding($rownews['title'],'utf8','cp1251'); 
$news_text .= '</a></li>'; 
};
$id_new_news=$rownews['id_item'];
} 

//Получаю пользователей
if(($id_new_work > $id_work) or ($id_news < $id_new_news)){
$user = "SELECT * FROM jos_as_email WHERE `spam_avto` = 1";
$resultuser = $db->prepare ( $user );  
$resultuser->execute ();  
$tdatauser = $resultuser->fetchAll(); 

foreach ($tdatauser as $rowuser){
$tems_mail = "Новости";
$fio_email = iconv("windows-1251", "utf-8", $rowuser['fio']);
$shablonnn = '<div style="width: 800px;font-size: 16px; font-family: Calibri; color: #323232; margin: 0px; padding: 0px;">';
$shablonnn .= '<img src="http://sunny.net.ua/mail/header.jpg" alt="" style="margin-bottom: 5px;" width="800" height="118"/><div style="padding: 27px;">';
$shablonnn .= '<div style="font-size: 24px; color: #245790; margin-bottom: 20px;">Добрый день, '.$fio_email.'</div>';
if ($id_new_work > $id_work){	
$shablonnn .= '<div style="margin-bottom: 10px;"></div><div>Новые работы в портфолио:</div>';
$shablonnn .= '<ol type="1"  style="margin-bottom: 20px; padding-left: 60px; margin: 5px 0px 15px;">';
$shablonnn .= $work_text;
$shablonnn .= '</ol>';
};
if ($id_news < $id_new_news){		
$shablonnn .= '<div>Свежие новости:</div><ol type="1"  style="margin-bottom: 20px; padding-left: 60px; margin: 5px 0px 15px;">';
$shablonnn .= $news_text;
$shablonnn .= '</ol>';
};
$shablonnn .= '<div></div>';
$shablonnn .= '</div><img src="http://sunny.net.ua/mail/footer.jpg" alt="" style="margin-top: 30px;" width="800" height="234"/></div>';
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: SunNY CT <site@sunny.net.ua>\r\n";


mail($rowuser['email'],"=?utf-8?B?".base64_encode($tems_mail)."?=",$shablonnn, $headers);
};
$statys = "Отправка выполнена";
$statys = mb_convert_encoding($statys,'cp1251','utf8'); 
}else{ 
$statys = "Новых работ и новостей не обнаружено";
$statys = mb_convert_encoding($statys,'cp1251','utf8'); };	
//обновляю записи в БД
$date_today = date("d.m.y");


$spam_new = "UPDATE `jos_as_spam` SET `statys`=:statys, `date`=:date_today, `id_work`=:id_new_work, `id_news`=:id_new_news WHERE `id`= 1";
$resultspam = $db->prepare ( $spam_new ); 
$resultspam->bindValue(':id_new_work',$id_new_work,PDO::PARAM_STR);
$resultspam->bindValue(':id_new_news',$id_new_news,PDO::PARAM_STR);
$resultspam->bindValue(':date_today',$date_today,PDO::PARAM_STR);
$resultspam->bindValue(':statys',$statys,PDO::PARAM_STR);
$resultspam->execute ();    
$statys = mb_convert_encoding($statys,'utf8','cp1251');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" lang="ru-ru" dir="ltr" >
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="generator" content="Bluefish 2.0.3" />
  <title>Дизайн-студия в Днепропетровске | SunNY Creative Technologies - Администрирование</title>
  <script type="text/javascript" src="/media/system/js/mootools.js"></script>


<link href="templates/sunny/css/login.css" rel="stylesheet" type="text/css" />

</head>

<body>
	<a href="http://sunny.net.ua/administrator"><div id="header" style="width:100%; margin-bottom:20px; background:url(templates/sunny/images/logo-admin.jpg) no-repeat scroll 0 0 #42434A">
    	<p style="color:#FFF; padding-left:150px; font-size:22px; line-height:110px">SunNY CMS [ <?php echo $statys;?> ]</p>
    </div>
    </a>
    <div align="center">
		  <img src="images/email.jpg" width="830" height="519">
    </div>

</body>
</html>


