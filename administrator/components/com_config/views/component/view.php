<?php
defined('_JEXEC') or die( 'Restricted access' );
jimport( 'joomla.application.component.view' );
class ConfigViewComponent extends JView
{

	function display()
	{
		$model		= &$this->getModel();
		$params		= &$model->getParams();
		$component	= JComponentHelper::getComponent(JRequest::getCmd( 'component' ));

		$document = & JFactory::getDocument();
		$document->setTitle( JText::_('Edit Preferences') );
		JHTML::_('behavior.tooltip');
?>
	<form action="index.php" method="post" name="adminForm" autocomplete="off">
		<fieldset>
			<div style="float: right">
				<button type="button" onclick="submitbutton('save');window.top.setTimeout('window.parent.document.getElementById(\'sbox-window\').close()', 700);">
					<?php echo JText::_( 'Save' );?></button>
				<button type="button" onclick="window.parent.document.getElementById('sbox-window').close();">
					<?php echo JText::_( 'Cancel' );?></button>
			</div>
			<div class="configuration" >
				<?php echo JText::_($this->component->name) ?>
			</div>
		</fieldset>

		<fieldset>
			<legend>
				<?php echo JText::_( 'Configuration' );?>
			</legend>
			<?php echo $params->render();?>
		</fieldset>

		<input type="hidden" name="id" value="<?php echo $this->component->id;?>" />
		<input type="hidden" name="component" value="<?php echo $this->component->option;?>" />

		<input type="hidden" name="controller" value="component" />
		<input type="hidden" name="option" value="com_config" />
		<input type="hidden" name="tmpl" value="component" />
		<input type="hidden" name="task" value="" />
		<?php echo JHTML::_( 'form.token' ); ?>
	</form>
<?php
	}
}