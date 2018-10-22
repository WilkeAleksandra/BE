<?php
/* Smarty version 3.1.32, created on 2018-10-22 23:47:55
  from 'E:\wamp64\www\BE-projekt\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bce458b9f43d9_62276492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a25f7d297795046afe37aa722cafa75b9955cf56' => 
    array (
      0 => 'E:\\wamp64\\www\\BE-projekt\\themes\\classic\\templates\\page.tpl',
      1 => 1540238324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bce458b9f43d9_62276492 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5343377535bce458b9cf436_53268140', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_6574352355bce458b9d4c95_67573583 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_18628384885bce458b9d1ba7_40626881 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6574352355bce458b9d4c95_67573583', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_15500317195bce458b9dfca1_19536705 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_14375592235bce458b9e32e2_61722874 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_3835718765bce458b9dd5f1_44622187 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15500317195bce458b9dfca1_19536705', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14375592235bce458b9e32e2_61722874', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1529924485bce458b9eaf29_28642965 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_7448377575bce458b9e8872_93187624 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1529924485bce458b9eaf29_28642965', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_5343377535bce458b9cf436_53268140 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5343377535bce458b9cf436_53268140',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_18628384885bce458b9d1ba7_40626881',
  ),
  'page_title' => 
  array (
    0 => 'Block_6574352355bce458b9d4c95_67573583',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_3835718765bce458b9dd5f1_44622187',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_15500317195bce458b9dfca1_19536705',
  ),
  'page_content' => 
  array (
    0 => 'Block_14375592235bce458b9e32e2_61722874',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_7448377575bce458b9e8872_93187624',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1529924485bce458b9eaf29_28642965',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18628384885bce458b9d1ba7_40626881', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3835718765bce458b9dd5f1_44622187', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7448377575bce458b9e8872_93187624', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
