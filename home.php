<?php                                                                                      
include 'api/config.php';


$query = "select * from `student` ";
$result  = mysqli_query($con, $query);
$count = mysqli_num_rows($result);

// AEC students amount
$query1 = "select * from `student` where event_category='digi'";
$result1  = mysqli_query($con, $query1);
$count1 = mysqli_num_rows($result1);

// ACEt students amount
$query2 = "select * from `student` where event_category='sparks'";
$result2  = mysqli_query($con, $query2);
$count2 = mysqli_num_rows($result2);


// ACOE students amount
$query3 = "select * from `student` where event_category='electrenz'";
$result3  = mysqli_query($con, $query3);
$count3 = mysqli_num_rows($result3);



?>
<!DOCTYPE html>
<html>
<head>
	<title>Count</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="js/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style type="text/css">
body{
	color: #fff;
	background: url("https://www.hdwallpapers.in/walls/colorful_background-wide.jpg") no-repeat;
}
a{
	color: #fff;
	text-decoration: none;
}
a:hover{
	color: #fff;
	text-decoration: none;
}


</style>
<body>

	
		<br>
		<div class="col-md-8 col-md-offset-2">
			<div class="col-md-4">
				<a href="details.php?category=event_category&type=digi">
					<div class="col-md-offset-1 col-md-11" style="background: rgba(0,0,0,0.1)">
						<h2>DIGI </h2>
						<h1><?php echo $count1; ?></h1>
					</div>
				</a>
			</div>
			<div class="col-md-4">
				<a href="details.php?category=event_category&type=spark">
					<div class="col-md-offset-1 col-md-11 " style="background: rgba(0,0,0,0.1)">
						<h2>SPARK </h2>
						<h1><?php echo $count2 ?></h1>
					</div>
				</a>
			</div>
			<div class="col-md-4">
				<a href="details.php?category=event_category&type=electrendz">
					<div class="col-md-offset-1 col-md-11" style="background: rgba(0,0,0,0.1)">
						<h2>ELECTRENDZ </h2>
						<h1><?php echo $count3 ?></h1>
					</div>
				</a>
			</div>
			<br><br>
<br><br>        <div class="clearfix"></div>


<br><br>
				<div class="col-md-12 col-md-offset-4">
				<div class="col-md-4">
				<a href="details.php?category=event_category&type=electrendz">
					<div class="col-md-offset-1 col-md-11" style="background: rgba(0,0,0,0.1)">
						<h2>total amount </h2>
						<h1><?php echo $total_amount ?></h1>
					</div>
				</a>
		
			                                  	
                                          <?php
                                            $query4 = "select * from `student` ";
                                            $result4 = mysqli_query($con, $query);
                                            @$total_amount = 0;

                                            while ($Amount = mysqli_fetch_array($result)) {
                                                $total_amount = $total_amount+$Amount['fee'];
                                            }
                                        ?>

                                        	</div>
			</div>
                                     <div class="col-md-4">
		
			
					<div class="col-md-offset-1 col-md-11" style="background: rgba(0,0,0,0.1)">
						<!-- <h2>total amount </h2>
						<h1><?php echo $count3 ?></h1> -->
					</div>
				</a>
			</div>
                                    <i class="fa fa-rupee fw"></i><?php echo $total_amount; ?> 
                                </div>
</div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div><br/>
                    </div>
                </div>
            </div>
        </div>

			<div class="clearfix"></div>
			<br>
		</div><br>
		<div class="clearfix"></div>
	</body>
	</html>