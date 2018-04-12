<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>HNG Internship | Stage 1 </title>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">
        <meta name="keywords" content="internship, hotels ng">
        <meta name="author" content="Adeogun Oluwaseyi">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/style.css" />                
    </head>
    <body>
        <header class="top-header">
                <h1>HNG INTERNSHIP 4</h1>
        </header>
        <section>
            <div>
                    <img src="images/background-image.jpg"  class="background-image" width="100%" height="772px"/>
                    <div class="time-text">
                        <?php 
                            function formatForView($currentTime){
                                return explode(",",$currentTime);
                            }
                            date_default_timezone_set("Africa/Lagos");
                            $currentTime = formatForView(date("l, jS F Y, H:i ",time()));                    
                        ?> 
                        <h1> <?php  echo "{$currentTime[0]},"; ?> </h1>
                        <h1> <?php echo "{$currentTime[1]}";   ?> </h1>
                        <h1> <?php echo "{$currentTime[2]}";   ?> </h1>                        
                    </div>
            </div>    
        </section>
            
	</body>
</html>