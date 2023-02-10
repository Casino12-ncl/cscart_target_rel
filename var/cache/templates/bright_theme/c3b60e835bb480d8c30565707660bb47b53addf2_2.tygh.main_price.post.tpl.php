<?php
/* Smarty version 4.1.0, created on 2023-02-09 13:41:35
  from '/app/www/design/themes/responsive/templates/addons/price_per_unit/hooks/products/main_price.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63e4cddf709ac3_53936672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3b60e835bb480d8c30565707660bb47b53addf2' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/price_per_unit/hooks/products/main_price.post.tpl',
      1 => 1675529071,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 2,
  ),
),false)) {
function content_63e4cddf709ac3_53936672 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('shipping_per','shipping_per'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ((floatval($_smarty_tpl->tpl_vars['product']->value['price']) || $_smarty_tpl->tpl_vars['product']->value['zero_price_action'] === smarty_modifier_enum("ProductZeroPriceActions::ALLOW_ADD_TO_CART") || ($_smarty_tpl->tpl_vars['hide_add_to_cart_button']->value === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['product']->value['zero_price_action'] === smarty_modifier_enum("ProductZeroPriceActions::ASK_TO_ENTER_PRICE"))) && $_smarty_tpl->tpl_vars['product']->value['units_in_product'] !== "0.000" && $_smarty_tpl->tpl_vars['product']->value['unit_name'] && ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] !== "hide_price_and_add_to_cart" || $_smarty_tpl->tpl_vars['auth']->value['user_id'])) {?>
    <?php $_smarty_tpl->_assignInScope('price_per_unit', floatval($_smarty_tpl->tpl_vars['product']->value['price'])/$_smarty_tpl->tpl_vars['product']->value['units_in_product']*$_smarty_tpl->tpl_vars['product']->value['show_price_per_x_units']);?>

        <div class="ty-price-per-unit <?php if (!floatval($_smarty_tpl->tpl_vars['product']->value['price']) && !$_smarty_tpl->tpl_vars['product']->value['zero_price_action']) {?> hidden<?php }?>">
            <?php echo htmlspecialchars(rtrim(rtrim($_smarty_tpl->tpl_vars['product']->value['units_in_product'],"0"),"."), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['unit_name'], ENT_QUOTES, 'UTF-8');?>
 (<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['price_per_unit']->value), 0, false);
?> <?php echo $_smarty_tpl->__("shipping_per");?>
 <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price_per_x_units'] !== "1.000") {
echo htmlspecialchars(rtrim(rtrim($_smarty_tpl->tpl_vars['product']->value['show_price_per_x_units'],"0"),"."), ENT_QUOTES, 'UTF-8');?>
 <?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['unit_name'], ENT_QUOTES, 'UTF-8');?>
)
        </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/price_per_unit/hooks/products/main_price.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/price_per_unit/hooks/products/main_price.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ((floatval($_smarty_tpl->tpl_vars['product']->value['price']) || $_smarty_tpl->tpl_vars['product']->value['zero_price_action'] === smarty_modifier_enum("ProductZeroPriceActions::ALLOW_ADD_TO_CART") || ($_smarty_tpl->tpl_vars['hide_add_to_cart_button']->value === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['product']->value['zero_price_action'] === smarty_modifier_enum("ProductZeroPriceActions::ASK_TO_ENTER_PRICE"))) && $_smarty_tpl->tpl_vars['product']->value['units_in_product'] !== "0.000" && $_smarty_tpl->tpl_vars['product']->value['unit_name'] && ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] !== "hide_price_and_add_to_cart" || $_smarty_tpl->tpl_vars['auth']->value['user_id'])) {?>
    <?php $_smarty_tpl->_assignInScope('price_per_unit', floatval($_smarty_tpl->tpl_vars['product']->value['price'])/$_smarty_tpl->tpl_vars['product']->value['units_in_product']*$_smarty_tpl->tpl_vars['product']->value['show_price_per_x_units']);?>

        <div class="ty-price-per-unit <?php if (!floatval($_smarty_tpl->tpl_vars['product']->value['price']) && !$_smarty_tpl->tpl_vars['product']->value['zero_price_action']) {?> hidden<?php }?>">
            <?php echo htmlspecialchars(rtrim(rtrim($_smarty_tpl->tpl_vars['product']->value['units_in_product'],"0"),"."), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['unit_name'], ENT_QUOTES, 'UTF-8');?>
 (<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['price_per_unit']->value), 0, true);
?> <?php echo $_smarty_tpl->__("shipping_per");?>
 <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price_per_x_units'] !== "1.000") {
echo htmlspecialchars(rtrim(rtrim($_smarty_tpl->tpl_vars['product']->value['show_price_per_x_units'],"0"),"."), ENT_QUOTES, 'UTF-8');?>
 <?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['unit_name'], ENT_QUOTES, 'UTF-8');?>
)
        </div>
<?php }
}
}
}
