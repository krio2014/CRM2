<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	  <!-- bootsrap and jquery links-->
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<!--	  <link rel="stylesheet" href="css/CRM_CSS.css">-->
	  <script src="content/js/jquery.min.js"></script>
<script src="content/js/bootstrap.min.js"></script>
	  
	  	<script>
//    $(document).ready(function () {
//        $('.dropdown-toggle').dropdown();
//    });
//    
			$(function(){
		  		$('[data-toggle="popover"]').popover()
			});
			$(function(){
				$('[data-toggle="tooltip"]').tooltip();
			});
		</script>
  </head>
	

    <body style="height:100%; min-height:100%;">
    <?php include('header.html')?>
      <!--  <div style="padding-top:56px;"></div>
      
         SUB-NAVBAR including products button, options for current product and the list of applicants involved in this case
        
        <nav class="navbar navbar-toggleable-md fixed-top nav-justified navbar-light bg-faded" style="margin-top:56px;" id="subNavBar">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#subNavBar" aria-controls="subNavBar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"><p></p></a>
            <div class="collapse navbar-collapse" id="subNavBar">
            <ul class="navbar-nav  mr-auto nav-justified">
			               
                
                <li class="nav-item">    
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle w-10" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            File Options
                        </button>
                        <div class="dropdown-menu offset-4" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item " style="color:green" href="#">New product</a>                           
                            <a class="dropdown-item" style="color:blue;" href="#">Compare Products</a>
                            <a class="dropdown-item" style="color:red;" href="#">Delete Product From File</a>
                            <a class="dropdown-item" href="#">Options</a>
                        </div>    
                    </div>
                </li>
				<div class="p-1"></div>
                <li class="nav-item ">    
                        <button type="button" class="btn btn-secondary w-100" data-html="true" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" data-content="
                        Name: Mr Adam Evans<a href='index.html'> edit</a><br>
                        DOB: 03/06/87<a href='index.html'> edit</a><br>
                        Tel: 078 969 83691
                        <a href='index.html'> edit</a>
                        ">                        
                            <img src="images/person.png" style="width:20px;"/>                                   
                                Adam Evans                                 
                        </button>
                </li>
                <div class="p-1"></div>
                <li class="nav-item">
                    
                        <button type="button" class="btn btn-secondary w-100" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" data-content="
                        Name: Mrs Anne-Marie Evans<br>
                        DOB: 24/10/88<br>
                        Tel: 078 969 83691">  
                        
                            <img src="images/person.png" style="width:20px;"/>                                   
                                Anne-Marie                                 
                        </button>
                </li>
                <div class="p-1"></div>
                <li class="nav-item">
                    
                        <button type="button" class="btn btn-secondary w-100" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" data-content="
                        Name: Ms Amanda Damario<br>
                        DOB: 04/07/64<br>
                        Tel: 078 969 83691">  
                        
                            <img src="images/person.png" style="width:20px;"/>                                   
                                Amanda Damario                               
                        </button>
                </li>
                <div class="p-1"></div>
                <li class="nav-item">
                    
                        <button type="button" class="btn btn-secondary w-100" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" data-content="
                        Name: Mr Stephen Evans<br>
                        DOB: 19/10/57<br>
                        Tel: 078 969 83691">                          
                            <img src="images/person.png" style="width:20px;"/>                                   
                                Stephen Evans                               
                        </button>
                </li>
            </ul>
            </div>            
        </nav>-->
		
      	<div class="container-fluid p-4 h-100"  style="margin-top:56px; margin-bottom:56px;height:100%; min-height:100%" id="mainContentContainer">  
            
            <div class="row h-100" style="min-height:100%" id="mainContentRow" >
                <div class="card card-fluid" style=" min-height:100%" id="sideBar">
                    <h5 class="card-header card-faded" id="sideBarheader">
                    	<div class="dropdown" id="productOptions">
							<button class="btn btn-primary btn-sm dropdown-toggle w-100" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<!--Place holder for mortgage variable-->
								Mortgage-123 
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<h6 class="dropdown-header">Mortgages</h6>
									<a class="dropdown-item"  href="#">Mortgage-321</a>                                                    
									<a class="dropdown-item"  href="#">Mortgage-111</a>
									<a class="dropdown-item" href="#">Mortgage-921</a>
								<div class="dropdown-divider"></div>
								<h6 class="dropdown-header">Life Cover</h6>
									<a class="dropdown-item"  href="#">Life-554</a>
									<div class="dropdown-divider"></div>
									<h6 class="dropdown-header">Other <span style="color:blue; align-content:right;">+</span>
								</h6>
							</div>    
                    	</div>                       
                    </h5>

                    <nav class="nav  flex-column" id="sideBarNav">                                    
<!--                        <a class="nav-link"  href="#">Summary</a>-->
                        <a class="nav-link" href="#" >Timeline</a>
                        <a class="nav-link active" href="#">Product Details</a>
                        <a class="nav-link" href="#">Reminders</a>
                        <a class="nav-link" href="#">Commissions</a>
<!--                        <a class="nav-link"  href="#">Further Details</a>-->
                        <a class="nav-link" href="#">Associated People</a>
                        <a class="nav-link"  href="#">Contact</a>
                        <a class="nav-link"  href="#">Compliance Check</a>
                        <a class="nav-link"  href="#">Fact-find</a>
                        
                        <a class="nav-link"  href="#">Notes</a>
                        <li class="nav-item dropup "  style="min-width: 190px;">
                           <div class="dropdown">
                            <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="dropdown" aria-haspopup="true" aria-expanded="false">Attachments</a>
                           <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">General</a>
                                <a class="dropdown-item" href="#">Illustrations</a>
                                <a class="dropdown-item" href="#">Other</a>
                           </div>
                               </div>
                        </li>
                    </nav>
					<div class"separator"></div>
					<div class="container p-4 w-100" id="progressBarContainer">
                     	<div class="progress" id="progressBar">
            				<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
						</div>
                    </div>
<!--                    <span class="h-100"></span>-->
                </div>

                <!-- Main Panel-->

               <?php include('productDetails.html');?>
				

          </div>
			<div class="separated h-100"></div>
			<div class="container p-4 w-100" id="progressBarContainer">
                     	<div class="progress" id="progressBar">
            				<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
						</div>
                    </div>
        </div>
        <?php include('footer.html')?>
<!--
    </body>
</html>-->
