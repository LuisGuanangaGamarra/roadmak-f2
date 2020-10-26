<?php /* Smarty version Smarty-3.1.19, created on 2020-10-23 17:38:04
         compiled from "/var/www/roadmakshop/admin723ek0usy/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4705268125f92f8dc8ee1e8-09675710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e35d3b9106e27fd9c56ddf866785097f20a4811' => 
    array (
      0 => '/var/www/roadmakshop/admin723ek0usy/themes/default/template/content.tpl',
      1 => 1508771956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4705268125f92f8dc8ee1e8-09675710',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f92f8dc8f3336_42407244',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f92f8dc8f3336_42407244')) {function content_5f92f8dc8f3336_42407244($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
