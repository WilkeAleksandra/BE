<?php
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-29 20:29:55
=======
/* Smarty version 3.1.32, created on 2018-10-29 22:39:58
>>>>>>> karolina
  from 'module:pscontactinfonav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
  'unifunc' => 'content_5bd75fb359b0a5_88336243',
=======
  'unifunc' => 'content_5bd77e2e8281d5_81945361',
>>>>>>> karolina
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eb2119957cbc13b240126b3ccd8fac8f109f1e2' => 
    array (
      0 => 'module:pscontactinfonav.tpl',
      1 => 1540238324,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_5bd75fb359b0a5_88336243 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd77e2e8281d5_81945361 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> karolina
?><div id="_desktop_contact_link">
  <div id="contact-link">
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Call us: [1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

    <?php } else { ?>
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
    <?php }?>
  </div>
</div>
<?php }
}
