<?php
<<<<<<< HEAD
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-25 14:03:08
=======
/* Smarty version 3.1.32, created on 2018-10-27 17:54:13
>>>>>>> dorota
=======
/* Smarty version 3.1.32, created on 2018-10-27 21:24:16
>>>>>>> dorota
  from 'E:\wamp64\www\BE-projekt\themes\classic\templates\catalog\listing\product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_5bd1b0fc29d420_31114066',
=======
  'unifunc' => 'content_5bd48a2504b045_15695592',
>>>>>>> dorota
=======
  'unifunc' => 'content_5bd4bb60726644_47196244',
>>>>>>> dorota
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba8b3fefde495b6cda35111f9c1e3cfc2c46e6a1' => 
    array (
      0 => 'E:\\wamp64\\www\\BE-projekt\\themes\\classic\\templates\\catalog\\listing\\product-list.tpl',
      1 => 1540238324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
<<<<<<< HEAD
function content_5bd1b0fc29d420_31114066 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd48a2504b045_15695592 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
=======
function content_5bd4bb60726644_47196244 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20546268465bd1b0fc264068_90684491', 'content');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9079472685bd48a2500e1d7_31925989', 'content');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4296968815bd4bb606ea476_18472656', 'content');
>>>>>>> dorota
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_header'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_5930602685bd1b0fc2669b3_28474726 extends Smarty_Internal_Block
=======
class Block_2393271085bd48a25010a98_20404562 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_17904495115bd4bb606ecb69_25849991 extends Smarty_Internal_Block
>>>>>>> dorota
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <h2 class="h2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['label'], ENT_QUOTES, 'UTF-8');?>
</h2>
    <?php
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list_top'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_206380175bd1b0fc273ad4_01281410 extends Smarty_Internal_Block
=======
class Block_12351925705bd48a2501dbb7_77690743 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_17098384835bd4bb606fb969_69604306 extends Smarty_Internal_Block
>>>>>>> dorota
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_17240966885bd1b0fc27f452_91352668 extends Smarty_Internal_Block
=======
class Block_3669420385bd48a2502ea78_61989045 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_5285904585bd4bb60708171_75089438 extends Smarty_Internal_Block
>>>>>>> dorota
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div id="" class="hidden-sm-down">
            <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

          </div>
        <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_2226416155bd1b0fc288e78_30303909 extends Smarty_Internal_Block
=======
class Block_13620281605bd48a25036851_77383136 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_5561594265bd4bb6070ff67_67139771 extends Smarty_Internal_Block
>>>>>>> dorota
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_8055969055bd1b0fc2909a1_27453796 extends Smarty_Internal_Block
=======
class Block_470660815bd48a2503de66_37244526 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_7979685395bd4bb60719c99_85198942 extends Smarty_Internal_Block
>>>>>>> dorota
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'content'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_20546268465bd1b0fc264068_90684491 extends Smarty_Internal_Block
=======
class Block_9079472685bd48a2500e1d7_31925989 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_4296968815bd4bb606ea476_18472656 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'content' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_20546268465bd1b0fc264068_90684491',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_5930602685bd1b0fc2669b3_28474726',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_206380175bd1b0fc273ad4_01281410',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_17240966885bd1b0fc27f452_91352668',
  ),
  'product_list' => 
  array (
    0 => 'Block_2226416155bd1b0fc288e78_30303909',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_8055969055bd1b0fc2909a1_27453796',
=======
    0 => 'Block_9079472685bd48a2500e1d7_31925989',
=======
    0 => 'Block_4296968815bd4bb606ea476_18472656',
>>>>>>> dorota
  ),
  'product_list_header' => 
  array (
    0 => 'Block_17904495115bd4bb606ecb69_25849991',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_17098384835bd4bb606fb969_69604306',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_5285904585bd4bb60708171_75089438',
  ),
  'product_list' => 
  array (
    0 => 'Block_5561594265bd4bb6070ff67_67139771',
  ),
  'product_list_bottom' => 
  array (
<<<<<<< HEAD
    0 => 'Block_470660815bd48a2503de66_37244526',
>>>>>>> dorota
=======
    0 => 'Block_7979685395bd4bb60719c99_85198942',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main">

    <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5930602685bd1b0fc2669b3_28474726', 'product_list_header', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2393271085bd48a25010a98_20404562', 'product_list_header', $this->tplIndex);
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17904495115bd4bb606ecb69_25849991', 'product_list_header', $this->tplIndex);
>>>>>>> dorota
?>


    <section id="products">
      <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>

        <div id="">
          <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206380175bd1b0fc273ad4_01281410', 'product_list_top', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12351925705bd48a2501dbb7_77690743', 'product_list_top', $this->tplIndex);
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17098384835bd4bb606fb969_69604306', 'product_list_top', $this->tplIndex);
>>>>>>> dorota
?>

        </div>

        <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17240966885bd1b0fc27f452_91352668', 'product_list_active_filters', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3669420385bd48a2502ea78_61989045', 'product_list_active_filters', $this->tplIndex);
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5285904585bd4bb60708171_75089438', 'product_list_active_filters', $this->tplIndex);
>>>>>>> dorota
?>


        <div id="">
          <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2226416155bd1b0fc288e78_30303909', 'product_list', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13620281605bd48a25036851_77383136', 'product_list', $this->tplIndex);
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5561594265bd4bb6070ff67_67139771', 'product_list', $this->tplIndex);
>>>>>>> dorota
?>

        </div>

        <div id="js-product-list-bottom">
          <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8055969055bd1b0fc2909a1_27453796', 'product_list_bottom', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_470660815bd48a2503de66_37244526', 'product_list_bottom', $this->tplIndex);
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7979685395bd4bb60719c99_85198942', 'product_list_bottom', $this->tplIndex);
>>>>>>> dorota
?>

        </div>

      <?php } else { ?>

        <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php }?>
    </section>

  </section>
<?php
}
}
/* {/block 'content'} */
}
