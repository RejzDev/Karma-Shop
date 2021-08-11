<?php /* Smarty version Smarty-3.1.6, created on 2021-08-09 21:49:45
         compiled from "D:\OpenServer\domains\shop.local/views/admin\admin_product\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:513798853611177d60f8735-75380529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8831eecaea45d868aef004dc84d1b6a8ce126ea2' => 
    array (
      0 => 'D:\\OpenServer\\domains\\shop.local/views/admin\\admin_product\\index.tpl',
      1 => 1628534984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '513798853611177d60f8735-75380529',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_611177d612187',
  'variables' => 
  array (
    'productsList' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_611177d612187')) {function content_611177d612187($_smarty_tpl) {?>
<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li class="active">Управление товарами</li>
                </ol>
            </div>

            <a href="/admin/product/create" class="btn btn-default back"><i class="fa fa-plus"></i> Добавить товар</a>
            
            <h4>Список товаров</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID товара</th>
                    <th>Название товара</th>
                    <th>Цена</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productsList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                        <td><a href="/admin/product/update/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" title="Edit">Edit</a></td>
                        <td><a href="/admin/product/delete/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" title="Delete">Delete</a></td>
                    </tr>
                <?php } ?>
            </table>

        </div>
    </div>
</section>


<?php }} ?>