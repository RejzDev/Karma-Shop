
<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="../../../index.php">Admin panel</a></li>
                    <li><a href="/admin/order">Order management</a></li>
                    <li class="active">Edit order</li>
                </ol>
            </div>


            <h4>Edit order #{$id}</h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Client name</p>
                        <input type="text" name="userName" placeholder="" value="{$order['user_name']}">

                        <p>Customer phone</p>
                        <input type="text" name="userPhone" placeholder="" value="{$order['user_phone']}">

                        <p>Customer comment</p>
                        <input type="text" name="userComment" placeholder="" value="{$order['comment']}">

                        <p>Adress</p>
                        <input type="text" name="adress" placeholder="" value="{$order['adress']}">


                        <p>Order date</p>
                        <input type="text" name="date" placeholder="" value="{$order['date']}">

                        <p>Status</p>
                        <select name="status">
                            <option value="1" {if $order['status'] == 1} selected="selected"{/if}>New order</option>
                            <option value="2" {if $order['status'] == 2} selected="selected"{/if}>In processing</option>
                            <option value="3" {if $order['status'] == 3} selected="selected"{/if}>Delivered</option>
                            <option value="4" {if $order['status'] == 4} selected="selected"{/if}>Closed</option>
                        </select>
                        <br>
                        <br>
                        <input type="submit" name="submit" class="btn btn-default" value="Save">
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>


