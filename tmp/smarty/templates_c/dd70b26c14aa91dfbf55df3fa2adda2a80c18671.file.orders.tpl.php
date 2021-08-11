<?php /* Smarty version Smarty-3.1.6, created on 2021-08-10 10:03:35
         compiled from "D:\OpenServer\domains\shop.local/views/home\orders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9190741666111b57893aaa8-44381787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd70b26c14aa91dfbf55df3fa2adda2a80c18671' => 
    array (
      0 => 'D:\\OpenServer\\domains\\shop.local/views/home\\orders.tpl',
      1 => 1628579014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9190741666111b57893aaa8-44381787',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6111b57896311',
  'variables' => 
  array (
    'ordersList' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6111b57896311')) {function content_6111b57896311($_smarty_tpl) {?>
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



<section>
    <div class="container">
        <div class="row">

            <br/>


            <h4>Список заказов</h4>

            <br/>


            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID заказа</th>
                    <th>Имя покупателя</th>
                    <th>Телефон покупателя</th>
                    <th>Дата оформления</th>
                    <th>Статус</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ordersList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value){
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
                    <tr>
                        <td>
                            <a href="/admin/order/view/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>

                            </a>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['order']->value['user_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['order']->value['user_phone'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['order']->value['date'];?>
</td>
                        <td></td>
                        <td><a href="/cabinet/order/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" title="View">View</a></td>
                    </tr>
                <?php } ?>
            </table>

        </div>
    </div>
</section>

<?php }} ?>