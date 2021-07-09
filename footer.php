<!-- wrap -->
</div>

<?php wp_footer();?>

<footer class="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-6 col-sm-6 col-md-4 text-center">
                <?php 
                    if(is_active_sidebar('footer-1')) {
                        dynamic_sidebar('footer-1');
                    }           
                ?>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 text-center">
                <?php 
                    if(is_active_sidebar('footer-2')) {
                        dynamic_sidebar('footer-2');
                    }           
                ?>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                <?php 
                    if(is_active_sidebar('footer-3')) {
                        dynamic_sidebar('footer-3');
                    }           
                ?>
            </div>
            
        </div>

        <hr>
        <div class="copyright-text">
            Copyright © Akvariehobby 2020
        </div>
    </div>
</footer>

</body>
</html>
