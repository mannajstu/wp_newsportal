<div class="footer_top_area">
      <div class="inner_footer_top"> <img src="<?php echo get_template_directory_uri();?>/images/add3.png" alt="" /> </div>
    </div>

<div class="footer_bottom_area">
      
     
<?php require_once get_template_directory() .'/template-parts/footer-menu.php';?>

      
    </div>
  </div>
</div>

<?php wp_footer(); ?>

<script type="text/javascript">
selectnav('nav', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
selectnav('f_menu', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
$('.bxslider').bxSlider({
    mode: 'fade',
    captions: true
});
</script>
</body>
</html>