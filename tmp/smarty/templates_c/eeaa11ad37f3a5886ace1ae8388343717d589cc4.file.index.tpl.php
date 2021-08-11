<?php /* Smarty version Smarty-3.1.6, created on 2021-08-09 13:53:06
         compiled from "D:\OpenServer\domains\shop.local/views/admin\admin_category\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9605040096111074ce75bd3-42614149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eeaa11ad37f3a5886ace1ae8388343717d589cc4' => 
    array (
      0 => 'D:\\OpenServer\\domains\\shop.local/views/admin\\admin_category\\index.tpl',
      1 => 1628506385,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9605040096111074ce75bd3-42614149',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6111074cea10e',
  'variables' => 
  array (
    'categoriesList' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6111074cea10e')) {function content_6111074cea10e($_smarty_tpl) {?>
<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Admin</a></li>
                    <li class="active">Categories</li>
                </ol>
            </div>

            <a href="/admin/category/create" class="btn btn-default back"><i class="fa fa-plus"></i> Add category</a>
            
            <h4>List category</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID category</th>
                    <th>Name category</th>
                    <th>Parent Id </th>
                    <th></th>
                    <th></th>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoriesList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['category']->value['sort_order'];?>
</td>
                        <td><a href="/admin/category/update/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" title="Edit">Edit</a></td>
                        <td><a href="/admin/category/delete/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" title="Delete">Delete</i></a></td>
                    </tr>
                <?php } ?>
            </table>
            
        </div>
    </div>
</section>



<?php }} ?>