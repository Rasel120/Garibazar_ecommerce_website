<style>
    .head_ban{
        width: 100%;
        height: 30px;
        background:#f0f0f0f0;
        
    }
    .wrapperp{
        width: 80%;
        height: 30px;
        margin: 0 auto;
    }
    .txt{
        width: 35%;
        height: 30px;
        margin: 0px 5px;
        
        float: left;
    }
    .phone{
        width: 35%;
        height: 30px;
        margin: 0px 5px;
        float: left;
    }
    .location{
        width: 25%;
        height: 30px;
        margin: 0px 5px;
        float: left;
    }
</style>
<?php include 'includes/session.php'; ?>
<div class="head_ban">
    <div class="wrapperp">
        <div class="txt"><marquee>
<b>Trusted GARIBAZAR Site in Bangladesh</b></marquee></div>
        <div class="phone"><b>CALL: 09611-102030 (9am-11pm)</b></div>
        <div class="location"> <b><a target="blank" href="https://g.page/BCDL-BG?share">Location</a></b> </div>
    </div>
</div>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>


	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<!-- <div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?> -->
	        		<!-- <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <ol class="carousel-indicators">
		                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
		                </ol>
		                <div class="carousel-inner">
		                  <div class="item active">
		                    <img src="images/banner1.png" alt="First slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/banner2.png" alt="Second slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/banner3.png" alt="Third slide">
		                  </div>
		                </div>
		                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                  <span class="fa fa-angle-left"></span>
		                </a>
		                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		                  <span class="fa fa-angle-right"></span>
		                </a>
		            </div> -->
		           
		       <!-- 		<?php
		       			$month = date('m');
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT *, SUM(quantity) AS total_qty FROM details LEFT JOIN sales ON sales.id=details.sales_id LEFT JOIN products ON products.id=details.product_id WHERE MONTH(sales_date) = '$month' GROUP BY details.product_id ORDER BY total_qty DESC LIMIT 6");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 3) ? 1 : $inc + 1;
	       						if($inc == 1) echo "<div class='row'>";
	       						echo "
	       							<div class='col-sm-4'>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='".$image."' width='100%' height='230px' class='thumbnail'>
		       									<h5><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></h5>
		       								</div>
		       								<div class='box-footer'>
		       									<b>&#36; ".number_format($row['price'], 2)."</b>
		       								</div>
	       								</div>
	       							</div>
	       						";
	       						if($inc == 3) echo "</div>";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
	        	</div> -->
	        	<!-- <div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div> -->


	        	<div>
	<?php include 'home_view/home_view.php'; ?>
	<?php include 'home_view/home_view2.php'; ?>	
	<?php include 'home_view/home_view3.php'; ?>
	<?php include 'home_view/home_view4.php'; ?>
				</div>






	        </div>
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>



<?php include 'includes/scripts.php'; ?>
</body>
</html>