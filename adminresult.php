<?php
session_start();
if($_SESSION['sessuser']!="admin"){
   header("Location:index.php");
}
$title='adresult';
$page='adresult';
include 'addashheader.php';
?>
  <main>
   <script type="text/javascript">
      $(document).ready( function(){ 

        //for user_info database
        editor = new $.fn.dataTable.Editor( {
            ajax: "fetchresult.php",
            table: "#user-info",
            fields: [
              {label: "SerialNo.:",name: "sno"},
              {label: "ID:",name: "id"},
              {label: "Semester:",name: "semester"},
              {label: "SGPA:",name: "sgpa"},
              {label: "TotalBacks:",name: "backs"},
              {label: "Status(pass/fail):",name: "result_status"},
              {label: "View:",name: "view"},
            ]
          });       
        // Activate an inline edit on click of a table cell
        $('#user-info').on( 'click', 'tbody td:not(:first-child)', function (e) {
            editor.inline( this );
        } );

        $("#user-info").DataTable({    
          dom: "Bfrtip",
          ajax: "fetchresult.php",
          order: [[ 1, 'asc' ]],
          "columnDefs": [
          { "targets": [0,2,3,4,5,6], "searchable": false }
          ],
          "columns": [
            {
                "data" : null,
                "defaultContent" : '',
                "className" : 'select-checkbox',
                "orderable" : false
            },
            {"data": "sno"},
            {"data": "id"},
            {"data": "semester"},
            {"data": "sgpa"},
            {"data": "backs"},
            {"data": "result_status"},
            {"data": "view"}
          ],
          select: {
            'style' :    'os',
            'selector' : 'td:first-child'
        },

           
          buttons: [
            { extend: "create", editor: editor },
            { extend: "remove", editor: editor },
        ],
          "rowCallback": function(row, data, index){$(row).css('color', 'black')},
        });
      });
    </script>
    
  

    <div class="container">
      <div class="row valign-wrapper add-height" style="height: 80rem;">
        <div class="card-panel z-depth-5 "style="background-color: #181915;width: 100%">
          <h4 class="center">Change TimeTable</h4>
                <table id="user-info" class="display table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                          <th></th>
                          <th>S.no.</th>
                          <th>ID</th>
                          <th>Semester</th>
                          <th>SGPA</th>
                          <th>Total Backs</th>
                          <th>Status</th>
                          <th>View</th>
                        </tr>
                    </thead> 
                    <tfoot>
                        <tr>
                          <th></th>
                          <th>S.no.</th>
                          <th>ID</th>
                          <th>Semester</th>
                          <th>SGPA</th>
                          <th>Total Backs</th>
                          <th>Status</th>
                          <th>View</th>
                        </tr>
                    </tfoot>   
                </table> 
        </div>
        </div>
      </div>
    </div>


  </main>