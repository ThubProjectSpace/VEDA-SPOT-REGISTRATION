<?php                                                                                      
include 'api/config.php';


$query = "select * from `student` ";
$result  = mysqli_query($con, $query);
$count = mysqli_num_rows($result);

// AEC students amount
$query1 = "select * from `student` where event_category='sparks'";
$result1  = mysqli_query($con, $query1);
$count1 = mysqli_num_rows($result1);

// ACEt students amount
$query2 = "select * from `student` where event_category='digi'";
$result2  = mysqli_query($con, $query2);
$count2 = mysqli_num_rows($result2);


// ACOE students amount
$query3 = "select * from `student` where event_category='electrenz'";
$result3  = mysqli_query($con, $query3);
$count3 = mysqli_num_rows($result3);

?>
<div class="col-md-3 col-md-offset-4"></div>
<div id="page-wrapper" class="gray-bg">
	<div class="content-main">

		<!--content-->
		<div class="content-top"><br>
			<div class="col-md-12">
			
			<div class="col-md-4 dashboard">
				<div class="content-top-1">
					<a href="details.php?category=college&type=aec">
						<div class="col-md-12 top-content" style="background: rgba(0,0,0,0.1)">
							<h5> DIGI</h5>
							<h1><?php echo $count1; ?></h1>
						</div>
						<div class="col-md-12 top-content1" >	   
							<div id="demo-pie-1" class="pie-title-center" data-percent="25"> <span class="pie-value"></span> </div>
						</div>
						<div class="clearfix"> </div>
					</a>
				</div>
				<div class="content-top-1">
					<a href="details.php?category=college&type=acet">
						<div class="col-md-12 top-content"style="background: rgba(0,0,0,0.1)" >
							<h5> SPARKS</h5>
							<h1><?php echo $count2 ?></h1>
						</div>
						<div class="col-md-12 top-content1">	   
							<div id="demo-pie-2" class="pie-title-center" data-percent="50"> <span class="pie-value"></span> </div>
						</div>
						<div class="clearfix"> </div>
					</a>
				</div>
				<div class="content-top-1">
					<a href="details.php?category=college&type=acoe">
						<div class="col-md-12 top-content" style="background: rgba(0,0,0,0.1)">
							<h5> electrenz</h5>
							<h1><?php echo $count3 ?></h1>
						</div>
						<div class="col-md-12 top-content1">	   
							<div id="demo-pie-3" class="pie-title-center" data-percent="75"> <span class="pie-value"></span> </div>
						</div>
						<div class="clearfix"> </div>
					</a>
				</div>
			</div>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
	

	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<script src="js/bootstrap.min.js"> </script>
</body>
</html>

