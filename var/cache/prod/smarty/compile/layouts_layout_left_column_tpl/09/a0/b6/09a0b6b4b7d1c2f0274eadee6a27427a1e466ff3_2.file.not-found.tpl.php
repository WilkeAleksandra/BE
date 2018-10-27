<?php
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-25 14:03:10
=======
/* Smarty version 3.1.32, created on 2018-10-27 17:54:15
>>>>>>> dorota
  from 'E:\wamp64\www\BE-projekt\themes\classic\templates\errors\not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
  'unifunc' => 'content_5bd1b0fea38201_84319767',
=======
  'unifunc' => 'content_5bd48a27556635_25171201',
>>>>>>> dorota
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09a0b6b4b7d1c2f0274eadee6a27427a1e466ff3' => 
    array (
      0 => 'E:\\wamp64\\www\\BE-projekt\\themes\\classic\\templates\\errors\\not-found.tpl',
      1 => 1540238324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_5bd1b0fea38201_84319767 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd48a27556635_25171201 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14867303035bd1b0fea17312_96984092', 'page_content');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19453631905bd48a2753c1a7_16899863', 'page_content');
>>>>>>> dorota
?>

</section>
<?php }
/* {block 'search'} */
<<<<<<< HEAD
class Block_15174224795bd1b0fea21c42_80072511 extends Smarty_Internal_Block
=======
class Block_14403295995bd48a275451f8_73914196 extends Smarty_Internal_Block
>>>>>>> dorota
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
<<<<<<< HEAD
class Block_21297176545bd1b0fea27f39_86339022 extends Smarty_Internal_Block
=======
class Block_14472485355bd48a2754c646_30279197 extends Smarty_Internal_Block
>>>>>>> dorota
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
<<<<<<< HEAD
class Block_14867303035bd1b0fea17312_96984092 extends Smarty_Internal_Block
=======
class Block_19453631905bd48a2753c1a7_16899863 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'page_content' => 
  array (
<<<<<<< HEAD
    0 => 'Block_14867303035bd1b0fea17312_96984092',
  ),
  'search' => 
  array (
    0 => 'Block_15174224795bd1b0fea21c42_80072511',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_21297176545bd1b0fea27f39_86339022',
=======
    0 => 'Block_19453631905bd48a2753c1a7_16899863',
  ),
  'search' => 
  array (
    0 => 'Block_14403295995bd48a275451f8_73914196',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_14472485355bd48a2754c646_30279197',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15174224795bd1b0fea21c42_80072511', 'search', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14403295995bd48a275451f8_73914196', 'search', $this->tplIndex);
>>>>>>> dorota
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21297176545bd1b0fea27f39_86339022', 'hook_not_found', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14472485355bd48a2754c646_30279197', 'hook_not_found', $this->tplIndex);
>>>>>>> dorota
?>


  <?php
}
}
/* {/block 'page_content'} */
}
