function searchAction(val){
    $('#typeahead').html('');
    $.ajax({type: 'POST', url: '/ajax/get_typeahead_admin', async: true, data:{searchText: val},
        success: function(data) {
            $('#typeahead').html(data);
        }
    });
}
$(document).ready(function(){
    $('#searchField').keyup(function(){
        searchAction($(this).val());
    });
    $('#searchAction').click(function(){
        var val = $('#searchField').val();
        searchAction(val);
    });
    $('body').click(function(){
        $('#typeahead .typeahead').css('display', 'none');
    });
});