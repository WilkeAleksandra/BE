<?php
<<<<<<< HEAD
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-25 23:10:59
=======
/* Smarty version 3.1.32, created on 2018-10-27 17:54:24
>>>>>>> dorota
=======
/* Smarty version 3.1.32, created on 2018-10-27 21:24:20
>>>>>>> dorota
  from 'module:productcommentsproductcom' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_5bd23163b7b3a7_14177169',
=======
  'unifunc' => 'content_5bd48a305c4f38_49584809',
>>>>>>> dorota
=======
  'unifunc' => 'content_5bd4bb6438ffe7_19240823',
>>>>>>> dorota
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef52c2fd720b69606a7340db85e126eaa0332c5b' => 
    array (
      0 => 'module:productcommentsproductcom',
      1 => 1540463707,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
<<<<<<< HEAD
function content_5bd23163b7b3a7_14177169 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd48a305c4f38_49584809 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
=======
function content_5bd4bb6438ffe7_19240823 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
?><div class="comments_note">
    <?php if ($_smarty_tpl->tpl_vars['averageTotal']->value > 0 && Configuration::get('PRODUCT_COMMENTS_LIST') == 1) {?>
        <div class="star_content clearfix">
            <?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_11_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_11_iteration <= 5; $__section_i_11_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php if ($_smarty_tpl->tpl_vars['averageTotal']->value <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>
                    <div class="star"></div>
                <?php } else { ?>
                    <div class="star star_on"></div>
                <?php }?>
            <?php
}
}
?>
        </div>
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>sprintf('%s Review(s)',$_smarty_tpl->tpl_vars['nbComments']->value),'mod'=>'productcomments'),$_smarty_tpl ) );?>
&nbsp</span>
    <?php }?>
</div><?php }
}
