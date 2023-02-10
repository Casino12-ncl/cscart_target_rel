<?php
/* Smarty version 4.1.0, created on 2023-02-07 17:27:45
  from '/app/www/design/backend/templates/views/addons/components/rating/addon_rating_overview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63e25fe11d8a52_65919350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6970e87a1e7ad84378960524691dfeb2cce2c886' => 
    array (
      0 => '/app/www/design/backend/templates/views/addons/components/rating/addon_rating_overview.tpl',
      1 => 1675156313,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/rating/stars_with_text.tpl' => 1,
    'tygh:views/addons/components/rating/stars_details.tpl' => 1,
    'tygh:views/addons/components/rating/total_reviews.tpl' => 1,
  ),
),false)) {
function content_63e25fe11d8a52_65919350 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['total_addon_reviews']->value) {?>
    <section class="cs-addons-rating-addon-rating-overview well">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/rating/stars_with_text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'size'=>"xlarge"), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/rating/stars_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ratings_stats'=>$_smarty_tpl->tpl_vars['ratings_stats']->value), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/rating/total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total_addon_reviews'=>$_smarty_tpl->tpl_vars['total_addon_reviews']->value), 0, false);
?>

    </section>
<?php }
}
}
