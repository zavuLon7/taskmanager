$(document).ready(function(){

  $(document).on('click', '#js_add_new', function(){
    $('#task_form').fadeIn( 300, function() { });
    $('#js_add_new').fadeOut( 300, function() { });
    $('textarea[name="task"]').focus();
  });


  $(document).on('click', '#js_save_new', function(){
    var task = $('textarea[name="task"]').val();
    if($.trim(task) != ""){
      $('#task_form').fadeOut( 300, function() { });
      $('#js_add_new').fadeIn( 300, function() { });
      $.ajax({
            url: '/taskmanager/add',
            data: {'task': task, 'action': 'save'},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            datatype: 'JSON',
            success: function(json)
            {
              if(json.status == 200){
                $('#js_task_list').append(`<div class="col-md-8 text-left">
                   <div id="js_div_text_`+json.data.id+`" class="task-text"> `+json.data.task+` </div>
                </div>
                <btn id="js_edit_`+json.data.id+`" data-task_id="`+json.data.id+`" class="btn btn-outline-default btn-round changeblue js_edit_task"><i class="fa fa-cog"></i> Edit</btn>
                <btn id="js_remove_`+json.data.id+`" data-task_id="`+json.data.id+`" class="btn btn-outline-default btn-round changered js_remove_task"><i class="fa fa-minus"></i> Delete</btn>
                <hr />`);
                $('textarea[name="task"]').val('');
              }
            },
        })
    };
  });




  $(document).on('click', '.js_edit_task', function(){
    var task_id = $(this).data('task_id');
    var task_text = $('#js_div_text_'+task_id).text();
    $('#js_div_text_'+task_id).html(`<textarea id="textarea_task_`+task_id+`" name="edit_task" class="col-md-12 textarea-style" rows="3" >`+task_text+`</textarea>`)
    $(this).replaceWith(`<btn data-task_id="`+task_id+`" class="btn btn-outline-default btn-round changeblue js_save_edit_task"><i class="fa fa-check"></i> Save</btn>`);
    $('.js_save_edit_task').css('background-color','#b8f2f5')
  });




  $(document).on('click', '.js_save_edit_task', function(){
    var task_id = $(this).data('task_id');
    var task = $('textarea[name="edit_task"]').val();
    if($.trim(task) != ""){
      $(this).replaceWith(`<btn id="js_edit_`+task_id+`" data-task_id="`+task_id+`" class="btn btn-outline-default btn-round changeblue js_edit_task"><i class="fa fa-cog"></i> Edit</btn>`);
      $.ajax({
            url: '/taskmanager/edit/'+task_id,
            data: {'task': task, 'action': 'save'},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'PUT',
            datatype: 'JSON',
            success: function(json)
            {
              if(json.status == 200){
                $('#js_div_text_'+json.data.id).html(json.data.task);
              }
            },
        })
    };
  });


  $(document).on('click', '.js_remove_task', function(){
    var task_id = $(this).data('task_id');
    $.ajax({
          url: '/taskmanager/delete/'+task_id,
          data: {'action': 'delete'},
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          type: 'DELETE',
          datatype: 'JSON',
          success: function(json)
          {
            if(json.status == 200){
              $('#js_div_text_block_'+json.data.id).remove();
              $('#js_edit_'+json.data.id).remove();
              $('#js_remove_'+json.data.id).remove();
            }
          },
      })
  });





})
