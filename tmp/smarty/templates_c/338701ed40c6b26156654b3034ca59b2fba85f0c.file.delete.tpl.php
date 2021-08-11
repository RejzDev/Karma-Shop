<?php /* Smarty version Smarty-3.1.6, created on 2021-08-09 21:05:56
         compiled from "D:\OpenServer\domains\shop.local/views/admin\admin_category\delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29693087561116e84d81ad3-53633372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '338701ed40c6b26156654b3034ca59b2fba85f0c' => 
    array (
      0 => 'D:\\OpenServer\\domains\\shop.local/views/admin\\admin_category\\delete.tpl',
      1 => 1628532352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29693087561116e84d81ad3-53633372',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61116e84dbe86',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61116e84dbe86')) {function content_61116e84dbe86($_smarty_tpl) {?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Admin</a></li>
                    <li><a href="/admin/category">Управление категориями</a></li>
                    <li class="active">Delete category</li>
                </ol>
            </div>


            <h4>Delete category #<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</h4>


            <p>Вы действительно хотите удалить эту категорию?</p>

            <form method="post">
                <input type="submit" name="submit" value="Delete" />
            </form>

        </div>
    </div>
</section>

<?php }} ?>