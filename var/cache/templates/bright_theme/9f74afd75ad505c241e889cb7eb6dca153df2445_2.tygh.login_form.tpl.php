<?php
/* Smarty version 4.1.0, created on 2023-02-09 13:41:36
  from '/app/www/design/themes/responsive/templates/addons/vendor_communication/views/vendor_communication/components/login_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63e4cde005c592_54348789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f74afd75ad505c241e889cb7eb6dca153df2445' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/vendor_communication/views/vendor_communication/components/login_form.tpl',
      1 => 1675529066,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/auth/login_form.tpl' => 2,
  ),
),false)) {
function content_63e4cde005c592_54348789 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('sign_in','vendor_communication.please_log_in_to_be_notified','sign_in','vendor_communication.please_log_in_to_be_notified'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div id="new_thread_login_form" class="hidden ty-vendor-communication-login" title="<?php echo $_smarty_tpl->__("sign_in");?>
">
    <div class="ty-login-popup">
        <div class="ty-login-popup__description ty-login-popup__description--bold">
            <?php echo $_smarty_tpl->__("vendor_communication.please_log_in_to_be_notified");?>

        </div>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"popup",'id'=>"new_thread_login_form_popup"), 0, false);
?>
    </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/views/vendor_communication/components/login_form.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/views/vendor_communication/components/login_form.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="new_thread_login_form" class="hidden ty-vendor-communication-login" title="<?php echo $_smarty_tpl->__("sign_in");?>
">
    <div class="ty-login-popup">
        <div class="ty-login-popup__description ty-login-popup__description--bold">
            <?php echo $_smarty_tpl->__("vendor_communication.please_log_in_to_be_notified");?>

        </div>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"popup",'id'=>"new_thread_login_form_popup"), 0, true);
?>
    </div>
</div>
<?php }
}
}
