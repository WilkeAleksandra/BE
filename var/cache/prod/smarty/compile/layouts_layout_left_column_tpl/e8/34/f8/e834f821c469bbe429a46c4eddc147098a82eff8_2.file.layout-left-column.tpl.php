<?php
<<<<<<< HEAD
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-25 14:03:08
=======
/* Smarty version 3.1.32, created on 2018-10-27 17:54:13
>>>>>>> dorota
=======
/* Smarty version 3.1.32, created on 2018-10-27 21:24:16
>>>>>>> dorota
  from 'E:\wamp64\www\BE-projekt\themes\classic\templates\layouts\layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_5bd1b0fc48c8e2_91296304',
=======
  'unifunc' => 'content_5bd48a252559b3_01220288',
>>>>>>> dorota
=======
  'unifunc' => 'content_5bd4bb6098ed62_97772761',
>>>>>>> dorota
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e834f821c469bbe429a46c4eddc147098a82eff8' => 
    array (
      0 => 'E:\\wamp64\\www\\BE-projekt\\themes\\classic\\templates\\layouts\\layout-left-column.tpl',
      1 => 1540238324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
<<<<<<< HEAD
function content_5bd1b0fc48c8e2_91296304 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd48a252559b3_01220288 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
=======
function content_5bd4bb6098ed62_97772761 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6385123475bd1b0fc474bf3_27283792', 'right_column');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11930018555bd48a252414a6_16878169', 'right_column');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12586249315bd4bb6097b061_68889953', 'right_column');
>>>>>>> dorota
?>


<?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_367913245bd1b0fc4791d2_22588211', 'content_wrapper');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20964567335bd48a25245196_21529217', 'content_wrapper');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19448484145bd4bb6097ed50_15242885', 'content_wrapper');
>>>>>>> dorota
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_6385123475bd1b0fc474bf3_27283792 extends Smarty_Internal_Block
=======
class Block_11930018555bd48a252414a6_16878169 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_12586249315bd4bb6097b061_68889953 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'right_column' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_6385123475bd1b0fc474bf3_27283792',
=======
    0 => 'Block_11930018555bd48a252414a6_16878169',
>>>>>>> dorota
=======
    0 => 'Block_12586249315bd4bb6097b061_68889953',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_12212000005bd1b0fc484ca9_77238658 extends Smarty_Internal_Block
=======
class Block_13725499845bd48a2524c4e3_57167470 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_20645072415bd4bb60986898_90602783 extends Smarty_Internal_Block
>>>>>>> dorota
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_367913245bd1b0fc4791d2_22588211 extends Smarty_Internal_Block
=======
class Block_20964567335bd48a25245196_21529217 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_19448484145bd4bb6097ed50_15242885 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_367913245bd1b0fc4791d2_22588211',
  ),
  'content' => 
  array (
    0 => 'Block_12212000005bd1b0fc484ca9_77238658',
=======
    0 => 'Block_20964567335bd48a25245196_21529217',
  ),
  'content' => 
  array (
    0 => 'Block_13725499845bd48a2524c4e3_57167470',
>>>>>>> dorota
=======
    0 => 'Block_19448484145bd4bb6097ed50_15242885',
  ),
  'content' => 
  array (
    0 => 'Block_20645072415bd4bb60986898_90602783',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

    <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12212000005bd1b0fc484ca9_77238658', 'content', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13725499845bd48a2524c4e3_57167470', 'content', $this->tplIndex);
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20645072415bd4bb60986898_90602783', 'content', $this->tplIndex);
>>>>>>> dorota
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
