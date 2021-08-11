<?php /* Smarty version Smarty-3.1.6, created on 2021-08-08 22:30:43
         compiled from "D:\OpenServer\domains\shop.local/views/home\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:603741176110242fa256b6-61761726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd548d982baed25b61532c64c5c63054cbac3825b' => 
    array (
      0 => 'D:\\OpenServer\\domains\\shop.local/views/home\\register.tpl',
      1 => 1628450588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '603741176110242fa256b6-61761726',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6110242fa52c6',
  'variables' => 
  array (
    'result' => 0,
    'errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6110242fa52c6')) {function content_6110242fa52c6($_smarty_tpl) {?>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Login/Register</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Login/Register</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">

            <?php if ($_smarty_tpl->tpl_vars['result']->value){?>
            <p>your register</p>
            <?php }else{ ?>
                <?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&is_array($_smarty_tpl->tpl_vars['errors']->value)){?>
                    <ul>
                    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
                        <?php } ?>
                    </ul>
                    <?php }?>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Register</h3>
                    <form class="row login_form" action="#" method="post"">
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="submit" value="Register" name="submit" class="primary-btn">
                        </div>
                    </form>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<!--================End Login Box Area =================--><?php }} ?>