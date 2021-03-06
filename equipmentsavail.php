<!doctype html>
<html lang="en" class="no-js">
<head>
    <title>IT Infrastructure Management - CIO's Desk</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/dashboardstyle.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
     *{margin: 0px; padding: 0px; font-size: 15px; list-style: none}
        html, body{ background-color: #16F5E8; width: 100%; height:100%; position: relative;}
        .header{ height:20%; background:blue; position: relative;}
        .page-footer{
        position: fixed;
  margin-left: 0;
  bottom: 0;
  width: 100%;
  background-color: blue;
  color: white;
/*  text-align: center;*/
  padding-left: 14%;            
    }    
        
/*        .footer{ height:35%; background:blue;bottom:0; position: absolute; width: 100%}*/
        
*/
        
   
    </style>    
<style>
     .weektable {
      border-collapse: collapse;
      border: 2px solid rgb(200,200,200);
      letter-spacing: 1px;
/*      font-size: 1.2rem;*/
    }

    .weektable td, th {
      border: 1px solid rgb(190,190,190);
      padding: 10px 20px;
    }

    .weektable td {
      text-align: center;
    }

    .weektable caption {
      padding: 10px;
    }
    </style>
	
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

<div class="dashboard-container">    
	<main class="cd-main-content">
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

		<div class="content-wrapper" >

         <form action="addsystems.php" method="POST" enctype="multipart/form-data" style="margin-left: 20%; ">
        <table align="center" width="90%"  border="5">
            <tr>
                <td colspan="2" align="center"><h2 style="font-size:30px; color:brown; margin-top: 1%; font: bold">Allocate Systems and Projects</h2> </br> </td>
 
            </tr>
             <tr>
                <td align="left" valign="top" width="41%" >Project Name <span style="color:red">*</span></td>
                <td width="57%">
                    <input type="text" value="" name="projectname"  size="40"> </br> </br></td> 
            </tr>
            <tr>
                <td align="left" valign="top" width="41%">Equipments Needed<span style="color:red">*</span></td>
 
                <td width="57%"><input type="text" value="" name="equipneed" size="24"></br> </br></td>
            </tr>
           <tr>
                <td align="left" valign="top" width="41%">Job Location</td>
                <td width="57%" ><select name="joblocation" style="width:65%" >
                    <option value="Dev center">Dev center</option>
                    <option value="Conference">Conference</option>
                    <option value="Reception">Reception</option>
                    <option value="Dev center2">Dev center2</option>
                    <option value="Dev center3">Dev center3</option>
                    <option value="Dev center4">Dev center4</option>
                    <option value="Dev center5">Dev center5</option>    
                    </select></br> </br></td>
  
            </tr>
            <tr>
 
            <td align="left" valign="top" width="41%">Avaialble Equipment</td>
            <td width="57%">
             
                 <?php
                        $mysqli = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist');
                        $result = $mysqli->query("SELECT * FROM equipments") or die($mysqli->error);
                       while($row = $result->fetch_assoc()):
                       endwhile;
                ?>
                <input type="text" value="<?php echo $row['availableequip']; ?>" name="availequip" size="24"></br> </br></td> </br>
             
            </tr>
                <tr>
 
            <td align="left" valign="top" width="41%">Project Assigned To</td>
            <td width="57%">
                <input type="text" value="" name="projectassign" size="24"></td> 
             <td align="left" valign="top" width="40%">Emp&nbsp;Id</td>
            <td>        
                <input type="text" value="" name="empid"  > </br> </br> </td> 
            </tr> 
           
           
 <table class="weektable">
      <tr>
        <td>&nbsp;</td>
        <th>Mon</th>
        <th>Tue</th>
        <th>Wed</th>
        <th>Thu</th>
        <th>Fri</th>
        <th>Sat</th>
        <th>Sun</th>
      </tr>
      <tr>
        <th>Schedules</th>
        <td><input type="text" value="" name="sun" size="3"> </td>    </td>
        <td><input type="text" value="" name="mon" size="3"></td>
        <td><input type="text" value="" name="tue" size="3"></td>
        <td><input type="text" value="" name="wed" size="3"></td>
        <td><input type="text" value="" name="thu" size="3"> </td>
        <td><input type="text" value="" name="fri" size="3"> </td>
        <td><input type="text" value="" name="sat" size="3"></td>
      </tr>
</table>       
</br>

 
            
                <td >
                    <p align="center">
                       <input type="submit" name="submit" style="height: color:brown"  class="btn btn-info "value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" value="Reset All" class="btn btn-info " name="reset"></td>
            </tr>
 
        </table>
    </form>

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
            <li><a class="white-text" href="#!" style="color: black">Home Page</a></li>
            
            
          </ul>
        </div>
       
      </div>
</footer>    
</main> <!-- .cd-main-content -->
</div>
     
 
      
<script src="js/jquery-2.1.4.js"></script>
<script src="js/jquery.menu-aim.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>