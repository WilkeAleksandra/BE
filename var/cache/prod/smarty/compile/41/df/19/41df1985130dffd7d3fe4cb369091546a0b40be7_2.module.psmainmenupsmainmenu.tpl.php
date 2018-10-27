<?php
<<<<<<< HEAD
<<<<<<< HEAD
/* Smarty version 3.1.32, created on 2018-10-26 00:21:38
=======
/* Smarty version 3.1.32, created on 2018-10-27 17:54:26
>>>>>>> dorota
=======
/* Smarty version 3.1.32, created on 2018-10-27 21:24:17
>>>>>>> dorota
  from 'module:psmainmenupsmainmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_5bd241f2aa4b61_80504016',
=======
  'unifunc' => 'content_5bd48a32314228_20638313',
>>>>>>> dorota
=======
  'unifunc' => 'content_5bd4bb61e26ca0_49695666',
>>>>>>> dorota
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41df1985130dffd7d3fe4cb369091546a0b40be7' => 
    array (
      0 => 'module:psmainmenupsmainmenu.tpl',
      1 => 1540463725,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
<<<<<<< HEAD
function content_5bd241f2aa4b61_80504016 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5bd48a32314228_20638313 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
=======
function content_5bd4bb61e26ca0_49695666 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> dorota
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu' => 
  array (
    'compiled_filepath' => 'C:\\wamp64\\www\\BE-projekt\\var\\cache\\prod\\smarty\\compile\\41\\df\\19\\41df1985130dffd7d3fe4cb369091546a0b40be7_2.module.psmainmenupsmainmenu.tpl.php',
    'uid' => '41df1985130dffd7d3fe4cb369091546a0b40be7',
<<<<<<< HEAD
<<<<<<< HEAD
    'call_name' => 'smarty_template_function_menu_5618973605bd241f2a51a58_86052285',
=======
    'call_name' => 'smarty_template_function_menu_6683885395bd48a32293146_11289142',
>>>>>>> dorota
=======
    'call_name' => 'smarty_template_function_menu_10596267965bd4bb61da9fb9_04123082',
>>>>>>> dorota
  ),
));
$_smarty_tpl->_assignInScope('_counter', 0);?>


<div class="menu js-top-menu position-static hidden-sm-down" id="_desktop_top_menu">
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('nodes'=>$_smarty_tpl->tpl_vars['menu']->value['children']), true);?>

    <div class="clearfix"></div>
</div>
<?php }
<<<<<<< HEAD
<<<<<<< HEAD
/* smarty_template_function_menu_5618973605bd241f2a51a58_86052285 */
if (!function_exists('smarty_template_function_menu_5618973605bd241f2a51a58_86052285')) {
function smarty_template_function_menu_5618973605bd241f2a51a58_86052285(Smarty_Internal_Template $_smarty_tpl,$params) {
=======
/* smarty_template_function_menu_6683885395bd48a32293146_11289142 */
if (!function_exists('smarty_template_function_menu_6683885395bd48a32293146_11289142')) {
function smarty_template_function_menu_6683885395bd48a32293146_11289142(Smarty_Internal_Template $_smarty_tpl,$params) {
>>>>>>> dorota
=======
/* smarty_template_function_menu_10596267965bd4bb61da9fb9_04123082 */
if (!function_exists('smarty_template_function_menu_10596267965bd4bb61da9fb9_04123082')) {
function smarty_template_function_menu_10596267965bd4bb61da9fb9_04123082(Smarty_Internal_Template $_smarty_tpl,$params) {
>>>>>>> dorota
$params = array_merge(array('nodes'=>array(),'depth'=>0,'parent'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {?>
      <ul class="top-menu" <?php if ($_smarty_tpl->tpl_vars['depth']->value == 0) {?>id="top-menu"<?php }?> data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
?>
            <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['type'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['node']->value['current']) {?> current <?php }?>" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['page_identifier'], ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_assignInScope('_counter', $_smarty_tpl->tpl_vars['_counter']->value+1);?>
              <a
                class="<?php if ($_smarty_tpl->tpl_vars['depth']->value >= 0) {?>dropdown-item<?php }
if ($_smarty_tpl->tpl_vars['depth']->value === 1) {?> dropdown-submenu<?php }?>"
                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['url'], ENT_QUOTES, 'UTF-8');?>
" data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->tpl_vars['node']->value['open_in_new_window']) {?> target="_blank" <?php }?>
              >
                <?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
                                    <?php $_smarty_tpl->_assignInScope('_expand_id', mt_rand(10,100000));?>
                  <span class="float-xs-right hidden-md-up">
                    <span data-target="#top_sub_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse" class="navbar-toggler collapse-icons">
                      <i class="material-icons add">&#xE313;</i>
                      <i class="material-icons remove">&#xE316;</i>
                    </span>
                  </span>
                <?php }?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['label'], ENT_QUOTES, 'UTF-8');?>

              </a>
              <?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
              <div <?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?> class="popover sub-menu js-sub-menu collapse"<?php } else { ?> class="collapse"<?php }?> id="top_sub_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['node']->value['depth'],'parent'=>$_smarty_tpl->tpl_vars['node']->value), true);?>

              </div>
              <?php }?>
            </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php }
}}
<<<<<<< HEAD
<<<<<<< HEAD
/*/ smarty_template_function_menu_5618973605bd241f2a51a58_86052285 */
=======
/*/ smarty_template_function_menu_6683885395bd48a32293146_11289142 */
>>>>>>> dorota
=======
/*/ smarty_template_function_menu_10596267965bd4bb61da9fb9_04123082 */
>>>>>>> dorota
}
