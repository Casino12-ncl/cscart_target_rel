<?php
/* Smarty version 4.1.0, created on 2023-02-09 13:41:35
  from '/app/www/design/themes/responsive/templates/addons/social_buttons/providers/facebook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63e4cddf7b13f5_22437875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73a0af2d9190d933c21b9b144f03d20055fcf7b1' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/social_buttons/providers/facebook.tpl',
      1 => 1675529065,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e4cddf7b13f5_22437875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.render_tag_attrs.php','function'=>'smarty_modifier_render_tag_attrs',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"social_buttons:facebook"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"social_buttons:facebook"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"social_buttons:facebook"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable'] == "Y" && $_smarty_tpl->tpl_vars['provider_settings']->value['facebook']['data']) {?>
<div id="fb-root"></div>

<div class="fb-like" <?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['facebook']['data'];?>
></div>
<?php echo '<script'; ?>

    class="cm-ajax-force"
    <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['script_attrs']->value);?>

>
    (function(_, $) {
        var event_suffix = 'facebook';

        _.deferred_scripts.push({
            src: '//connect.facebook.net/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_lang'], ENT_QUOTES, 'UTF-8');?>
/all.js#xfbml=1&appId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_app_id'], ENT_QUOTES, 'UTF-8');?>
',
            event_suffix: event_suffix
        });

        $.ceEvent('on', 'ce.lazy_script_load_' + event_suffix, function () {
            if ($(".fb-like").length > 0) {
                if (typeof (FB) != 'undefined') {
                    FB.init({ status: true, cookie: true, xfbml: true });
                }
            }
        }); 
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/providers/facebook.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/social_buttons/providers/facebook.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"social_buttons:facebook"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"social_buttons:facebook"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"social_buttons:facebook"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable'] == "Y" && $_smarty_tpl->tpl_vars['provider_settings']->value['facebook']['data']) {?>
<div id="fb-root"></div>

<div class="fb-like" <?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['facebook']['data'];?>
></div>
<?php echo '<script'; ?>

    class="cm-ajax-force"
    <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['script_attrs']->value);?>

>
    (function(_, $) {
        var event_suffix = 'facebook';

        _.deferred_scripts.push({
            src: '//connect.facebook.net/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_lang'], ENT_QUOTES, 'UTF-8');?>
/all.js#xfbml=1&appId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_app_id'], ENT_QUOTES, 'UTF-8');?>
',
            event_suffix: event_suffix
        });

        $.ceEvent('on', 'ce.lazy_script_load_' + event_suffix, function () {
            if ($(".fb-like").length > 0) {
                if (typeof (FB) != 'undefined') {
                    FB.init({ status: true, cookie: true, xfbml: true });
                }
            }
        }); 
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }
}
}
}
