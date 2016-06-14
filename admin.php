<?php
  include("obj/dbConn.php");
  //Prepare the SQL statement to get
  //all records from database
  $sql = "SELECT * FROM users ORDER BY ID DESC";
  //Execute SQL command
  $rec = $conn->query( $sql );
  $num = $rec->num_rows;
  ?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/style2.css">
  <script src="js/custom.js"></script>
  <title>Admin</title>
</head>
<body>
  <header>
    <div class="smalltopbanner"></div>
      <div class="companyname"><span></span></div>
  </header>
    <div class="subHeader"><span>Admin Console</span></div>

<form id="selectorForm1" method="POST" action="processData.php">
<div class="createUser">
  <h3>Create a User</h3>
  <div id="usernameCreateUser" class="input-group input-group-sm">
      <input type="text" name="usernameCreateUser" class="form-control" placeholder="Username" aria-describedby="sizing-addon3">
    </div>
    <div id="passwordCreateUser" class="input-group input-group-sm">
    <input type="password" name="passwordCreateUser" class="form-control" placeholder="Password" aria-describedby="sizing-addon3">
  </div>
   <div id="passwordReenterUser" class="input-group input-group-sm">
    <input type="password" class="form-control" placeholder="Re-enter Password" aria-describedby="sizing-addon3">
  </div>
    </form>
    <button class="btn" type="submit" form="selectorForm1" role="button" id="idCreateUserSubmit">Submit Form</button>
</div>

<div class="actionButtons">

   <div class="actionbtn" id="action1" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addUser1">
    <img src="images/user.png"/>
    <span class="spansForAction">Manage User</span>

  </div>

    <!-- Modal -->
<div id="addUser1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">User Management</h4>
      </div>

   <div class="row">
        <div class="col-md-12">
              <ul id="taskList">
      <?php
for($i = 0; $i < $num; $i++){
  $row = mysqli_fetch_array($rec);
  echo "<li id='".$row['ID']."'>";
  echo "<table class='tasksTable'><tr>";
  echo "<td>";
  echo $row['Username'];
  echo "</td>";
  echo "<td class='taskActions'>";
  echo "<span class='fa fa-trash'></span>";
  echo "</td>";
  echo "</tr></table>";
  echo "</li>";
}
?>
              </ul>
        </div>
    </div>

      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

  <div class="actionbtn" id="action2" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addUser2">
    <img src="images/workflow.png"/>
    <span class="spansForAction">Add Workflow</span>
  </div>

      <!-- Modal -->
<div id="addUser2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  <div class="actionbtn" id="action3" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addUser3">
    <img src="images/city.png">
    <span class="spansForAction">Organization</span>
  </div>

  <!-- Modal -->
<div id="addUser3" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add an Organization</h4>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control" placeholder="Name of Organization" aria-describedby="sizing-addon3">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Create Organization</button>
      </div>
    </div>
  </div>
</div>

  <div class="actionbtn" id="action4" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addUser4">
    <img src="images/folder.png">
    <span class="spansForAction">Add Project</span>
  </div>

    <!-- Modal -->
<div id="addUser4" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  <div class="actionbtn" id="action5" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addUser5">
    <img src="images/department.png">
    <span class="spansForAction">Department</span>
  </div>

    <!-- Modal -->
<div id="addUser5" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  <div class="actionbtn" id="action6" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addUser6">
    <img src="images/lock.png">
    <span class="spansForAction">Security</span>
  </div>

    <!-- Modal -->
<div id="addUser6" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  <div class="actionbtn" id="action7" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addUser7">
    <img src="images/report.png">
    <span class="spansForAction">Data Reports</span>
  </div>

    <!-- Modal -->
<div id="addUser7" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  <div class="actionbtn" id="action8" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addUser8">
    <img src="images/email.png">
    <span class="spansForAction">Group E-mail</span>
  </div> 
</div>

  <!-- Modal -->
<div id="addUser8" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<footer>
<span>Company Name all rights reserved &copy;</span>
<span>version 1.0</span>
</footer>

</body>
</html>