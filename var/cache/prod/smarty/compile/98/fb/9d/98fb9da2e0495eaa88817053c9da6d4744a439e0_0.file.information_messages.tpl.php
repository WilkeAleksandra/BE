<?php
/* Smarty version 3.1.32, created on 2018-10-29 22:28:33
  from 'C:\wamp64\www\BE-projekt\admin866htnwy5\themes\new-theme\template\components\layout\information_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd77b81547888_58351026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98fb9da2e0495eaa88817053c9da6d4744a439e0' => 
    array (
      0 => 'C:\\wamp64\\www\\BE-projekt\\admin866htnwy5\\themes\\new-theme\\template\\components\\layout\\information_messages.tpl',
      1 => 1540463672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd77b81547888_58351026 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['informations']->value) && count($_smarty_tpl->tpl_vars['informations']->value) && $_smarty_tpl->tpl_vars['informations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <ul id="infos_block" class="list-unstyled">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['informations']->value, 'info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
?>
          <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  </div>
<?php }
}
}
