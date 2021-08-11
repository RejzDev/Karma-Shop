<?php /* Smarty version Smarty-3.1.6, created on 2021-08-09 21:49:56
         compiled from "D:\OpenServer\domains\shop.local/views/admin\admin_product\delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:926310545611178d4537209-13784122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dfd2dccb26093d909e8661be06f09e6b7552fc8' => 
    array (
      0 => 'D:\\OpenServer\\domains\\shop.local/views/admin\\admin_product\\delete.tpl',
      1 => 1628506622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '926310545611178d4537209-13784122',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_611178d456db3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_611178d456db3')) {function content_611178d456db3($_smarty_tpl) {?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="../../../index.php">Админпанель</a></li>
                    <li><a href="/admin/product">Управление товарами</a></li>
                    <li class="active">Удалить товар</li>
                </ol>
            </div>


            <h4>Удалить товар #<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</h4>


            <p>Вы действительно хотите удалить этот товар?</p>

            <form method="post">
                <input type="submit" name="submit" value="Удалить" />
            </form>

        </div>
    </div>
</section>



<?php }} ?>