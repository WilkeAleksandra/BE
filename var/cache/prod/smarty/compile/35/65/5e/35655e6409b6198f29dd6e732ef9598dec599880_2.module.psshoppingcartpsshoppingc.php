<?php
<<<<<<< HEAD
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-26 00:21:38
=======
/* Smarty version 3.1.32, created on 2018-10-27 17:54:26
>>>>>>> dorota
=======
/* Smarty version 3.1.32, created on 2018-10-27 21:24:17
>>>>>>> dorota
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_5bd241f25fed90_79064887',
=======
  'unifunc' => 'content_5bd48a3219c329_28592940',
>>>>>>> dorota
=======
  'unifunc' => 'content_5bd4bb61c9cef8_76511335',
>>>>>>> dorota
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1540463725,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
<<<<<<< HEAD
function content_5bd241f25fed90_79064887 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd48a3219c329_28592940 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
=======
function content_5bd4bb61c9cef8_76511335 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
?><div id="_desktop_cart">
  <div class="blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>active<?php } else { ?>inactive<?php }?>" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="header">
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
        <a rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
">
      <?php }?>
        <i class="material-icons shopping-cart">shopping_cart</i>
        <span class="hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
        <span class="cart-products-count">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
)</span>
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
        </a>
      <?php }?>
    </div>
  </div>
</div>
<?php }
}
