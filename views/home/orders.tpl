
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


            <h4>Список заказов</h4>

            <br/>


            <table class="table-bordered table-striped table">
                <tr>
                    <th>Order ID</th>
                    <th>Buyer's name</th>
                    <th>Buyer's phone number</th>
                    <th>Date of registration</th>
                    <th>Status</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                {foreach $ordersList as $order}
                    <tr>
                        <td>
                            <a href="/admin/order/view/{$order['id']}">
                                {$order['id']}
                            </a>
                        </td>
                        <td>{$order['user_name']}</td>
                        <td>{$order['user_phone']}</td>
                        <td>{$order['date']}</td>
                        <td></td>
                        <td><a href="/cabinet/order/{$order['id']}" title="View">View</a></td>
                    </tr>
                {/foreach}
            </table>

        </div>
    </div>
</section>

