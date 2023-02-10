<?php
/* Smarty version 4.1.0, created on 2023-02-07 17:27:37
  from '/app/www/design/backend/templates/addons/seo/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63e25fd947c0b9_37285373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd585af61c8b3872a27e769f2da966a2b7959a0b' => 
    array (
      0 => '/app/www/design/backend/templates/addons/seo/hooks/index/scripts.post.tpl',
      1 => 1675156313,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e25fd947c0b9_37285373 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/seo/func.js"),$_smarty_tpl);
}
}
