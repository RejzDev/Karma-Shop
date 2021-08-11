
<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Admin panel</a></li>
                    <li class="active">Goods management</li>
                </ol>
            </div>

            <a href="/admin/product/create" class="btn btn-default back"><i class="fa fa-plus"></i> Добавить товар</a>
            
            <h4>List of goods</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>Item ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th></th>
                    <th></th>
                </tr>
                {foreach $productsList as $product}
                    <tr>
                        <td>{$product['id']}</td>
                        <td>{$product['name']}</td>
                        <td>${$product['price']}</td>
                        <td><a href="/admin/product/update/{$product['id']}" title="Edit">Edit</a></td>
                        <td><a href="/admin/product/delete/{$product['id']}" title="Delete">Delete</a></td>
                    </tr>
                {/foreach}
            </table>

        </div>
    </div>
</section>


