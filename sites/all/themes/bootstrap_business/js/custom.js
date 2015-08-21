jQuery(document).ready(function($) {
    console.log(Drupal.settings.basePath);
    $('.vote').click(function() {
        var nid = $(this).parents('.question-row').attr('id'); 
        var nkey = $(this).parents('.question-row').data('nkey');
        var vote = $(this).data('vote');
        $.ajax({
            url: Drupal.settings.basePath  + "?q=node_vote",
            type: 'post',
            dataType: 'json',
            data: {"nid":nid, vote: vote, nkey:nkey },
            success: function(response) {
                 if (response.status == 'success') {
                     $('#vote_box').text(response.total_vote);
                 }
                 else {
                     alert(response.message);
                 }
            },
            error: function() {
                alert();
            }, 
        });
    });
});