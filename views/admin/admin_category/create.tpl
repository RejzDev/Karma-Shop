
<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="../../../index.php">Admin panel</a></li>
                    <li><a href="/admin/order">Category management</a></li>
                    <li class="active">Add category</li>
                </ol>
            </div>


            <h4>Add category</h4>

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
                    <form action="#" method="post">

                        <p>Name</p>
                        <input type="text" name="name" placeholder="" value="">

                        <p>Serial number</p>
                        <input type="text" name="sort_order" placeholder="" value="">

                        <p>Category</p>
                        <select name="category_id">
                            {if is_array($categoriesList)}
                                <option value="0">General</option>
                                {foreach $categoriesList as $category}
                                    <option value="{$category['id']}">
                                        {$category['name']}
                                    </option>
                                {/foreach}
                            {/if}
                        </select>
                        <p>Status</p>
                        <select name="status">
                            <option value="1" selected="selected">Is displayed</option>
                            <option value="0">Hidden</option>
                        </select>

                        <br><br>

                        <input type="submit" name="submit" class="btn btn-default" value="Save">
                    </form>
                </div>
            </div>


        </div>
    </div>
</section>



