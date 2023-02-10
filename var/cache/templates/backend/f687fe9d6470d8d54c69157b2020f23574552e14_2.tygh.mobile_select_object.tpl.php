<?php
/* Smarty version 4.1.0, created on 2023-02-07 17:27:37
  from '/app/www/design/backend/templates/components/notifications_center/mobile_select_object.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63e25fd933ef62_29811141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f687fe9d6470d8d54c69157b2020f23574552e14' => 
    array (
      0 => '/app/www/design/backend/templates/components/notifications_center/mobile_select_object.tpl',
      1 => 1675156313,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e25fd933ef62_29811141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('notifications','notifications','notifications_center.notifications','notifications_center.notifications','loading','loading','show_more','show_less','notifications_center.no_notifications','notifications_center.notifications'));
?>
<li class="dropdown dropdown-top-menu-item notifications-center--mobile notifications-center__opener-wrapper">
    <a class="dropdown-toggle dropdown-top-menu-item-link nav__menu-item cm-combination" data-toggle="dropdown" id="sw_select_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_id']->value, ENT_QUOTES, 'UTF-8');?>
_wrap_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-mobile-menu-title="<?php echo $_smarty_tpl->__("notifications");?>
">
        <?php echo $_smarty_tpl->__("notifications");?>

        <span class="cc-notify-counter-container" data-ca-notifications-center-counter-mobile>3</span>
    </a>

    <ul class="dropdown-menu cm-select-list pull-right notifications-center__root notifications-center__root--mobile" data-ca-notifications-center-mobile-attribute="data-ca-notifications-center-root-mobile">
        <div class="cc-dropdown">
            <div class="cc-dropdown__title-wrapper" text="<?php echo $_smarty_tpl->__("notifications_center.notifications");?>
">
                <span class="cc-dropdown__title"><?php echo $_smarty_tpl->__("notifications_center.notifications");?>
</span>
            </div>
            <div class="cc-all-read">
                <div class="cc-all-read--inner"><?php echo $_smarty_tpl->__("loading");?>
</div>
            </div>
        </div>
    </ul>
</li>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    (function(_, $) {
        _.tr({
            loading: '<?php echo strtr($_smarty_tpl->__("loading"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            showMore: '<?php echo strtr($_smarty_tpl->__("show_more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            showLess: '<?php echo strtr($_smarty_tpl->__("show_less"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "notifications_center.noData": '<?php echo strtr($_smarty_tpl->__("notifications_center.no_notifications"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "notifications_center.notifications": '<?php echo strtr($_smarty_tpl->__("notifications_center.notifications"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
        });

        $.ceEvent('on', 'ce.mobile_menu.dropdownMenu_created', function() {
            if (Tygh.ceNotificationsCenterInited) {
                const $elem =  $('.overlayed-mobile-menu-container .notifications-center__root--mobile');
                $elem.attr($elem.data('caNotificationsCenterMobileAttribute'), '');
                
                $.ceEvent('trigger', 'ce.notifications_center.mobile_enabled');
            }
        });

        $.ceEvent('on', 'ce.commoninit', function(context) {
            if ($(context).find('[data-ca-notifications-mark]').length && Tygh.ceNotificationsCenterInited) {
                $.ceEvent('trigger', 'ce.notifications_center.notifications_mark_reload');
            }
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
