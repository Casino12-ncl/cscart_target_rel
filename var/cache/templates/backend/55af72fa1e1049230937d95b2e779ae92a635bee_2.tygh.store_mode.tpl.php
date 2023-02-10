<?php
/* Smarty version 4.1.0, created on 2023-02-07 17:27:37
  from '/app/www/design/backend/templates/views/settings/store_mode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63e25fd93597e0_56286678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55af72fa1e1049230937d95b2e779ae92a635bee' => 
    array (
      0 => '/app/www/design/backend/templates/views/settings/store_mode.tpl',
      1 => 1675156313,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e25fd93597e0_56286678 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('store_mode','product_state_description.','license_number','contact_us'));
?>
<div class="hidden" title="<?php echo $_smarty_tpl->__("store_mode");?>
" id="store_mode_dialog">
    <div class="store-mode free-mode">
        <?php echo $_smarty_tpl->__("product_state_description.".((string)$_smarty_tpl->tpl_vars['product_state_suffix']->value));?>


        <?php if ($_smarty_tpl->tpl_vars['store_mode_license']->value) {?>
            <?php echo $_smarty_tpl->__("license_number");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_mode_license']->value, ENT_QUOTES, 'UTF-8');?>

        <?php }?>

        <div class="center">
            <a class="btn btn-primary btn-large" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['resources']['helpdesk_url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("contact_us");?>
</a>
        </div>
    </div>
</div>
<?php }
}
