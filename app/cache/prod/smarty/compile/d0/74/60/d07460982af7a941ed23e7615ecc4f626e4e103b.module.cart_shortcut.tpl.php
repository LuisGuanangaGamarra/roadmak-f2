<?php /* Smarty version Smarty-3.1.19, created on 2020-11-17 12:09:41
         compiled from "module:paypal/views/templates/hook/cart_shortcut.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20596340905fb403d52bbcd9-41830938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd07460982af7a941ed23e7615ecc4f626e4e103b' => 
    array (
      0 => 'module:paypal/views/templates/hook/cart_shortcut.tpl',
      1 => 1605544142,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '20596340905fb403d52bbcd9-41830938',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action_url' => 0,
    'PayPal_payment_type' => 0,
    'PayPal_tracking_code' => 0,
    'PayPal_img_esc' => 0,
    'shop_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fb403d52c0b23_70431314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb403d52c0b23_70431314')) {function content_5fb403d52c0b23_70431314($_smarty_tpl) {?>

<div id="container_express_checkout" style="float:right; margin: 10px 40px 0 0">
    <form id="paypal_payment_form_cart" class="paypal_payment_form" action="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action_url']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" method="post" data-ajax="false">
        <input type="hidden" name="method" value="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['PayPal_payment_type']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"/>
        <input type="hidden" name="current_shop_url" id="paypal_url_page" value="" />
        <input type="hidden" name="bn" value="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['PayPal_tracking_code']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" id="in_context_checkout_enabled" value="0">
        <input type="hidden" id="source_page" value="cart">
        <img id="payment_paypal_express_checkout" src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['PayPal_img_esc']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo smartyTranslate(array('s'=>'PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" style="cursor:pointer;" onclick="setInput();return false"/>

    </form>
</div>
<div class="clearfix"></div>
<script type="text/javascript" src="https://www.paypalobjects.com/api/checkout.js"></script>
<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_url']->value, ENT_QUOTES, 'UTF-8');?>
modules/paypal/views/js/shortcut_cart.js"></script>
<?php }} ?>
