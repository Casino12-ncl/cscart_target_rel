<?php
/* Smarty version 4.1.0, created on 2023-02-09 13:41:35
  from '/app/www/design/themes/responsive/templates/addons/gdpr/hooks/social_buttons/twitter.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63e4cddf7a4bd9_79590452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03b04f9831803434ff3b32eb14e3451d822ce7fd' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/gdpr/hooks/social_buttons/twitter.pre.tpl',
      1 => 1675529072,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e4cddf7a4bd9_79590452 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (($_smarty_tpl->tpl_vars['addons']->value['gdpr']['gdpr_cookie_consent'] !== "none")) {
$_smarty_tpl->_assignInScope('script_attrs', array("type"=>"text/plain","data-type"=>"application/javascript","data-name"=>"twitter") ,false ,2);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gdpr/hooks/social_buttons/twitter.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gdpr/hooks/social_buttons/twitter.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (($_smarty_tpl->tpl_vars['addons']->value['gdpr']['gdpr_cookie_consent'] !== "none")) {
$_smarty_tpl->_assignInScope('script_attrs', array("type"=>"text/plain","data-type"=>"application/javascript","data-name"=>"twitter") ,false ,2);
}
}
}
}
