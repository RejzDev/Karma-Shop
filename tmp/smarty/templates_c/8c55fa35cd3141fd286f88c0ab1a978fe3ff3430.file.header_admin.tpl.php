<?php /* Smarty version Smarty-3.1.6, created on 2021-08-09 13:31:12
         compiled from "D:\OpenServer\domains\shop.local/views/admin\header_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:221060878611101bc769ec0-92487007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c55fa35cd3141fd286f88c0ab1a978fe3ff3430' => 
    array (
      0 => 'D:\\OpenServer\\domains\\shop.local/views/admin\\header_admin.tpl',
      1 => 1628505071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '221060878611101bc769ec0-92487007',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_611101bc78a7d',
  'variables' => 
  array (
    'TemplateAdminWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_611101bc78a7d')) {function content_611101bc78a7d($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Админпанель</title>
        <link href="<?php echo $_smarty_tpl->tpl_vars['TemplateAdminWebPath']->value;?>
css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['TemplateAdminWebPath']->value;?>
css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['TemplateAdminWebPath']->value;?>
css/prettyPhoto.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['TemplateAdminWebPath']->value;?>
css/price-range.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['TemplateAdminWebPath']->value;?>
css/animate.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['TemplateAdminWebPath']->value;?>
css/main.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['TemplateAdminWebPath']->value;?>
css/responsive.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="/template/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/template/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/template/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/template/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/template/images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <div class="page-wrapper">

            <header id="header"><!--header-->
                <div class="header_top"><!--header_top-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="contactinfo">
                                    <h5>
                                        <a href="/admin"><i class="fa fa-edit"></i> Админпанель</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="social-icons pull-right">
                                    <ul class="nav navbar-nav">
                                        <li><a href="/"><i class="fa fa-sign-out"></i>На сайт</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/header_top-->

               <?php }} ?>