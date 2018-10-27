<?php
<<<<<<< HEAD
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-23 20:50:28
=======
/* Smarty version 3.1.32, created on 2018-10-25 20:33:16
>>>>>>> dorota
=======
/* Smarty version 3.1.32, created on 2018-10-27 19:43:32
>>>>>>> dorota
  from 'module:pswirepaymentviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_5bcf6d7459c624_92670112',
=======
  'unifunc' => 'content_5bd20c6ccbe0a8_78973018',
>>>>>>> dorota
=======
  'unifunc' => 'content_5bd4a3c4472aa5_74851281',
>>>>>>> dorota
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89661fbe7f9f4c111d8bdb6320dbdcd70e1222f8' => 
    array (
      0 => 'module:pswirepaymentviewstemplat',
<<<<<<< HEAD
      1 => 1539604014,
=======
      1 => 1540238322,
>>>>>>> dorota
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
<<<<<<< HEAD
function content_5bcf6d7459c624_92670112 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd20c6ccbe0a8_78973018 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
=======
function content_5bd4a3c4472aa5_74851281 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
?>

<dl>
    <dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Amount','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl ) );?>
</dt>
    <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total']->value, ENT_QUOTES, 'UTF-8');?>
</dd>
    <dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name of account owner','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl ) );?>
</dt>
    <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bankwireOwner']->value, ENT_QUOTES, 'UTF-8');?>
</dd>
    <dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please include these details','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl ) );?>
</dt>
    <dd><?php echo $_smarty_tpl->tpl_vars['bankwireDetails']->value;?>
</dd>
    <dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bank name','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl ) );?>
</dt>
    <dd><?php echo $_smarty_tpl->tpl_vars['bankwireAddress']->value;?>
</dd>
</dl>
<?php }
}
