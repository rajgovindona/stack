<div id="answer_form" class="question-row field-items">
    <?php 
    print render($form['answer_text']);
    print render($form['submit']);
    print drupal_render_children($form);
    ?>
</div> 