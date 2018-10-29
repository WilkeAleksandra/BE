<?php
/* Smarty version 3.1.32, created on 2018-10-29 22:27:43
  from 'C:\wamp64\www\BE-projekt\admin866htnwy5\themes\default\template\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd77b4f49ef30_82145538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a22916ba8640582afbb9820991340c49f0d9e148' => 
    array (
      0 => 'C:\\wamp64\\www\\BE-projekt\\admin866htnwy5\\themes\\default\\template\\helpers\\view\\view.tpl',
      1 => 1540463670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd77b4f49ef30_82145538 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="leadin"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7986984295bd77b4f45cf42_73297014', "leadin");
?>
</div>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19848150685bd77b4f460447_43945511', "override_tpl");
?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAdminView'),$_smarty_tpl ) );?>

<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)) {?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'hookName', 'hookName', null);?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
View<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl ) );?>

<?php } elseif (isset($_GET['controller'])) {?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'hookName', 'hookName', null);?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
View<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl ) );?>

<?php }
}
/* {block "leadin"} */
class Block_7986984295bd77b4f45cf42_73297014 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_7986984295bd77b4f45cf42_73297014',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "leadin"} */
/* {block "override_tpl"} */
class Block_19848150685bd77b4f460447_43945511 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_19848150685bd77b4f460447_43945511',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "override_tpl"} */
}
