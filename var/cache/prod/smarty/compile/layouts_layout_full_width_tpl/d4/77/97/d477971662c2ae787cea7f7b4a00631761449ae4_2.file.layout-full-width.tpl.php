<?php
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-25 14:03:55
=======
/* Smarty version 3.1.32, created on 2018-10-27 17:54:24
>>>>>>> dorota
  from 'E:\wamp64\www\BE-projekt\themes\classic\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
  'unifunc' => 'content_5bd1b12bbaada5_65955374',
=======
  'unifunc' => 'content_5bd48a30afd560_80408108',
>>>>>>> dorota
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd477971662c2ae787cea7f7b4a00631761449ae4' => 
    array (
      0 => 'E:\\wamp64\\www\\BE-projekt\\themes\\classic\\templates\\layouts\\layout-full-width.tpl',
      1 => 1540238324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_5bd1b12bbaada5_65955374 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd48a30afd560_80408108 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6839353775bd1b12bb87670_84757547', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18390151135bd1b12bb8b314_05240764', 'right_column');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19342062565bd48a30ae7da2_78879966', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164205115bd48a30aeb888_84340795', 'right_column');
>>>>>>> dorota
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20559731035bd1b12bb93155_88874540', 'content_wrapper');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8966329325bd48a30aefad2_73896204', 'content_wrapper');
>>>>>>> dorota
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
<<<<<<< HEAD
class Block_6839353775bd1b12bb87670_84757547 extends Smarty_Internal_Block
=======
class Block_19342062565bd48a30ae7da2_78879966 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'left_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_6839353775bd1b12bb87670_84757547',
=======
    0 => 'Block_19342062565bd48a30ae7da2_78879966',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
<<<<<<< HEAD
class Block_18390151135bd1b12bb8b314_05240764 extends Smarty_Internal_Block
=======
class Block_164205115bd48a30aeb888_84340795 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'right_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_18390151135bd1b12bb8b314_05240764',
=======
    0 => 'Block_164205115bd48a30aeb888_84340795',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
<<<<<<< HEAD
class Block_5691431615bd1b12bb9cb32_09191049 extends Smarty_Internal_Block
=======
class Block_10292927055bd48a30af5970_99749119 extends Smarty_Internal_Block
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
class Block_20559731035bd1b12bb93155_88874540 extends Smarty_Internal_Block
=======
class Block_8966329325bd48a30aefad2_73896204 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
<<<<<<< HEAD
    0 => 'Block_20559731035bd1b12bb93155_88874540',
  ),
  'content' => 
  array (
    0 => 'Block_5691431615bd1b12bb9cb32_09191049',
=======
    0 => 'Block_8966329325bd48a30aefad2_73896204',
  ),
  'content' => 
  array (
    0 => 'Block_10292927055bd48a30af5970_99749119',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5691431615bd1b12bb9cb32_09191049', 'content', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10292927055bd48a30af5970_99749119', 'content', $this->tplIndex);
>>>>>>> dorota
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
