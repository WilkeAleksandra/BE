<?php
<<<<<<< HEAD
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-25 14:03:07
=======
/* Smarty version 3.1.32, created on 2018-10-27 17:54:12
>>>>>>> dorota
=======
/* Smarty version 3.1.32, created on 2018-10-27 21:24:16
>>>>>>> dorota
  from 'E:\wamp64\www\BE-projekt\themes\classic\templates\catalog\_partials\active_filters.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_5bd1b0fbeb9ac9_56262197',
=======
  'unifunc' => 'content_5bd48a24b7ccc6_02063700',
>>>>>>> dorota
=======
  'unifunc' => 'content_5bd4bb602bf176_05462264',
>>>>>>> dorota
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4005fd1dc0f096f84fbcebf4745f578b70e6c76e' => 
    array (
      0 => 'E:\\wamp64\\www\\BE-projekt\\themes\\classic\\templates\\catalog\\_partials\\active_filters.tpl',
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
function content_5bd1b0fbeb9ac9_56262197 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd48a24b7ccc6_02063700 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
=======
function content_5bd4bb602bf176_05462264 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="js-active-search-filters" class="<?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>active_filters<?php } else { ?>hide<?php }?>">
  <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11010139685bd1b0fbe8ab68_19337228', 'active_filters_title');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2806698385bd48a24b4a8f5_91915952', 'active_filters_title');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16080106445bd4bb60290386_46649864', 'active_filters_title');
>>>>>>> dorota
?>


  <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activeFilters']->value, 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
        <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6441737505bd1b0fbea2431_98567901', 'active_filters_item');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11394493705bd48a24b652a1_32431465', 'active_filters_item');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17109073615bd4bb602a6187_90686566', 'active_filters_item');
>>>>>>> dorota
?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  <?php }?>
</section>
<?php }
/* {block 'active_filters_title'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_11010139685bd1b0fbe8ab68_19337228 extends Smarty_Internal_Block
=======
class Block_2806698385bd48a24b4a8f5_91915952 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_16080106445bd4bb60290386_46649864 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'active_filters_title' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_11010139685bd1b0fbe8ab68_19337228',
=======
    0 => 'Block_2806698385bd48a24b4a8f5_91915952',
>>>>>>> dorota
=======
    0 => 'Block_16080106445bd4bb60290386_46649864',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1 class="h6 <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>active-filter-title<?php } else { ?>hidden-xs-up<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active filters','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h1>
  <?php
}
}
/* {/block 'active_filters_title'} */
/* {block 'active_filters_item'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_6441737505bd1b0fbea2431_98567901 extends Smarty_Internal_Block
=======
class Block_11394493705bd48a24b652a1_32431465 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_17109073615bd4bb602a6187_90686566 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'active_filters_item' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_6441737505bd1b0fbea2431_98567901',
=======
    0 => 'Block_11394493705bd48a24b652a1_32431465',
>>>>>>> dorota
=======
    0 => 'Block_17109073615bd4bb602a6187_90686566',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <li class="filter-block">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%1$s: ','d'=>'Shop.Theme.Catalog','sprintf'=>array($_smarty_tpl->tpl_vars['filter']->value['facetLabel'])),$_smarty_tpl ) );?>

            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

            <a class="js-search-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons close">&#xE5CD;</i></a>
          </li>
        <?php
}
}
/* {/block 'active_filters_item'} */
}
