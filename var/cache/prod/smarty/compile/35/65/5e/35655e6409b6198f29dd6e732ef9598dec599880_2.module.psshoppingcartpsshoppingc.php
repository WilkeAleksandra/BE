<?php
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-29 20:29:55
=======
/* Smarty version 3.1.32, created on 2018-10-29 22:39:58
>>>>>>> karolina
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
  'unifunc' => 'content_5bd75fb376a926_76002354',
=======
  'unifunc' => 'content_5bd77e2e896b43_18233731',
>>>>>>> karolina
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1540238324,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_5bd75fb376a926_76002354 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd77e2e896b43_18233731 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> karolina
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
