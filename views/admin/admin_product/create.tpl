

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="../../../index.php">Admin panel</a></li>
                    <li><a href="/admin/product">Goods management</a></li>
                    <li class="active">Edit product</li>
                </ol>
            </div>


            <h4>Add new product</h4>

            <br/>

            {if isset($errors) && is_array($errors)}
                <ul>
                    {foreach $errors as $error}
                        <li> - {$error}</li>
                    {/foreach}
                </ul>
            {/if}

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Product Name</p>
                        <input type="text" name="name" placeholder="" value="">


                        <p>Price, $</p>
                        <input type="text" name="price" placeholder="" value="">

                        <p>Category</p>
                        <select name="category_id[]" size="3" multiple="multiple">
                           {if is_array($categoriesList)}
                                {foreach $categoriesList as $category}
                                    <option value="{$category['id']}">
                                        {$category['name']}
                                    </option>
                                {/foreach}
                           {/if}
                        </select>

                        <br/><br/>

                        <p>Brand</p>
                        <input type="text" name="brand" placeholder="" value="">

                        <p>Product picture</p>
                        <input type="file" name="image" placeholder="" value="">

                        <p>Detailed description</p>
                        <textarea name="description"></textarea>

                        <br/><br/>

                        <p>Stock availability</p>
                        <select name="availability">
                            <option value="1" selected="selected">Yes</option>
                            <option value="0">No</option>
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

                        <p>recommended</p>
                        <select name="recommend">
                            <option value="1" selected="selected">Yes</option>
                            <option value="0">No</option>
                        </select>

                        <br/><br/>
                        <p>Exclusive</p>
                        <select name="exclusive">
                            <option value="1" selected="selected">Yes</option>
                            <option value="0">No</option>
                        </select>

                        <br/><br/>

                        <p>Status</p>
                        <select name="status">
                            <option value="1" selected="selected">Is displayed</option>
                            <option value="0">Is hidden</option>
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



