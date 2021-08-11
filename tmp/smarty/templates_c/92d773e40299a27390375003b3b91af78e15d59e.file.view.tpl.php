<?php /* Smarty version Smarty-3.1.6, created on 2021-08-10 02:18:05
         compiled from "D:\OpenServer\domains\shop.local/views/home\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9205511766111b7adef0e42-29614626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92d773e40299a27390375003b3b91af78e15d59e' => 
    array (
      0 => 'D:\\OpenServer\\domains\\shop.local/views/home\\view.tpl',
      1 => 1628550715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9205511766111b7adef0e42-29614626',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'products' => 0,
    'product' => 0,
    'productsQuantity' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6111b7adf22ce',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6111b7adf22ce')) {function content_6111b7adf22ce($_smarty_tpl) {?>
<section>
    <div class="container">
        <div class="row">

            <br/>



            <h4>Просмотр заказа #<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</h4>
            <br/>




            <h5>Информация о заказе</h5>
            <table class="table-admin-small table-bordered table-striped table">
                <tr>
                    <td>Номер заказа</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</td>
                </tr>
                <tr>
                    <td>Имя клиента</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['order']->value['user_name'];?>
</td>
                </tr>
                <tr>
                    <td>Телефон клиента</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['order']->value['user_phone'];?>
</td>
                </tr>
                <tr>
                    <td>Комментарий клиента</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['order']->value['comment'];?>
</td>
                </tr>
                <?php if ($_smarty_tpl->tpl_vars['order']->value['user_id']!=0){?>
                    <tr>
                        <td>ID клиента</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['order']->value['user_id'];?>
</td>
                    </tr>
                <?php }?>
                <tr>
                    <td><b>Статус заказа</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>Дата заказа</b></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['order']->value['date'];?>
</td>
                </tr>
            </table>

            <h5>Товары в заказе</h5>

            <table class="table-admin-medium table-bordered table-striped table ">
                <tr>
                    <th>ID товара</th>

                    <th>Название</th>
                    <th>Цена</th>
                    <th>Количество</th>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
</td>

                        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</td>
                        <td>$<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['productsQuantity']->value[$_smarty_tpl->tpl_vars['product']->value['id']];?>
</td>
                    </tr>
                <?php } ?>
            </table>

            <a href="/cabinet/order/" class="btn btn-default back"><i class="fa fa-arrow-left"></i> Назад</a>
        </div>


</section>


<?php }} ?>