<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo  $this->language; ?>" lang="<?php echo  $this->language; ?>" dir="<?php echo  $this->direction; ?>" id="minwidth" >
<head>
<jdoc:include type="head" />

<link rel="stylesheet" href="../templates/system/css/system.css" type="text/css" />
<link href="templates/<?php echo  $this->template ?>/css/template.css" rel="stylesheet" type="text/css" />

<?php if(JModuleHelper::isEnabled('menu')) : ?>
	<script type="text/javascript" src="templates/<?php echo  $this->template ?>/js/menu.js"></script>
	<script type="text/javascript" src="templates/<?php echo  $this->template ?>/js/index.js"></script>
<?php endif; ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body id="minwidth-body">
	<div id="border-top">
		<div id="logo_admin">
			<div class="right">
					<p><a href="<?php echo JRoute::_('index.php?option=com_login&task=logout')?>">Выход</a>&nbsp;&nbsp;<a href="../" target="_blank">На сайт &rarr;</a></p>
                    <p><a href="http://metrika.yandex.ru/" target="_blank">Яндекс.Метрика &rarr;</a></p>
                    <p><a href="https://www.google.com/accounts/ServiceLogin?hl=ru&service=analytics" target="_blank">Google Analytics &rarr;</a></p>
            </div>
			<span class="title">SunNY CMS [ <?php echo $mainframe->getCfg( 'sitename' ); ?> ]</span>
		</div>
	</div>
	<div id="header-box">
		<div id="module-status">
			<jdoc:include type="modules" name="status"  />
		</div>
		<div id="module-menu">
			<jdoc:include type="modules" name="menu" />
		</div>
		<div class="clr"></div>
	</div>
	<div id="content-box">
		<div class="border">
			<div class="padding">
				<div id="element-box">
					<jdoc:include type="message" />
					<div class="t">
						<div class="t">
							<div class="t"></div>
						</div>
					</div>
					<div >
						<table class="adminform">
						<tr>
							<td valign="top">
								<jdoc:include type="modules" name="icon" />
							</td>
						</tr>
						</table>
						<div class="clr"></div>
					</div>
					<div class="b">
						<div class="b">
							<div class="b"></div>
						</div>
					</div>
				</div>
				<noscript>
					<?php echo  JText::_('WARNJAVASCRIPT') ?>
				</noscript>
				<div class="clr"></div>
				<div id="footer"><?php echo date("Y")?>&nbsp;&copy;&nbsp;<a href="http://www.sunny.net.ua" target="_blank">SunNY Creative Technologies</a></div>
			</div>
		</div>
	</div>
</body>
</html>
