<?php
/* Smarty version 3.1.32, created on 2018-10-29 20:16:30
  from 'E:\wamp64\www\BE-projekt\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd75c8e9c24b7_07934214',
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
function content_5bd75c8e9c24b7_07934214 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7953097725bd75c8e9384c0_56808949', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_3905716745bd75c8e93e825_51812665 extends Smarty_Internal_Block
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
class Block_5716608915bd75c8e93b4f5_43449914 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3905716745bd75c8e93e825_51812665', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_6535760135bd75c8e9b1524_67404613 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1828064265bd75c8e9b4c22_67150144 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_4079770315bd75c8e9aee41_99297965 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6535760135bd75c8e9b1524_67404613', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1828064265bd75c8e9b4c22_67150144', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_12558994785bd75c8e9bc5b8_34340443 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_11710730325bd75c8e9b9f95_22362603 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12558994785bd75c8e9bc5b8_34340443', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_7953097725bd75c8e9384c0_56808949 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7953097725bd75c8e9384c0_56808949',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_5716608915bd75c8e93b4f5_43449914',
  ),
  'page_title' => 
  array (
    0 => 'Block_3905716745bd75c8e93e825_51812665',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_4079770315bd75c8e9aee41_99297965',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_6535760135bd75c8e9b1524_67404613',
  ),
  'page_content' => 
  array (
    0 => 'Block_1828064265bd75c8e9b4c22_67150144',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_11710730325bd75c8e9b9f95_22362603',
  ),
  'page_footer' => 
  array (
    0 => 'Block_12558994785bd75c8e9bc5b8_34340443',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5716608915bd75c8e93b4f5_43449914', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4079770315bd75c8e9aee41_99297965', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11710730325bd75c8e9b9f95_22362603', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
