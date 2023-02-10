<?php
/* Smarty version 4.1.0, created on 2023-02-07 19:28:57
  from '/app/www/design/backend/templates/views/categories/components/context_menu/edit_selected.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63e27c497bfa52_42226044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac67646881373957580fda44ee736f98dbfbc7d9' => 
    array (
      0 => '/app/www/design/backend/templates/views/categories/components/context_menu/edit_selected.tpl',
      1 => 1675156313,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e27c497bfa52_42226044 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('edit_selected'));
?>

<li class="btn bulk-edit__btn bulk-edit__btn--edit-categories mobile-hide">
    <span class="bulk-edit__btn-content">
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"dialog",'class'=>"cm-process-items",'text'=>$_smarty_tpl->__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>"category_tree_form",'data'=>array("data-ca-bulkedit-disable-save-button"=>true)), true);?>

    </span>
</li>
<?php }
}
