<?php
/* Smarty version 4.1.0, created on 2023-02-07 17:27:45
  from '/app/www/design/backend/templates/addons/reward_points/hooks/addons/addon_settings.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63e25fe1135b37_97282623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2115afc1f69c89225073b1c68ad3ee9b84922ebf' => 
    array (
      0 => '/app/www/design/backend/templates/addons/reward_points/hooks/addons/addon_settings.post.tpl',
      1 => 1675156313,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e25fe1135b37_97282623 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
if ($_smarty_tpl->tpl_vars['_addon']->value === "reward_points") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/reward_points/index.js"),$_smarty_tpl);?>

<?php }
}
}
