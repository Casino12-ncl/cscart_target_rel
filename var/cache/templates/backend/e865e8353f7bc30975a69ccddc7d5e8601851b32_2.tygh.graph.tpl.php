<?php
/* Smarty version 4.1.0, created on 2023-02-07 17:33:32
  from '/app/www/design/backend/templates/views/index/components/analytics_section/analytics_card/graph.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63e2613c24b847_04715787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e865e8353f7bc30975a69ccddc7d5e8601851b32' => 
    array (
      0 => '/app/www/design/backend/templates/views/index/components/analytics_section/analytics_card/graph.tpl',
      1 => 1675156313,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e2613c24b847_04715787 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('previous_period','current_period','current_previous_period'));
if ($_smarty_tpl->tpl_vars['graph']->value && $_smarty_tpl->tpl_vars['graph']->value['content']) {
echo smarty_function_script(array('src'=>"js/tygh/backend/dashboard/graph.js"),$_smarty_tpl);?>
<div class="analytics-card-graph" data-ca-analytics-card="graph" data-ca-analytics-card-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['analytics_card']->value['id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['graph']->value['id'], ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-is-day="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_day']->value, ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-previous-period-text="<?php echo $_smarty_tpl->__("previous_period");?>
"data-ca-analytics-card-graph-current-period-text="<?php echo $_smarty_tpl->__("current_period");?>
"data-ca-analytics-card-graph-current-previous-period-text="<?php echo $_smarty_tpl->__("current_previous_period",array("[date]"=>"MMM d, yyyy"));?>
"data-ca-analytics-card-graph-content="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['graph']->value['content']), ENT_QUOTES, 'UTF-8');?>
"><div class="analytics-card-graph__view spinner" data-ca-analytics-card="graphView"></div></div><?php }
}
}
