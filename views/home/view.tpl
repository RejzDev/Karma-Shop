

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Login/Register</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Login/Register</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->


<section>
    <div class="container">
        <div class="row">

            <br/>



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
                        <td>ID клиента</td>
                        <td>{$order['user_id']}</td>
                    </tr>
                {/if}
                <tr>
                    <td><b>Order status</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>order date</b></td>
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

            <a href="/cabinet/order/" class="btn btn-default back"><i class="fa fa-arrow-left"></i> Back</a>
        </div>


</section>


