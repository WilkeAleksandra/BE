<?php
<<<<<<< HEAD
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-25 14:03:10
=======
/* Smarty version 3.1.32, created on 2018-10-27 17:54:15
>>>>>>> dorota
=======
/* Smarty version 3.1.32, created on 2018-10-27 21:24:18
>>>>>>> dorota
  from 'E:\wamp64\www\BE-projekt\themes\classic\templates\_partials\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_5bd1b0fe583d54_83775663',
=======
  'unifunc' => 'content_5bd48a270b33c0_53491291',
>>>>>>> dorota
=======
  'unifunc' => 'content_5bd4bb626a61a3_19666478',
>>>>>>> dorota
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c78ce30219eec65a7a309340fbc80e0a871bd11d' => 
    array (
      0 => 'E:\\wamp64\\www\\BE-projekt\\themes\\classic\\templates\\_partials\\breadcrumb.tpl',
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
function content_5bd1b0fe583d54_83775663 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd48a270b33c0_53491291 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
=======
function content_5bd4bb626a61a3_19666478 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb hidden-sm-down">
  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9951209945bd1b0fe566ba2_97292042', 'breadcrumb');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7381999245bd48a27092a45_61587493', 'breadcrumb');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13427307195bd4bb6267f756_92214094', 'breadcrumb');
>>>>>>> dorota
?>

  </ol>
</nav>
<?php }
/* {block 'breadcrumb_item'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_10875584545bd1b0fe5703b0_41390533 extends Smarty_Internal_Block
=======
class Block_7226292195bd48a2709cf09_37291211 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_10040433525bd4bb62687ce3_52264451 extends Smarty_Internal_Block
>>>>>>> dorota
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
              <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
            </a>
            <meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
">
          </li>
        <?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_9951209945bd1b0fe566ba2_97292042 extends Smarty_Internal_Block
=======
class Block_7381999245bd48a27092a45_61587493 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_13427307195bd4bb6267f756_92214094 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_9951209945bd1b0fe566ba2_97292042',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_10875584545bd1b0fe5703b0_41390533',
=======
    0 => 'Block_7381999245bd48a27092a45_61587493',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_7226292195bd48a2709cf09_37291211',
>>>>>>> dorota
=======
    0 => 'Block_13427307195bd4bb6267f756_92214094',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_10040433525bd4bb62687ce3_52264451',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
?>
        <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10875584545bd1b0fe5703b0_41390533', 'breadcrumb_item', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7226292195bd48a2709cf09_37291211', 'breadcrumb_item', $this->tplIndex);
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10040433525bd4bb62687ce3_52264451', 'breadcrumb_item', $this->tplIndex);
>>>>>>> dorota
?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
/* {/block 'breadcrumb'} */
}
