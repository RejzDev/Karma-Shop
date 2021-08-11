<?php /* Smarty version Smarty-3.1.6, created on 2021-08-09 21:17:02
         compiled from "D:\OpenServer\domains\shop.local/views/admin\admin_category\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15562299846111711e344771-98209463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6e7644c9cf8581a64cc2810b048bfbc4f5f6eb1' => 
    array (
      0 => 'D:\\OpenServer\\domains\\shop.local/views/admin\\admin_category\\update.tpl',
      1 => 1628532980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15562299846111711e344771-98209463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6111711e3886d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6111711e3886d')) {function content_6111711e3886d($_smarty_tpl) {?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/category">Управление категориями</a></li>
                    <li class="active">Редактировать категорию</li>
                </ol>
            </div>


            <h4>Редактировать категорию "<<?php ?>?php echo $category['name']; ?<?php ?>>"</h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Название</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
">

                        <p>Порядковый номер</p>
                        <input type="text" name="sort_order" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['sort_order'];?>
">
                        
                        <p>Статус</p>
                        <select name="status">
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['category']->value['status']==1){?> selected="selected"<?php }?>>Отображается</option>
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['category']->value['status']==0){?> selected="selected"<?php }?>>Скрыта</option>
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