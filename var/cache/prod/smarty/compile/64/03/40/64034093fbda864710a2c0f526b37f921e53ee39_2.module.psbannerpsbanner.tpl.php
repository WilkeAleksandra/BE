<?php
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-24 22:26:02
=======
/* Smarty version 3.1.32, created on 2018-10-25 13:48:22
>>>>>>> dorota
  from 'module:psbannerpsbanner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
  'unifunc' => 'content_5bd0d55a17b178_88567299',
=======
  'unifunc' => 'content_5bd1ad86ee7356_94178710',
>>>>>>> dorota
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64034093fbda864710a2c0f526b37f921e53ee39' => 
    array (
      0 => 'module:psbannerpsbanner.tpl',
      1 => 1539604014,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_5bd0d55a17b178_88567299 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd1ad86ee7356_94178710 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
?><a class="banner" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
">
  <?php if (isset($_smarty_tpl->tpl_vars['banner_img']->value)) {?>
    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_img']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" class="img-fluid">
  <?php } else { ?>
    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }?>
</a>
<?php }
}
