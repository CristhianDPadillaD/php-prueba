$(document).ready(function (){
    let edit = false;
    fetchTasks();

    $('#task-result').hide();

    $('#search').keyup(function(e){
      if($('#search').val()){
          let searchText = $('#search').val();

        $.ajax({
            url:'search.php',
            type:'POST',
            data: {searchText},
            success: function (response){
              let task_json = JSON.parse(response);
              let template = '';
              task_json.forEach(task =>{
                template +=`<li> ${task.name} </li>`;
              });
              $('#container').html(template);
              $('#task-result').show();
            }
        });
      }
    });


    $('#task-form').submit(function(e){
        const postData = {
            name: $('#name').val(),
            description: $('#description').val(),
            id: $('#taskId').val()
        }
        console.log("este es el id",postData.id);
        e.preventDefault();
        let url = edit ===false ? 'task_add.php' : 'task_edit.php';
        $.post(url, postData, function(response){
            console.log(response);
            fetchTasks();
          $('#task-form').trigger('reset');
        });


    });

    function fetchTasks(){
          $.ajax({
        url: 'task_list.php',
        type: 'GET',
        success: function (response){
            let task = JSON.parse(response);
            let template = '';
            task.forEach(task =>{
                template +=`
                <tr> 
                <td>${task.id}</td>
                <td> <a href ="#" class="task-name" taskID="${task.id}">${task.name}</a></td>
                <td>${task.description}</td>
                <td> <button class="task-delete btn btn-danger" taskId="${task.id}"> Delete </button> </td>
                </tr>
                `;
            });
            $('#task').html(template);
        }
    });
    }

    $(document).on('click','.task-delete',function(){
        if (confirm('Tas seguro?')){
             let taskId = $(this).attr('taskId');
        console.log(taskId);
        $.post('task_delete.php', {taskId}, function(response){
            console.log(response);
            fetchTasks();
        });
        }
    });

    $(document).on('click', '.task-name',function(){
        let taskID = $(this).attr('taskID');
        console.log(taskID);
        $.post('task_single.php',{taskID}, function(response){
            let task = JSON.parse(response);
            $('#name').val(task.name);
            $('#description').val(task.description);
            $('#taskId').val(task.id);
            edit = true;

            
        })

        
    });
    
});