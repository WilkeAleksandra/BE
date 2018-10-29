<?php
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-29 20:29:56
=======
/* Smarty version 3.1.32, created on 2018-10-29 22:39:59
>>>>>>> karolina
  from 'module:pssocialfollowpssocialfol' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
  'unifunc' => 'content_5bd75fb46b1787_87686750',
=======
  'unifunc' => 'content_5bd77e2f13ec28_29652427',
>>>>>>> karolina
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ac9ddb06fe7b43ffdd2f5cd1185536480d2577' => 
    array (
      0 => 'module:pssocialfollowpssocialfol',
      1 => 1540238324,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_5bd75fb46b1787_87686750 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd77e2f13ec28_29652427 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> karolina
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15824875005bd75fb4697716_83529821', 'block_social');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20497438585bd77e2f12f8b3_59900870', 'block_social');
>>>>>>> karolina
?>

<?php }
/* {block 'block_social'} */
<<<<<<< HEAD
class Block_15824875005bd75fb4697716_83529821 extends Smarty_Internal_Block
=======
class Block_20497438585bd77e2f12f8b3_59900870 extends Smarty_Internal_Block
>>>>>>> karolina
{
public $subBlocks = array (
  'block_social' => 
  array (
<<<<<<< HEAD
    0 => 'Block_15824875005bd75fb4697716_83529821',
=======
    0 => 'Block_20497438585bd77e2f12f8b3_59900870',
>>>>>>> karolina
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
