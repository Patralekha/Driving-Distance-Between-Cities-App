<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Driving Distance Between Cities App</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="jumbotron">
        <div class="container-fluid">
            <h1>Driving Distance between Cities App</h1>
            <p>Our App will help you calculate driving distances</p>
            <form class="form-horizontal">
                <div class="form-group">
                    
                        <label for="from" class="col-xs-2 control-label" >From:</label>
                        <div class="col-xs-10">
                            <input type="text" id="from" placeholder="origin" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="to" class="col-xs-2 control-label">To:</label>
                        <div class="col-xs-10">
                            <input type="text" id="to" placeholder="destination" class="form-control">
                        </div>
                    </div>
            </form>
            
            <div class="col-xs-offset-2 col-xs-10">
                <button class="btn btn-info btn-lg" id="submit" onclick="calcRoute();">
                    Submit
                </button>
            </div>
        </div>
        <div class="container-fluid">
            <div id="map">
             <script src="javascript.js"></script>   
            </div>
         
            <div id="output">
                
            </div>
        </div>
      </div>
      
      
      
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQ-a18TnAYo3oWGkfXX16puA9xLn-P5cY&callback=initMap&libraries=places"
    async defer></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>