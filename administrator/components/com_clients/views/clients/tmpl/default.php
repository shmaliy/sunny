<form action="index.php" method="post" name="adminForm">
<table class="adminform">
	<tr>
		<td width="100%" valign="top">
			<div id="cpanel">
			<?php
			
			$link = 'index.php?option=com_clients&view=client';
			$this->_quickiconButton( $link, 'icon-48-section.png', JText::_('Клиенты') );

			$link = 'index.php?option=com_clients&view=work';
			$this->_quickiconButton( $link, 'icon-48-category.png', JText::_('Работы') );

			$link = 'index.php?option=com_clients&view=category';
			$this->_quickiconButton( $link, 'icon-48-article-add.png', JText::_('Категории') );

			?>
		</div>
		</td>
      </tr>
   </table>
 </form>