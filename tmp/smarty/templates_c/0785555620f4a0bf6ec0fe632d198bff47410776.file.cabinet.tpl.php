<?php /* Smarty version Smarty-3.1.6, created on 2021-08-09 12:23:28
         compiled from "D:\OpenServer\domains\shop.local/views/home\cabinet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18557402856110f0b5a7d669-55230421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0785555620f4a0bf6ec0fe632d198bff47410776' => 
    array (
      0 => 'D:\\OpenServer\\domains\\shop.local/views/home\\cabinet.tpl',
      1 => 1628501006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18557402856110f0b5a7d669-55230421',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6110f0b5a98bb',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6110f0b5a98bb')) {function content_6110f0b5a98bb($_smarty_tpl) {?><!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Cabinet</h1>
                <nav class="d-flex align-items-center">
                    <a href="/">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Cart</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->


<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
            <h1>Кабинет пользователя</h1>

            <h3>Привет, <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</h3>
            <ul>
                <li><a href="/cabinet/edit">Редактировать даные</a></li>
                <li><a href="/user/history">Список покупок</a></li>
            </ul>

        </div>
        </div>
    </div>
</section>
<?php }} ?>