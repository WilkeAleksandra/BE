<?php
<<<<<<< HEAD
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-25 14:03:09
=======
/* Smarty version 3.1.32, created on 2018-10-27 17:54:14
>>>>>>> dorota
=======
/* Smarty version 3.1.32, created on 2018-10-27 21:24:17
>>>>>>> dorota
  from 'E:\wamp64\www\BE-projekt\themes\classic\templates\catalog\_partials\product-activation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_5bd1b0fd72cbd7_18765611',
=======
  'unifunc' => 'content_5bd48a260c1ff2_28802029',
>>>>>>> dorota
=======
  'unifunc' => 'content_5bd4bb617d8b54_76620346',
>>>>>>> dorota
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '848ad0bcba3158364aed65c1bd357b66a726ebfa' => 
    array (
      0 => 'E:\\wamp64\\www\\BE-projekt\\themes\\classic\\templates\\catalog\\_partials\\product-activation.tpl',
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
function content_5bd1b0fd72cbd7_18765611 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd48a260c1ff2_28802029 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
=======
function content_5bd4bb617d8b54_76620346 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value['admin_notifications'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
          <div class="col-sm-12">
            <i class="material-icons float-xs-left">&#xE001;</i>
            <p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>
  </div>
<?php }
}
}
