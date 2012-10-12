<form action="index.php" method="post" name="adminForm">
<table class="adminform">
	<tr>
		<td width="100%" valign="top">
			<div id="cpanel">
			<?php
			
			$link = 'index.php?option=com_consulting&view=services';
			$this->_quickiconButton( $link, 'icon-48-section.png', JText::_('Услуги') );

			$link = 'index.php?option=com_consulting&view=consultant';
			$this->_quickiconButton( $link, 'icon-48-category.png', JText::_('Консультанты') );

			$link = 'index.php?option=com_partners&view=partners';
			$this->_quickiconButton( $link, 'icon-48-article-add.png', JText::_('Партнеры') );

			?>
		</div>
		</td>
      </tr>
   </table>
 </form>