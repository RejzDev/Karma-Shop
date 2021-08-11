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
        {if isset($products) && $products !== false}
        <div class="cart_inner">
            <div class="table-responsive">
                <form action="/cart/checkout/" method="POST">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach $products as $product}
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

                        </td>
                        <td>
                            <div class="product_count">
                                <input type="text" name="sst_{$product['id']}" id="sst_{$product['id']}" maxlength="12" value="1" title="Quantity:"
                                       class="input-text qty" onchange="conversionPrice({$product['id']}); return false;">
                                <button onclick="plus( {$product['id']}); return false;"
                                        class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                <button onclick="minus( {$product['id']}); return false;"
                                        class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                            </div>
                        </td>
                        <td>
                            $ <span  id="itemTotal_{$product['id']}" value="{$product['price']}">  {$product['price']}</span>

                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" id="removeFromCart_{$product['id']}" href="#" onclick="removeToCart({$product['id']}); return false;"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    {/foreach}
                    <tr>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>
                            <h5>Subtotal</h5>
                        </td>
                        <td>
                            $ <span  id="totalPrice" value="{$totalPrice}">
                                {$totalPrice}
                            </span>
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
                                <a class="gray_btn" href="/">Continue Shopping</a>
                                <input type="submit" class="primary-btn" value="Proceed to checkout">
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                </form>
            </div>
        </div>
        {else}
        Cart Null
        {/if}
    </div>
</section>
<!--================End Cart Area =================-->

