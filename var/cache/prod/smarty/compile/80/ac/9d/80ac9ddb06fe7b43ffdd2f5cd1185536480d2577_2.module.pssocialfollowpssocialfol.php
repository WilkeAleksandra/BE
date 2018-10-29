<?php
<<<<<<< HEAD
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-26 00:21:38
=======
/* Smarty version 3.1.32, created on 2018-10-27 17:54:27
>>>>>>> dorota
=======
/* Smarty version 3.1.32, created on 2018-10-27 21:24:20
>>>>>>> dorota
  from 'module:pssocialfollowpssocialfol' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_5bd241f2d5a7d2_94994010',
=======
  'unifunc' => 'content_5bd48a33658b05_58068501',
>>>>>>> dorota
=======
  'unifunc' => 'content_5bd4bb64f03e92_79849881',
>>>>>>> dorota
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ac9ddb06fe7b43ffdd2f5cd1185536480d2577' => 
    array (
      0 => 'module:pssocialfollowpssocialfol',
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
function content_5bd241f2d5a7d2_94994010 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd48a33658b05_58068501 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
=======
function content_5bd4bb64f03e92_79849881 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17081031645bd241f2d4adb2_67778001', 'block_social');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7667785845bd48a336428d2_63494285', 'block_social');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3034405255bd4bb64ef01d8_57162244', 'block_social');
>>>>>>> dorota
?>

<?php }
/* {block 'block_social'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_17081031645bd241f2d4adb2_67778001 extends Smarty_Internal_Block
=======
class Block_7667785845bd48a336428d2_63494285 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_3034405255bd4bb64ef01d8_57162244 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'block_social' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_17081031645bd241f2d4adb2_67778001',
=======
    0 => 'Block_7667785845bd48a336428d2_63494285',
>>>>>>> dorota
=======
    0 => 'Block_3034405255bd4bb64ef01d8_57162244',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="block-social col-lg-4 col-md-12 col-sm-12">
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['social_links']->value, 'social_link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['social_link']->value) {
?>
        <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['class'], ENT_QUOTES, 'UTF-8');?>
"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['label'], ENT_QUOTES, 'UTF-8');?>
</a></li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
<?php
}
}
/* {/block 'block_social'} */
}
