<?php /* Smarty version Smarty-3.1.6, created on 2021-08-09 13:35:17
         compiled from "D:\OpenServer\domains\shop.local/views/admin\footer_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34368191861110446004a60-97245438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '850603a1ec24e06b161b0cd108d32f5d27157509' => 
    array (
      0 => 'D:\\OpenServer\\domains\\shop.local/views/admin\\footer_admin.tpl',
      1 => 1628505307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34368191861110446004a60-97245438',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6111044600840',
  'variables' => 
  array (
    'TemplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6111044600840')) {function content_6111044600840($_smarty_tpl) {?>    <div class="page-buffer"></div>
</div>

<footer id="footer" class="page-footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div>
</footer><!--/Footer-->



    <script src="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
js/home.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
            crossorigin="anonymous"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
js/jquery.nice-select.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
js/jquery.sticky.js"></script>

    <script src="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
js/nouislider.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
js/countdown.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
js/owl.carousel.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
js/gmaps.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>
</html><?php }} ?>