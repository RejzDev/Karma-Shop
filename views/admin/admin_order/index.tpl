
<section>
    <div class="container">
        <div class="row">

            <br/>
                        
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="../../../index.php">Admin panel</a></li>
                    <li class="active">Order management</li>
                </ol>
            </div>

            <h4>Order list</h4>

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
                        <td><a href="/admin/order/view/{$order['id']}" title="View">View</a></td>
                        <td><a href="/admin/order/update/{$order['id']}" title="Edit">Edit</i></a></td>
                        <td><a href="/admin/order/delete/{$order['id']}" title="Delete">Delete</a></td>
                    </tr>
                {/foreach}
            </table>

        </div>
    </div>
</section>

