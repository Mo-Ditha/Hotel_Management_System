
<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hotel Booking Management System | Royal Grand Hotel :: Gallery </title>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/lightbox.css">

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>

</head>
<body>
 

    	<!--header-->
			<div class="header head-top">
				<div class="container">
			<?php include_once('includes/header.php');?>
		</div>
</div>
<!--header-->
		<div class="content">
			<!-- gallery -->
	<div class="gallery-top">
			<!-- container -->
			<div class="container">
				<div class="gallery-info">
					<h2>gallery</h2>
				</div>
				<div class="gallery-grids-top">
					<div class="gallery-grids">
						<?php
$sql="SELECT * from tblgal";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
						<div class="col-md-3 gallery-grid">
							<br />
							<a class="example-image-link" href="admin/images/<?php echo $row->Image;?>" data-lightbox="example-set" data-title=""><img class="example-image" src="admin/images/<?php echo $row->Image;?>" height="300" width="300" alt=""/></a>
						</div><?php $cnt=$cnt+1;}} ?>
						
						
						<div class="clearfix"> </div>
					</div>
		
					<script src="js/lightbox-plus-jquery.min.js"></script>
				</div>
			</div>
			<!-- //container -->
	</div>
	<!-- //gallery -->

				<?php include_once('includes/getintouch.php');?>
			</div>
			<!--footer-->
					<?php include_once('includes/footer.php');?>
</body>
</html>
