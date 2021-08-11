<?php /* Smarty version Smarty-3.1.6, created on 2021-08-09 13:32:37
         compiled from "D:\OpenServer\domains\shop.local/views/admin\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56719629061110445f1b463-51954395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdee29379310482aedfeea91bba2061c793129b4' => 
    array (
      0 => 'D:\\OpenServer\\domains\\shop.local/views/admin\\index.tpl',
      1 => 1628504570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56719629061110445f1b463-51954395',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61110445f3b0a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61110445f3b0a')) {function content_61110445f3b0a($_smarty_tpl) {?>

<section>
    <div class="container">
        <div class="row">
            
            <br/>
            
            <h4>Добрый день, администратор!</h4>
            
            <br/>
            
            <p>Вам доступны такие возможности:</p>
            
            <br/>
            
            <ul>
                <li><a href="/admin/product">Управление товарами</a></li>
                <li><a href="/admin/category">Управление категориями</a></li>
                <li><a href="/admin/order">Управление заказами</a></li>
            </ul>
            
        </div>
    </div>
</section>


<?php }} ?>