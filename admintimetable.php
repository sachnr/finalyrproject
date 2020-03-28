<?php
session_start();
if($_SESSION['sessuser']!="admin"){
   header("Location:index.php");
}
$title='tt';
$page='tt';
include 'addashheader.php';
?>
  <main>
   <script type="text/javascript">
      $(document).ready( function(){ 

        //for user_info database
        editor = new $.fn.dataTable.Editor( {
            ajax: "edittable.php",
            table: "#editt",
            fields: [
              {label: "SerialNo.:",name: "s_no"},
              {label: "Semester:",name: "semester"},
              {label: "Day:",name: "day"},
              {label: "09:00am:",name: "a"},
              {label: "09:55am:",name: "b"},
              {label: "11:10am:",name: "c"},
              {label: "12:05pm:",name: "d"},
              {label: "01:00pm:",name: "e"},
              {label: "01:55pm:",name: "f"},
              {label: "03:10pm:",name: "g"},
              {label: "04:05pm:",name: "h"},
            ]
          });       
        // Activate an inline edit on click of a table cell
        $('#editt').on( 'click', 'tbody td:not(:first-child)', function (e) {
            editor.inline( this );
        } );

        $("#editt").DataTable({    
          dom: "Bfrtip",
          ajax: "edittable.php",
          order: [[ 1, 'asc' ]],
          "columnDefs": [
          { "targets": [0,1,3,4,5,6,7,8,9,10,11], "searchable": false }
          ],
          "columns": [
            {
                "data" : null,
                "defaultContent" : '',
                "className" : 'select-checkbox',
                "orderable" : false
            },
            {"data": "s_no"},
            {"data": "semester"},
            {"data": "day"},
            {"data": "a"},
            {"data": "b"},
            {"data": "c"},
            {"data": "d"},
            {"data": "e"},
            {"data": "f"},
            {"data": "g"},
            {"data": "h"}
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

    <script type="text/javascript">
     $(document).ready(function(){
        $('.tabs').tabs();
      });
  </script>

    
  

    <div class="container">
      <div class="row valign-wrapper add-height">
        <div class="card-panel z-depth-5 "style="background-color: #181915;width: 100%">
          <h4 class="center">Change TimeTable</h4>
          <table id="editt" class="display table table-bordered table-hover">
              <thead>
                <tr>
                  <th></th>
                  <th>s.no.</th>
                  <th>Semester</th>
                  <th>day</th>
                  <th>9:00am</th>
                  <th>9:55am</th>
                  <th>11:10am</th>
                  <th>12:05pm</th>
                  <th>1:00pm</th>
                  <th>1:55pm</th>
                  <th>3:10pm</th>
                  <th>4:05pm</th>
                </tr>
              </thead> 
              <tfoot>
                <tr>
                  <th></th>
                  <th>s.no.</th>
                  <th>Semester</th>
                  <th>day</th>
                  <th>9:00am</th>
                  <th>9:55am</th>
                  <th>11:10am</th>
                  <th>12:05pm</th>
                  <th>1:00pm</th>
                  <th>1:55pm</th>
                  <th>3:10pm</th>
                  <th>4:05pm</th>
                </tr>
              </tfoot>   
            </table> 
        </div>
        </div>
      </div>
    </div>


  </main>