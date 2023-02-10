<?php
/* Smarty version 4.1.0, created on 2023-02-07 19:28:57
  from '/app/www/design/backend/templates/addons/seo/hooks/categories/fields_to_edit.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63e27c49a88107_32960728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '623daf46884cc11d71c7e6fdd55719d5a4707e98' => 
    array (
      0 => '/app/www/design/backend/templates/addons/seo/hooks/categories/fields_to_edit.post.tpl',
      1 => 1675156313,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e27c49a88107_32960728 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('seo_name'));
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR")) {?>
    <label class="checkbox" for="seo_name">
    	<input type="checkbox" value="seo_name" id="seo_name" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
    <?php echo $_smarty_tpl->__("seo_name");?>
</label>
<?php }
}
}
