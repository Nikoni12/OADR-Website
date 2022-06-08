<html>
<head>
    <title>INCOGNITO FINALS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<style> 
		.logout {
			margin-top: -7%;
			margin-left: 100%;
		}
		.profile{	
			margin-top: -7%;
			margin-left: 70%;
			position:absolute;
		}
		
		body, html{
			font-family: 'Oxygen', sans-serif;
			background-image: url("https://i2.wp.com/i.pinimg.com/originals/fa/dc/b2/fadcb24075acb650de29f258af69d830.gif"); 
		}
		@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
		@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
		@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
		.fadeIn {
			opacity:0;
			-webkit-animation:fadeIn ease-in 1;
			-moz-animation:fadeIn ease-in 1;
			animation:fadeIn ease-in 1;
			-webkit-animation-fill-mode:forwards;
			-moz-animation-fill-mode:forwards;
			animation-fill-mode:forwards;
			-webkit-animation-duration:1s;
			-moz-animation-duration:1s;
			animation-duration:1s;
		}
		.fadeIn.first {
		  -webkit-animation-delay: 0.4s;
		  -moz-animation-delay: 0.4s;
		  animation-delay: 0.4s;
		}

		.fadeIn.second {
		  -webkit-animation-delay: 0.6s;
		  -moz-animation-delay: 0.6s;
		  animation-delay: 0.6s;
		}

		.fadeIn.third {
		  -webkit-animation-delay: 0.8s;
		  -moz-animation-delay: 0.8s;
		  animation-delay: 0.8s;
		}


	</style>
</head>
<body>
<div class="container fadeIn">
 <br /><br />
 
 <div class="col-lg-6 col-md-6">
  <div class="table-responsive fadeIn first">
   <h3 align="center" style="font-size: 75px; background: -webkit-linear-gradient(#A13670, #262254);-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;font-family:Georgia;-webkit-text-stroke-width: 2px; -webkit-text-stroke-color: #9A77CF;">Product List</h3><br />
   <?php
   foreach($product as $row)
   {
    echo '
    <div class="col-md-4"  style="background: -webkit-linear-gradient(#E5147A, #37018A);border-style: solid;padding:16px; background-color:#f1f1f1; border:1px solid #ccc; margin-bottom:16px; height:400px" align="center">
     <img style = "width:100px; height:100px;"src="'.base_url().'uploads/'.$row->product_image.'" class="img-thumbnail" /><br />
     <h4 style="color:white;font-family:Courier New;font-size:16px;">'.$row->product_name.'</h4>
     <h3 style="color:fd202b;font-weight: bold;font-family:Courier New;font-size:20px;" class="text-danger">$'.$row->product_price.'</h3>
     <input type="text" name="quantity"  style="width:50px;font-family:Courier New;align:center;"class="form-control quantity" id="'.$row->product_id.'" /><br />
     <button type="button" name="add_cart" style="font-family:Courier New;background:#A40E57;"  class="btn btn-success add_cart" data-productname="'.$row->product_name.'" data-price="'.$row->product_price.'" data-productid="'.$row->product_id.'" />Add to Cart</button>
    </div>
    ';
   }
   ?>
             <ul class='pagination' style="float:left;font-family:Courier New;">
            <?php echo $this->pagination->create_links();?>
        </ul> 
  </div>
 </div>
 <div class="col-lg-6 col-md-6 fadeIn second " >
 <a href = 'http://localhost/CODE_IGN/User/logout'><button style="font-family:Courier New;background:#A40E57;margin-top:10px;" class = 'logout btn btn-primary btn-lg '>LOGOUT</button></a>
 <a href = 'http://localhost/CODE_IGN/User/profile'><button style="font-family:Courier New;background:#A40E57;margin-top:-8%;" class = 'profile btn btn-primary btn-lg '>PROFILE</button></a>
  <div id="cart_details" class = "fadeIn third" >
  </div>
  
 </div>
</div>
 <div>  
    </div>    
    </div>
</body>
</html>
<script>
$(document).ready(function(){
 
 $('.add_cart').click(function(){
  var product_id = $(this).data("productid");
  var product_name = $(this).data("productname");
  var product_price = $(this).data("price");
  var quantity = $('#' + product_id).val();
  if(quantity != '' && quantity > 0)
  {
   $.ajax({
    url:"<?php echo base_url(); ?>User/add",
    method:"POST",
    data:{product_id:product_id, product_name:product_name, product_price:product_price, quantity:quantity},
    success:function(data)
    {
     alert("Product Added into Cart");
     $('#cart_details').html(data);
     $('#' + product_id).val('');
    }
   });
  }
  else
  {
   alert("Please Enter quantity");
  }
 });

 $('#cart_details').load("<?php echo base_url(); ?>User/load");

 $(document).on('click', '.remove_inventory', function(){
  var row_id = $(this).attr("id");
  if(confirm("Are you sure you want to remove this?"))
  {
   $.ajax({
    url:"<?php echo base_url(); ?>User/remove",
    method:"POST",
    data:{row_id:row_id},
    success:function(data)
    {
     alert("Product removed from Cart");
     $('#cart_details').html(data);
    }
   });
  }
  else
  {
   return false;
  }
 });

 $(document).on('click', '#clear_cart', function(){
  if(confirm("Are you sure you want to clear cart?"))
  {
   $.ajax({
    url:"<?php echo base_url(); ?>User/clear",
    success:function(data)
    {
     alert("Your cart has been clear...");
     $('#cart_details').html(data);
    }
   });
  }
  else
  {
   return false;
  }
 });

});
</script>