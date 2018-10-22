<?php
/* Smarty version 3.1.32, created on 2018-10-22 23:43:11
  from 'E:\wamp64\www\BE-projekt\admin866htnwy5\themes\default\template\controllers\cms_content\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bce446f9cde50_70601875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3aada170381de41e2addc32461f6579e6e92767a' => 
    array (
      0 => 'E:\\wamp64\\www\\BE-projekt\\admin866htnwy5\\themes\\default\\template\\controllers\\cms_content\\content.tpl',
      1 => 1540238301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bce446f9cde50_70601875 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['url_prev']->value)) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function () {
		var re = /url_preview=(.*)/;
		var url = re.exec(window.location.href);
		if (typeof url !== 'undefined' && url !== null && typeof url[1] !== 'undefined' && url[1] === "1")
			window.open("<?php echo $_smarty_tpl->tpl_vars['url_prev']->value;?>
", "_blank");
	});
	<?php echo '</script'; ?>
>
<?php }
}
}
