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
    
  <body>
    <div class="container-fluid w-100 h-100" style="max-height:100%;" name="allContent">

        <div class="container-fluid" name="navBarContainer">
        <!-- Navigation-->
        <nav class=" navbar navbar-toggleable-md  navbar-inverse bg-inverse">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#">Backoffice</a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">New Case<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Banking</a>
                </li>
               <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " data-toggle="dropdown"
                           href="/mortgage.html" role="dropdown" aria-haspopup="true" aria-expanded="false">
                           Settings</a>
                            <div class="dropdown-menu">
                                <h6 class="dropdown-header">Users</h6>
                                <a class="dropdown-item" href="#" disabled>Manage <b>Your</b> Profile</a>
                                <a class="dropdown-item" href="#" disabled>Manage Profiles</a>
                                <a class="dropdown-item" href="#">Manage Licences</a>
                                <a class="dropdown-item" href="#">Manage Permissions</a>
                                <div class="dropdown-divider"></div>
                                <h6 class="dropdown-header">Templates</h6>
                                    <a class="dropdown-item" href="#">Email templates</a>
                                    <a class="dropdown-item" href="#">Letter templates</a>
                                    <a class="dropdown-item" href="#">SMS templates</a>
                                <div class="dropdown-divider"></div>
                                <h6 class="dropdown-header">Commissions</h6>
                                    <a class="dropdown-item" href="#">Manage Fees</a>
                                <div class="dropdown-divider"></div>
                                <h6 class="dropdown-header">Other</h6>
                                    <a class="dropdown-item" href="#">System Settings</a>
                            </div>
                      </li>  
                
                
                
            </ul>
              <ul class="navbar-nav mr-right"><li class="nav-item nav-item-right">
                    <a class="nav-link " href="logout.html">Logout</a>
                </li></ul>
         
        
        <!-- navigation end-->
            </div></nav>
        
            <!-- new sub navbar-->
            
        <nav class="navbar navbar-toggleable-md  nav-justifie navbar-light bg-faded">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#subNavBar" aria-controls="subNavBar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <a class="navbar-brand" href="#"><p></p></a>
            <div class="collapse navbar-collapse" id="subNavBar">
            <ul class="navbar-nav   mr-auto">
				<li class="nav-item">
                        <!--<button type="button" class="btn btn-secondary navbar-toggle " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-haspopup="false" aria-expanded="false">-->
                        <button type="button" class="btn btn-secondary navbar-toggle " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-haspopup="false" aria-expanded="false">
        <!--        <button class="btn btn-primary dropdown-toggle w-10" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                                <span class="but-primary">Mortgage-123&nbsp;&nbsp;</span><img src="images/dropdown_Arrow.png"/>
                                
                            </button>
                    
                    </li>
				
<!--
                <li class="nav-item dropdown" style="min-width: 190px;">
                            <a class="nav-link dropdown-toggle " data-toggle="dropdown"
                           href="/mortgage.html" role="dropdown" aria-haspopup="true" aria-expanded="false">
                           Mortgage Ref-123</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                            </div>
                      </li>
-->
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
				<!-- OLD products button-->
               <!-- <li class="nav-item">
                        <button type="button" class="btn btn-secondary navbar-toggle " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-haspopup="false" aria-expanded="false">
        <        <button class="btn btn-primary dropdown-toggle w-10" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="but-primary">Products</span>
                                
                            </button>
                    
                    </li>-->
                <li class="nav-item">
                    
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
                    <li class="nav-item">
                    
                        <button type="button" class="btn btn-secondary w-100" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" data-content="
                        Name: Mrs Anne-Marie Evans<br>
                        DOB: 24/10/88<br>
                        Tel: 078 969 83691">  
                        
                            <img src="images/person.png" style="width:20px;"/>                                   
                                Anne-Marie                                 
                        </button>
                    </li>
                   <li class="nav-item">
                    
                        <button type="button" class="btn btn-secondary w-100" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" data-content="
                        Name: Ms Amanda Damario<br>
                        DOB: 04/07/64<br>
                        Tel: 078 969 83691">  
                        
                            <img src="images/person.png" style="width:20px;"/>                                   
                                Amanda Damario                               
                        </button>
                    </li>
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
            
        </nav>
        
        <!-- end new sub navbar-->    
            <!--
        <div class="container-fluid flex-column p-0">
            <nav class="navbar navbar-toggleable-md  navbar-light bg-faded">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown" style="min-width: 190px;">
                            <a class="nav-link dropdown-toggle " data-toggle="dropdown"
                           href="/mortgage.html" role="dropdown" aria-haspopup="true" aria-expanded="false">
                           Mortgage Ref-123</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                            </div>
                      </li>
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
                    <li class="nav-item">
                        <button type="button" class="btn btn-secondary navbar-toggle " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-haspopup="false" aria-expanded="false">
        
                                <span class="but-primary">Products</span>
                                
                            </button>
                    
                    </li>
                    
                    <li class="nav-item">
                    
                        <button type="button" class="btn btn-secondary w-100" data-html="true" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" data-content="
                        Name: Mr Adam Evans<br>
                        DOB: 03/06/87<br>
                        Tel: 078 969 83691">                        
                            <img src="images/person.png" style="width:20px;"/>                                   
                                Adam Evans                                 
                        </button>
                    </li>
                    <li class="nav-item">
                    
                        <button type="button" class="btn btn-secondary w-100" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" data-content="
                        Name: Mrs Anne-Marie Evans<br>
                        DOB: 24/10/88<br>
                        Tel: 078 969 83691">  
                        
                            <img src="images/person.png" style="width:20px;"/>                                   
                                Anne-Marie                                 
                        </button>
                    </li>
                   <li class="nav-item">
                    
                        <button type="button" class="btn btn-secondary w-100" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" data-content="
                        Name: Ms Amanda Damario<br>
                        DOB: 04/07/64<br>
                        Tel: 078 969 83691">  
                        
                            <img src="images/person.png" style="width:20px;"/>                                   
                                Amanda Damario                               
                        </button>
                    </li>
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
            </nav>            
        </div>
  -->
      <div class="container-fluid"  name="navBarContainer">
        <div class="col-sm-2">
<!--
        <div class="navbar-header">
    <button type="button" class="btn-primary navbar-toggle " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-haspopup="false" aria-expanded="false">
        <button class="btn btn-primary dropdown-toggle w-10" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="but-primary">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</div>
-->
        
            
            
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav nav-tabs w-100"   >
<!--        <div class="col-md w-90 col-fluid">-->
        <input type="hidden" id="selected_menu_item" value="=$selectedMenuId; ?>" />                               
                               
                <!-- Only 6 products can be displayed at once-->
                           
                    <li class="nav-item dropdown" style="min-width: 190px;">
                            <a class="nav-link dropdown-toggle active" data-toggle="dropdown"
                           href="/mortgage.html" role="dropdown" aria-haspopup="true" aria-expanded="false">
                           Mortgage Ref-117</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                            </div>
                    </li>                     

                    <li class="nav-item dropdown" style="min-width: 190px;">
                            <a class="nav-link dropdown-toggle " data-toggle="dropdown"
                           href="#" role="dropdown" aria-haspopup="true" aria-expanded="false">
                           Mortgage Ref-115</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                        </div>
                      </li>

                    <li class="nav-item dropdown" style="min-width: 190px;">
                            <a class="nav-link dropdown-toggle " data-toggle="dropdown"
                           href="#" role="dropdown" aria-haspopup="true" aria-expanded="false">
                           Mortgage Ref-116</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                        </div>
                      </li>

                    <li class="nav-item dropdown" style="min-width: 190px;">
                            <a class="nav-link dropdown-toggle " data-toggle="dropdown"
                           href="#" role="dropdown" aria-haspopup="true" aria-expanded="false">
                           Mortgage Ref-118</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                        </div>
                      </li>

                    <li class="nav-item dropdown " style="min-width: 190px;">
                            <a class="nav-link dropdown-toggle " data-toggle="dropdown"
                           href="#" role="dropdown" aria-haspopup="true" aria-expanded="false">
                           Mortgage Ref-119</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                        </div>
                      </li>

                    <li class="nav-item dropdown " style="min-width: 190px;">
                            <a class="nav-link dropdown-toggle " data-toggle="dropdown"
                           href="#" role="dropdown" aria-haspopup="true" aria-expanded="false">
                           Mortgage Ref-120</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown " style="min-width: 190px;">
                            <a class="nav-link dropdown-toggle " data-toggle="dropdown"
                           href="#" role="dropdown" aria-haspopup="true" aria-expanded="false">
                           Mortgage Ref-121</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                        </div>
                    </li>




            </ul>
</div>
</div>
              
            </div>
            <!-- testing pop over idea-->
        <!--    
           <a class="nav-link" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" data-content="
                           
                   
            
<div class='container-fluid'>
    <div class='row'>
        <div class=' col-lg-3 w-100'>
            <h3>Users</h3>
            <li>
                <a href=''>Users management</a>
            </li>
            <li>
                <a href=''>licence Management</a>
            </li>
            

        </div>
        <div class='col-sm-3 w-100'>
                    <h3>Templates</h3>
            <li> 
                <a href=''>Email templates</a>
            </li>
            <li>
                <a href=''>Letter Templates</a>
            </li>
            <li>
                <a href=''>SMS templates</a>
            </li>
        </div>
        
    </div>
            
</div>
">
                    Settings
                    </a> -->
        <!--Applicants-->
        <!--
        <div class="container p-3 w-100 " name="applicantsContainer">
            
                <div class="card-group ">

                <div class="card" name="applicant1">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-2">
                           <img src="images/person.png" style="width:30px;"/>
                                </div>
                            <div class="col">
                            <br/>
                            Name: Adam Evans<br/>
                            Dob: 03/06/87<br/></div>
                        </div>
                    </div>
                </div>
                <div class="card" name="applicant2">
                    <div class="card-block">
                        <img src="images/person.png" style="width:30px;"/>
                        Applicant 2
                    </div>
                </div>
                <div class="card">
                    <div class="card-block" name="applicant3">
                        <img src="images/person.png" style="width:30px;"/>
                        Applicant 3
                    </div>
                </div>
                <div class="card" name="applicant4">
                    <div class="card-block">
                        <img src="images/person.png" style="width:30px;"/>
                        Applicant 4
                    </div>
                </div>
            </div>
            </div>
        -->
        <!--end test side nav bar-->
        
<!--        <nav class="navbar navbar-toggleable-md  navbar-inverse bg-inverse">-->

        
        
        
        <div class="container-fluid" name="body content">
            <div class="row" name="separator"><p></p></div>
        <div class="row">
            
            <nav class="nav nav-pills  flex-column p-3">
<!--
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#sideNavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
-->
                
<!--                <h4>Product Menu</h4>-->
<!--                <div class="collapse navbar-collapse" id="sideNavBar">-->
                
                    <a class="nav-link active" href="#">Summary</a>
                    <a class="nav-link" style="border:solid; border-width:1px;" href="#" >Timeline</a>
                    <a class="nav-link" style="border:solid; border-width:1px;" href="#">Application Details</a>
                    <a class="nav-link " style="border:solid; border-width:1px;" href="#">Diary Entries</a>
                    <a class="nav-link" style="border:solid; border-width:1px;" href="#">Commission Details</a>
                    <a class="nav-link" style="border:solid; border-width:1px;" href="#">Further Details</a>
                    <a class="nav-link" style="border:solid; border-width:1px;" href="#">Participants</a>
                    <a class="nav-link" style="border:solid; border-width:1px;" href="#">Document History</a>
                    <a class="nav-link" style="border:solid; border-width:1px;" href="#">Simple Tasks</a>
    <!--                <a class="nav-link" href="#">Attached Files</a>-->
                    <a class="nav-link" style="border:solid; border-width:1px;" href="#">Notes</a>
                    <a class="nav-link" style="border:solid; border-width:1px;" href="#">Fact-find</a>
                    <li class="nav-item dropup " style="border:solid; border-radius:5px;border-width:1px;border-color: #006dcc; background-color:0044cc" style="min-width: 190px;">
                       <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="dropdown" aria-haspopup="true" aria-expanded="false">Attachments</a>
                       <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">General</a>
                            <a class="dropdown-item" href="#">Illustrations</a>
                            <a class="dropdown-item" href="#">Other</a>
                       </div>
                    </li>
<!--                </div>-->
            </nav>
            
            <!-- old side bar-->
            <!--
            <div class="col-2 w-30 col-fixed" name="sideBarContainer">
        <div class="card card-outline-secondary">
            <nav class="navbar-toggleable">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#sideBar" aria-controls="sideBar" aria-expanded="false" aria-label="Toggle navigation"></button>
            <span class="navbar-toggler-icon" style="width:30px">Menu</span>
            <div class="collapse navbar-collapse" id="sideBar">
                <ul class="nav flex-column">                
              <li class="nav-item">
                <a class="nav-link active" href="#">Summary</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Timeline</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Application Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Diary Entries</a>
              </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#">Commission Details</a>
              </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#">Further Details</a>
              </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#">Participants</a>
              </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#">Document History</a>
              </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#">Simple Tasks</a>
              </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#">Attached Files</a>
              </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#">Notes</a>
              </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#">Fact-find</a>
              </li>
                
              
                </ul>
                </div>
                </nav>
                </div>
            </div>-->
            
            

                       <?php include('applicationDetails.html');?>

      </div>
        
        
        
      
        
      
      
      
    
    </body></html>