<?php
/* Smarty version 3.1.32, created on 2018-10-22 22:40:25
  from 'E:\wamp64\www\BE-projekt\admin866htnwy5\themes\default\template\controllers\order_preferences\helpers\options\options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bce35b9c27917_34372490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '716f79ca838f5968c00ade1bbe6ad69bdd6e00b6' => 
    array (
      0 => 'E:\\wamp64\\www\\BE-projekt\\admin866htnwy5\\themes\\default\\template\\controllers\\order_preferences\\helpers\\options\\options.tpl',
      1 => 1540238303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bce35b9c27917_34372490 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10178061075bce35b9c21f42_09732195', "after");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/options/options.tpl");
}
/* {block "after"} */
class Block_10178061075bce35b9c21f42_09732195 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_10178061075bce35b9c21f42_09732195',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">changeCMSActivationAuthorization();<?php echo '</script'; ?>
><?php
}
}
/* {/block "after"} */
}
