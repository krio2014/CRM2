<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">-->
	  
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </head>
<!--
	<script src="content/js/jquery.min.js"></script>
<script src="content/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
</script>
-->
  <body>
    
      
        
        <?php include('header.html');?>
     <div style="padding-top:56px;"></div>
        
        <nav class="navbar navbar-toggleable-md nav-justified navbar-light bg-faded">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#subNavBar" aria-controls="subNavBar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"><p></p></a>
            <div class="collapse navbar-collapse" id="subNavBar">
            <ul class="navbar-nav  mr-auto nav-justified">
				<!--
                <li class="nav-item">                    
                        <button type="button" class="btn btn-secondary navbar-toggle " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-haspopup="false" aria-expanded="false">    
                                <span class="but-primary">Mortgage-123&nbsp;&nbsp;</span><img src="images/dropdown_Arrow.png"/>
                        </button>
                    
                </li>
				-->
                
                <li class="nav-item">    
                    <button class="btn btn-secondary dropdown-toggle w-10" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        New Report
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<h6 class="dropdown-header">New Reports</h6>
                        <a class="dropdown-item"  href="#">New</a>
                        <div class="dropdown-divider"></div>  
                        <h6 class="dropdown-header">Existing Templates</h6>
                        <a class="dropdown-item"  href="#">Mortgage</a>                                                    
                        <a class="dropdown-item"  href="#">Loans</a>
                        <a class="dropdown-item" href="#">Insurances</a>
                          
                    </div>                                                        
                </li>
                
                
<!--
                <li class="nav-item">    
                    <button class="btn btn-secondary dropdown-toggle w-10" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Options
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" style="color:green" href="#">New product</a>                            
                        <a class="dropdown-item" style="color:blue;" href="#">Compare Products</a>
                        <a class="dropdown-item" style="color:red;" href="#">Delete Product From File</a>
                        <a class="dropdown-item" href="#">Options</a>
                    </div>                                                        
                </li>
-->
				
                
            </ul>
            </div>            
        </nav>
        
        <div class="container w-100 h-100" style="border:solid;">
            <div class="row p-2 h-100" ></div>
            <div class="row" >
                <div class="col-sm-6">
                    <div class="card p-4" style="border:solid;">
                         <h4 class="card-title">Report</h4>
                        <img src="images/ascending-graph-1173935_960_720.png" width="100%" height="100%"/>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card p-4">
                         <h4 class="card-title">Report</h4>
						<img src="images/ascending-graph-1173935_960_720.png" width="100%" height="100%"/>
                    </div>
                </div>
            
            </div>
            <div class="row p-2"></div>
           <div class="row">
                <div class="col-sm-6">
                    <div class="card p-4">
                         <h4 class="card-title">Report</h4>
                        <img src="images/ascending-graph-1173935_960_720.png" width="100%" height="100%"/>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card p-4">
                         <h4 class="card-title">Report</h4>
                        <img src="images/ascending-graph-1173935_960_720.png" width="100%" height="100%"/>
                    </div>
                </div>
            
            </div>
        </div>
        
        
    
  </body>
  </html>