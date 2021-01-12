
 <html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</head>
 <style>
    html {
      scroll-behavior: smooth;
     }
    body {
        font-family: 'Poppins';
        font-weight: 400;
    }
    .nav-link {
        color:#333333;
    }
    .fa-facebook:hover {
        color:#fe8f00;
    }
    .fa-twitter:hover {
        color:#fe8f00;
    }
    .fa-linkedin-in:hover {
        color: #fe8f00;
    }
    .fa-wordpress-simple:hover {
        color:#fe8f00;
    }
    .fa-rss:hover {
        color: #fe8f00 ;
    }
        /* .logo img {
            height:15%;
            width:90%;
        } */
        .hamburger{
            float: right;
            display: none;
            font-size: 17px;
            font-weight:400;
            padding: 13px;
            border-bottom:2px solid #fff;
        }
        .hamburger:hover {
            border-bottom:2px solid #fe8f00;  /*coral */
            background-color:#D9D9D9;
            color:#101010;
        }
        .mb-search{
            display:none;
            float:right;
            font-size:17px;
            padding: 13px;
            border-bottom:2px solid #fff;
        }
        .mb-search:hover{
            border-bottom:2px solid #fe8f00;  /*coral */
            background-color:#D9D9D9;
            color:#101010;
        }
        
        @media screen and (max-width: 600px) {
            .cont-header{
                display: none;
            }
            .col-lg-8 .navbar-expand {
                display: none;
            }
            .hamburger{
                display: block;
            }
            .mb-search{
                display:block;
            }
            
            
        }
        @media screen and (min-width: 600px) and (max-width: 994px) {
            .cont-header{
               display: none;
            }
            .col-lg-8 .navbar-expand {
                display: none;
            }
            .hamburger{
                display: block;
            }
            .mb-search{
                display:block;
            }
        
        }
        @media screen and (min-width: 995px) and (max-width: 1098) {
            .cont-header{
               display: block;
            }
            .col-lg-7 .navbar-expand {
                display: block;
            }
            .hamburger{
                display: none;
            }
            .mb-search{
                display:none;
            }
            .menu{
                margin: 0px 0px 0px 0px;
                padding:10px 0px 10px 0px;
            }
            .menu li {padding:0px 25px 0px 0px;}
            .menu a {
                padding: 15px 11px;
                font-size: 20px;
                font-weight: 400;
                border-bottom: 2px solid #fff;
            }
            .dropdown .dropbtn{
                font-size:13px;
                font:normal;
                padding: 7px 7px;
            }
        }
    
    .header
    {
        margin-bottom:0px;
        box-shadow:0px 10px 20px #666;
        background-color: #fff;
        z-index: 2;
        width: 100%;
    }
    .row {
        margin-left: 0px;
        margin-right: 0px;	
    }
    /* .header.row {
        margin-left: 0px;
        margin-right: 0px;
    } */
    .sticky {
      position: fixed;
      top: 0;
      width: 100%;
    }
    .right {
        margin-right:10px;
    }
    .menu-bar {
        margin-left: -15px;
    }
    .menu {
        margin-top:22px;
        float: right;
        /* margin:0px 25px 0px 0px; */
        padding:5px 10px 5px 0px;
    } 
     .menu li {
        padding:0px 5px 0px 0px;
    }
    .menu .nav-item {
        margin-bottom:0px;
    }
    .menu a {
        padding: 10px 25px;
                font-size: 20px;
                font-weight: 400;
                border-bottom: 2px solid #fff;
    }
    .menu .nav-link:hover {
        border-bottom:2px solid #fe8f00;  
        background-color:#fe8f00;
        color:#fff;
    }
    .dropdown-menu{
        min-width: 20rem;
        float:right;
    }
    .dropdown .dropbtn {
      font-size: 16px;  
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font: inherit;
      margin: 0;
    }
    .dropdown-content {
      display: none;
      left:-600%;
      margin-top:6px ;
      position: absolute;
      background-color: #ffffff;
      width: 700%;
      border-top:1px solid #fe8f00;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 2;
      height: 280px;
    }
    
    .dropdown-content1 {
      display: none;
      /* left:-600%; */
      margin-top:4px ;
      position: absolute;
      background-color: #ffffff;
      /* width: 700%; */
      border-top:1px solid #fe8f00;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
      /* height: 280px; */
    }
    
    .dropdown:hover .dropdown-content {
      display: block;
    }
    .dropdown:hover .dropdown-content1 {
      display: block;
    }
    
    
    /* Create three equal columns that floats next to each other */
    .column {
      float: left;
      padding: 10px;
      z-index:2;
      /* background-color: #ccc; */
      /* height: 250px; */
    }
    
    .column a {
      float: none;
      color: black;
      padding: 12px;
      text-decoration: none;
      display: block;
      text-align: left;
      font-size:14px;
      font-weight: 500;
      border-bottom: 1px solid #053440;
    }
    .column i {
        color:#fe8f00!important;
        }
    .column a:hover{
        background-color:#fe8f00;
          color: #fff;
    }
    .column a:hover i {
        color:#fff!important;
    }
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    .new-arrival {
        transition:0.70s;
    }
    
    .new-arrival:hover { 
        background-color:none !important;
        color:blue !important;
    }
    
    .super_new {
      height: 50px;
      width: 50px;
      background-color: #000;
      color:#fff;
      border-radius: 50%;
      }
    
    .new-arrival:hover .super_new {
        transform: rotate(360deg);
    }
    .search_form_input {
        padding-top:0px;
        display:inline;
    }
    /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
      .column {
        width: 100%;
        height: auto;
      }
      .head-contact{
          display:none;
      }
    }
    
	
	</style>   
	<style>  
	/* product */
		
body {
	background: url(//subtlepatterns.com/patterns/scribble_light.png);
 
}
#wrap{
	width: 100%;
}
div#columns {
    padding: 50px;
}
.columns_2 figure{
   width:49%;
   margin-right:1%;
}
.columns_2 figure:nth-child(2){
	margin-right: 0;
}
.columns_3 figure{
   width:32%;
   margin-right:1%;
}
.columns_3 figure:nth-child(3){
	margin-right: 0;
}
.columns_4 figure{
   width:24%;
   margin-right:1%;
}
.columns_4 figure:nth-child(4){
	margin-right: 0;
}
.columns_5 figure{
   width:19%;
   margin-right:1%;
}
.columns_5 figure:nth-child(5){
	margin-right: 0;
}
#columns figure:hover{
	-webkit-transform: scale(1.1);
	-moz-transform:scale(1.1);
	transform: scale(1.1);

}

div#columns figure {
	display: inline-block;
	background: #FEFEFE;
	border: 2px solid #FAFAFA;
	box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
	margin: 0 5px 15px;
	-webkit-column-break-inside: avoid;
	-moz-column-break-inside: avoid;
	column-break-inside: avoid;
	padding: 15px;
	padding-bottom: 5px;
	background: -webkit-linear-gradient(45deg, #FFF, #F9F9F9);
	opacity: 1;
	-webkit-transition: all .3s ease;
	-moz-transition: all .3s ease;
	-o-transition: all .3s ease;
	transition: all .3s ease;
}

div#columns figure img {
	width: 100%;
    object-fit: cover;
    height: 280px;
    border-bottom: 1px solid #ccc;
    padding-bottom: 15px;
    margin-bottom: 5px;
}

div#columns figure figcaption {
    font-size: 1.2rem;
    color: #444;
    margin-bottom: 5px;
    line-height: 1.5;
    /* height: 60px; */
    font-weight: 600;
    text-overflow: ellipsis;
}

a.button{
  padding:10px;
  background:#fe8f00;
  margin:10px;
  display:block;
  text-align:center;
  color:#fff;
  transition:all 1s linear;
  text-decoration:none;
  text-shadow:1px 1px 3px rgba(0,0,0,0.3);
  border-radius:3px;
  border-bottom:3px solid #ff6536;
  box-shadow:1px 1px 3px rgba(0,0,0,0.3);
}
a.button:hover{
  background:#fe8f00;
  border-bottom:3px solid #fe8f00;
  color:#f1f2f3;
}
@media screen and (max-width: 960px) { 
  #columns figure { width: 24%; }
}
@media screen and (max-width: 767px) {
  #columns figure { width:32%;}
}
@media screen and (max-width: 600px) {
  #columns figure { width: 49%;}
}
@media screen and (max-width: 500px) {
  #columns figure { width: 100%;}
}
	
	</style>   
	<style>  
/*popup*/	

  /*Trigger Button*/
.login-trigger {
  font-weight: bold;
  color: #fff;
  background: linear-gradient(to bottom right, #B05574, #F87E7B);
  padding: 15px 30px;
  border-radius: 30px;
  position: relative; 
  top: 50%;
}
.heading {
    text-align: center;
    padding: 52px 0 0 0;
}
.heading h2 {
    font-size: 35px;
    font-weight: 700;
}
/*Modal*/
h4 {
  font-weight: bold;
  color: #000;
}
.close {
  color: #fff;
  transform: scale(1.2)
}
.modal-content {
  font-weight: bold;
  background: linear-gradient(to bottom right,#fe8f00,#b1690c);
}
.form-control {
  margin: 1em 0;
}
.form-control:hover, .form-control:focus {
  box-shadow: none;  
  border-color: #fff;
}
.name, .email, .subject, .message{
  border: none;
  border-radius: 0;
  box-shadow: none;
  border-bottom: 2px solid #eee;
  padding-left: 0;
  font-weight: normal;
  background: transparent;  
}
.form-control::-webkit-input-placeholder {
  color: #eee;  
}
.form-control:focus::-webkit-input-placeholder {
  font-weight: bold;
  color: #fff;
}
.login {
  padding: 6px 20px;
  border-radius: 20px;
  background: none;
  border: 2px solid #FAB87F;
  color: #FAB87F;
  font-weight: bold;
  transition: all .5s;
  margin-top: 1em;
}
.login:hover {
  background: #FAB87F;
  color: #fff;
}
	</style>   
    <div class="header" id="navbar">
        <div class="container">
            <div class="row">
                <div class="logo col-lg-4 col-md-12 col-sm-12">
                    <a href="index.php"><img src="images/logo-1.png" width="200px" alt="logo"></a>
                    <a class="hamburger" onclick="w3_open()"><i class="fa fa-bars"></i></a>	
                </div>

                <div class="col-lg-8 col-sm-3 menu-bar">
                    <ul class="menu nav navbar-expand" >
                        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="product.php" class="nav-link">Product</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>				
                        <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>			
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <style>
#mySidebar {right:0;top:0;z-index: 3;width:235px;}
.accordion {
  background-color: #fff;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active1, .accordion:hover {
  background-color: #fff;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active1:after {
  content: "\2212";
}

.panel {
  padding: 0 16px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
.menu-cat {color:#555555;font-size:11px;font-weight:700;}
.menu-cat:hover {color:#555555;font-size:11px;font-weight:700;}
</style>
    </style>
    <div class="w3-sidebar w3-bar-block w3-border-left" style="display: none" id="mySidebar">
		<button onclick="w3_close()" class="w3-bar-item w3-xxlarge" style="text-align: right;"> &times;</button>
		<a href="#" class="w3-bar-item w3-button">
			<i style='font-size:18px' class='fas'>&#xf101;</i> Home
		</a>
		<a href="#" class="w3-bar-item w3-button">
			<i style='font-size:18px' class='fas'>&#xf101;</i> Product
		</a>
		<a href="#" class="w3-bar-item w3-button">
			<i style='font-size:18px' class='fas'>&#xf101;</i> About Us
		</a>
		<a href="#" class="w3-bar-item w3-button">
			<i style='font-size:18px' class='fas'>&#xf101;</i> Contact Us
		</a>
    </div>
    <script>
        function w3_open() {
              document.getElementById("mySidebar").style.display = "block";
            }
            function w3_close() {
              document.getElementById("mySidebar").style.display = "none";
            }
          </script>