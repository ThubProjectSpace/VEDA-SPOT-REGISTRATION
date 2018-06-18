<?php 
include 'api/config.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>registered students</title>
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
	<script>
		$(document).ready(function() {
			$('.del').DataTable( {
				dom: 'Bfrtip',
				buttons: [
				'copy', 'csv', 'excel', 'pdf', 'print'
				]
			} );
		} );</script>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js">"></script>

		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
	</head>
	<body>
		<div class="container-fluid ">
			<div class="col-md-4"></div>
			<div class="col-md-4">
			</div>
			<div class="col-md-4"><br>

			</div>
		</div>
		<div class="container-fluid">
			<h2 class="text-center ">students data</h2> 
			<div class="table-responsive" style="background: rgba(0,0,0,0.4);">
				<table class="table table-bordered table-hover del">
					<thead>
						<tr>
							<th>S.No</th>
							<th>Receipt Id.</th>
							<th>Roll No.</th>
							<th>Student Name</th>
							<th>college</th>
							<th>mobile</th>  
							<th>Email</th>
							<th>Depatment</th>
							<th>Event_category</th>
							<th>Event </th>
							<th>Event_location</th>
							<th>Amount</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 

						$x=1;
						
						$query="SELECT * FROM `student`";
						$result=mysqli_query($con,$query);
						while($data =mysqli_fetch_array($result))
						{


							?>

							<tr>
								<td><?php echo $x; ?></td>
								<td><?php echo $data["id"]; ?></td>
								<td><?php echo $data["rollno"]; ?></td>
								<td><?php echo $data["studentname"]; ?></td>
								<td><?php echo $data["college"]; ?></td>
								<td><?php echo $data["mobile"]; ?></td>
								<td><?php echo $data["email"]; ?></td>
								<td><?php echo $data["department"]; ?></td>
								<td><?php echo $data["event_category"]; ?></td>
								<td><?php echo $data["event"]; ?></td>
								<td><?php echo $data["event_location"]; ?></td>

								<td><?php echo $data["fee"]; ?> <i class="fa fa-rupee"></i></td>
								<td><a href="print.php?id=<?php echo base64_encode($data['id']); ?>" target="new"><label class="label label-warning" data-toggle="tooltip" title="print" data-placement="right" style="cursor: pointer;"><i class="fa fa-print fw" style="color: #fff;"></i></label></a></td>
							</tr>

							<?php 
							$x++;
						}
						?>	
					</tbody>
				</table>
			</div>
		</div>
	</body>
	</html>