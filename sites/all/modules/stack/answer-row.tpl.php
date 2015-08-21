
<?php
        ///print '<pre>';
           //print_r($answer);
        ?>  <div id="<?php print $answer->nid ?>" style="position: relative; margin:2px; margin-left: 20px; min-height: 100px;background-color: blanchedalmond" class="col-sm-10 col-md-10 question-row field-items">
    
    <div style="padding: 5px 5px 5px 20px; " class="question-desc col-sm-12 col-md-10">
        <?php print $answer->body['und'][0]['value'];        ?>
        
    </div>   
    <div style="background: white; margin: 1px; position:absolute; bottom: 0; right: 0; padding:3px; padding-right: 10px;">
        <span style="color:gray; font-size: 10px;">Answered By:</span><?php echo $answer->user_name; ?><br>
        <?php echo date('d-m-Y H:i:s' , $answer->created); ?>
    </div>
        
   
</div> 