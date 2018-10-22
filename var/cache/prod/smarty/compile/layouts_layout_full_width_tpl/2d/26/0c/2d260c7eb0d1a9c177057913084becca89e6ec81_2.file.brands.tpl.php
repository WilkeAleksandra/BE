<?php
/* Smarty version 3.1.32, created on 2018-10-22 23:44:39
  from 'E:\wamp64\www\BE-projekt\themes\classic\templates\catalog\brands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bce44c726dd29_66540638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d260c7eb0d1a9c177057913084becca89e6ec81' => 
    array (
      0 => 'E:\\wamp64\\www\\BE-projekt\\themes\\classic\\templates\\catalog\\brands.tpl',
      1 => 1540238324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/brand.tpl' => 1,
  ),
),false)) {
function content_5bce44c726dd29_66540638 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14066449475bce44c7240506_00806151', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'brand_header'} */
class Block_3477476735bce44c7242cd9_31374326 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h1>
    <?php
}
}
/* {/block 'brand_header'} */
/* {block 'brand_miniature'} */
class Block_2054399105bce44c724a355_79698828 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
?>
          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/brand.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('brand'=>$_smarty_tpl->tpl_vars['brand']->value), 0, true);
?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'brand_miniature'} */
/* {block 'content'} */
class Block_14066449475bce44c7240506_00806151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14066449475bce44c7240506_00806151',
  ),
  'brand_header' => 
  array (
    0 => 'Block_3477476735bce44c7242cd9_31374326',
  ),
  'brand_miniature' => 
  array (
    0 => 'Block_2054399105bce44c724a355_79698828',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3477476735bce44c7242cd9_31374326', 'brand_header', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2054399105bce44c724a355_79698828', 'brand_miniature', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
