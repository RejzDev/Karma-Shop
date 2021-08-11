<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">

                    {foreach $categoriesList as $category}
                        {if $categoryId == $category['id']}
                <h1>Category {$category['name']}</h1>
                <nav class="d-flex align-items-center">
                    <a href="/">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="/catalog">Catalog<span class="lnr lnr-arrow-right"></span></a>
                    <a href="/catalog/category/{$category['id']}">{$category['name']}</a>
                        {/if}
                    {/foreach}
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<div class="container">
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
            <div class="sidebar-categories">
                <div class="head">Browse Categories</div>
                <ul class="main-categories">
                    {foreach $categoriesList as $category}
                        <li class="main-nav-list"><a href="/category/{$category['id']}">{$category['name']}</a></li>
                    {/foreach}

                </ul>
            </div>
        </div>

        <div class="col-xl-9 col-lg-8 col-md-7">
            <!-- Start Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center">
                {$pagination->get()}

            </div>
            <!-- End Filter Bar -->
            <!-- Start Best Seller -->
            <section class="lattest-product-area pb-40 category-list">
                <div class="row">
                    <!-- single product -->
                    {foreach $product as $item }
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid" src="{$TemplateWebPath}img/product/p1.jpg" alt="">
                                <div class="product-details">
                                    <h6><a href="/product/{$item['id']}">{$item['name']}</h6></a>
                                    <div class="price">
                                        <h6>${$item['price']}</h6>
                                    </div>
                                    <div class="prd-bottom">

                                        <a href="#" id="addCart_{$item['id']}" class="social-info" onclick="addToCart({$item['id']}); return false;">
                                            <span class="ti-bag"></span>
                                            <p class="hover-text">add to bag</p>
                                        </a>
                                        <a href="/product/{$item['id']}" class="social-info">
                                            <span class="lnr lnr-move"></span>
                                            <p class="hover-text">view more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {/foreach}
                </div>
            </section>
            <!-- End Best Seller -->
            <!-- Start Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center">
                {$pagination->get()}
            </div>
            <!-- End Filter Bar -->
        </div>
    </div>
</div>