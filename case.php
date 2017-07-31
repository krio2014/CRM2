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
    <?php include('header.html')?>
        <div style="padding-top:56px;"></div>
      
        <!-- SUB-NAVBAR including products button, options for current product and the list of applicants involved in this case-->
        
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
                        <h6 class="dropdown-header">Other 
                            <span style="color:blue; align-content:right;">+</span>
                        
                        </h6>
                        
                        
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
      <div class="container-fluid p-4 "  name="body content">  
<!--        <div class="row" name="separator"><p></p></div>-->
      
        <!-- PROGRESS BAR-->     
        <div class="progress">
            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
        </div>
        <!--END PROGRESS BAR-->    
        
<!-- body including side bar and main panel-->
            
                  
            <div class="row" name="separator"><p></p></div>
            
            <div class="row">
                <div class="card card-fluid">
                    <h5 class="card-header card-faded">
                        Product Options
                    </h5>
                    <nav class="nav  flex-column" >                                    
<!--                        <a class="nav-link"  href="#">Summary</a>-->
                        <a class="nav-link" href="#" >Timeline</a>
                        <a class="nav-link active" href="#">Product Details</a>
                        <a class="nav-link" href="#">Diary Entries</a>
                        <a class="nav-link" href="#">Commission Details</a>
                        <a class="nav-link"  href="#">Further Details</a>
                        <a class="nav-link" href="#">Participants</a>
                        <a class="nav-link"  href="#">Document History</a>
                        <a class="nav-link"  href="#">Checklist</a>
                        <a class="nav-link"  href="#">Product Notes</a>
                        <a class="nav-link"  href="#">Fact-find</a>
                        <li class="nav-item dropup "  style="min-width: 190px;">
                           <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="dropdown" aria-haspopup="true" aria-expanded="false">Attachments</a>
                           <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">General</a>
                                <a class="dropdown-item" href="#">Illustrations</a>
                                <a class="dropdown-item" href="#">Other</a>
                           </div>
                        </li>
                    </nav>
                </div>

                <!-- Main Panel-->

               <?php include('applicationDetails.html');?>

          </div>
        </div>
        
    </body>
</html>