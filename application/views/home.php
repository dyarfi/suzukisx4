<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="container">
  <div class="slider">
    <img class="img-responsive" src="<?php echo base_url('assets/public/img');?>/slider-01.jpg">
    <div class="hero">
      <hgroup>
          <h1><span>Test your</span> s-cross <span>knowledge</span></h1>        
          <h4>and get lucky with exciting prizes!</h4>
      </hgroup>
      <a class="btn btn-hero btn-sm" href="<?php echo base_url('quiz');?>">ENTER QUIZ</a>
      <div class="tnc"><a href="<?php echo base_url('page/terms-and-conditions');?>">Terms &amp; Conditions</a></div>
    </div>
  </div>  
  <div class="bar-title">
    <div class="article"><h3>ARTICLES</h3></div>
    <div class="article-bar-left"></div>
    <div class="article-bar-right"></div>
    <div class="article article-right"></div>
  </div>
  <div class="article-item">
    <?php foreach ($articles as $article) { ?>
        <div class="col-xs-12 col-sm-4 col-md-4">            
          <div class="thumbnail">
            <div class="text-caption">
              <p><?php echo date('D, d-m-Y',$article->added);?></p>
              <h3><a href="<?php echo base_url('read/article/'.$article->url);?>"><?php echo $article->subject;?></a></h3>
            </div>
            <div class="caption"></div>
            <?php if ($article->media) { ?>            
                <img class="img-responsive" src="<?php echo base_url('uploads/articles/'.$article->media);?>" />
            <?php } else { ?>
                <img class="img-responsive" src="<?php echo base_url('assets/public/img');?>/article-01.jpg" />
            <?php } ?>
          </div>
        </div>
    <?php } ?>
    <!--div class="col-xs-12 col-sm-4 col-md-4">            
      <div class="thumbnail">
        <div class="text-caption">
          <p>21 juli 2016</p>
          <h3><a href="article-page.php">Thumbnail Headline Dari berita</a></h3>
        </div>
        <div class="caption"></div>
        <img class="img-responsive" src="<?php echo base_url('assets/public/img');?>/article-01.jpg" />
      </div>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4">            
      <div class="thumbnail">
        <div class="text-caption">
          <p>21 juli 2016</p>
          <h3><a href="article-page.php">Thumbnail Headline Dari berita</a></h3>
        </div>
        <div class="caption"></div>
        <img class="img-responsive" src="<?php echo base_url('assets/public/img');?>/article-02.jpg" />
      </div>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4">            
      <div class="thumbnail">
        <div class="text-caption">
          <p>21 juli 2016</p>
          <h3><a href="article-page.php">Thumbnail Headline Dari berita</a></h3>
        </div>
        <div class="caption"></div>
        <img class="img-responsive" src="<?php echo base_url('assets/public/img');?>/article-03.jpg" />
      </div>
    </div-->
  </div>
</div><!-- /.container -->
<?php
/*
* This is when user already participated
*/
if (isset($gallery)) { ?>
<div class="container">
  <div class="text-center main-block">
    <h4>Gallery</h4>
    <div class="row-fluid" style="margin:170px auto">
      <ul class="list-unstyled list-inline">
        <?php foreach ($gallery as $img) { ?>    
        <li class="li-participated">
          <a href="<?php echo base_url('uploads/gallery/'.$img->file_name);?>" id="fancybox" title="<?php echo $this->Participants->getParticipant($img->participant_id)->email;?>">
            <img class="img-responsive" style="max-height:220px;<?php if ($attachment->id == $img->id) { echo 'border:2px dashed red;'; } ?>" src="<?php echo base_url('uploads/gallery/'.$img->file_name);?>"/>
          </a>
          <div class="participated">
            <?php echo $this->Participants->getParticipant($img->participant_id)->email;?>
          </div>          
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</div>
<?php
} else {
/*
* This is when user not yet participated
*/
}
?>