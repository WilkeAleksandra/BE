<?php
<<<<<<< HEAD
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-25 14:03:56
=======
/* Smarty version 3.1.32, created on 2018-10-27 17:54:25
>>>>>>> dorota
=======
/* Smarty version 3.1.32, created on 2018-10-27 21:23:58
>>>>>>> dorota
  from 'E:\wamp64\www\BE-projekt\themes\classic\templates\_partials\javascript.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_5bd1b12ce121b0_64840454',
=======
  'unifunc' => 'content_5bd48a319b7a80_84250039',
>>>>>>> dorota
=======
  'unifunc' => 'content_5bd4bb4e7d3727_45936778',
>>>>>>> dorota
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '353898a0c010c0ede216ef0986dc84c31d53bcc4' => 
    array (
      0 => 'E:\\wamp64\\www\\BE-projekt\\themes\\classic\\templates\\_partials\\javascript.tpl',
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
function content_5bd1b12ce121b0_64840454 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd48a319b7a80_84250039 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
=======
function content_5bd4bb4e7d3727_45936778 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['javascript']->value['external'], 'js');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
?>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'UTF-8');?>
><?php echo '</script'; ?>
>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['javascript']->value['inline'], 'js');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
?>
  <?php echo '<script'; ?>
 type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  <?php echo '</script'; ?>
>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if (isset($_smarty_tpl->tpl_vars['vars']->value) && count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <?php echo '<script'; ?>
 type="text/javascript">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vars']->value, 'var_value', false, 'var_name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['var_name']->value => $_smarty_tpl->tpl_vars['var_value']->value) {
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['var_value']->value ));?>
;
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php echo '</script'; ?>
>
<?php }
}
}
