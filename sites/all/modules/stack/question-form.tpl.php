<div id="answer_form" class="question-row field-items">
    <?php 
    print render($form['question_title']);
    print render($form['question_body']);
    print render($form['submit']);
    print drupal_render_children($form);
    ?>
</div> 