<?php /* Smarty version Smarty-3.1.6, created on 2021-08-10 01:42:58
         compiled from "D:\OpenServer\domains\shop.local/views/admin\admin_order\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3559690156111ad23160e96-98400745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04ce558fe61402c68cad433141701811a9d75c92' => 
    array (
      0 => 'D:\\OpenServer\\domains\\shop.local/views/admin\\admin_order\\index.tpl',
      1 => 1628548666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3559690156111ad23160e96-98400745',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6111ad2318191',
  'variables' => 
  array (
    'ordersList' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6111ad2318191')) {function content_6111ad2318191($_smarty_tpl) {?>
<section>
    <div class="container">
        <div class="row">

            <br/>
                        
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="../../../index.php">Админпанель</a></li>
                    <li class="active">Управление заказами</li>
                </ol>
            </div>

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
                        <td><a href="/admin/order/view/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" title="View">View</a></td>
                        <td><a href="/admin/order/update/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" title="Edit">Edit</i></a></td>
                        <td><a href="/admin/order/delete/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" title="Delete">Delete</a></td>
                    </tr>
                <?php } ?>
            </table>

        </div>
    </div>
</section>

<?php }} ?>