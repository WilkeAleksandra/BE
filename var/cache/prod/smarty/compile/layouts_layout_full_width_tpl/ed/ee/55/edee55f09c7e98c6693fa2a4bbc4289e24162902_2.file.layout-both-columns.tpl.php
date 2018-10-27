<?php
<<<<<<< HEAD
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-25 14:03:55
=======
/* Smarty version 3.1.32, created on 2018-10-27 17:54:24
>>>>>>> dorota
=======
/* Smarty version 3.1.32, created on 2018-10-27 21:23:57
>>>>>>> dorota
  from 'E:\wamp64\www\BE-projekt\themes\classic\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_5bd1b12befede0_47312707',
=======
  'unifunc' => 'content_5bd48a30d059b2_88325277',
>>>>>>> dorota
=======
  'unifunc' => 'content_5bd4bb4dd9e441_94444379',
>>>>>>> dorota
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edee55f09c7e98c6693fa2a4bbc4289e24162902' => 
    array (
      0 => 'E:\\wamp64\\www\\BE-projekt\\themes\\classic\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1540238324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
<<<<<<< HEAD
function content_5bd1b12befede0_47312707 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd48a30d059b2_88325277 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
=======
function content_5bd4bb4dd9e441_94444379 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4815103135bd1b12be06f10_38463904', 'head');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13844305855bd48a30c46d41_29315626', 'head');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9702025255bd4bb4dcffa66_65905425', 'head');
>>>>>>> dorota
?>

  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">

    <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21108140305bd1b12be2a642_47897247', 'hook_after_body_opening_tag');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2666027795bd48a30c613e1_31200798', 'hook_after_body_opening_tag');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2115311565bd4bb4dd15543_89170010', 'hook_after_body_opening_tag');
>>>>>>> dorota
?>


    <main>
      <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2286390385bd1b12be35e01_65419238', 'product_activation');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18315511115bd48a30c6afe4_02765858', 'product_activation');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5931163095bd4bb4dd1bc26_97624606', 'product_activation');
>>>>>>> dorota
?>


      <header id="header">
        <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15283581995bd1b12be40ef7_38956265', 'header');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18366404785bd48a30c73351_54586436', 'header');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7301704795bd4bb4dd21fb1_05853879', 'header');
>>>>>>> dorota
?>

      </header>

      <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20613080135bd1b12be4d235_13724157', 'notifications');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12606783945bd48a30c79f72_69296161', 'notifications');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19029021145bd4bb4dd285f7_02975903', 'notifications');
>>>>>>> dorota
?>


      <section id="wrapper">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

        <div class="container">
          <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2812464685bd1b12be70747_82409326', 'breadcrumb');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19777178095bd48a30c84de4_69270020', 'breadcrumb');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17233108025bd4bb4dd32226_16548713', 'breadcrumb');
>>>>>>> dorota
?>


          <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21397115105bd1b12be7d049_34193675', "left_column");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1424269495bd48a30c8c455_96817763', "left_column");
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13618503395bd4bb4dd396e0_59980607', "left_column");
>>>>>>> dorota
?>


          <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12800955875bd1b12be94ad8_95145332', "content_wrapper");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18326292365bd48a30caaa29_22320966', "content_wrapper");
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_730567805bd4bb4dd4cb14_51165626', "content_wrapper");
>>>>>>> dorota
?>


          <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14392804735bd1b12beb2713_91886734', "right_column");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20399301045bd48a30cc56f7_93643011', "right_column");
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21099459595bd4bb4dd660b8_31896136', "right_column");
>>>>>>> dorota
?>

        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

      </section>

      <footer id="footer">
        <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18264445215bd1b12bece409_18952746', "footer");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4513364345bd48a30ce6e25_62461959', "footer");
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2195466915bd4bb4dd83fa3_96256110', "footer");
>>>>>>> dorota
?>

      </footer>

    </main>

    <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7241143245bd1b12bed89d5_12356267', 'javascript_bottom');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11831803025bd48a30cf46f9_82156987', 'javascript_bottom');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_807021635bd4bb4dd8ba70_68711147', 'javascript_bottom');
>>>>>>> dorota
?>


    <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2482772395bd1b12bef4794_33049846', 'hook_before_body_closing_tag');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17059319855bd48a30cfe9f2_93564208', 'hook_before_body_closing_tag');
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20198339915bd4bb4dd97fa0_67430108', 'hook_before_body_closing_tag');
>>>>>>> dorota
?>

  </body>

</html>
<?php }
/* {block 'head'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_4815103135bd1b12be06f10_38463904 extends Smarty_Internal_Block
=======
class Block_13844305855bd48a30c46d41_29315626 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_9702025255bd4bb4dcffa66_65905425 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'head' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_4815103135bd1b12be06f10_38463904',
=======
    0 => 'Block_13844305855bd48a30c46d41_29315626',
>>>>>>> dorota
=======
    0 => 'Block_9702025255bd4bb4dcffa66_65905425',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_21108140305bd1b12be2a642_47897247 extends Smarty_Internal_Block
=======
class Block_2666027795bd48a30c613e1_31200798 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_2115311565bd4bb4dd15543_89170010 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_21108140305bd1b12be2a642_47897247',
=======
    0 => 'Block_2666027795bd48a30c613e1_31200798',
>>>>>>> dorota
=======
    0 => 'Block_2115311565bd4bb4dd15543_89170010',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_2286390385bd1b12be35e01_65419238 extends Smarty_Internal_Block
=======
class Block_18315511115bd48a30c6afe4_02765858 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_5931163095bd4bb4dd1bc26_97624606 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'product_activation' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_2286390385bd1b12be35e01_65419238',
=======
    0 => 'Block_18315511115bd48a30c6afe4_02765858',
>>>>>>> dorota
=======
    0 => 'Block_5931163095bd4bb4dd1bc26_97624606',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_15283581995bd1b12be40ef7_38956265 extends Smarty_Internal_Block
=======
class Block_18366404785bd48a30c73351_54586436 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_7301704795bd4bb4dd21fb1_05853879 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'header' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_15283581995bd1b12be40ef7_38956265',
=======
    0 => 'Block_18366404785bd48a30c73351_54586436',
>>>>>>> dorota
=======
    0 => 'Block_7301704795bd4bb4dd21fb1_05853879',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_20613080135bd1b12be4d235_13724157 extends Smarty_Internal_Block
=======
class Block_12606783945bd48a30c79f72_69296161 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_19029021145bd4bb4dd285f7_02975903 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'notifications' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_20613080135bd1b12be4d235_13724157',
=======
    0 => 'Block_12606783945bd48a30c79f72_69296161',
>>>>>>> dorota
=======
    0 => 'Block_19029021145bd4bb4dd285f7_02975903',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_2812464685bd1b12be70747_82409326 extends Smarty_Internal_Block
=======
class Block_19777178095bd48a30c84de4_69270020 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_17233108025bd4bb4dd32226_16548713 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_2812464685bd1b12be70747_82409326',
=======
    0 => 'Block_19777178095bd48a30c84de4_69270020',
>>>>>>> dorota
=======
    0 => 'Block_17233108025bd4bb4dd32226_16548713',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'breadcrumb'} */
/* {block "left_column"} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_21397115105bd1b12be7d049_34193675 extends Smarty_Internal_Block
=======
class Block_1424269495bd48a30c8c455_96817763 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_13618503395bd4bb4dd396e0_59980607 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'left_column' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_21397115105bd1b12be7d049_34193675',
=======
    0 => 'Block_1424269495bd48a30c8c455_96817763',
>>>>>>> dorota
=======
    0 => 'Block_13618503395bd4bb4dd396e0_59980607',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

              <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

              <?php }?>
            </div>
          <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_6637216905bd1b12bea4ef3_62368176 extends Smarty_Internal_Block
=======
class Block_1488310195bd48a30cb6213_67308236 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_20725084255bd4bb4dd56b58_57198280 extends Smarty_Internal_Block
>>>>>>> dorota
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <p>Hello world! This is HTML5 Boilerplate.</p>
              <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_12800955875bd1b12be94ad8_95145332 extends Smarty_Internal_Block
=======
class Block_18326292365bd48a30caaa29_22320966 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_730567805bd4bb4dd4cb14_51165626 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_12800955875bd1b12be94ad8_95145332',
  ),
  'content' => 
  array (
    0 => 'Block_6637216905bd1b12bea4ef3_62368176',
=======
    0 => 'Block_18326292365bd48a30caaa29_22320966',
  ),
  'content' => 
  array (
    0 => 'Block_1488310195bd48a30cb6213_67308236',
>>>>>>> dorota
=======
    0 => 'Block_730567805bd4bb4dd4cb14_51165626',
  ),
  'content' => 
  array (
    0 => 'Block_20725084255bd4bb4dd56b58_57198280',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="content-wrapper" class="left-column right-column col-sm-4 col-md-6">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

              <?php 
<<<<<<< HEAD
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6637216905bd1b12bea4ef3_62368176', "content", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1488310195bd48a30cb6213_67308236', "content", $this->tplIndex);
>>>>>>> dorota
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20725084255bd4bb4dd56b58_57198280', "content", $this->tplIndex);
>>>>>>> dorota
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

            </div>
          <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_14392804735bd1b12beb2713_91886734 extends Smarty_Internal_Block
=======
class Block_20399301045bd48a30cc56f7_93643011 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_21099459595bd4bb4dd660b8_31896136 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'right_column' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_14392804735bd1b12beb2713_91886734',
=======
    0 => 'Block_20399301045bd48a30cc56f7_93643011',
>>>>>>> dorota
=======
    0 => 'Block_21099459595bd4bb4dd660b8_31896136',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="right-column" class="col-xs-12 col-sm-4 col-md-3">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

              <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

              <?php }?>
            </div>
          <?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_18264445215bd1b12bece409_18952746 extends Smarty_Internal_Block
=======
class Block_4513364345bd48a30ce6e25_62461959 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_2195466915bd4bb4dd83fa3_96256110 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'footer' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_18264445215bd1b12bece409_18952746',
=======
    0 => 'Block_4513364345bd48a30ce6e25_62461959',
>>>>>>> dorota
=======
    0 => 'Block_2195466915bd4bb4dd83fa3_96256110',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_7241143245bd1b12bed89d5_12356267 extends Smarty_Internal_Block
=======
class Block_11831803025bd48a30cf46f9_82156987 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_807021635bd4bb4dd8ba70_68711147 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_7241143245bd1b12bed89d5_12356267',
=======
    0 => 'Block_11831803025bd48a30cf46f9_82156987',
>>>>>>> dorota
=======
    0 => 'Block_807021635bd4bb4dd8ba70_68711147',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
<<<<<<< HEAD
<<<<<<< HEAD
class Block_2482772395bd1b12bef4794_33049846 extends Smarty_Internal_Block
=======
class Block_17059319855bd48a30cfe9f2_93564208 extends Smarty_Internal_Block
>>>>>>> dorota
=======
class Block_20198339915bd4bb4dd97fa0_67430108 extends Smarty_Internal_Block
>>>>>>> dorota
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
    0 => 'Block_2482772395bd1b12bef4794_33049846',
=======
    0 => 'Block_17059319855bd48a30cfe9f2_93564208',
>>>>>>> dorota
=======
    0 => 'Block_20198339915bd4bb4dd97fa0_67430108',
>>>>>>> dorota
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
