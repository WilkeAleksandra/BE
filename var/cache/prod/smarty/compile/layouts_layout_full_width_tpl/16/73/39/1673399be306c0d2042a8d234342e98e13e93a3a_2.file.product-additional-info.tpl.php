<?php
/* Smarty version 3.1.32, created on 2018-10-29 22:39:58
  from 'C:\wamp64\www\BE-projekt\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd77e2ecf8b22_29733058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1673399be306c0d2042a8d234342e98e13e93a3a' => 
    array (
      0 => 'C:\\wamp64\\www\\BE-projekt\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1540463725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd77e2ecf8b22_29733058 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
