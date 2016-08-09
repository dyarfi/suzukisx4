<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="container">
    <div class="quiz-page">
        <h1>Test your s-cross knowledge</h1>
        <h4>connect to <a href="">facebook</a>, enter your answers</h4>
        <h4>below and get exciting prizes!</h4>
        <div class="error-handler">
            <?php if (!empty($progress)) { ?> 
            <div class="col-md-12 center-block text-center">
                <div class="second circle">
                    <strong></strong>
                    <span><small>COMPLETED</small></span>
                </div>
            </div>
            <?php } ?>                        
            <br/><br/><br/><br/><br/><br/>                            
            <div class="clearfix"></div>
            <?php echo validation_errors('<div class="alert alert-danger" role="alert"><span>', '</span></div>'); ?>
        </div>            
        <div class="body-quiz">            
            <?php if ($questionnaires) { 
                echo form_open(base_url('quiz'),['id'=>'form-questionnaire','enctype'=>'multipart/form-data','role'=>'form','name'=>'questionnaire']);   
                $i=1;
                foreach($questionnaires as $questionnaire) { ?>
                <div class="quiz">
                    <div class="quiz-number-box">
                      <div class="quiz-number"><h4><?php echo $i;?></h4></div>
                      <div class="quiz-number-left"></div> 
                    </div>
                    <?php echo $questionnaire->questionnaire_text;?>
                     <div class="answer">
                        <div class="funkyradio">
                          <?php 
                            if ($questions) { ?>
                                <?php 
                                foreach ($questions as $question) { 
                                  if ($questionnaire->id === $question->questionnaire_id) { ?>
                                    <div class="funkyradio-primary">
                                        <input type="radio" <?php echo ($fields['qrid_'.$question->questionnaire_id] == 'qsid_'.$question->id ? 'checked="checked"' : '');?> name="qrid_<?php echo $questionnaire->id;?>" id="qsid_<?php echo $question->id;?>" value="qsid_<?php echo $question->id;?>"/>
                                        <label for="qsid_<?php echo $question->id;?>"><?php echo preg_replace('/(\D+.\:)/','',strip_tags($question->question_text));?></label>
                                        <?php 
                                        if ($question->file_name) {  /* ?>
                                        <div class="center-block">
                                            <img style="height:160px;margin:0 auto 10px auto;" src="<?php echo base_url('uploads/questionnaire/questions/'.$question->file_name);?>" class="img-thumbnail"/>
                                        </div>
                                        <?php */
                                        } ?>                                              
                                    <?php //echo $errors['qrid_'.$question->questionnaire_id]; ?>                                                                                      
                                    </div>
                                  <?php 
                                  }
                                } ?>
                            <?php
                            }
                          ?>                                        
                        </div>
                    </div>
                </div>
            <?php
                $i++;
                }      
            ?>
            <div class="submit-quiz">
                <button class="btn btn-hero btn-sm" role="button" type="submit">SUBMIT</button>
                <div class="tnc"><a href="<?php echo base_url('page/terms-and-conditions');?>">Terms &amp; Conditions</a></div>
            </div>
            <?php echo form_close(); ?>
        </div>
        <?php 
        } else { ?>
            <div class="">  
                <h1>Hooray, you're done!!!! <small>Thanks for participating!</small></h1>
            </div>
        <?php  
        } 
        ?>
    </div>
</div><!-- /.container -->




<!--div class="row-fluid" style="margin:200px auto 300px auto; ">
  <div class="center-block">
    <div class="text-center main-block">
      <div class="center-block clearfix main-box">
        <?php echo form_open('',['class'=>'form-inline','id'=>'submit_email']);?>
        <h3>Please Input your Email first...</h3>
        <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'email@d3.dentsu.co.id']);?>
        <?php echo form_submit(['type'=>'submit', 'name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-primary']);?>
        <div class="msg"></div>
        <?php echo form_close();?>
      </div>
    </div>
  </div>
</div-->   



