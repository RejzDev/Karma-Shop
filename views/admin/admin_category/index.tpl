
<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Admin</a></li>
                    <li class="active">Categories</li>
                </ol>
            </div>

            <a href="/admin/category/create" class="btn btn-default back"><i class="fa fa-plus"></i> Add category</a>
            
            <h4>List category</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID category</th>
                    <th>Name category</th>
                    <th>Parent Id </th>
                    <th></th>
                    <th></th>
                </tr>
                {foreach $categoriesList as $category}
                    <tr>
                        <td>{$category['id']}</td>
                        <td>{$category['name']}</td>
                        <td>{$category['sort_order']}</td>
                        <td><a href="/admin/category/update/{$category['id']}" title="Edit">Edit</a></td>
                        <td><a href="/admin/category/delete/{$category['id']}" title="Delete">Delete</i></a></td>
                    </tr>
                {/foreach}
            </table>
            
        </div>
    </div>
</section>



