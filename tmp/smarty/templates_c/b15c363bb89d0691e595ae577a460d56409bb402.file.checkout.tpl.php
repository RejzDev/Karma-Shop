<?php /* Smarty version Smarty-3.1.6, created on 2021-08-10 14:23:25
         compiled from "D:\OpenServer\domains\shop.local/views/home\checkout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:431528788611043a7b5b625-49283265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b15c363bb89d0691e595ae577a460d56409bb402' => 
    array (
      0 => 'D:\\OpenServer\\domains\\shop.local/views/home\\checkout.tpl',
      1 => 1628594602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '431528788611043a7b5b625-49283265',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_611043a7b9439',
  'variables' => 
  array (
    'productsInCart' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_611043a7b9439')) {function content_611043a7b9439($_smarty_tpl) {?><!-- Start Banner Area -->
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
        <?php if (isset($_SESSION['user'])){?>
        <div class="cart_inner">
            <div class="table-responsive">
                <form action="/cart/saveorder" method="POST">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productsInCart']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                                <input type="hidden" name="itemPrice_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"
                                       value="<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
"/>
                            </td>
                            <td>
                                <div class="product_count">
                                    <input type="hidden" name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"
                                           value="<?php echo $_smarty_tpl->tpl_vars['product']->value['cnt'];?>
"/>

                                    <p><?php echo $_smarty_tpl->tpl_vars['product']->value['cnt'];?>
</p>
                                    </div>
                            </td>
                            <td>
                                $ <span name="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"  id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['realPrice'];?>
">  <?php echo $_smarty_tpl->tpl_vars['product']->value['realPrice'];?>
</span>

                            </td>
                        </tr>
                    <?php } ?>

                    <tr class="shipping_area">
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>
                            <h5>Shipping</h5>
                        </td>
                        <td>
                            <div class="shipping_box">

                                <input type="text" name="userName" placeholder="userName">
                                <input type="text" name="userPhone" placeholder="userPhone">
                                <input type="text" name="adress" placeholder="adress">
                                <input type="text" name="userComment" placeholder="userComment">

                            </div>
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


                                <input type="submit" name="submit" class="primary-btn" value="Save">
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                </form>
            </div>
        </div>
        <?php }else{ ?>
        Login
        <?php }?>
    </div>
</section>
<!--================End Cart Area =================-->

<?php }} ?>