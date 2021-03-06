<?php include "header.php"; ?>

<!--Changing the number in the column_# class changes the number of columns-->
<body>
	<div id="wrap">
	<div id="columns" class="columns_3">
	
	<h2>Our Products</h2>
	<br>
  <figure>
  <img src="images/product/Oyster Mushroom.jpg">
	<figcaption>Oyster Mushroom- Dry</figcaption>
    <p>
      The fruit bodies of this mushroom are distinctly shell or spatula shaped with different shades of white, cream, grey, yellow, pink or light brown depending upon the species.
    </p>
    <a class="login-trigger button" href="#" data-target="#login" data-toggle="modal">Know More</a>
  </figure>
  
   <figure>
  <img src="images/product/product-1.png">
  <figcaption>Button Mushroom- Fresh</figcaption>
    <p> 
      White button mushrooms are available year-round. White button mushrooms are favored by chefs and home cooks for their mild taste and versatility in a variety of culinary dishes.
    </p>
    <a class="login-trigger button" href="#" data-target="#login" data-toggle="modal">Know More</a>
	</figure>
	
	 <figure>
  <img src="images/product/Cordyceps Militaris.png">
  <figcaption>Cordyceps Militaris</figcaption>
    <p>
      militaris are now used extensively in modern systems of medicine. The current survey records the mysterious potentials of C. It helps to Lower Blood Sugar.      
    </p>
    <a class="login-trigger button" href="#" data-target="#login" data-toggle="modal">Know More</a>
	</figure>
	
	 <!-- <figure>
  <img src="images/product/product-4.png">
	<figcaption>Canned Button Mushrooms</figcaption>
    <span class="price"></span>
    <a class="login-trigger button" href="#" data-target="#login" data-toggle="modal">Buy Now</a>
	</figure> -->
		
   </div>
   </div>
 

<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">
    
    <div class="modal-content">
      <div class="modal-body">
        <button data-dismiss="modal" class="close">&times;</button>
        <h4>Buy Now</h4>
        <form>
			<input type="text" name="name" class="name form-control" placeholder="Name"/>
			<input type="email" name="email" class="email form-control" placeholder="Email"/>
			<input type="text" name="subject" class="subject form-control" placeholder="Product Name"/>
			<textarea id="Message" name="message" class="message form-control" placeholder="Write something.." ></textarea>
			
          <input class="btn login" type="submit" value="Submit" />
        </form>
      </div>
    </div>
  </div>  
</div>

</body>

<?php include "footer.php"; ?>