<!doctype html>
<html lang="en" class="no-js">
<head>
    <title>IT Infrastructure Management - CIO's Desk</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    <script src="js/tabcontent.js" type="text/javascript"></script>
    <link href="css/resources.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/dashboardstyle.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
    <script src="js/tabcontent.js"> </script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
	.padFix {
		padding-top: 8px;
        padding-right: 10px;
	}
	table {
		font-size:14px;
	}
</style>    
    
 <style>
	.drop-box {
		background: #F8F8F8;
		border: 5px dashed #DDD;
		text-align: center;
		margin: 10px 0px 10px 0px;
		border-radius: 5px;
		font-weight: 400;
		padding: 15px;
	}

	.dragover {
		border: 5px dashed #3d6da7;
	}
	md-chips.md-default-theme.md-chips.md-focused, md-chips .md-chips.md-focused {
		border-color: red;
		box-shadow: 0 2px lightgrey;
	}
</style>     
    
<script type="text/javascript"> 
    function getAllTickets(ticket){
     alert(ticket);   
    }
    
</script>

<script type="text/javascript">
  function reply_click2(clicked_id)
  {
//      alert(clicked_id);
//      var $clickrow = $cliked_id;
    
      var url = "http://atlassiancodegeist.com/myclosedtickets.php" + '#' + clicked_id;
        window.open(url, '_self');
      
  }
</script>      
    
<script type="text/javascript">
  function reply_click(clicked_id)
  {
//      alert(clicked_id);
//      var $clickrow = $cliked_id;
    
      var url = "http://atlassiancodegeist.com/myopentickets.php" + '#' + clicked_id;
        window.open(url, '_self');
      
  }
</script>    
 
    
</head>
<body>
	<header class="cd-main-header">
<!--		<a href="#0" class="cd-logo"><img src="img/cd-logo.svg" alt="Logo"></a>-->
		<a id="logo-container" href="index.html" class="brand-logo" style="color: white"><img src="img/IIM.jpg"></a>
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
                	<li class="has-children ">
					<a href="employeelist.php"><img src="img/employeees.jpg" style="width: 35px; border-radius: 50%;">&nbsp;&nbsp;Employees </a>
					
					<ul>
						<li><a href="employeeadd.html">Add Employee</a></li>
						
					</ul>
				</li>
				<li class="has-children overview">
					<a href="resources.php"><img src="img/resource.jpg" style="width: 35px; border-radius: 50%;">&nbsp;&nbsp;Resources</a>
					
					<ul>
						<li><a href="Projects.html">Add Project</a></li>
						<li><a href="equipments.html">Add Equipment</a></li>
                        
					</ul>
				</li>
			    <li class="has-children overview">
					<a href="usermanagement.php"><img src="img/usermgt.jpg" style="width: 35px; border-radius: 50%;">&nbsp;&nbsp;User Management</a>
					
					
				</li>
                <li class="has-children overview">
					<a href="groupmanagement.php"><img src="img/groupmgt.jpg" style="width: 35px; border-radius: 50%;">&nbsp;&nbsp;Group View</a>
					
					<ul>
						<li><a href="addgroup.html">Create New Group</a></li>
						
					</ul>
				</li>
                <li class="has-children overview">
					<a href="appsintegration.html"><img src="img/appintegrate.jpg" style="width: 35px; border-radius: 50%;">&nbsp;&nbsp;Apps & Integration</a>
					
					<ul>
						<li><a href="appinstall.html">Installed Apps</a></li>
						
					</ul>
				</li>

				<li class="has-children overview">
					<a href="mycontacts.php"><img src="img/mycontacts.jpg" style="width: 35px; border-radius: 50%;">&nbsp;&nbsp;My Contacts</a>
					<ul>
						<li><a href="addcontacts.html">Add Contacts</a></li>
						                   
					</ul>
				</li>
			
            <li class="has-children overview">
					<a href="mysupportticket.html"><img src="img/ticket.jpg" style="width: 35px; border-radius: 50%;">&nbsp;&nbsp;Ticketing & Support</a><ul>
                <li></li>
                </ul>			
					
				</li>
            <li class="has-children overview">
					<a href="projectdeployment.php"><img src="img/projectview.jpg" style="width: 35px; border-radius: 50%;">&nbsp;&nbsp;Project View</a>
					<ul>
						<li><a href="activeproject.php">Add Active Project</a></li>
						
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
        <h3 style="color:Brown">My Support Tickets</h3>
    <div class="panel panel-default">
     <div class="panel-heading">
    
					<div class="row" style="height: 50px">
						<div class="col-sm-9">
                            <ul class="nav nav-pills">
                                <li role="presentation" ng-class="{ 'active': AllTicketsTabActive }"><a href="mysupportticket.php">All Tickets</a></li>
                                <li role="presentation" ng-class="{ 'active': MyOpenTicketsTabActive }"><a href="myopentickets.php">My Open Tickets</a></li>
                                <li role="presentation" ng-class="{ 'active': MyClosedTicketsTabActive }"><a href="myclosedtickets.php">My Closed Tickets</a></li>
                                <li role="presentation" ng-class="{ 'active': OrgOpenTicketsTabActive }"><a ng-click="getOrgOpenTickets()" ng-show="settings.Features.EnableOrganizationTickets && ShowOrgticketsTab && (!UserInfo.portalLimitOrgTickets)">Organization Open Tickets</a></li>
                                <li role="presentation" ng-class="{ 'active': OrgClosedTicketsTabActive }"><a ng-click="getOrgClosedTickets()" ng-show="settings.Features.EnableOrganizationTickets && ShowOrgticketsTab && (!UserInfo.portalLimitOrgTickets)">Organization Closed Tickets</a></li>
                                
                                <!--<li role="presentation" ng-class="{ 'active': MyTicketsTabActive }"><a ng-click="getMyTickets()">My Open Tickets</a></li>
                                <li role="presentation" ng-class="{ 'active': OrgTicketsTabActive }"><a ng-click="getOrgTickets()" ng-show="settings.Features.EnableOrganizationTickets && ShowOrgticketsTab && (!UserInfo.portalLimitOrgTickets)">Organization Open Tickets</a></li>
                                <li role="presentation" ng-class="{ 'active': ClosedTicketsTabActive }"><a ng-click="getAllClosedTickets()">All Closed Tickets</a></li>-->
                            </ul>
						</div>
						<div class="col-sm-3 pull-right">
							<form role="search" method="get" action="/tbl">
								<input type="text" name="criteria" class="form-control" ng-model="search" value="" placeholder="Search Ticket Grid">
							</form>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<?php
                 $mysqli = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist');
                $result = $mysqli->query("SELECT * FROM supporttickets") or die($mysqli->error);
                ?>
               		<table class="table justify-content-center" style="background-color:white">
                    <thead style="background-color:#cccccc;color:black;font-weight:bold">
						<tr>
							<th>Sl No.</th>
							<th>Department</th>
							<th>Subject</th>
							<th>Status</th>
							<th>Last Modified</th>
						</tr>
					</thead>
            <?php
                while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td id="<?php echo $row['id']; ?>"  onClick="reply_click(this.id)"><?php echo $row['id']; ?></td>
                        <td id="<?php echo $row['id']; ?>"  onClick="reply_click(this.id)"><?php echo $row['department']; ?></td>
                        <td id="<?php echo $row['id']; ?>" onClick="reply_click(this.id)"><?php echo $row['subject']; ?></td>
                        <?php if ($row['status'] == 'Open')
                                echo "<td style='background-color:lightgreen; color:#000000'>" .$row['status']; 
                              else
                                  echo "<td style='background-color:red; color:#000000'>" .$row['status'];
                        ?>
                        
                        <td id="<?php echo $row['id']; ?>" onClick="reply_click(this.id)"><?php echo  $row['lastupdate']; ?></td>
                    </tr>
                        
                <?php endwhile; ?>    
                </table>
				</div>
			</div>            
                
<!--    <div class="panel panel-default">-->
<!--     <div class="panel-heading">-->
                
                        
						
		</div> <!-- .content-wrapper -->
	
        
<footer class="page-footer" >
 
      <div class="row">
        <div class="col-sm-6 ">
          <h5 class="white-text">Project IIM</h5>
          <p class="grey-text text-lighten-4">This project is being developed for codegiest hackathon. All tasks, progress and features are aligned to fit within this deadline.</p>


        </div>
        <div class="col-sm-3 ">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!" style="color: black">Home Page</a></li>
            <li><p style="color:white"> IIM Team</p></li>
            
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