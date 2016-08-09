<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $page_title .' | ' . config_item('title_name') .' - ' . config_item('site_title'); ?></title>  
    <script type="text/javascript">var base_URL = '<?php echo base_url();?>';</script>
    <?php 
    /*
    * MINIFY CSS 
    * ----------------------
    * Add css files that want to be minify
    */    
    // Add / Change default dir
    $this->minify->assets_dir = 'assets/public/css';
    // Add Stylesheet
    $this->minify->css([
      "public/css/bootstrap.min.css",
      "public/css/fancybox/jquery.fancybox.css",
      //"public/font-awesome/css/font-awesome.min.css",
      //"public/css/animate.css",
      "public/css/style.css",
      "public/css/media-queries.css"
    ]);
    /*
     * Adding additional stylesheet from controller
     */
    if (!empty($css_files)) { 
        foreach ($css_files as $sheet => $css):
          // Add js to minified
          $this->minify->add_css($css, $sheet);
        endforeach; 
    }
    /* 
     * ----------------- BEWARE OF DEPLOYING | ALWAYS SET TO FALSE AFTER RECOMPILE ------------------
     * Recompile css!!! Set this to true every times you add css library from anywhere
     * delete assets/public/css/styles.min.css to recompile again
     */
    echo $this->minify->deploy_css(FALSE);
   ?>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/public/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/public/css/style.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/public/css/media-queries.css');?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- <script src="js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-custom" class="<?php echo @$base_class;?>">

<?php $this->load->view('template/public/header'); ?>

	<div class="messageFlash">
		<?php $this->load->view('flashdata'); ?>
	</div>
    <?php $this->load->view($main); ?>        
	<?php $this->load->view('template/public/footer'); ?>	
	
    <!-- Core JavaScript Files -->
  <?php
    /*
    * MINIFY JS 
    * ----------------------
    * Add js files that want to be minify
    */
    // Add / Change default dir
    $this->minify->assets_dir = 'assets/public/js';
    // Add javascripts
    $this->minify->js([
      "public/js/jquery.min.js",
      "public/js/jquery.cookie.js",
      "public/js/jquery.fancybox.pack.js",
      "public/js/bootstrap.min.js",
      "admin/plugins/bootbox/bootbox.min.js",
      "public/js/jquery.easing.min.js",
      "public/js/jquery.scrollTo.js",
      "public/js/imagesloaded.pkgd.min.js",
      "public/js/style.js"      
    ]);
    /*
     * Adding additional javascript from controller
     */
    if (!empty($js_files)) { 
        foreach ($js_files as $group => $file):
          // Add js to minified
          $this->minify->add_js($file, $group);
        endforeach; 
    }
    /* 
     * ----------------- BEWARE OF DEPLOYING | ALWAYS SET TO FALSE AFTER RECOMPILE ------------------
     * Recompile javascript!!! Set this to true every times you add javascripts library from anywhere
     * delete assets/public/js/scripts.min.js to recompile again
     */
    echo $this->minify->deploy_js(FALSE);
  ?>
  <?php 
    /*
     * Debugging information only 
     *
     */
    /* if (!empty($js_files)) { foreach ($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
    <?php endforeach; } */ 
  ?>
  <!-- Custom Theme JavaScript -->
  <script type="text/javascript">
  $(document).ready(function() {     
  <?php 
    // Write the javascript inline in the controller
    echo ($js_inline) ? "\t".$js_inline."\n" : "";
  ?>
  });
  </script>
</body>
</html>
<?php //echo $this->benchmark->memory_usage();?>