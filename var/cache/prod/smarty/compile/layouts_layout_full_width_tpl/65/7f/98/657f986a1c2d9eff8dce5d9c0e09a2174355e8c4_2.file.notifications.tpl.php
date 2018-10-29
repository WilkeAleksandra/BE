<?php
<<<<<<< HEAD
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-25 14:03:57
=======
/* Smarty version 3.1.32, created on 2018-10-27 17:54:26
>>>>>>> dorota
=======
/* Smarty version 3.1.32, created on 2018-10-27 21:23:59
>>>>>>> dorota
  from 'E:\wamp64\www\BE-projekt\themes\classic\templates\_partials\notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_5bd1b12dae0192_97054033',
=======
  'unifunc' => 'content_5bd48a32670691_26772350',
>>>>>>> dorota
=======
  'unifunc' => 'content_5bd4bb4f92e250_13823175',
>>>>>>> dorota
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '657f986a1c2d9eff8dce5d9c0e09a2174355e8c4' => 
    array (
      0 => 'E:\\wamp64\\www\\BE-projekt\\themes\\classic\\templates\\_partials\\notifications.tpl',
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
function content_5bd1b12dae0192_97054033 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd48a32670691_26772350 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
=======
function content_5bd4bb4f92e250_13823175 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if (isset($_smarty_tpl->tpl_vars['notifications']->value)) {?>
<aside id="notifications">
  <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9852477785bd1b12da96307_02902220', 'notifications_error');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20154602185bd48a32626494_20773865', 'notifications_error');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1317098445bd4bb4f88e7b8_82218339', 'notifications_error');
>>>>>>> dorota
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6791835075bd1b12daa9a59_93255746', 'notifications_warning');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19480717895bd48a32638972_25515487', 'notifications_warning');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15056889675bd4bb4f8afdb0_54281366', 'notifications_warning');
>>>>>>> dorota
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20130625665bd1b12dabae82_49476432', 'notifications_success');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7466396695bd48a3264d134_71496959', 'notifications_success');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2188820485bd4bb4f8df427_79466181', 'notifications_success');
>>>>>>> dorota
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13740275515bd1b12dad10e4_79138802', 'notifications_info');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16052945585bd48a326608a9_69422238', 'notifications_info');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11102319835bd4bb4f910334_52355574', 'notifications_info');
>>>>>>> dorota
?>

    <?php }?>
  </div>
</aside>
<?php }
}
/* {block 'notifications_error'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_9852477785bd1b12da96307_02902220 extends Smarty_Internal_Block
=======
class Block_20154602185bd48a32626494_20773865 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_1317098445bd4bb4f88e7b8_82218339 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'notifications_error' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_9852477785bd1b12da96307_02902220',
=======
    0 => 'Block_20154602185bd48a32626494_20773865',
>>>>>>> dorota
=======
    0 => 'Block_1317098445bd4bb4f88e7b8_82218339',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-danger" role="alert" data-alert="danger">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['error'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_error'} */
/* {block 'notifications_warning'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_6791835075bd1b12daa9a59_93255746 extends Smarty_Internal_Block
=======
class Block_19480717895bd48a32638972_25515487 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_15056889675bd4bb4f8afdb0_54281366 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_6791835075bd1b12daa9a59_93255746',
=======
    0 => 'Block_19480717895bd48a32638972_25515487',
>>>>>>> dorota
=======
    0 => 'Block_15056889675bd4bb4f8afdb0_54281366',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-warning" role="alert" data-alert="warning">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['warning'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_warning'} */
/* {block 'notifications_success'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_20130625665bd1b12dabae82_49476432 extends Smarty_Internal_Block
=======
class Block_7466396695bd48a3264d134_71496959 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_2188820485bd4bb4f8df427_79466181 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'notifications_success' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_20130625665bd1b12dabae82_49476432',
=======
    0 => 'Block_7466396695bd48a3264d134_71496959',
>>>>>>> dorota
=======
    0 => 'Block_2188820485bd4bb4f8df427_79466181',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-success" role="alert" data-alert="success">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['success'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_success'} */
/* {block 'notifications_info'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_13740275515bd1b12dad10e4_79138802 extends Smarty_Internal_Block
=======
class Block_16052945585bd48a326608a9_69422238 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_11102319835bd4bb4f910334_52355574 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'notifications_info' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_13740275515bd1b12dad10e4_79138802',
=======
    0 => 'Block_16052945585bd48a326608a9_69422238',
>>>>>>> dorota
=======
    0 => 'Block_11102319835bd4bb4f910334_52355574',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-info" role="alert" data-alert="info">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['info'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_info'} */
}
