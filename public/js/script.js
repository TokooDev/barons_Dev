$(document).ready(function(){
   //ROOM
   //Show all rooms
   showAllRooms();
   function showAllRooms(){
       $.ajax({
           url:"../../controllers/chambrescontroller.php",
           type:"POST",
           data:{action:"view"},
           success: function(response){
               //console.log(response);
               $("#showRooms").html(response);
               $("#table-rooms").DataTable({
                  order:[0,'desc']
               });
           }
       });
   }

   //Add a room
   $("#addRoom").click(function(e){
      if($("#addRoom-form")[0].checkValidity()){
         e.preventDefault();
         $.ajax({
            url:"../../controllers/chambrescontroller.php",
            type:"POST",
            data: $("#addRoom-form").serialize()+"&action=insert",
            success :function(response){
               Swal.fire({
                  title: 'Chambre ajoutée avec succés',
                  icon: 'success'
               })
               $("#addRoom-modal").modal('hide');
               $("#addRoom-form")[0].reset();
               showAllRooms();
            }
         });
      }
   });

   //Show room details by id
   $("body").on("click", ".editBtn", function(e){
      e.preventDefault();
      let id = $(this).attr('id');
      $.ajax({
         url:"../../controllers/chambrescontroller.php",
         type:"POST",
         data:{id:id},
         success:function(response){
            let data = JSON.parse(response);
            $("#id").val(data.id);
            $("#numBat").val(data.numBat);
            $("#numChamb").val(data.numChamb);
            $("#type").val(data.type);
         }
      });

   });
   //Update room
   $("#updateRoom").click(function(e){
      if($("#editRoom-form")[0].checkValidity()){
         e.preventDefault();
         $.ajax({
            url:"../../controllers/chambrescontroller.php",
            type:"POST",
            data: $("#editRoom-form").serialize()+"&action=update",
            success :function(response){
               Swal.fire({
                  title: 'Chambre modifiée avec succés',
                  icon: 'success'
               })
               $("#editRoom-modal").modal('hide');
               $("#editRoom-form")[0].reset();
               showAllRooms();
            }
         });
      }
   });

   //Delete room
   $("body").on("click", ".delBtn", function(e){
      e.preventDefault();
      var tr = $(this).closest('tr');
      let del_id = $(this).attr('id');
      Swal.fire({
         title: 'Etes vous sure?',
         text: "Cette action est irreversible!",
         icon: 'warning',
         showCancelButton: true,
         confirmButtonColor: '#3085d6',
         cancelButtonColor: '#d33',
         confirmButtonText: 'Oui, je supprime!'
       }).then((result) => {
         if (result.value) {
            $.ajax({
               url:"../../controllers/chambrescontroller.php",
               type:"POST",
               data:{del_id:del_id},
               success :function(response){
                  tr.css('background-color','#ff6666');
                  Swal.fire(
                     'Supprimée',
                     'Chambre supprimée avec succés',
                     'success'
                  )
                  showAllRooms();
               }
            });
         }
   });
});


showAllStudents();
//STUDENTS
function showAllStudents(){
    $.ajax({
        url:"../../controllers/etudiantscontroller.php",
        type:"POST",
        data:{action:"view"},
        success: function(response){
            //console.log(response);
            $("#showStudents").html(response);
            $("#table-students").DataTable({
               order:[0,'desc']
            });
        }
    });
}

//Add a student
$("#addStudent").click(function(e){
   if($("#addStudent-form")[0].checkValidity()){
      e.preventDefault();
      $.ajax({
         url:"../../controllers/etudiantscontroller.php",
         type:"POST",
         data: $("#addStudent-form").serialize()+"&action=insert",
         success :function(response){
            Swal.fire({
               title: 'Etudiant ajoutée avec succés',
               icon: 'success'
            })
            $("#addStudent-modal").modal('hide');
            $("#addStudent-form")[0].reset();
            showAllStudents();
         }
      });
   }
});

//Show student details by id
$("body").on("click", ".edit-student-Btn", function(e){
   e.preventDefault();
   let id = $(this).attr('id');
   $.ajax({
      url:"../../controllers/etudiantscontroller.php",
      type:"POST",
      data:{id:id},
      success:function(response){
         let data = JSON.parse(response);
         $("#id").val(data.id);
         $("#nom").val(data.nom);
         $("#prenom").val(data.prenom);
         $("#tel").val(data.tel);
         $("#datenaissance").val(data.datenaissance);
         $("#email").val(data.email);
         $("#type").val(data.type);
         $("#adresse").val(data.adresse);
      }
   });

});

//Update student
$("#updateStudent").click(function(e){
   if($("#editStudent-form")[0].checkValidity()){
      e.preventDefault();
      $.ajax({
         url:"../../controllers/etudiantscontroller.php",
         type:"POST",
         data: $("#editStudent-form").serialize()+"&action=update",
         success :function(response){
            Swal.fire({
               title: 'Etudiant modifié avec succés',
               icon: 'success'
            })
            $("#editStudent-modal").modal('hide');
            $("#editStudent-form")[0].reset();
            showAllStudents();
         }
      });
   }
});

});