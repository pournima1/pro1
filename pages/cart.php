<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">

<style type="text/css">
	.table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
		width:20%;
		display: inline !important;
	}
	.actions .btn{
		width:36%;
		margin:1.5em 0;
	}
	
	.actions .btn-info{
		float:left;
	}
	.actions .btn-danger{
		float:right;
	}
	
	table#cart thead { display: none; }
	table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
	table#cart tbody tr td:first-child { background: #333; color: #fff; }
	table#cart tbody td:before {
		content: attr(data-th); font-weight: bold;
		display: inline-block; width: 8rem;
	}
	
	
	
	table#cart tfoot td{display:block; }
	table#cart tfoot td .btn{display:block;}
	
}
</style>

	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:54%">Product</th>
							<th style="width:14%">Price</th>
							<!---<th style="width:8%">Quantity</th>-->
							<th style="width:20%" class="text-center">Subtotal</th>
							<th style="width:10%">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include('../db/db.php');
						$sql = "SELECT * FROM cart order by id desc";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
							foreach ($result as $row) {
								?>





								<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="../img/book_img/<?=$row['product_img'];?>" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin"><?=$row['product_name']?></h4>
										<!---<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>--->
									</div>
								</div>
							</td>
							<td data-th="Price">&#8377;.<?=$row['product_rate']?></td>
							<!---<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="1">
							</td>--->
							<td data-th="Subtotal" class="text-center">&#8377;.<?=$row['product_rate']?></td>
							<td class="actions" data-th="">
								
								<a class="btn btn-danger btn-sm" href="../php/deleter_product.php?id=<?=$row['id']?>"><i class="fa fa-trash-o"></i></a>



							</td>
						</tr>












								<?php
							}
						}


						?>


						

















					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>Total 1.99</strong></td>
						</tr>
						<tr>
							<td><a href="../index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong></strong></td>
							<td><a href="login.php" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>





</div>