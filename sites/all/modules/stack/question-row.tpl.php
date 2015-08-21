<div id="<?php print $question->nid ?>" style="position: relative; margin: 5px; padding: 10px; background-color: white;" class="col-md-12 question-row field-items">
    <div class="tags-cloud question-stat col-sm-12 col-md-2">
        <div class="col-xd-3 col-md-12" style="border:1px solid gray; padding: 5px; margin: 2px; ">Views<span class="pull-right"><?php echo $question->field_views['und'][0]['value'] ?></span></div>
        <div class="col-xd-3 col-md-12" style="border:1px solid gray; padding: 5px; margin: 2px; ">Answers<span class="pull-right"><?php echo $question->field_answers['und'][0]['value'] ?></span></div>
        <div class="col-xd-3 col-md-12" style="border:1px solid gray; padding: 5px; margin: 2px; ">Vote<span class="pull-right"><?php echo $question->field_votes['und'][0]['value'] ?></span></div>
    </div>
    <div  class="question-desc col-sm-12 col-md-10">
    <h4 class="question-title"><?php print l($question->title,   url('node/' . $question->nid , array('absolute' => true))); ?></h4>
    
    <div>
        <?php print substr($question->body['und'][0]['value'], 0, 250);          ?>
    </div>    
    </div>
     
        <div style="background: white; margin: 1px; position:absolute; bottom: 0; right: 0; padding:3px; padding-right: 10px;">
        <span style="color:gray; font-size: 10px;">Asked By:</span><?php echo $question->user_name; ?><br>
        <?php echo date('d-m-Y H:i:s' , $question->created); ?>
    </div>
    
</div> 