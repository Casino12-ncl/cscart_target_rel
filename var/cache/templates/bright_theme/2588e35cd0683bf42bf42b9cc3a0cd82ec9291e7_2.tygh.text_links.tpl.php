<?php
/* Smarty version 4.1.0, created on 2023-02-09 12:50:08
  from '/app/www/design/themes/responsive/templates/blocks/menu/text_links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63e4c1d072d214_21038920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2588e35cd0683bf42bf42b9cc3a0cd82ec9291e7' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/blocks/menu/text_links.tpl',
      1 => 1675529063,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/menu/text_links.tpl' => 3,
  ),
),false)) {
function content_63e4c1d072d214_21038920 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['block']->value['properties']['show_items_in_line'] == 'Y') {?>
    <?php $_smarty_tpl->_assignInScope('inline', true);
}?>

<?php $_smarty_tpl->_assignInScope('text_links_id', $_smarty_tpl->tpl_vars['block']->value['snapping_id']);?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['inline']->value && !$_smarty_tpl->tpl_vars['submenu']->value) {?>
    <div class="ty-text-links-wrapper">
        <span id="sw_text_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text_links_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-text-links-btn cm-combination visible-phone">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-short-list"),$_smarty_tpl);?>

            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-micro ty-text-links-btn__arrow"),$_smarty_tpl);?>

        </span>
    <?php }?>

        <ul <?php if (!$_smarty_tpl->tpl_vars['submenu']->value) {?>id="text_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text_links_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
class="ty-text-links <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['inline']->value && !$_smarty_tpl->tpl_vars['submenu']->value) {?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
cm-popup-box ty-text-links_show_inline<?php }?>"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'menu');
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
?><li class="ty-text-links__item <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
ty-level-<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['menu']->value['level'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['menu']->value['active']) {?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
ty-text-links__active<?php }
if ($_smarty_tpl->tpl_vars['inline']->value && !$_smarty_tpl->tpl_vars['submenu']->value && $_smarty_tpl->tpl_vars['menu']->value['subitems']) {?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
ty-text-links__subitems<?php }
if ($_smarty_tpl->tpl_vars['inline']->value && !$_smarty_tpl->tpl_vars['submenu']->value) {?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
ty-text-links__item--inline<?php }
if ($_smarty_tpl->tpl_vars['inline']->value && $_smarty_tpl->tpl_vars['submenu']->value) {?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
ty-text-links__item--submenu<?php }
if ($_smarty_tpl->tpl_vars['menu']->value['class']) {?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"><a class="ty-text-links__a <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
ty-text-links__a--level-<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['menu']->value['level'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['inline']->value && !$_smarty_tpl->tpl_vars['submenu']->value && $_smarty_tpl->tpl_vars['menu']->value['subitems']) {?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
ty-text-links__a--subitems<?php }
if ($_smarty_tpl->tpl_vars['inline']->value && !$_smarty_tpl->tpl_vars['submenu']->value) {?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
ty-text-links__a--inline<?php }
if ($_smarty_tpl->tpl_vars['inline']->value && $_smarty_tpl->tpl_vars['submenu']->value) {?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
ty-text-links__a--submenu<?php }
if ($_smarty_tpl->tpl_vars['menu']->value['active']) {?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
ty-text-links__a--active<?php }?>"<?php if ($_smarty_tpl->tpl_vars['menu']->value['href']) {?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['menu']->value['href']), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['menu']->value['new_window']) {?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
target="_blank"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['item'], ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['menu']->value['subitems']) {
$_smarty_tpl->_subTemplateRender("tygh:blocks/menu/text_links.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['menu']->value['subitems'],'submenu'=>true), 0, true);
}?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul>

    <?php if ($_smarty_tpl->tpl_vars['inline']->value && !$_smarty_tpl->tpl_vars['submenu']->value) {?>
    </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/menu/text_links.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/menu/text_links.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['block']->value['properties']['show_items_in_line'] == 'Y') {?>
    <?php $_smarty_tpl->_assignInScope('inline', true);
}?>

<?php $_smarty_tpl->_assignInScope('text_links_id', $_smarty_tpl->tpl_vars['block']->value['snapping_id']);?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['inline']->value && !$_smarty_tpl->tpl_vars['submenu']->value) {?>
    <div class="ty-text-links-wrapper">
        <span id="sw_text_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text_links_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-text-links-btn cm-combination visible-phone">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-short-list"),$_smarty_tpl);?>

            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-micro ty-text-links-btn__arrow"),$_smarty_tpl);?>

        </span>
    <?php }?>

        <ul <?php if (!$_smarty_tpl->tpl_vars['submenu']->value) {?>id="text_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text_links_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
class="ty-text-links <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['inline']->value && !$_smarty_tpl->tpl_vars['submenu']->value) {?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
cm-popup-box ty-text-links_show_inline<?php }?>"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'menu');
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
?><li class="ty-text-links__item <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
ty-level-<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['menu']->value['level'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['menu']->value['active']) {?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
ty-text-links__active<?php }
if ($_smarty_tpl->tpl_vars['inline']->value && !$_smarty_tpl->tpl_vars['submenu']->value && $_smarty_tpl->tpl_vars['menu']->value['subitems']) {?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
ty-text-links__subitems<?php }
if ($_smarty_tpl->tpl_vars['inline']->value && !$_smarty_tpl->tpl_vars['submenu']->value) {?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
ty-text-links__item--inline<?php }
if ($_smarty_tpl->tpl_vars['inline']->value && $_smarty_tpl->tpl_vars['submenu']->value) {?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
ty-text-links__item--submenu<?php }
if ($_smarty_tpl->tpl_vars['menu']->value['class']) {?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"><a class="ty-text-links__a <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
ty-text-links__a--level-<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['menu']->value['level'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['inline']->value && !$_smarty_tpl->tpl_vars['submenu']->value && $_smarty_tpl->tpl_vars['menu']->value['subitems']) {?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
ty-text-links__a--subitems<?php }
if ($_smarty_tpl->tpl_vars['inline']->value && !$_smarty_tpl->tpl_vars['submenu']->value) {?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
ty-text-links__a--inline<?php }
if ($_smarty_tpl->tpl_vars['inline']->value && $_smarty_tpl->tpl_vars['submenu']->value) {?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
ty-text-links__a--submenu<?php }
if ($_smarty_tpl->tpl_vars['menu']->value['active']) {?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
ty-text-links__a--active<?php }?>"<?php if ($_smarty_tpl->tpl_vars['menu']->value['href']) {?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['menu']->value['href']), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['menu']->value['new_window']) {?> <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
target="_blank"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['item'], ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['menu']->value['subitems']) {
$_smarty_tpl->_subTemplateRender("tygh:blocks/menu/text_links.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['menu']->value['subitems'],'submenu'=>true), 0, true);
}?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul>

    <?php if ($_smarty_tpl->tpl_vars['inline']->value && !$_smarty_tpl->tpl_vars['submenu']->value) {?>
    </div>
    <?php }
}
}
}
}
