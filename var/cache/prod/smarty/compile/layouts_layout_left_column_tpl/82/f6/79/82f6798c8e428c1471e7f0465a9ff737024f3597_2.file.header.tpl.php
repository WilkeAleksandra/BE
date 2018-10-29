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
  from 'E:\wamp64\www\BE-projekt\themes\classic\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_5bd1b0fd822c66_70075480',
=======
  'unifunc' => 'content_5bd48a2620f8d7_31276125',
>>>>>>> dorota
=======
  'unifunc' => 'content_5bd4bb618929e8_30459322',
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
function content_5bd1b0fd822c66_70075480 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7002435985bd1b0fd7e8b53_90480553', 'header_banner');
=======
function content_5bd48a2620f8d7_31276125 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4445896455bd48a261cf547_82326628', 'header_banner');
>>>>>>> dorota
=======
function content_5bd4bb618929e8_30459322 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20968818425bd4bb61860371_43663560', 'header_banner');
>>>>>>> dorota
?>


<?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9310655895bd1b0fd7ef4a2_78273710', 'header_nav');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18270786185bd48a261d6238_64451564', 'header_nav');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7072846695bd4bb61866b83_75080023', 'header_nav');
>>>>>>> dorota
?>


<?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17170362815bd1b0fd7f80d1_77186096', 'header_top');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1960433855bd48a261e0de4_80502927', 'header_top');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13608610235bd4bb6186f402_34417360', 'header_top');
>>>>>>> dorota
?>

<?php }
/* {block 'header_banner'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_7002435985bd1b0fd7e8b53_90480553 extends Smarty_Internal_Block
=======
class Block_4445896455bd48a261cf547_82326628 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_20968818425bd4bb61860371_43663560 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'header_banner' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_7002435985bd1b0fd7e8b53_90480553',
=======
    0 => 'Block_4445896455bd48a261cf547_82326628',
>>>>>>> dorota
=======
    0 => 'Block_20968818425bd4bb61860371_43663560',
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
class Block_9310655895bd1b0fd7ef4a2_78273710 extends Smarty_Internal_Block
=======
class Block_18270786185bd48a261d6238_64451564 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_7072846695bd4bb61866b83_75080023 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'header_nav' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_9310655895bd1b0fd7ef4a2_78273710',
=======
    0 => 'Block_18270786185bd48a261d6238_64451564',
>>>>>>> dorota
=======
    0 => 'Block_7072846695bd4bb61866b83_75080023',
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
class Block_17170362815bd1b0fd7f80d1_77186096 extends Smarty_Internal_Block
=======
class Block_1960433855bd48a261e0de4_80502927 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_13608610235bd4bb6186f402_34417360 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'header_top' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_17170362815bd1b0fd7f80d1_77186096',
=======
    0 => 'Block_1960433855bd48a261e0de4_80502927',
>>>>>>> dorota
=======
    0 => 'Block_13608610235bd4bb6186f402_34417360',
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
