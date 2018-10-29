<?php
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-29 19:48:32
=======
/* Smarty version 3.1.32, created on 2018-10-29 22:39:58
>>>>>>> karolina
  from 'module:pssharebuttonsviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
  'unifunc' => 'content_5bd7560026b5b2_97756471',
=======
  'unifunc' => 'content_5bd77e2ed3b210_43843602',
>>>>>>> karolina
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce908e3af500ef88d0be39d6badc82307b6995cd' => 
    array (
      0 => 'module:pssharebuttonsviewstempla',
      1 => 1540463725,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_5bd7560026b5b2_97756471 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd77e2ed3b210_43843602 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> karolina
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5571955395bd7560024d238_51574059', 'social_sharing');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10030423465bd77e2ed24c28_53569630', 'social_sharing');
>>>>>>> karolina
?>

<?php }
/* {block 'social_sharing'} */
<<<<<<< HEAD
class Block_5571955395bd7560024d238_51574059 extends Smarty_Internal_Block
=======
class Block_10030423465bd77e2ed24c28_53569630 extends Smarty_Internal_Block
>>>>>>> karolina
{
public $subBlocks = array (
  'social_sharing' => 
  array (
<<<<<<< HEAD
    0 => 'Block_5571955395bd7560024d238_51574059',
=======
    0 => 'Block_10030423465bd77e2ed24c28_53569630',
>>>>>>> karolina
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['social_share_links']->value) {?>
    <div class="social-sharing">
      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Share','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['social_share_links']->value, 'social_share_link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['social_share_link']->value) {
?>
          <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_link']->value['class'], ENT_QUOTES, 'UTF-8');?>
 icon-gray"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="text-hide" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_link']->value['label'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_link']->value['label'], ENT_QUOTES, 'UTF-8');?>
</a></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  <?php }
}
}
/* {/block 'social_sharing'} */
}
