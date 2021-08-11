
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


            <h4>Edit products #{$id}</h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Name products</p>
                        <input type="text" name="name" placeholder="" value="{$product['name']}">

                        <p>Price, $</p>
                        <input type="text" name="price" placeholder="" value="{$product['price']}">
                        
                        <br/><br/>

                        <p>Brand</p>
                        <input type="text" name="brand" placeholder="" value="{$product['brand']}">

                        <p>Image products</p>
                        <img src="" width="200" alt="" />
                        <input type="file" name="image" placeholder="" value="{$product['image']}">

                        <p>Description</p>
                        <textarea name="description">{$product['description']}</textarea>
                        
                        <br/><br/>

                        <p>Availibility</p>
                        <select name="availability">
                            <option value="1" {if $product['availibility'] == 1} selected="selected"{/if}>Да</option>
                            <option value="0" {if $product['availibility'] == 0} selected="selected"{/if}>Нет</option>
                        </select>

                        <br/><br/>

                        <p>Category product</p>

                       <ul>


                           {if is_array($categoriesList)}
                          {foreach $categoriesList as $category}
                               {foreach $categoryIds as $categoryId}
                              {if $categoryId['id'] == $category['id']}
                           <li> -  {$category['name']}</li>
                              {/if}
                               {/foreach}
                          {/foreach}
                           {/if}

                       </ul>

                        <br/><br/>

                        <p>New сategory product</p>
                        Select the new categories, because the old ones will be deleted
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

                        <p>Width</p>
                        <input type="text" name="width" placeholder="" value="{$product['width']}">
                        <br/><br/>

                        <p>Height</p>
                        <input type="text" name="height" placeholder="" value="{$product['height']}">
                        <br/><br/>

                        <p>Depth</p>
                        <input type="text" name="depth" placeholder="" value="{$product['depth']}">
                        <br/><br/>

                        <p>Weight</p>
                        <input type="text" name="weight" placeholder="" value="{$product['weight']}">
                        <br/><br/>

                        <p>Recommended</p>
                        <select name="recommend">
                            <option value="1" {if $product['recommend'] == 1}selected="selected"{/if} >Yes</option>
                            <option value="0" {if $product['recommend'] == 0}selected="selected"{/if}>No</option>
                        </select>

                        <br/><br/>
                        <p>Exclusive</p>
                        <select name="exclusive">
                            <option value="1" {if $product['exclusive'] == 1}selected="selected"{/if} >Yes</option>
                            <option value="0" {if $product['exclusive'] == 0}selected="selected"{/if}>No</option>
                        </select>

                        <br/><br/>

                        <p>Status</p>
                        <select name="status">
                            <option value="1" {if $product['status'] == 1}selected="selected"{/if} >Is displayed</option>
                            <option value="0" {if $product['status'] == 0}selected="selected"{/if}>Is hidden</option>

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



