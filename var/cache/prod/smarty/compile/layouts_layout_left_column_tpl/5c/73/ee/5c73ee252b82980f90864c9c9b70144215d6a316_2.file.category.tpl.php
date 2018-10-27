<?php
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-25 14:03:08
=======
/* Smarty version 3.1.32, created on 2018-10-27 17:54:12
>>>>>>> dorota
  from 'E:\wamp64\www\BE-projekt\themes\classic\templates\catalog\listing\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
  'unifunc' => 'content_5bd1b0fc147141_16000948',
=======
  'unifunc' => 'content_5bd48a24e0d7e3_15559375',
>>>>>>> dorota
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c73ee252b82980f90864c9c9b70144215d6a316' => 
    array (
      0 => 'E:\\wamp64\\www\\BE-projekt\\themes\\classic\\templates\\catalog\\listing\\category.tpl',
      1 => 1540238324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_5bd1b0fc147141_16000948 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd48a24e0d7e3_15559375 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_749528115bd1b0fc112145_90633352', 'product_list_header');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17773698995bd48a24ddcc46_22155005', 'product_list_header');
>>>>>>> dorota
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
<<<<<<< HEAD
class Block_749528115bd1b0fc112145_90633352 extends Smarty_Internal_Block
=======
class Block_17773698995bd48a24ddcc46_22155005 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'product_list_header' => 
  array (
<<<<<<< HEAD
    0 => 'Block_749528115bd1b0fc112145_90633352',
=======
    0 => 'Block_17773698995bd48a24ddcc46_22155005',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="block-category card card-block hidden-sm-down">
      <h1 class="h1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
      <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
        <div id="category-description" class="text-muted"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['category']->value['image']['large']['url']) {?>
        <div class="category-cover">
          <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');
}?>">
        </div>
      <?php }?>
    </div>
    <div class="text-sm-center hidden-md-up">
      <h1 class="h1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
    </div>
<?php
}
}
/* {/block 'product_list_header'} */
}
