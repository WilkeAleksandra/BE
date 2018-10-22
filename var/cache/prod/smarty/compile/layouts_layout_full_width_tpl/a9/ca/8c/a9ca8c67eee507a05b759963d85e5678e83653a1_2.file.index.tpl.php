<?php
/* Smarty version 3.1.32, created on 2018-10-22 23:47:55
  from 'E:\wamp64\www\BE-projekt\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bce458b8b71e4_24041268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9ca8c67eee507a05b759963d85e5678e83653a1' => 
    array (
      0 => 'E:\\wamp64\\www\\BE-projekt\\themes\\classic\\templates\\index.tpl',
      1 => 1540238324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bce458b8b71e4_24041268 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12129545765bce458b8a54d9_94981355', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_2773004525bce458b8a7e82_10559958 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_15657591115bce458b8ae720_86773916 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_18798067045bce458b8abe84_04250922 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15657591115bce458b8ae720_86773916', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_12129545765bce458b8a54d9_94981355 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_12129545765bce458b8a54d9_94981355',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_2773004525bce458b8a7e82_10559958',
  ),
  'page_content' => 
  array (
    0 => 'Block_18798067045bce458b8abe84_04250922',
  ),
  'hook_home' => 
  array (
    0 => 'Block_15657591115bce458b8ae720_86773916',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2773004525bce458b8a7e82_10559958', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18798067045bce458b8abe84_04250922', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
