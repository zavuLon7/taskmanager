@extends('tasks.main')

@section('content')

<div class="wrapper">
   <div class="page-header page-header-xs"  data-parallax="true" style="background-image: url('../img/fabio-mangione.jpg');">
      <div class="filter"></div>
   </div>
   <div class="section profile-content">
      <div class="container">
         <div class="owner">
            <div class="name">
               <h4 class="title text-left">Task Manager<br /></h4>
            </div>
         </div>
         <div class="row" id="js_task_list">

            @foreach($user->tasks as $task)
              <div class="col-md-8 text-left" id="js_div_text_block_{{$task->id}}">
                 <div id="js_div_text_{{$task->id}}" class="task-text"> {{$task->task}} </div>
              </div>
              <btn id="js_edit_{{$task->id}}" data-task_id="{{$task->id}}" class="btn btn-outline-default btn-round changeblue js_edit_task"><i class="fa fa-cog"></i> Edit</btn>
              <btn id="js_remove_{{$task->id}}" data-task_id="{{$task->id}}" class="btn btn-outline-default btn-round changered js_remove_task"><i class="fa fa-minus"></i> Delete</btn>
            @endforeach

         </div>
         <hr/>

         <div class="row col-md-12 text-left" id="task_form" style="display:none;">
             <textarea name="task" class="col-md-8 textarea-style" rows="5" style="width:100%"></textarea>
             <btn id="js_save_new" class="btn btn-outline-default btn-round changegreen"><i class="fa fa-check"></i> Save </btn>
         </div>

         <btn id="js_add_new" class="btn btn-outline-default btn-round changegreen"><i class="fa fa-plus"></i> Add new</btn>


      </div>
   </div>
</div>

<style>
  .task-text { min-height: 50px;}
  .btn-outline-default { height: 40px; }
  .changeblue { margin-right: 10px;}
  .changegreen { margin-top:50px; }
  #task_form { margin-top:50px; }
  .changeblue:hover {background-color: #35c5f1;border: none;}
  .changered:hover {background-color: #f14f35;border: none;}
  .changegreen:hover {background-color: #6ce047;border: none;}
  .textarea-style {border:none;}
  #js_save_new {margin-left: 25px;}
</style>
@endsection
