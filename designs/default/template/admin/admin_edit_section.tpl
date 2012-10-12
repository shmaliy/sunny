<div class="content_header left">
	Редактор страницы <a id="edit_{$section.id}" onclick="editSection(this.id);" href="#">{$section.name}</a>
</div>
<div class="right save">
	<input type="button" value="Сохранить" onclick="updateSection();"></input>
	<input value="Смотреть &#8594;" class="button" type="button"/>	
</div>
<div class="clearer"></div>
<table cellpadding="0" cellspacing="0" class="user_edit">
	<input type="hidden" id="section_id" value="{$section.id}" />
	{if $parent.id neq 0}
	<tr>	
		<td class="user_left">
			На уровень вверх:
		</td>
		<td class="user_right">
			<a id="edit_{$parent.id}" onclick="editSection(this.id);" href="#">{$parent.name}</a><sup>10</sup>
		</td>		
	</tr>
	{/if}
	
	<tr>
		<td colspan="2"><b>Меню</b></td>
	</tr>
	<tr>	
		<td class="user_left">
			Заголовок меню:
		</td>
		<td class="user_right">
			<input id="menu_title" name="menu_title" type="text" class="width_99" value="{$menu.title}" />			
		</td>		
	</tr>	
	<tr>	
		<td class="user_left">
			Всплывающая подсказка в меню:
		</td>
		<td class="user_right">
			<input id="menu_tip" name="menu_tip" type="text" class="width_99" value="{$menu.tip}" />			
		</td>		
	</tr>		
	<tr>	
		<td class="user_left">
			ЧПУ имя для пункта меню:
		</td>
		<td class="user_right">
			<input id="menu_url" name="menu_url" type="text" class="width_99" value="{$menu.url}" />			
		</td>		
	</tr>
	<tr>
		<td colspan="2"><b>Контент</b></td>
	</tr>	
	<tr>	
		<td class="user_left">
			Название страницы:
		</td>
		<td class="user_right">
			<input id="content_page_title" name="content_page_title" type="text" class="width_99" value="{$content.page_title}" />			
		</td>		
	</tr>
	<tr>	
		<td class="user_left">
			Публикация:
		</td>
		<td class="user_right">
			<div>
				{$content.is_published}
				<input type="checkbox" id="content_is_published" {if $content.is_published eq true} checked {/if}/>
				<label for="checkbox1">Опубликовать</label>
			</div>						
		</td>		
	</tr>	
	<tr>	
		<td class="user_left">
			Явлется ли папкой:
		</td>
		<td class="user_right">
			<div>
				{$content.is_folder}
				<input type="checkbox" id="content_is_folder" {if $content.is_folder eq true} checked {/if}/>
				<label for="checkbox1">Папка</label>
			</div>						
		</td>		
	</tr>		
	<tr>	
		<td class="user_left">
			Краткое описание:
		</td>
		<td class="user_right">
			<input id="content_description" name="content_description" type="text" class="width_99" value="{$content.description}" />			
		</td>		
	</tr>
	<tr>
		<td colspan="2"><b>Модуль</b></td>
	</tr>	
	<tr>	
		<td class="user_left">
			Класс модуля:
		</td>
		<td class="user_right">			
			<select name="module" id="module" size="6">
				{foreach from=$modules item=mod}
				<option id="{$mod.module_id}" value="{$mod.class}" {if $mod.class eq $module.class} selected {/if}>{$mod.class}</option>
				{/foreach}
			</select>						
		</td>		
	</tr>	
<!--	<tr>	
		<td class="user_left">
			Краткое описание:
		</td>
		<td class="user_right">
			<input id="module_description" name="module_description" type="text" class="width_99" value="{$module.description}" />			
		</td>		
	</tr>-->	
	<tr>
		<td colspan="2"><b>Шаблон</b></td>
	</tr>	
	<tr>	
		<td class="user_left">
			Название шаблона:
		</td>
		<td class="user_right">			
			<select name="template" id="template" size="6">
				{foreach from=$templates item=templ}
				<option id="{$templ.template_id}" value="{$templ.name} ({$templ.path})" {if $templ.name eq $template.name} selected {/if}>{$templ.name} ({$templ.path})</option>
				{/foreach}
			</select>
		</td>		
	</tr>		
</table>
<div class="clearer"></div>
<div class="save top">
	<div class="right">
		<input type="button" value="Сохранить" onclick="updateSection();"></input>
		<input value="Смотреть &#8594;" class="button" type="button"/>	
	</div>
	<div class="clearer"></div>
</div>
