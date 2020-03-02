<?php
session_start();
/*
if(!isset($_SESSION['admin'])){
   header("Location:index.php");
}
*/
$title='adDashboard';
$page='addashboard';
include 'addashheader.php';
?>
	<main>
    <script type="text/javascript">
      $(document).ready( function() {
        $("#user-info").DataTable({
          "ajax": {
            "url":"data.php",
            "dataSrc": ""
          },
          "columns": [
            {
              "data": "id", 
              "class": "row"
            },
            {"data": "name"},
            {"data": "college_id"},
            {"data": "address"},
            {"data": "birth_date"}
          ],
          select: {
            style:    'os',
            selector: 'td:first-child'
          },
          "rowCallback": function(row, data, index){
             $(row).css('color', 'black')
          },          
          "drawCallback": function(setttings) {
            var table = $('#user-info').DataTable()
            // console.log(table.$('td'))
            table.$('td').editable( '_data.php', {
              "submit"    : 'OK',
              "callback": function( result, settings, submitdata ) {
                  console.log("result" + result);
                  console.log("submitdata " + submitdata.value);
                  console.log("")
                  table.cell( this ).data( submitdata.value ).draw();
              },
              "submitdata": function(revert, settings, submitdata) {
                var columns = table.settings().init().columns;
                var colIdx = table.column(this).index();
                console.log(columns[colIdx].data);
                console.log(table.cell($(this).closest('tr'), 0).data());
                return {
                    // id - user id 
                    "id": table.cell($(this).closest('tr'), 0).data(),
                    "column": columns[colIdx].data
                };
              }
            });
          }
        });

        /*
        var table = $('#user-info').DataTable()
        table.draw();
        console.log(table.$('td'))
        table.$('td').editable( '_data.php', {
          "callback": function( value, y ) {
              table.cell( this ).data( value ).draw();
          },
          "submitdata": function ( value, settings ) {
              return {
                  "row_id": $(this).closest('tr').attr('id'),
                  "column": table.cell( this ).index().column
              };
          }
        });
        */

        // https://jeditable.elabftw.net/
        /* Apply the jEditable handlers to the table */

      });
    </script>


		<div class="container">
			<div class="row valign-wrapper add-height">
        <div class="col s12 ">
          <div class="card-panel z-depth-5 sublime">
            <table id="user-info" class="display table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>College ID</th>
                  <th>Address</th>
                  <th>Birth Date</th>
                </tr>
              </thead>		
            </table>
          </div>
        </div>
      </div>
		</div>


	</main>
	


