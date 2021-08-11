    <div class="page-buffer"></div>
</div>

<footer id="footer" class="page-footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div>
</footer><!--/Footer-->



    <script src="{$TemplateWebPath}js/home.js"></script>
    <script src="{$TemplateWebPath}js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
            crossorigin="anonymous"></script>
    <script src="{$TemplateWebPath}js/vendor/bootstrap.min.js"></script>
    <script src="{$TemplateWebPath}js/jquery.ajaxchimp.min.js"></script>
    <script src="{$TemplateWebPath}js/jquery.nice-select.min.js"></script>
    <script src="{$TemplateWebPath}js/jquery.sticky.js"></script>

    <script src="{$TemplateWebPath}js/nouislider.min.js"></script>
    <script src="{$TemplateWebPath}js/countdown.js"></script>
    <script src="{$TemplateWebPath}js/jquery.magnific-popup.min.js"></script>
    <script src="{$TemplateWebPath}js/owl.carousel.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{$TemplateWebPath}js/gmaps.min.js"></script>
    <script src="{$TemplateWebPath}js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>
</html>