<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="container">
  <div class="back-to-article">
    <div class="article"><h3><a href="<?php echo base_url();?>">BACK TO HOME</a></h3></div>
    <div class="article-bar-left"></div>
  </div>
  <div class="article-page terms-page">
    <h1><?php echo $page->subject;?></h1>
    <div class="body-text-article terms-conditions">
		<?php echo $page->text;?>
    </div>
    <!--div>Posted : <?php echo date('Y-m-d, D',$page->added);?></div-->
  </div>
</div><!-- /.container -->