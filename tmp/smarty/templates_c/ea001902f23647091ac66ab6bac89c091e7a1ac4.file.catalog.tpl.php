<?php /* Smarty version Smarty-3.1.6, created on 2021-08-09 12:33:59
         compiled from "D:\OpenServer\domains\shop.local/views/home\catalog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:436952006610d5ee3c30407-60296006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea001902f23647091ac66ab6bac89c091e7a1ac4' => 
    array (
      0 => 'D:\\OpenServer\\domains\\shop.local/views/home\\catalog.tpl',
      1 => 1628501637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '436952006610d5ee3c30407-60296006',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_610d5ee3c771d',
  'variables' => 
  array (
    'categoriesList' => 0,
    'category' => 0,
    'pagination' => 0,
    'product' => 0,
    'TemplateWebPath' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610d5ee3c771d')) {function content_610d5ee3c771d($_smarty_tpl) {?><!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Catalog</h1>
                <nav class="d-flex align-items-center">
                    <a href="/">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="/catalog">Catalog</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<div class="container">
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
            <div class="sidebar-categories">
                <div class="head">Browse Categories</div>
                <ul class="main-categories">
                    <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoriesList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                        <li class="main-nav-list"><a href="/category/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a></li>
                    <?php } ?>

                </ul>
            </div>
        </div>

<div class="col-xl-9 col-lg-8 col-md-7">
    <!-- Start Filter Bar -->
    <div class="filter-bar d-flex flex-wrap align-items-center">
            <?php echo $_smarty_tpl->tpl_vars['pagination']->value->get();?>

    </div>
    <!-- End Filter Bar -->
    <!-- Start Best Seller -->
    <section class="lattest-product-area pb-40 category-list">
        <div class="row">
            <!-- single product -->
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
img/product/p1.jpg" alt="">
                        <div class="product-details">
                            <h6><a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h6></a>
                            <div class="price">
                                <h6>$<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="#" id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="social-info" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">add to bag</p>
                                </a>
                                <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">view more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <!-- End Best Seller -->
    <!-- Start Filter Bar -->
    <div class="filter-bar d-flex flex-wrap align-items-center">
        <?php echo $_smarty_tpl->tpl_vars['pagination']->value->get();?>

    </div>
    <!-- End Filter Bar -->
</div>
</div>
</div><?php }} ?>