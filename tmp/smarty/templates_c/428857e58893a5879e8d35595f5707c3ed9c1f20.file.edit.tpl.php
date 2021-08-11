<?php /* Smarty version Smarty-3.1.6, created on 2021-08-09 12:32:15
         compiled from "D:\OpenServer\domains\shop.local/views/home\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:587585486110f36fd6d8c2-80539318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '428857e58893a5879e8d35595f5707c3ed9c1f20' => 
    array (
      0 => 'D:\\OpenServer\\domains\\shop.local/views/home\\edit.tpl',
      1 => 1628501532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '587585486110f36fd6d8c2-80539318',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6110f36fdb3d8',
  'variables' => 
  array (
    'result' => 0,
    'errors' => 0,
    'error' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6110f36fdb3d8')) {function content_6110f36fdb3d8($_smarty_tpl) {?><!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Edit User</h1>
                <nav class="d-flex align-items-center">
                    <a href="/">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="/cabinet/edit">Edit</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->


<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">

            <?php if ($_smarty_tpl->tpl_vars['result']->value){?>
                <h4>Ok</h4>
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
                        <h3>Edit</h3>
                        <form class="row login_form" action="#" method="post"">
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'New password'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="submit" value="Save" name="submit" class="primary-btn">
                        </div>
                        </form>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</section>
<?php }} ?>