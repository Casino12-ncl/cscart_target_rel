<?php
/* Smarty version 4.1.0, created on 2023-02-07 17:33:32
  from '/app/www/design/backend/templates/views/index/components/todo_section/todo_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63e2613c020658_81683990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36a37fb3ffe7a9b80dee8a0babbff053034eac02' => 
    array (
      0 => '/app/www/design/backend/templates/views/index/components/todo_section/todo_item.tpl',
      1 => 1675156313,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e2613c020658_81683990 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
if ($_smarty_tpl->tpl_vars['todo_item']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['todo_item']->value['action_text'] && $_smarty_tpl->tpl_vars['todo_item']->value['action_url']) {?>
        <div class="todo-item todo-item--<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['todo_item']->value['type'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['todo_item']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="todo-item__inner todo-item__inner--<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['todo_item']->value['type'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                <div class="todo-item__content"><?php echo $_smarty_tpl->tpl_vars['todo_item']->value['text'];?>
</div>
                <div class="todo-item__actions">
                    <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['todo_item']->value['action_url']), ENT_QUOTES, 'UTF-8');?>
" class="btn todo-item__button <?php if ($_smarty_tpl->tpl_vars['todo_item']->value['is_ajax_action']) {?>cm-ajax<?php }?>">
                        <?php echo $_smarty_tpl->tpl_vars['todo_item']->value['action_text'];?>

                    </a>
                </div>
            </div>
        <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['todo_item']->value['id'], ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php } elseif ($_smarty_tpl->tpl_vars['todo_item']->value['action_url']) {?>
        <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['todo_item']->value['action_url']), ENT_QUOTES, 'UTF-8');?>
" class="todo-item todo-item--<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['todo_item']->value['type'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 todo-item--link" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['todo_item']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="todo-item__inner todo-item__inner--<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['todo_item']->value['type'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 todo-item__inner--no-responsive">
                <div class="todo-item__content"><?php echo $_smarty_tpl->tpl_vars['todo_item']->value['text'];?>
</div>
                <div class="todo-item__actions">
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-chevron-right todo-item__button-icon"),$_smarty_tpl);?>

                </div>
            </div>
        <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['todo_item']->value['id'], ENT_QUOTES, 'UTF-8');?>
--></a>
    <?php } else { ?>
        <div class="todo-item todo-item--<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['todo_item']->value['type'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['todo_item']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="todo-item__inner todo-item__inner--<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['todo_item']->value['type'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                <div class="todo-item__content"><?php echo $_smarty_tpl->tpl_vars['todo_item']->value['text'];?>
</div>
            </div>
        <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['todo_item']->value['id'], ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }
}
}
}
