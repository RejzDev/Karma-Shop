<?php /* Smarty version Smarty-3.1.6, created on 2021-08-10 15:13:25
         compiled from "D:\OpenServer\domains\shop.local/views/home\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6159661186110319eb20e74-74626468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e90243d529e9de0c3f3250234c78960056a7a10' => 
    array (
      0 => 'D:\\OpenServer\\domains\\shop.local/views/home\\cart.tpl',
      1 => 1628597604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6159661186110319eb20e74-74626468',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6110319eb50c3',
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'totalPrice' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6110319eb50c3')) {function content_6110319eb50c3($_smarty_tpl) {?><!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Shopping Cart</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Cart</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        <?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value!==false){?>
        <div class="cart_inner">
            <div class="table-responsive">
                <form action="/cart/checkout/" method="POST">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                    <tr id="product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
                        <td>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/cart.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <p><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span name="itemPrice_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
">$<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span>

                        </td>
                        <td>
                            <div class="product_count">
                                <input type="text" name="sst_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" id="sst_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" maxlength="12" value="1" title="Quantity:"
                                       class="input-text qty" onchange="conversionPrice(<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
); return false;">
                                <button onclick="plus( <?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
); return false;"
                                        class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                <button onclick="minus( <?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
); return false;"
                                        class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                            </div>
                        </td>
                        <td>
                            $ <span  id="itemTotal_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
">  <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span>

                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" id="removeFromCart_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" href="#" onclick="removeToCart(<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
); return false;"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>
                            <h5>Subtotal</h5>
                        </td>
                        <td>
                            $ <span  id="totalPrice" value="<?php echo $_smarty_tpl->tpl_vars['totalPrice']->value;?>
">
                                <?php echo $_smarty_tpl->tpl_vars['totalPrice']->value;?>

                            </span>
                        </td>
                    </tr>

                    <tr class="out_button_area">
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>
                            <div class="checkout_btn_inner d-flex align-items-center">
                                <a class="gray_btn" href="/">Continue Shopping</a>
                                <input type="submit" class="primary-btn" value="Proceed to checkout">
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                </form>
            </div>
        </div>
        <?php }else{ ?>
        Cart Null
        <?php }?>
    </div>
</section>
<!--================End Cart Area =================-->

<?php }} ?>