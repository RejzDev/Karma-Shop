<?php /* Smarty version Smarty-3.1.6, created on 2021-08-10 12:07:04
         compiled from "D:\OpenServer\domains\shop.local/views/admin\admin_product\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4263720861119ed5d4dc53-82525299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2baa95e946f9f6ecebd3777c00c4b99b5665c43' => 
    array (
      0 => 'D:\\OpenServer\\domains\\shop.local/views/admin\\admin_product\\update.tpl',
      1 => 1628586418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4263720861119ed5d4dc53-82525299',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61119ed5d91ea',
  'variables' => 
  array (
    'id' => 0,
    'product' => 0,
    'categoriesList' => 0,
    'categoryIds' => 0,
    'categoryId' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61119ed5d91ea')) {function content_61119ed5d91ea($_smarty_tpl) {?>
<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Admin panel</a></li>
                    <li><a href="/admin/product">Products management</a></li>
                    <li class="active">Edit products</li>
                </ol>
            </div>


            <h4>Edit products #<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Name products</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
">

                        <p>Price, $</p>
                        <input type="text" name="price" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
">
                        
                        <br/><br/>

                        <p>Brand</p>
                        <input type="text" name="brand" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['brand'];?>
">

                        <p>Image products</p>
                        <img src="" width="200" alt="" />
                        <input type="file" name="image" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
">

                        <p>Description</p>
                        <textarea name="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</textarea>
                        
                        <br/><br/>

                        <p>Availibility</p>
                        <select name="availability">
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['product']->value['availibility']==1){?> selected="selected"<?php }?>>Да</option>
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['product']->value['availibility']==0){?> selected="selected"<?php }?>>Нет</option>
                        </select>

                        <br/><br/>

                        <p>Category product</p>

                       <ul>


                           <?php if (is_array($_smarty_tpl->tpl_vars['categoriesList']->value)){?>
                          <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoriesList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                               <?php  $_smarty_tpl->tpl_vars['categoryId'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoryId']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryIds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoryId']->key => $_smarty_tpl->tpl_vars['categoryId']->value){
$_smarty_tpl->tpl_vars['categoryId']->_loop = true;
?>
                              <?php if ($_smarty_tpl->tpl_vars['categoryId']->value['id']==$_smarty_tpl->tpl_vars['category']->value['id']){?>
                           <li> -  <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</li>
                              <?php }?>
                               <?php } ?>
                          <?php } ?>
                           <?php }?>

                       </ul>

                        <br/><br/>

                        <p>New сategory product</p>
                        Select the new categories, because the old ones will be deleted
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

                        <p>Width</p>
                        <input type="text" name="width" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['width'];?>
">
                        <br/><br/>

                        <p>Height</p>
                        <input type="text" name="height" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['height'];?>
">
                        <br/><br/>

                        <p>Depth</p>
                        <input type="text" name="depth" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['depth'];?>
">
                        <br/><br/>

                        <p>Weight</p>
                        <input type="text" name="weight" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['weight'];?>
">
                        <br/><br/>

                        <p>Recommended</p>
                        <select name="recommend">
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['product']->value['recommend']==1){?>selected="selected"<?php }?> >Yes</option>
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['product']->value['recommend']==0){?>selected="selected"<?php }?>>No</option>
                        </select>

                        <br/><br/>
                        <p>Exclusive</p>
                        <select name="exclusive">
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['product']->value['exclusive']==1){?>selected="selected"<?php }?> >Yes</option>
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['product']->value['exclusive']==0){?>selected="selected"<?php }?>>No</option>
                        </select>

                        <br/><br/>

                        <p>Status</p>
                        <select name="status">
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['product']->value['status']==1){?>selected="selected"<?php }?> >Is displayed</option>
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['product']->value['status']==0){?>selected="selected"<?php }?>>Is hidden</option>

                        </select>
                        
                        <br/><br/>
                        
                        <input type="submit" name="submit" class="btn btn-default" value="Save">
                        
                        <br/><br/>
                        
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>



<?php }} ?>