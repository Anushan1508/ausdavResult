<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<title>All University Development Students' Association - Vavuniya District</title>
</head>

<body>
	<header>
		<div class="header-banner">
			<h1>AUSDAV<br />Annual Examination <br />2021</h1>
		</div>
		<div class="clear"></div>
		<nav>
			<div class="site-title">Finland</div>
						<!--<p>AUSDAV Annual Examination 2021</p>-->
			<ul>
				<li><a href="https://www.facebook.com/ausdavmail">FaceBook</a></li>
				<li><a href="https://www.youtube.com/c/AUSDAV">Youtube</a></li>
				<li><a href="mailto:mailto:Ausdavofficial@gmail.com">Email</a></li>
				<ul>
		</nav>
	</header>

	<!-- <nav class="navbar navbar-default d-flex justify-content-center">
		<div class="container-fluid d-flex justify-content-center">
			<a class="navbar-brand aligrn-center ">Vavuniya All University Students' Development Association</a>
		</div>
	</nav> -->
	<div class="col-md-3"></div>
	
	
	
<!--<h1>Examination  results will be released today at 6.00 pm </h1>-->
	<div class="col-md-6 well">
		<h3 class="text-primary">Enter your index number...</h3>
		<hr style="border-top:1px dotted #ccc;" />
		<div class="col-md-1"></div>
		<div class="col-md-10">
			 <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_modal">Add Content</button> -->
			<br />
			<br />
			<form class="form-inline" method="POST" action="index.php">
				<div class="input-group col-md-12">
					<input type="text" class="form-control" placeholder="Search here..." name="keyword" required="required" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>" />
					<span class="input-group-btn">
						<button class="btn btn-primary" name="search"><span class="glyphicon glyphicon-search"></span></button>
					</span>
				</div>
			</form>
			<br />
			<?php include 'search.php' ?>
		</div>
	</div>
	
	
	
	<!--No Need-->
	
	
	
	<!--<div class="modal fade" id="form_modal" tabindex="-1" role="dialog" aria-hidden="true">-->
	<!--	<div class="modal-dialog">-->
	<!--		<form action="save_content.php" method="POST" enctype="multipart/form-data">-->
	<!--			<div class="modal-content">-->
	<!--				<div class="modal-body">-->
	<!--					<div class="col-md-2"></div>-->
	<!--					<div class="col-md-8">-->
	<!--						<div class="form-group">-->
	<!--							<label>Title</label>-->
	<!--							<input type="text" class="form-control" name="title" required="required" />-->
	<!--						</div>-->
	<!--						<div class="form-group">-->
	<!--							<label>Content</label>-->
	<!--							<textarea class="form-control" style="resize:none; height:250px;" name="content" required="required"></textarea>-->
	<!--						</div>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--				<div style="clear:both;"></div>-->
	<!--				<div class="modal-footer">-->
	<!--					<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>-->
	<!--					<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</form>-->
	<!--	</div>-->
	<!--</div>-->








	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>

</html>