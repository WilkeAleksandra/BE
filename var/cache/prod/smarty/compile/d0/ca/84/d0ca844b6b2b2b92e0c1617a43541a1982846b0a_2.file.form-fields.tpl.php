<?php
/* Smarty version 3.1.32, created on 2018-10-23 23:09:09
  from 'C:\wamp64\www\BE-projekt\themes\classic\templates\_partials\form-fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bcf8df548f670_89559963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0ca844b6b2b2b92e0c1617a43541a1982846b0a' => 
    array (
      0 => 'C:\\wamp64\\www\\BE-projekt\\themes\\classic\\templates\\_partials\\form-fields.tpl',
      1 => 1539604014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_5bcf8df548f670_89559963 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'hidden') {?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15727859915bcf8df52a7193_10982597', 'form_field_item_hidden');
?>


<?php } else { ?>

  <div class="form-group row <?php if (!empty($_smarty_tpl->tpl_vars['field']->value['errors'])) {?>has-error<?php }?>">
    <label class="col-md-3 form-control-label<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>">
      <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] !== 'checkbox') {?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>

      <?php }?>
    </label>
    <div class="col-md-6<?php if (($_smarty_tpl->tpl_vars['field']->value['type'] === 'radio-buttons')) {?> form-control-valign<?php }?>">

      <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] === 'select') {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13893372095bcf8df52dfec4_95013158', 'form_field_item_select');
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'countrySelect') {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11097002375bcf8df530ebf5_06890629', 'form_field_item_country');
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'radio-buttons') {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1413586615bcf8df5333e74_60515612', 'form_field_item_radio');
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'checkbox') {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20554614745bcf8df5364119_93699572', 'form_field_item_checkbox');
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'date') {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3507002045bcf8df537fbd6_42065295', 'form_field_item_date');
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'birthday') {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8179231405bcf8df53b3273_29858686', 'form_field_item_birthday');
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'password') {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20762146335bcf8df53e9788_40387955', 'form_field_item_password');
?>


      <?php } else { ?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15079221605bcf8df5416fb2_86813611', 'form_field_item_other');
?>


      <?php }?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5356253465bcf8df545f891_38657971', 'form_field_errors');
?>


    </div>

    <div class="col-md-3 form-control-comment">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_643086085bcf8df546a023_20205347', 'form_field_comment');
?>

    </div>
  </div>

<?php }
}
/* {block 'form_field_item_hidden'} */
class Block_15727859915bcf8df52a7193_10982597 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_hidden' => 
  array (
    0 => 'Block_15727859915bcf8df52a7193_10982597',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
">
  <?php
}
}
/* {/block 'form_field_item_hidden'} */
/* {block 'form_field_item_select'} */
class Block_13893372095bcf8df52dfec4_95013158 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_select' => 
  array (
    0 => 'Block_13893372095bcf8df52dfec4_95013158',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <select class="form-control form-control-select" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
            <option value disabled selected><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- please choose --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
?>
              <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> selected <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        <?php
}
}
/* {/block 'form_field_item_select'} */
/* {block 'form_field_item_country'} */
class Block_11097002375bcf8df530ebf5_06890629 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_country' => 
  array (
    0 => 'Block_11097002375bcf8df530ebf5_06890629',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <select
          class="form-control form-control-select js-country"
          name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
          <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
          >
            <option value disabled selected><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- please choose --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
?>
              <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> selected <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        <?php
}
}
/* {/block 'form_field_item_country'} */
/* {block 'form_field_item_radio'} */
class Block_1413586615bcf8df5333e74_60515612 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_radio' => 
  array (
    0 => 'Block_1413586615bcf8df5333e74_60515612',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
?>
            <label class="radio-inline">
              <span class="custom-radio">
                <input
                  name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                  type="radio"
                  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                  <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> checked <?php }?>
                >
                <span></span>
              </span>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>

            </label>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
/* {/block 'form_field_item_radio'} */
/* {block 'form_field_item_checkbox'} */
class Block_20554614745bcf8df5364119_93699572 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_checkbox' => 
  array (
    0 => 'Block_20554614745bcf8df5364119_93699572',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <span class="custom-checkbox">
            <input name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['field']->value['value']) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
            <span><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
            <label><?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>
</label >
          </span>
        <?php
}
}
/* {/block 'form_field_item_checkbox'} */
/* {block 'form_field_item_date'} */
class Block_3507002045bcf8df537fbd6_42065295 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_date' => 
  array (
    0 => 'Block_3507002045bcf8df537fbd6_42065295',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <input name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="form-control" type="date" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder'], ENT_QUOTES, 'UTF-8');
}?>">
          <?php if (isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'])) {?>
            <span class="form-control-comment">
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'], ENT_QUOTES, 'UTF-8');?>

            </span>
          <?php }?>
        <?php
}
}
/* {/block 'form_field_item_date'} */
/* {block 'form_field_item_birthday'} */
class Block_8179231405bcf8df53b3273_29858686 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_birthday' => 
  array (
    0 => 'Block_8179231405bcf8df53b3273_29858686',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\BE-projekt\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_select_date.php','function'=>'smarty_function_html_select_date',),));
?>

          <div class="js-parent-focus">
            <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');
$_prefixVariable57 = ob_get_clean();
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');
$_prefixVariable58 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- day --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable59 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- month --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable60 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- year --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable61 = ob_get_clean();
ob_start();
echo htmlspecialchars(date('Y'), ENT_QUOTES, 'UTF-8');
$_prefixVariable62 = ob_get_clean();
ob_start();
echo htmlspecialchars(date('Y'), ENT_QUOTES, 'UTF-8');
$_prefixVariable63 = ob_get_clean();
echo smarty_function_html_select_date(array('field_order'=>'DMY','time'=>$_prefixVariable57,'field_array'=>$_prefixVariable58,'prefix'=>false,'reverse_years'=>true,'field_separator'=>'<br>','day_extra'=>'class="form-control form-control-select"','month_extra'=>'class="form-control form-control-select"','year_extra'=>'class="form-control form-control-select"','day_empty'=>$_prefixVariable59,'month_empty'=>$_prefixVariable60,'year_empty'=>$_prefixVariable61,'start_year'=>$_prefixVariable62-100,'end_year'=>$_prefixVariable63),$_smarty_tpl);?>

          </div>
        <?php
}
}
/* {/block 'form_field_item_birthday'} */
/* {block 'form_field_item_password'} */
class Block_20762146335bcf8df53e9788_40387955 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_password' => 
  array (
    0 => 'Block_20762146335bcf8df53e9788_40387955',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="input-group js-parent-focus">
            <input
              class="form-control js-child-focus js-visible-password"
              name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
              type="password"
              value=""
              pattern=".{5,}"
              <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
            >
            <span class="input-group-btn">
              <button
                class="btn"
                type="button"
                data-action="show-password"
                data-text-show="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
                data-text-hide="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hide','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
              >
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

              </button>
            </span>
          </div>
        <?php
}
}
/* {/block 'form_field_item_password'} */
/* {block 'form_field_item_other'} */
class Block_15079221605bcf8df5416fb2_86813611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_other' => 
  array (
    0 => 'Block_15079221605bcf8df5416fb2_86813611',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <input
            class="form-control"
            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
            type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
            <?php if (isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder'])) {?>placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['maxLength']) {?>maxlength="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['maxLength'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
          >
          <?php if (isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'])) {?>
            <span class="form-control-comment">
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'], ENT_QUOTES, 'UTF-8');?>

            </span>
          <?php }?>
        <?php
}
}
/* {/block 'form_field_item_other'} */
/* {block 'form_field_errors'} */
class Block_5356253465bcf8df545f891_38657971 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_errors' => 
  array (
    0 => 'Block_5356253465bcf8df545f891_38657971',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['field']->value['errors']), 0, false);
?>
      <?php
}
}
/* {/block 'form_field_errors'} */
/* {block 'form_field_comment'} */
class Block_643086085bcf8df546a023_20205347 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_comment' => 
  array (
    0 => 'Block_643086085bcf8df546a023_20205347',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ((!$_smarty_tpl->tpl_vars['field']->value['required'] && !in_array($_smarty_tpl->tpl_vars['field']->value['type'],array('radio-buttons','checkbox')))) {?>
         <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Optional','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>

        <?php }?>
      <?php
}
}
/* {/block 'form_field_comment'} */
}
