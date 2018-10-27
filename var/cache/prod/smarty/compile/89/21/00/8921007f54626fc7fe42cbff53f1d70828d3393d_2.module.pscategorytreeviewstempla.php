<?php
<<<<<<< HEAD
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-26 00:21:38
=======
/* Smarty version 3.1.32, created on 2018-10-27 17:54:15
>>>>>>> dorota
=======
/* Smarty version 3.1.32, created on 2018-10-27 21:24:18
>>>>>>> dorota
  from 'module:pscategorytreeviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_5bd241f2c28f38_30896754',
=======
  'unifunc' => 'content_5bd48a2728a982_14054317',
>>>>>>> dorota
=======
  'unifunc' => 'content_5bd4bb6292a171_26191501',
>>>>>>> dorota
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8921007f54626fc7fe42cbff53f1d70828d3393d' => 
    array (
      0 => 'module:pscategorytreeviewstempla',
      1 => 1540463725,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
<<<<<<< HEAD
function content_5bd241f2c28f38_30896754 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd48a2728a982_14054317 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
=======
function content_5bd4bb6292a171_26191501 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'categories' => 
  array (
    'compiled_filepath' => 'C:\\wamp64\\www\\BE-projekt\\var\\cache\\prod\\smarty\\compile\\89\\21\\00\\8921007f54626fc7fe42cbff53f1d70828d3393d_2.module.pscategorytreeviewstempla.php',
    'uid' => '8921007f54626fc7fe42cbff53f1d70828d3393d',
<<<<<<< HEAD
<<<<<<< HEAD
    'call_name' => 'smarty_template_function_categories_20297471475bd241f2be8976_83675127',
=======
    'call_name' => 'smarty_template_function_categories_6670570735bd48a272059d5_38605792',
>>>>>>> dorota
=======
    'call_name' => 'smarty_template_function_categories_9806314385bd4bb628afae5_44960405',
>>>>>>> dorota
  ),
));
?>


<div class="block-categories hidden-sm-down">
  <ul class="category-top-menu">
    <li><a class="text-uppercase h6" href="<?php echo $_smarty_tpl->tpl_vars['categories']->value['link'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categories']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('nodes'=>$_smarty_tpl->tpl_vars['categories']->value['children']), true);?>
</li>
  </ul>
</div>
<?php }
<<<<<<< HEAD
<<<<<<< HEAD
/* smarty_template_function_categories_20297471475bd241f2be8976_83675127 */
if (!function_exists('smarty_template_function_categories_20297471475bd241f2be8976_83675127')) {
function smarty_template_function_categories_20297471475bd241f2be8976_83675127(Smarty_Internal_Template $_smarty_tpl,$params) {
=======
/* smarty_template_function_categories_6670570735bd48a272059d5_38605792 */
if (!function_exists('smarty_template_function_categories_6670570735bd48a272059d5_38605792')) {
function smarty_template_function_categories_6670570735bd48a272059d5_38605792(Smarty_Internal_Template $_smarty_tpl,$params) {
>>>>>>> dorota
=======
/* smarty_template_function_categories_9806314385bd4bb628afae5_44960405 */
if (!function_exists('smarty_template_function_categories_9806314385bd4bb628afae5_44960405')) {
function smarty_template_function_categories_9806314385bd4bb628afae5_44960405(Smarty_Internal_Template $_smarty_tpl,$params) {
>>>>>>> dorota
$params = array_merge(array('nodes'=>array(),'depth'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {?><ul class="category-sub-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
?><li data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {?><div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons add">&#xE145;</i><i class="material-icons remove">&#xE15B;</i></div><div class="collapse" id="exCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>
</div><?php }
} else { ?><a class="category-sub-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {?><span class="arrows" data-toggle="collapse" data-target="#exCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons arrow-right">&#xE315;</i><i class="material-icons arrow-down">&#xE313;</i></span><div class="collapse" id="exCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>
</div><?php }
}?></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }
}}
<<<<<<< HEAD
<<<<<<< HEAD
/*/ smarty_template_function_categories_20297471475bd241f2be8976_83675127 */
=======
/*/ smarty_template_function_categories_6670570735bd48a272059d5_38605792 */
>>>>>>> dorota
=======
/*/ smarty_template_function_categories_9806314385bd4bb628afae5_44960405 */
>>>>>>> dorota
}
