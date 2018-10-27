<?php
/* Smarty version 3.1.32, created on 2018-10-27 21:23:57
  from 'E:\wamp64\www\BE-projekt\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd4bb4d7bc923_87687153',
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
function content_5bd4bb4d7bc923_87687153 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7568358275bd4bb4d79fc50_77730436', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_14224868095bd4bb4d7a2de3_97352319 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_19729138925bd4bb4d7a9466_47792838 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_3697739255bd4bb4d7a6cb1_19175917 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19729138925bd4bb4d7a9466_47792838', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_7568358275bd4bb4d79fc50_77730436 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_7568358275bd4bb4d79fc50_77730436',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_14224868095bd4bb4d7a2de3_97352319',
  ),
  'page_content' => 
  array (
    0 => 'Block_3697739255bd4bb4d7a6cb1_19175917',
  ),
  'hook_home' => 
  array (
    0 => 'Block_19729138925bd4bb4d7a9466_47792838',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14224868095bd4bb4d7a2de3_97352319', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3697739255bd4bb4d7a6cb1_19175917', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
