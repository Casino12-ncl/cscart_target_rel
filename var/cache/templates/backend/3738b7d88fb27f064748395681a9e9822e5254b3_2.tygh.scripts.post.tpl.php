<?php
/* Smarty version 4.1.0, created on 2023-02-07 17:27:37
  from '/app/www/design/backend/templates/addons/paypal/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63e25fd943d424_73184618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3738b7d88fb27f064748395681a9e9822e5254b3' => 
    array (
      0 => '/app/www/design/backend/templates/addons/paypal/hooks/index/scripts.post.tpl',
      1 => 1675156313,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e25fd943d424_73184618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/paypal/integrated_signup.js"),$_smarty_tpl);?>

<?php }
}
