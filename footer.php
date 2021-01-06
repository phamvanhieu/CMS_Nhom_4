</div></div></div>
<!-- =====  FOOTER START ===== -->
<div class="footer pt_60 mt_30">
      <div class="container">
        <div class="row">
          <div div class="footer-widgets">  
            <?php if (is_active_sidebar('sidebar-footer')): ?>
                    <div class="row">
                      <?php dynamic_sidebar('sidebar-footer'); ?>
                    </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="text-center">&copy; Sản Phẩm Thuộc Về Nhóm 4</div>
        </div>
      </div>
    </div>
</div>
<!-- =====  FOOTER END  ===== -->
<a id="scrollup"><i class="far fa-arrow-alt-circle-up"></i></i></a>
<script src="<?php echo get_template_directory_uri() ?>/frontend/js/jQuery_v3.1.1.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/frontend/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/frontend/js/custom.js"></script>
<?php wp_footer(); ?>
</body>
</html>