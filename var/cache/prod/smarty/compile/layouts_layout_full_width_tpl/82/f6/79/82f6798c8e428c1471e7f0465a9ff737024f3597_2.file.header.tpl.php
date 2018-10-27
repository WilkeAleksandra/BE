<?php
<<<<<<< HEAD
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-25 14:03:57
=======
/* Smarty version 3.1.32, created on 2018-10-27 17:54:25
>>>>>>> dorota
=======
/* Smarty version 3.1.32, created on 2018-10-27 21:23:58
>>>>>>> dorota
  from 'E:\wamp64\www\BE-projekt\themes\classic\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_5bd1b12d0ba3e4_95955416',
=======
  'unifunc' => 'content_5bd48a31bc05a2_85327712',
>>>>>>> dorota
=======
  'unifunc' => 'content_5bd4bb4ea23d84_31924089',
>>>>>>> dorota
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82f6798c8e428c1471e7f0465a9ff737024f3597' => 
    array (
      0 => 'E:\\wamp64\\www\\BE-projekt\\themes\\classic\\templates\\_partials\\header.tpl',
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
function content_5bd1b12d0ba3e4_95955416 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9278632345bd1b12d088d92_33048127', 'header_banner');
=======
function content_5bd48a31bc05a2_85327712 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7255740475bd48a31b888d0_40411096', 'header_banner');
>>>>>>> dorota
=======
function content_5bd4bb4ea23d84_31924089 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18721378355bd4bb4e9ea628_33302302', 'header_banner');
>>>>>>> dorota
?>


<?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15982508105bd1b12d08f5d4_75004652', 'header_nav');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2041395315bd48a31b8f405_09852617', 'header_nav');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6046477885bd4bb4e9f0bc0_93357578', 'header_nav');
>>>>>>> dorota
?>


<?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8178234245bd1b12d097fa8_75867965', 'header_top');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21318183975bd48a31b9c7c5_30083129', 'header_top');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19138434465bd4bb4e9f96f9_40395209', 'header_top');
>>>>>>> dorota
?>

<?php }
/* {block 'header_banner'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_9278632345bd1b12d088d92_33048127 extends Smarty_Internal_Block
=======
class Block_7255740475bd48a31b888d0_40411096 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_18721378355bd4bb4e9ea628_33302302 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'header_banner' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_9278632345bd1b12d088d92_33048127',
=======
    0 => 'Block_7255740475bd48a31b888d0_40411096',
>>>>>>> dorota
=======
    0 => 'Block_18721378355bd4bb4e9ea628_33302302',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_15982508105bd1b12d08f5d4_75004652 extends Smarty_Internal_Block
=======
class Block_2041395315bd48a31b8f405_09852617 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_6046477885bd4bb4e9f0bc0_93357578 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'header_nav' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_15982508105bd1b12d08f5d4_75004652',
=======
    0 => 'Block_2041395315bd48a31b8f405_09852617',
>>>>>>> dorota
=======
    0 => 'Block_6046477885bd4bb4e9f0bc0_93357578',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header-nav">
    <div class="container">
      <div class="row">
        <div class="hidden-sm-down">
          <div class="col-md-5 col-xs-12">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

          </div>
          <div class="col-md-7 right-nav">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

          </div>
        </div>
        <div class="hidden-md-up text-sm-center mobile">
          <div class="float-xs-left" id="menu-icon">
            <i class="material-icons d-inline">&#xE5D2;</i>
          </div>
          <div class="float-xs-right" id="_mobile_cart"></div>
          <div class="float-xs-right" id="_mobile_user_info"></div>
          <div class="top-logo" id="_mobile_logo"></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_8178234245bd1b12d097fa8_75867965 extends Smarty_Internal_Block
=======
class Block_21318183975bd48a31b9c7c5_30083129 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_19138434465bd4bb4e9f96f9_40395209 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'header_top' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_8178234245bd1b12d097fa8_75867965',
=======
    0 => 'Block_21318183975bd48a31b9c7c5_30083129',
>>>>>>> dorota
=======
    0 => 'Block_19138434465bd4bb4e9f96f9_40395209',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="col-md-2 hidden-sm-down" id="_desktop_logo">
            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
              <h1>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                  <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                </a>
              </h1>
            <?php } else { ?>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                  <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                </a>
            <?php }?>
        </div>
        <div class="col-md-10 col-sm-12 position-static">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

          <div class="clearfix"></div>
        </div>
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
