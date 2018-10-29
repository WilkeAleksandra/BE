<?php
/* Smarty version 3.1.32, created on 2018-10-29 22:26:34
  from 'C:\wamp64\www\BE-projekt\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd77b0a56f650_85944124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa3cd3b0d83f0d95f23decc446ac843d5b433c06' => 
    array (
      0 => 'C:\\wamp64\\www\\BE-projekt\\themes\\classic\\templates\\index.tpl',
      1 => 1540463730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd77b0a56f650_85944124 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19339291875bd77b0a563b43_55874024', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_12830591215bd77b0a565bf8_92426085 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_5661493505bd77b0a569b06_22322438 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_3589520535bd77b0a5681c6_15606149 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5661493505bd77b0a569b06_22322438', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_19339291875bd77b0a563b43_55874024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_19339291875bd77b0a563b43_55874024',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_12830591215bd77b0a565bf8_92426085',
  ),
  'page_content' => 
  array (
    0 => 'Block_3589520535bd77b0a5681c6_15606149',
  ),
  'hook_home' => 
  array (
    0 => 'Block_5661493505bd77b0a569b06_22322438',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12830591215bd77b0a565bf8_92426085', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3589520535bd77b0a5681c6_15606149', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
