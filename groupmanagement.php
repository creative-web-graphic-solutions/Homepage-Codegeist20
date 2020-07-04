<!DOCTYPE html>
<html lang="en">
<head>
<title>IT Infrastructure Management - CIO's Desk</title>    
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="css/dashboardstyle.css"> <!-- Resource style -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="js/modernizr.js"></script> <!-- Modernizr -->
    <style>
     *{margin: 0px; padding: 0px; font-size: 15px; list-style: none}
        html, body{ background-color: #16F5E8; width: 100%; height:100%; position: relative;}
        .header{ height:20%; background:blue; position: relative; margin-left: o}
        .page-footer{
        position: fixed;
  margin-left: 0;
  bottom: 0;
  width: 100%;
  background-color: blue;
  color: white;
/*  text-align: center;*/
/*  padding-left: 14%;            */
    }    
        
/*        .footer{ height:35%; background:blue;bottom:0; position: absolute; width: 100%}*/
        
*/

   
    </style>    
     	    
    
<style>
 

	.table-wrapper {
        padding: 10px 5px;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {        
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
        margin-top: 0;
/*		margin: -20px -25px 10px;*/
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 6px 8px;
		vertical-align: middle;
    }
/*
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
*/
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {    
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
	}	
</style>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
    </script>    
<script>
    function updateId(){
    let id = this.getAttribute('data-rowid');
    document.getElementsByName("id")[0].value = id;
}
</script>
</head>
<body>
	<header class="cd-main-header">
<!--		<a href="#0" class="cd-logo"><img src="img/cd-logo.svg" alt="Logo"></a>-->
		<a id="logo-container" href="index.html" class="brand-logo" style="color: white">IIM Logo</a>
		<div class="cd-search is-hidden">
			<form action="#0">
				<input type="search" placeholder="Search..." >
			</form>
		</div> <!-- cd-search -->

		<a href="#0" class="cd-nav-trigger">Menu<span></span></a>

		<nav class="cd-nav">
			<ul class="cd-top-nav">
				<li><a href="email.html">Mail</a></li>
				<li><a href="Notification.html">Notification</a></li>
				<li class="has-children account">
					<a href="#0">
						<img src="img/cd-avatar.png" alt="avatar">
						My Profile
					</a>

					<ul>

						<li><a href="#0">Edit Account</a></li>
						<li><a href="#0">Settings</a></li>
						<li><a href="#0">Logout</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header> <!-- .cd-main-header -->    
<div class="dashboard-container" >      
    <main class="cd-main-content"  >
		<nav class="cd-side-nav">
			<ul>
						<li class="cd-label">Main</li>
                	<li class="has-children overview">
					<a href="employeelist.php">Employee</a>
					
					<ul>
						<li><a href="employeeadd.html">Add Employee</a></li>
						
					</ul>
				</li>
				<li class="has-children overview">
					<a href="resources.php">Resources</a>
					
					<ul>
						<li><a href="Projects.html">Add Project</a></li>
						<li><a href="equipments.html">Add Equipment</a></li>
                        
					</ul>
				</li>
			    <li class="has-children overview">
					<a href="#0">User Management</a>
					
					<ul>
						<li><a href="#0">Add New User</a></li>
				   </ul>
				</li>
                <li class="has-children overview">
					<a href="#0">Groups Management</a>
					
					<ul>
						<li><a href="#0">Create New Group</a></li>
						
					</ul>
				</li>
                <li class="has-children overview">
					<a href="#0">Apps & Integration</a>
					
					<ul>
						<li><a href="#0">Installed Apps</a></li>
						
					</ul>
				</li>

				<li class="has-children overview">
					<a href="#0">My Contacts</a>
					
					<ul>
						<li><a href="#0">Supplier</a></li>
						<li><a href="#0">Vendor</a></li>
						<li><a href="#0">Partnership</a></li>
                        <li><a href="#0">B2B</a></li>                        
					</ul>
				</li>
			
            <li class="has-children overview">
					<a href="#0">Ticketing & Support</a><ul>
                <li></li>
                </ul>			
					
				</li>
            <li class="has-children overview">
					<a href="#0">Project Deployment</a>
					
					<ul>
						<li><a href="#0">Active Projects</a></li>
						<li><a href="#0">Project Managers</a></li>
						<li><a href="#0">Project Health</a></li>
                        <li><a href="#0">Value</a></li>
					</ul>
				</li>

			
<!--
			<ul>
				<li class="cd-label">Action</li>
				<li class="action-btn"><a href="#0">+ Button</a></li>
			</ul>
-->
		</nav>

		<div class="content-wrapper">
       

        
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-<?=$_SESSION['msg_type']?>">
                <?php 
                    echo $_SESSION['message']; 
                    unset($_SESSION['message']);
                ?>
            </div>
        <?php endif ?>    
        <div class="table-responsive">
			<div class="table-wrapper" >
				<div class="table-title">
                        
					<div class="row">
						<div class="col-xs-6">
							<h2>Manage <b>Groups</b></h2>
<!--                            <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>-->
						</div>
						<div class="col-xs-6">
							<a href="addgroup.html" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Create New Group</span></a>
<!--							<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						-->
						</div>
					</div>
				</div>
                 <?php
                        $mysqli = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist');
                        $result = $mysqli->query("SELECT * FROM groupmgt") or die($mysqli->error);
                ?>
				<table class="table justify-content-center" style="background-color:white">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
					<thead style="background-color:green;color:white;font-weight:bold">
						<tr>
                            <th>Group Name</th>
							<th># of Users</th>
							<th>Created At</th>
                            <th>Job Location</th>
							<th>Actions</th>
						</tr>
					</thead>
            <?php
                while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['groupname']; ?></td>
                        <td><?php echo $row['noofusers']; ?></td>
                        <td><?php echo $row['creationdate']; ?></td>
                        <td><?php echo $row['joblocation']; ?></td>
                        <td>
                            
                           <button name="edit" class="btn btn-info"> <a href="#editEmployeeModal"  data-toggle="modal" data-dismiss="modal" style="color: brown" data-rowid="<?=$row['id']; ?>" onClick="updateId()" >Edit</a> </button>
                        
                        <button name="delete" class="btn btn-info " ><a href="usergroupprocess.php?delete=<?php echo $row['id']; ?>" style="color: brown">Delete</a> </button> 
                        </td>
                    </tr>
                <?php endwhile; ?>    
                </table>
		      
    
    
		</div> <!-- .content-wrapper -->
	
        
<footer class="page-footer" >
 
      <div class="row">
        <div class="col-sm-6 ">
          <h5 class="white-text">Project IIM</h5>
          <p class="grey-text text-lighten-4">This project is being developed for codegiest hackathon. All tasks, progress and features are aligned to fit within this deadline.</p>
          <p style="color:white"> IIM Team</p>

        </div>
        <div class="col-sm-3 ">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="Register.html" style="color: black">Home Page</a></li>
            
            
          </ul>
        </div>
       
      </div>
</footer>    
</main> <!-- .cd-main-content -->
</div>  <!-- table responsive -->      
</div> <!-- table wrapper -->            
       
    
<script src="js/jquery-2.1.4.js"></script>
<script src="js/jquery.menu-aim.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->        
   
</body>
</html>