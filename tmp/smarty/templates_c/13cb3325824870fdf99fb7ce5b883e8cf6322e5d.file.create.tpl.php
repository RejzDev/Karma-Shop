<?php /* Smarty version Smarty-3.1.6, created on 2021-08-09 23:10:06
         compiled from "D:\OpenServer\domains\shop.local/views/admin\admin_product\create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:510945932611177bdc56f03-63813272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13cb3325824870fdf99fb7ce5b883e8cf6322e5d' => 
    array (
      0 => 'D:\\OpenServer\\domains\\shop.local/views/admin\\admin_product\\create.tpl',
      1 => 1628539806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '510945932611177bdc56f03-63813272',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_611177bdcaa2c',
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'categoriesList' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_611177bdcaa2c')) {function content_611177bdcaa2c($_smarty_tpl) {?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="../../../index.php">Админпанель</a></li>
                    <li><a href="/admin/product">Управление товарами</a></li>
                    <li class="active">Редактировать товар</li>
                </ol>
            </div>


            <h4>Добавить новый товар</h4>

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
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Название товара</p>
                        <input type="text" name="name" placeholder="" value="">


                        <p>Стоимость, $</p>
                        <input type="text" name="price" placeholder="" value="">

                        <p>Категория</p>
                        <select name="category_id[]" size="3" multiple="multiple">
                           <?php if (is_array($_smarty_tpl->tpl_vars['categoriesList']->value)){?>
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

                        <br/><br/>

                        <p>Производитель</p>
                        <input type="text" name="brand" placeholder="" value="">

                        <p>Изображение товара</p>
                        <input type="file" name="image" placeholder="" value="">

                        <p>Детальное описание</p>
                        <textarea name="description"></textarea>

                        <br/><br/>

                        <p>Наличие на складе</p>
                        <select name="availability">
                            <option value="1" selected="selected">Да</option>
                            <option value="0">Нет</option>
                        </select>

                        <br/><br/>

                        <p>Width</p>
                        <input type="text" name="width" placeholder="" value="">
                        <br/><br/>

                        <p>Height</p>
                        <input type="text" name="height" placeholder="" value="">
                        <br/><br/>

                        <p>Depth</p>
                        <input type="text" name="depth" placeholder="" value="">
                        <br/><br/>

                        <p>Weight</p>
                        <input type="text" name="weight" placeholder="" value="">
                        <br/><br/>

                        <p>Рекомендуемые</p>
                        <select name="recommend">
                            <option value="1" selected="selected">Да</option>
                            <option value="0">Нет</option>
                        </select>

                        <br/><br/>
                        <p>Exclusive</p>
                        <select name="exclusive">
                            <option value="1" selected="selected">Да</option>
                            <option value="0">Нет</option>
                        </select>

                        <br/><br/>

                        <p>Статус</p>
                        <select name="status">
                            <option value="1" selected="selected">Отображается</option>
                            <option value="0">Скрыт</option>
                        </select>

                        <br/><br/>

                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">

                        <br/><br/>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>



<?php }} ?>