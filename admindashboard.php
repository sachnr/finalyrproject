<?php
session_start();
if($_SESSION['sessuser']!="admin"){
   header("Location:index.php");
}
$title='adDashboard';
$page='addashboard';
include 'addashheader.php';
?>
  <main>
   <script type="text/javascript">
      $(document).ready( function(){ 

        //for user_info database
        editor = new $.fn.dataTable.Editor( {
            ajax: "staff.php",
            table: "#user-info",
            fields: [
              {label: "ID:",name: "id"},
              {label: "phone no:",name: "phone"},
              {label: "email:",name: "email"},
              {label: "Name:",name: "name"},
              {label: "FathersName:",name: "fname"},
              {label: "Date of birth:",name: "dob",type: "datetime"},
              {label: "course:",name: "course"},
              {label: "branch:",name: "branch"},
              {label: "semester:",name: "semester"},
              {label: "University rno:",name: "urno"},
            ]
          });       
        $("#user-info").DataTable({    
          dom: "Bfrtip",
          ajax: "staff.php",
          "columns": [
            {"data": "id"},
            {"data": "phone"},
            {"data": "email"},
            {"data": "name"},
            {"data": "fname"},
            {"data": "dob"},
            {"data": "course"},
            {"data": "branch"},
            {"data": "semester"},
            {"data": "urno"}
          ],
          select: true,
           
          buttons: [
            { extend: "create", editor: editor },
            { extend: "edit",   editor: editor },
            { extend: "remove", editor: editor },
        ],
          "rowCallback": function(row, data, index){$(row).css('color', 'black')},
        });


        //for accounts database
        users = new $.fn.dataTable.Editor( {
            ajax: "user_add_edit.php",
            table: "#user-add",
            fields: [
              {label: "ID:",name: "id"},
              {label: "Password:",name: "password"}
            ]
        }); 
        $("#user-add").DataTable({    
          dom: "Bfrtip",
          ajax: "user_add_edit.php",
          "columns": [
            {"data": "id"},
            {"data": "password"}
          ],
          select: true,
           
          buttons: [
            { extend: "create", editor: users },
            { extend: "edit",   editor: users },
            { extend: "remove", editor: users },
        ],
          "rowCallback": function(row, data, index){$(row).css('color', 'black')},
        });


        //for photos database
        images = new $.fn.dataTable.Editor( {
            ajax: "images.php",
            table: "#user-photo",
            fields: [
              {label: "ID:",name: "id"},
              {label: "Location:",name: "location"}
            ]
        }); 
        $("#user-photo").DataTable({    
          dom: "Bfrtip",
          ajax: "images.php",
          "columns": [
            {"data": "id"},
            {"data": "location"}
          ],
          select: true,
           
          buttons: [
            { extend: "create", editor: images },
            { extend: "edit",   editor: images },
            { extend: "remove", editor: images },
        ],
          "rowCallback": function(row, data, index){$(row).css('color', 'black')},
        });

      });
    </script>

    <script type="text/javascript">
     $(document).ready(function(){
        $('.tabs').tabs();
      });
  </script>

    
  

    <div class="container">
      <div class="row valign-wrapper add-height">
        <div class="card-panel z-depth-5 "style="background-color: #181915;width: 100%">
          <div class="card-tabs">
              
              <ul class="tabs z-depth-3" style="background-color: #181915;width:100%;height:60px;text-align: center;">
                <li class="tab col s4"><a class="active" href="#test1">Add/Edit Users</a></li>
                <li class="tab col s4"><a href="#test2">Add/Edit Details</a></li>
                <li class="tab col s4"><a href="#test3">Add/Edit Profile photo</a></li>
              </ul>
            </div>

          <div class="col s12" id="test1"> 
            <table id="user-add" class="display table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Password</th>
                </tr>
              </thead>    
            </table>
          </div>

          <div id="test2" class="col s12">
          <table id="user-info" class="display table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Name</th>
                  <th>FathersName</th>
                  <th>DOB</th>
                  <th>course</th>
                  <th>branch</th>
                  <th>semester</th>
                  <th>u.rno.</th>
                </tr>
              </thead>    
            </table>
          </div>

          <div id="test3" class="col s12">
          <table id="user-photo" class="display table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Location</th>
                </tr>
              </thead>    
            </table>
          </div>
          
        </div>
        </div>
      </div>
    </div>


  </main>