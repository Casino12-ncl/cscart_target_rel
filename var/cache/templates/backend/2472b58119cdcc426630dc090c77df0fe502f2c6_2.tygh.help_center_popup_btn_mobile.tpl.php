<?php
/* Smarty version 4.1.0, created on 2023-02-07 17:27:37
  from '/app/www/design/backend/templates/addons/help_center/component/help_center_popup_btn_mobile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63e25fd9330632_73971253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2472b58119cdcc426630dc090c77df0fe502f2c6' => 
    array (
      0 => '/app/www/design/backend/templates/addons/help_center/component/help_center_popup_btn_mobile.tpl',
      1 => 1675156313,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e25fd9330632_73971253 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('help_center.growth_center'));
$_smarty_tpl->_assignInScope('help_center_counter', (($tmp = $_smarty_tpl->tpl_vars['help_center_counter']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>

<button type="button"
    class="help-center-popup-btn-mobile"
    data-ca-help-center="popupBtnMobile"
    data-ca-help-center-counter="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['help_center_counter']->value, ENT_QUOTES, 'UTF-8');?>
"
><?php echo $_smarty_tpl->__("help_center.growth_center");?>
</button>
<?php }
}
