<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Edit User</h1>
                <nav class="d-flex align-items-center">
                    <a href="/">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="/cabinet/edit">Edit</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->


<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">

            {if $result}
                <h4>Ok</h4>
            {else}
                {if isset($errors) && is_array($errors)}
                    <ul>
                        {foreach $errors as $error}
                            <li>{$error}</li>
                        {/foreach}
                    </ul>
                {/if}
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Edit</h3>
                        <form class="row login_form" action="#" method="post"">
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Username" value="{$user['name']}">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'New password'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="submit" value="Save" name="submit" class="primary-btn">
                        </div>
                        </form>
                    </div>
                </div>
            {/if}
        </div>
    </div>
</section>
