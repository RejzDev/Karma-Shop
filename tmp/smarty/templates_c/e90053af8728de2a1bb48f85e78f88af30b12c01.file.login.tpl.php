<?php /* Smarty version Smarty-3.1.6, created on 2021-08-09 11:04:17
         compiled from "D:\OpenServer\domains\shop.local/views/home\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1182858706110dfb0ade963-98745003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e90053af8728de2a1bb48f85e78f88af30b12c01' => 
    array (
      0 => 'D:\\OpenServer\\domains\\shop.local/views/home\\login.tpl',
      1 => 1628496256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1182858706110dfb0ade963-98745003',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6110dfb0affdc',
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'TemplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6110dfb0affdc')) {function content_6110dfb0affdc($_smarty_tpl) {?><!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Login/Register</h1>
                <nav class="d-flex align-items-center">
                    <a href="/">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="/user/login">Login/Register</a>
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
            <div class="col-lg-6">
                <?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&is_array($_smarty_tpl->tpl_vars['errors']->value)){?>
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                    <li> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 </li>
                    <?php } ?>
                </ul>
                <?php }?>
                <div class="login_box_img">
                    <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
img/login.jpg" alt="">
                    <div class="hover">
                        <h4>New to our website?</h4>
                        <p>There are advances being made in science and technology everyday, and a good example of this is the</p>
                        <a class="primary-btn" href="/user/register">Create an Account</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Log in to enter</h3>
                    <form class="row login_form" action="#" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="submit" name="submit" value="Log In" class="primary-btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================--><?php }} ?>