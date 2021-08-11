<?php /* Smarty version Smarty-3.1.6, created on 2021-08-10 01:58:21
         compiled from "D:\OpenServer\domains\shop.local/views/admin\admin_order\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3567194516111b2c436c739-33762108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53928747b58877b1b7f7dffc7bd9b3579dd54170' => 
    array (
      0 => 'D:\\OpenServer\\domains\\shop.local/views/admin\\admin_order\\update.tpl',
      1 => 1628549900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3567194516111b2c436c739-33762108',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6111b2c43b97e',
  'variables' => 
  array (
    'id' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6111b2c43b97e')) {function content_6111b2c43b97e($_smarty_tpl) {?>
<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="../../../index.php">Админпанель</a></li>
                    <li><a href="/admin/order">Управление заказами</a></li>
                    <li class="active">Редактировать заказ</li>
                </ol>
            </div>


            <h4>Редактировать заказ #<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Имя клиента</p>
                        <input type="text" name="userName" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['user_name'];?>
">

                        <p>Телефон клиента</p>
                        <input type="text" name="userPhone" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['user_phone'];?>
">

                        <p>Комментарий клиента</p>
                        <input type="text" name="userComment" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['comment'];?>
">

                        <p>Adress</p>
                        <input type="text" name="adress" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['adress'];?>
">


                        <p>Дата оформления заказа</p>
                        <input type="text" name="date" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['date'];?>
">

                        <p>Статус</p>
                        <select name="status">
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['order']->value['status']==1){?> selected="selected"<?php }?>>Новый заказ</option>
                            <option value="2" <?php if ($_smarty_tpl->tpl_vars['order']->value['status']==2){?> selected="selected"<?php }?>>В обработке</option>
                            <option value="3" <?php if ($_smarty_tpl->tpl_vars['order']->value['status']==3){?> selected="selected"<?php }?>>Доставляется</option>
                            <option value="4" <?php if ($_smarty_tpl->tpl_vars['order']->value['status']==4){?> selected="selected"<?php }?>>Закрыт</option>
                        </select>
                        <br>
                        <br>
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>


<?php }} ?>