
<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="../../../index.php">Admin panel</a></li>
                    <li><a href="/admin/order">Order management</a></li>
                    <li class="active">View order</li>
                </ol>
            </div>


            <h4>View order #{$order['id']}</h4>
            <br/>




            <h5>information about order</h5>
            <table class="table-admin-small table-bordered table-striped table">
                <tr>
                    <td>Order number</td>
                    <td>{$order['id']}</td>
                </tr>
                <tr>
                    <td>Client name</td>
                    <td>{$order['user_name']}</td>
                </tr>
                <tr>
                    <td>Customer phone</td>
                    <td>{$order['user_phone']}</td>
                </tr>
                <tr>
                    <td>Customer comment</td>
                    <td>{$order['comment']}</td>
                </tr>
                {if $order['user_id'] != 0}
                    <tr>
                        <td>Client ID</td>
                        <td>{$order['user_id']}</td>
                    </tr>
                {/if}
                <tr>
                    <td><b>Order status</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>Order date</b></td>
                    <td>{$order['date']}</td>
                </tr>
            </table>

            <h5>Items in order</h5>

            <table class="table-admin-medium table-bordered table-striped table ">
                <tr>
                    <th>Item ID</th>

                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
                {foreach $products as $product}
                    <tr>
                        <td>{$product['id']}</td>

                        <td>{$product['name']}</td>
                        <td>${$product['price']}</td>
                        <td>{$productsQuantity[$product['id']]}</td>
                    </tr>
                {/foreach}
            </table>

            <a href="/admin/order/" class="btn btn-default back"><i class="fa fa-arrow-left"></i> Back</a>
        </div>


</section>


