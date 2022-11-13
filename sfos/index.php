<?php 
include_once 'config/Database.php';
include_once 'class/Customer.php';
include_once 'class/Food.php';

$database = new Database();
$db = $database->getConnection();

$customer = new Customer($db);
$food = new Food($db);

if(!$customer->loggedIn()) {	
	header("Location: login.php");	
}
include('inc/header.php');
?>
<style>
	.body{
		font-family: Helvetica ;

	}
	.food-img-holder{
		font-family: Helvetica ;
		width:100%;
		height:25;
	}
	.food-img-holder>img{
		width:100%;
		height:100%;
		object-fit:cover;
		object-position:center center;
	}
	button, input[type="submit"] { 
		--button-color: lighten($colorCanvasInverted, 10%);
		--button-text-color: var(--app-text-color);

		box-sizing: border-box;
		font-family: inherit;
		padding: 0.8rem 1rem;
		border-radius: 1rem;
		box-shadow: shadow(low);
		border: 1px solid var(--button-color);
		background-color: var(--button-color);
		color: var(--button-text-color);
		font-size: 1rem;

		display: inline-flex;
		justify-content: center;
		align-items: center;
		
	}

	button:hover, button:focus, button:active, input[type="submit"]:hover, input[type="submit"]:focus, input[type="submit"]:active {
		background: #43C6DB;
		color: #ffffff;
	}
	.rounded-0{
		border-radius: 50;

	}
	

</style>
<link rel="stylesheet" type = "text/css" href ="css/foods.css">
<?php include('inc/container.php');?>
<div class="content">
	<div class="container-fluid">		
		<div class='row'>		
        <?php include('top_menu.php'); ?> 
		</div>
			<div class='row my-3'>
			<?php 
			$result = $food->itemsList();
			$count=0;
			while ($item = $result->fetch_assoc()) { 
			if ($count == 0) {
				echo "<div class='row'>";
			}
			?>	
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-3 food-item">
					<form method="post" action="cart.php?action=add&id=<?php echo $item["id"]; ?>">
						<input type="hidden" name="item_name" value="<?php echo $item["name"]; ?>">
						<input type="hidden" name="item_price" value="<?php echo $item["price"]; ?>">
						<input type="hidden" name="item_id" value="<?php echo $item["id"]; ?>">
						<div class="card rounded-0" align="center";>
							<div class="food-img-holder position-relative overflow-hidden">
							<img src="<?php echo $item["images"]; ?>" class="img-top">
							</div>
							<div class="card-body">
								<div class="lh-1">
									<div class="card-title fw-bold h5 mb-0"><?php echo $item["name"]; ?></div>
									<div class="card-description text-muted"><small><?php echo $item["description"]; ?></small></div>
									<div><small class="card-description text-success h6 mb-0">$ <?php echo $item["price"]; ?>/-</small></div>
									<div class="d-grid">
										<br>
									<div class="input-group input-sm">

										<span class="input-group-text rounded-0">Quantity</span>
										<input type="number" class="form-control rounded-0 text-center" id="quantity" name="quantity" value="1" required="required">

									</div>
									<br>

									<button type="submit" name="add" value="Add to Cart">Add to Order</button>
									</div>
								</div>
							</div>
							
						</div>
					</form>    
				</div>

			<?php 
			$count++;
			if($count==4)
			{
			  echo "</div>";
			  $count=0;
			}
			} 
			?>
			</div>
		   
    </div>    
    <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2022 Arisi Ezra Kaba PM project | <a href="https://africau.edu/" target="_blank">Africa University</a></div></div>
        </footer>    
		
<?php include('inc/footer.php');?>
