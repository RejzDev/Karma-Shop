

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Admin panel</a></li>
                    <li><a href="/admin/category">Category management</a></li>
                    <li class="active">Edit category</li>
                </ol>
            </div>


            <h4>Edit category "<?php echo $category['name']; ?>"</h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Name</p>
                        <input type="text" name="name" placeholder="" value="{$category['name']}">

                        <p>Serial number</p>
                        <input type="text" name="sort_order" placeholder="" value="{$category['sort_order']}">
                        
                        <p>Status</p>
                        <select name="status">
                            <option value="1" {if $category['status'] == 1} selected="selected"{/if}>Is displayed</option>
                            <option value="0" {if $category['status'] == 0} selected="selected"{/if}>Hidden</option>
                        </select>

                        <br><br>
                        
                        <input type="submit" name="submit" class="btn btn-default" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



