<?php
/* Smarty version 4.1.0, created on 2023-02-09 12:50:09
  from '/app/www/design/themes/responsive/templates/addons/rus_boxberry/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63e4c1d1e089a5_51727003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dda8669029bcfc05f5a42cd744ea8c0182a573b9' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/rus_boxberry/hooks/index/scripts.post.tpl',
      1 => 1675529065,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e4c1d1e089a5_51727003 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('rus_boxberry.boxberry_cookie_title','rus_boxberry.boxberry_cookie_description','rus_boxberry.boxberry_cookie_title','rus_boxberry.boxberry_cookie_description'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            "rus_boxberry.boxberry_cookie_title": '<?php echo strtr($_smarty_tpl->__("rus_boxberry.boxberry_cookie_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "rus_boxberry.boxberry_cookie_description": '<?php echo strtr($_smarty_tpl->__("rus_boxberry.boxberry_cookie_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_boxberry/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_boxberry/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            "rus_boxberry.boxberry_cookie_title": '<?php echo strtr($_smarty_tpl->__("rus_boxberry.boxberry_cookie_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "rus_boxberry.boxberry_cookie_description": '<?php echo strtr($_smarty_tpl->__("rus_boxberry.boxberry_cookie_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php }
}
}
