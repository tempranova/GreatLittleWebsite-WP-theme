  <div class="container-fluid">
    <div class="container">
      <footer class="footer">
        <div class="row">
          <div class="col-sm-4">
            <?php if (! dynamic_sidebar( 'footer-left' ) ) : ?>
                  <h3>Sidebar</h3>
                  <p>Please add widgets to your sidebar.</p>
                <?php endif; ?>
          </div>
          <div class="col-sm-4">
            <?php if (! dynamic_sidebar( 'footer-middle' ) ) : ?>
                  <h3>Sidebar</h3>
                  <p>Please add widgets to your sidebar.</p>
                <?php endif; ?>
          </div>
          <div class="col-sm-4">
            <?php if (! dynamic_sidebar( 'footer-right' ) ) : ?>
                  <h3>Sidebar</h3>
                  <p>Please add widgets to your sidebar.</p>
                <?php endif; ?>
          </div>
          <div class="col-xs-12">
            <p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>
          </div>
        </div>
      </footer>
    </div>
 </div> <!-- /container -->

    <?php wp_footer(); ?>
</body>
</html>