<?php
/* Smarty version 3.1.32, created on 2018-10-27 21:23:57
  from 'E:\wamp64\www\BE-projekt\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd4bb4d9ef000_57950377',
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
function content_5bd4bb4d9ef000_57950377 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14623864695bd4bb4d9c9f87_92946031', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_2739928875bd4bb4d9cf731_41525995 extends Smarty_Internal_Block
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
class Block_6579656525bd4bb4d9cc666_17387976 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2739928875bd4bb4d9cf731_41525995', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_19889782065bd4bb4d9d99d7_24527959 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_20894485475bd4bb4d9dcff1_27981100 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8763369125bd4bb4d9d73f3_92888213 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19889782065bd4bb4d9d99d7_24527959', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20894485475bd4bb4d9dcff1_27981100', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_12588011765bd4bb4d9e5ea2_24547484 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_2453460585bd4bb4d9e2346_90416805 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12588011765bd4bb4d9e5ea2_24547484', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_14623864695bd4bb4d9c9f87_92946031 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14623864695bd4bb4d9c9f87_92946031',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_6579656525bd4bb4d9cc666_17387976',
  ),
  'page_title' => 
  array (
    0 => 'Block_2739928875bd4bb4d9cf731_41525995',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_8763369125bd4bb4d9d73f3_92888213',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_19889782065bd4bb4d9d99d7_24527959',
  ),
  'page_content' => 
  array (
    0 => 'Block_20894485475bd4bb4d9dcff1_27981100',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_2453460585bd4bb4d9e2346_90416805',
  ),
  'page_footer' => 
  array (
    0 => 'Block_12588011765bd4bb4d9e5ea2_24547484',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6579656525bd4bb4d9cc666_17387976', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8763369125bd4bb4d9d73f3_92888213', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2453460585bd4bb4d9e2346_90416805', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
