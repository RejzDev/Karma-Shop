<?php /* Smarty version Smarty-3.1.6, created on 2021-08-09 14:13:08
         compiled from "D:\OpenServer\domains\shop.local/views/admin\admin_category\create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104969432261110b12a122b9-01342524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '507d1311ae29e7887eab0206569e22026ccfc4fa' => 
    array (
      0 => 'D:\\OpenServer\\domains\\shop.local/views/admin\\admin_category\\create.tpl',
      1 => 1628507587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104969432261110b12a122b9-01342524',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61110b12a48ba',
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'categoriesList' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61110b12a48ba')) {function content_61110b12a48ba($_smarty_tpl) {?>
<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="../../../index.php">Админпанель</a></li>
                    <li><a href="/admin/order">Управление категориями</a></li>
                    <li class="active">Добавить категорию</li>
                </ol>
            </div>


            <h4>Добавить новую категорию</h4>

            <br/>

            <?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&is_array($_smarty_tpl->tpl_vars['errors']->value)){?>
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                        <li> - <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
                    <?php } ?>
                </ul>
            <?php }?>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Название</p>
                        <input type="text" name="name" placeholder="" value="">

                        <p>Порядковый номер</p>
                        <input type="text" name="sort_order" placeholder="" value="">

                        <p>Категория</p>
                        <select name="category_id">
                            <?php if (is_array($_smarty_tpl->tpl_vars['categoriesList']->value)){?>
                                <option value="0">General</option>
                                <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoriesList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>

                                    </option>
                                <?php } ?>
                            <?php }?>
                        </select>
                        <p>Статус</p>
                        <select name="status">
                            <option value="1" selected="selected">Отображается</option>
                            <option value="0">Скрыта</option>
                        </select>

                        <br><br>

                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                    </form>
                </div>
            </div>


        </div>
    </div>
</section>



<?php }} ?>