{script src="js/tygh/fileuploader_scripts.js"}

{assign var="id_var_name" value="`$prefix`{$var_name|md5}"}

<input type="hidden" name="file_{$var_name}" value="" id="file_{$id_var_name}">
<input type="hidden" name="type_{$var_name}" value="" id="type_{$id_var_name}">

{strip}
<div class="te-fileuploader clearfix">
    <div class="upload-file-section" id="message_{$id_var_name}" title="">
        <p class="cm-fu-file " style="display: none;">
            <span class="upload-filename filename-link"></span>
            {include_ext file="common/icon.tpl"
                class="glyph-cancel"
                id="clean_selection_`$id_var_name`"
                title=__("remove_this_item")
                data=[
                    "onclick" => "Tygh.fileuploader.clean_selection(this.id); Tygh.fileuploader.toggle_links(this.id, 'show');"
                ]
                icon_text="&nbsp;"
            }
        </p>
    </div>

    <div id="link_container_{$id_var_name}">
    	{if $disabled}
    		<span class="te-btn ty-left fileinput-btn cm-tooltip disabled" title="{__('theme_editor.create_style_first')}">{include_ext file="common/icon.tpl" class="icon-upload ty-icon-upload te-fileuploader__icon"}{__("theme_editor.browse")}</span>
    	{else}
        	<span class="te-btn ty-left fileinput-btn"><input type="file" name="file_{$var_name}" id="local_{$id_var_name}" onchange="Tygh.fileuploader.show_loader(this.id); Tygh.fileuploader.toggle_links(this.id, 'hide');" data-ca-empty-file="" onclick="Tygh.$(this).removeAttr('data-ca-empty-file');">{include_ext file="common/icon.tpl" class="icon-upload ty-icon-upload te-fileuploader__icon"}{__("theme_editor.browse")}</span>
    	{/if}
    </div>
</div>
{/strip}

