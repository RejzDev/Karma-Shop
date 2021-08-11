<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Shopping Cart</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Cart</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        {if isset($smarty.session.user)}
        <div class="cart_inner">
            <div class="table-responsive">
                <form action="/cart/saveorder" method="POST">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach $productsInCart as $product}
                        <tr id="product_{$product['id']}">
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="img/cart.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <p>{$product['name']}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span name="itemPrice_{$product['id']}" id="itemPrice_{$product['id']}" value="{$product['price']}">${$product['price']}</span>
                                <input type="hidden" name="itemPrice_{$product['id']}"
                                       value="{$product['price']}"/>
                            </td>
                            <td>
                                <div class="product_count">
                                    <input type="hidden" name="itemCnt_{$product['id']}"
                                           value="{$product['cnt']}"/>

                                    <p>{$product['cnt']}</p>
                                    </div>
                            </td>
                            <td>
                                $ <span name="itemRealPrice_{$product['id']}"  id="itemRealPrice_{$product['id']}" value="{$product['realPrice']}">  {$product['realPrice']}</span>

                            </td>
                        </tr>
                    {/foreach}

                    <tr class="shipping_area">
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>
                            <h5>Shipping</h5>
                        </td>
                        <td>
                            <div class="shipping_box">

                                <input type="text" name="userName" placeholder="userName">
                                <input type="text" name="userPhone" placeholder="userPhone">
                                <input type="text" name="adress" placeholder="adress">
                                <input type="text" name="userComment" placeholder="userComment">

                            </div>
                        </td>
                    </tr>
                    <tr class="out_button_area">
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>
                            <div class="checkout_btn_inner d-flex align-items-center">


                                <input type="submit" name="submit" class="primary-btn" value="Save">
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                </form>
            </div>
        </div>
        {else}
        Login
        {/if}
    </div>
</section>
<!--================End Cart Area =================-->

