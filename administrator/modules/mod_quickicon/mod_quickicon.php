<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

if (!defined( '_JOS_QUICKICON_MODULE' ))
{
	/** ensure that functions are declared only once */
	define( '_JOS_QUICKICON_MODULE', 1 );

	function quickiconButton( $link, $image, $text )
	{
		global $mainframe;
		$lang		=& JFactory::getLanguage();
		$template	= $mainframe->getTemplate();
		?>
		<div style="float:<?php echo ($lang->isRTL()) ? 'right' : 'left'; ?>;">
			<div class="icon">
				<a href="<?php echo $link; ?>">
					<?php echo JHTML::_('image.site',  $image, '/templates/'. $template .'/images/header/', NULL, NULL, $text ); ?>
					<span><?php echo $text; ?></span></a>
			</div>
		</div>
		<?php
	}

	?>
	<div id="cpanel">
		<?php $user = &JFactory::getUser();
		if ( $user->get('gid') > 23 ) {
			$link = 'index.php?option=com_menus';
			quickiconButton( $link, 'icon-48-menumgr.png', JText::_( 'Меню' ) );

			$link = 'index.php?option=com_users';
			quickiconButton( $link, 'icon-48-user.png', JText::_( 'Пользователи' ) );

			$link = 'index.php?option=com_config';
			quickiconButton( $link, 'icon-48-config.png', JText::_( 'Общие настройки' ) );
			
			$link = 'index.php?option=com_email&view=spam';
			quickiconButton( $link, 'icon-48-spam.png', JText::_( 'Ручная рассылка почты' ) );
			
			$link = 'h754gfuh8djuygfuh4ruf8je9fj54hfher9uf843hfij954yfhiud5yfuhirdfj945htguhrifj85hgh9t5guejd03edhuh3uf.php';
			quickiconButton( $link, 'icon-48-spamavto.png', JText::_( 'Автоматическая рассылка почты' ) );
		} ?>
		<br clear="all" />
		<?php 		
	
		$link = 'index.php?option=com_clients';
		quickiconButton( $link, 'icon-48-stats.png', JText::_( 'Наши работы' ) );
		
		$link = 'index.php?option=com_content';
		quickiconButton( $link, 'icon-48-article.png', JText::_( 'Менеджер материалов' ) );

		$link = 'index.php?option=com_media';
		quickiconButton( $link, 'icon-48-media.png', JText::_( 'Медиаменеджер' ) );

		$link = 'index.php?option=com_partners';
		quickiconButton( $link, 'icon-48-media.png', JText::_( 'Партнеры' ) );
		
		$link = 'index.php?option=com_services';
		quickiconButton( $link, 'icon-48-comment.png', JText::_( 'Услуги' ) );
		
		$link = 'index.php?option=com_consulting';
		quickiconButton( $link, 'icon-48-user.png', JText::_( 'Консалтинг' ) );

		?>
	</div>

	<?php
}