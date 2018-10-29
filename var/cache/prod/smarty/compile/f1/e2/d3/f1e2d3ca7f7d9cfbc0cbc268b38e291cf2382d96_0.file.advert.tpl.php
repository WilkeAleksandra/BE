<?php
/* Smarty version 3.1.32, created on 2018-10-23 14:13:25
  from 'E:\wamp64\www\BE-projekt\modules\productcomments\views\templates\admin\advert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bcf1065035755_71344446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1e2d3ca7f7d9cfbc0cbc268b38e291cf2382d96' => 
    array (
      0 => 'E:\\wamp64\\www\\BE-projekt\\modules\\productcomments\\views\\templates\\admin\\advert.tpl',
      1 => 1540238320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bcf1065035755_71344446 (Smarty_Internal_Template $_smarty_tpl) {
if (Module::getInstanceByName('reviewsreply') != false) {?>
    <?php if (((Module::getInstanceByName('reviewsreply')->active !== null ))) {?>
        <?php if (Module::getInstanceByName('reviewsreply')->active == true) {?>
            <?php if (Tools::getValue('action') == 'addreply') {?>
                <div class="alert alert-success">
                    <?php if (reviewsreply::updateoradd() == 1) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reply for review added properly','mod'=>'productcomments'),$_smarty_tpl ) );?>

                    <?php }?>
                </div>
            <?php }?>
        <?php }?>
    <?php }
}?>

<div style="display:block; clear:both; margin-bottom:20px;" class="panel">
    <div class="panel-heading"><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Advertisement','mod'=>'productcomments'),$_smarty_tpl ) );?>
</div>
    <iframe src="//apps.facepages.eu/somestuff/onlyexample.html" width="100%" height="150" border="0" style="border:none;"></iframe>
</div>
<div class="panel">
    <div class="panel-heading"><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Extend your product comments module with','mod'=>'productcomments'),$_smarty_tpl ) );?>
 <a href="https://mypresta.eu/" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MyPresta.eu Modules','mod'=>'productcomments'),$_smarty_tpl ) );?>
</a></div>
    <ul>
        <li><a href="https://mypresta.eu/modules/advertising-and-marketing/voucher-for-product-comment.html" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remind customers about pending reviews','mod'=>'productcomments'),$_smarty_tpl ) );?>
</a></li>
        <li><a href="https://mypresta.eu/modules/advertising-and-marketing/voucher-for-product-comment.html" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Give voucher codes for reviews','mod'=>'productcomments'),$_smarty_tpl ) );?>
</a></li>
        <li><a href="https://mypresta.eu/modules/administration-tools/get-notification-about-product-review.html" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get notifications about reviews, reports','mod'=>'productcomments'),$_smarty_tpl ) );?>
</a></li>
        <li><a href="https://mypresta.eu/modules/front-office-features/last-product-reviews.html" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last reviews carousel','mod'=>'productcomments'),$_smarty_tpl ) );?>
</a></li>
        <li><a href="https://mypresta.eu/modules/administration-tools/add-reply-to-product-review.html" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add reply to comment','mod'=>'productcomments'),$_smarty_tpl ) );?>
</a></li>
        <li><a href="https://mypresta.eu/modules/seo/product-comments-reviews-rich-snippet.html" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews Rich Snippets','mod'=>'productcomments'),$_smarty_tpl ) );?>
</a></li>
    </ul>
</div><?php }
}
