<?php
<<<<<<< HEAD
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-25 14:03:10
=======
/* Smarty version 3.1.32, created on 2018-10-27 17:54:14
>>>>>>> dorota
=======
/* Smarty version 3.1.32, created on 2018-10-27 21:24:18
>>>>>>> dorota
  from 'E:\wamp64\www\BE-projekt\themes\classic\templates\_partials\notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_5bd1b0fe1d0939_79423391',
=======
  'unifunc' => 'content_5bd48a26d6ada8_38493286',
>>>>>>> dorota
=======
  'unifunc' => 'content_5bd4bb623a8626_72660640',
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
function content_5bd1b0fe1d0939_79423391 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd48a26d6ada8_38493286 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
=======
function content_5bd4bb623a8626_72660640 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20959795905bd1b0fe1726d6_04223849', 'notifications_error');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17972275925bd48a26d19568_54828552', 'notifications_error');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1048005945bd4bb62353cc8_57488601', 'notifications_error');
>>>>>>> dorota
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6820828695bd1b0fe193bb1_43378944', 'notifications_warning');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9834278395bd48a26d35820_60553269', 'notifications_warning');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6492804785bd4bb623677a0_85116815', 'notifications_warning');
>>>>>>> dorota
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14014103735bd1b0fe1a7128_20447431', 'notifications_success');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14793820445bd48a26d493e6_94617229', 'notifications_success');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15930017805bd4bb6237b3f2_51738745', 'notifications_success');
>>>>>>> dorota
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18401137525bd1b0fe1bbba0_33597498', 'notifications_info');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15744481895bd48a26d5b970_17054683', 'notifications_info');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13863327445bd4bb62399af7_36807224', 'notifications_info');
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
class Block_20959795905bd1b0fe1726d6_04223849 extends Smarty_Internal_Block
=======
class Block_17972275925bd48a26d19568_54828552 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_1048005945bd4bb62353cc8_57488601 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'notifications_error' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_20959795905bd1b0fe1726d6_04223849',
=======
    0 => 'Block_17972275925bd48a26d19568_54828552',
>>>>>>> dorota
=======
    0 => 'Block_1048005945bd4bb62353cc8_57488601',
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
class Block_6820828695bd1b0fe193bb1_43378944 extends Smarty_Internal_Block
=======
class Block_9834278395bd48a26d35820_60553269 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_6492804785bd4bb623677a0_85116815 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_6820828695bd1b0fe193bb1_43378944',
=======
    0 => 'Block_9834278395bd48a26d35820_60553269',
>>>>>>> dorota
=======
    0 => 'Block_6492804785bd4bb623677a0_85116815',
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
class Block_14014103735bd1b0fe1a7128_20447431 extends Smarty_Internal_Block
=======
class Block_14793820445bd48a26d493e6_94617229 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_15930017805bd4bb6237b3f2_51738745 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'notifications_success' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_14014103735bd1b0fe1a7128_20447431',
=======
    0 => 'Block_14793820445bd48a26d493e6_94617229',
>>>>>>> dorota
=======
    0 => 'Block_15930017805bd4bb6237b3f2_51738745',
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
class Block_18401137525bd1b0fe1bbba0_33597498 extends Smarty_Internal_Block
=======
class Block_15744481895bd48a26d5b970_17054683 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_13863327445bd4bb62399af7_36807224 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'notifications_info' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_18401137525bd1b0fe1bbba0_33597498',
=======
    0 => 'Block_15744481895bd48a26d5b970_17054683',
>>>>>>> dorota
=======
    0 => 'Block_13863327445bd4bb62399af7_36807224',
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
