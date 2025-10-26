

    <div class="container">
        <div class="footer-wrapper">
            <!----- about company ----->
            <div class="about-company">
                <?php dynamic_sidebar( 'footer-clmn-1' ); ?>
            </div>

            <!----- company links ----->
            <div class="footer-nav company">
                 <?php dynamic_sidebar( 'footer-clmn-2' ); ?>
            </div>

            <div class="footer-nav support">
                 <?php dynamic_sidebar( 'footer-clmn-3' ); ?>
            </div>

            <div class="footer-nav address">
                <?php dynamic_sidebar( 'footer-clmn-4' ); ?>
            </div>
        </div>

        <div class="copyright-area">
            <p>Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name') ?> All rights reserved</p>
        </div>
    </div>
