<?php
/* Smarty version 4.1.0, created on 2023-02-09 12:50:08
  from '/app/www/design/themes/responsive/templates/blocks/menu/dropdown_horizontal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63e4c1d0d34bb2_78179994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b136b1136019ce4fc56e1d2cbbc00dd495696e2d' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/blocks/menu/dropdown_horizontal.tpl',
      1 => 1675529063,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/topmenu_dropdown.tpl' => 2,
  ),
),false)) {
function content_63e4c1d0d34bb2_78179994 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_subTemplateRender("tygh:blocks/topmenu_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['items']->value,'item1_url'=>true,'name'=>"item",'item_id'=>"param_id",'childs'=>"subitems"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/menu/dropdown_horizontal.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/menu/dropdown_horizontal.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_subTemplateRender("tygh:blocks/topmenu_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['items']->value,'item1_url'=>true,'name'=>"item",'item_id'=>"param_id",'childs'=>"subitems"), 0, true);
}
}
}
