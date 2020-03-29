 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" href="index.php">Departmental Store</a>
            </div>




    <?php 
	//session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body style="padding-left:245px;padding-right:20px;padding-top:0px;padding-bottem:0px;">

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p  style="color:white; font-size:20px;padding-top:12px;padding-left:1060px">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			
		<?php endif ?>
	</div>
		
</body>
</html>


            
                    <!-- Top Menu Items -->
            
            <ul class="nav navbar-right top-nav">
                
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> User <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <a href="index.php?logout='1'"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    <li>
                        <a href="index.php"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Dashboard</a>  
                    </li>
                    
                    <li>
                       <a href="categories.php"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Category</a>
                    </li>
                    
                    <li>
                       <a href="companies.php"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Companies </a>
                    </li>
                    
                    
                    <li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Products <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="manage_products.php">Manage Products</a>
                            </li>
                            <li>
                                <a href="add_products.php">Add Products</a>
                            </li>
                        </ul>
                        
                    </li>
                    
                    <li class="active">
                        <a href="shop2.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Buy Product</a>
                    </li>
                    
                    <li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo3"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Customers <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo3" class="collapse">
                            <li>
                                <a href="add_customers.php">Add Details</a>
                            </li>
                            <li>
                                <a href="show_customers.php">Show Details</a>
                            </li>
                        </ul>
                        
                    </li>
                    <li>
                        <a href="index-rtl.html"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Reports</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

       