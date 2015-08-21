<?php
global $base_path;
 
$imgpath = $base_path . drupal_get_path('theme', 'bootstrap_business') .'/images/';
$question = $content['body']['#object'];
?>
<div id="<?php print $question->nid ?>" data-nkey="<?php echo md5( "qaz" . $question->nid ) ?>" style="margin-top:15px; position: relative;" class="question-row field-items">
     
    <div class="question-stat col-sm-12 col-md-12">
        <div style='text-align: center; float:left; width: 20px; margin-left: 20px;'>
            <div id="vote_up" class="vote" data-vote="up" data-voted="false" style=" cursor: pointer"><img style="margin: 0 auto;" src="<?php print $imgpath . 'arrowup.png' ?>" alt="Vote Up" /></div>
            <div id="vote_box" style=" text-align: center; "><?php echo $question->field_votes['und'][0]['value'] ?></div>
            <div id="vode_down" class="vote" data-vote="down" data-voted="false" style=" cursor: pointer"><img  style="margin: 0 auto;"  src="<?php print $imgpath . 'arrowdown.png' ?>" alt="Vote Down" /></div>
        </div>
         <div class="question-desc col-sm-8 col-md-10" style="float:left; padding-left: 15px; min-height: 150px; margin-top:10px; position: relative;">
        <?php print $question->body['und'][0]['value'];        ?>
        <div style="position: absolute; right: 20px; bottom:0; background-color:  beige;">
        <span style="color:gray; font-size: 10px;">Asked By:</span><?php echo $question->node_user; ?><br>
        <?php echo date('d-m-Y H:i:s' , $question->created); ?>
    </div>
    </div> 
    </div>
       
    
</div> 

<div class="wrapper col-md-12 clearfix">
    <hr  style=" border: 0; height: 2px; background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);">
    <h6>Answers list:</h6>
 <?php
 print $content['answer_list']['#markup'] ;
 ?>
</div>
<br> 

<div class="question-row field-items  col-sm-12 col-md-12"> 
    <hr  style=" border: 0; height: 2px; background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);">
<?php 
print drupal_render( $content['my_extra_content']['#markup'] );
?>
</div>