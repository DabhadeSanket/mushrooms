<?php include "header.php"; ?>
<style>
            ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        img {
    max-width: 100%;
    height: auto;
}
        section {
            padding-bottom: 10px;
           /* min-height: 100vh;*/
        }

.sec-title{
  position:relative;
  z-index: 1;
  margin-bottom:10px;
}

.sec-title .title{
    position: relative;
    display: block;
    font-size: 23px;
    line-height: 30px;
    color: #d5421b;
    font-weight: 700;
    margin-bottom: 0px;
}

.sec-title h2{
  position: relative;
  display: block;
  font-size:40px;
  line-height: 1.28em;
  color: #222222;
  font-weight: 600;
  padding-bottom:18px;
}

.sec-title h2:before{
  position:absolute;
  content:'';
  left:0px;
  bottom:0px;
  width:50px;
  height:3px;
  background-color:#d1d2d6;
}

.sec-title .text{
  position: relative;
  font-size: 17px;
  line-height: 26px;
  color: #848484;
  font-weight: 400;
  margin-top: 35px;
}

.sec-title.light h2{
  color: #ffffff;
}

.sec-title.text-center h2:before{
  left:50%;
 
}

.list-style-one{
  position:relative;
}

.list-style-one li{
  position:relative;
  font-size:16px;
  line-height:26px;
  color: #222222;
  font-weight:400;
  padding-left:35px;
  margin-bottom: 12px;
}

.list-style-one li:before {
    content: "\f058";
    position: absolute;
    left: 0;
    top: 0px;
    display: block;
    font-size: 18px;
    padding: 0px;
    color: #11b538;
    font-weight: 600;
    -moz-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    line-height: 1.6;
    font-family: "Font Awesome 5 Free";
}

.list-style-one li a:hover{
  color: #088f28;
}

.btn-style-one{
  position: relative;
  display: inline-block;
  font-size: 17px;
  line-height: 30px;
  color: #ffffff;
  padding: 10px 0px;
  font-weight: 600;
  overflow: hidden;
  letter-spacing: 0.02em;
  background-color: #11b538;
}

.btn-style-one:hover{
  background-color: #006ba2;
  color: #ffffff;
}
.about-section{
  position: relative;
}
@media screen and (min-width: 426px) and (max-width: 1024px) {  .about-section{ padding: 120px 0 30px;}  }
.about-section .sec-title{
  margin-bottom: 45px;
}

.about-section .content-column{
  position: relative;
  margin-bottom: 20px;
}

.about-section .content-column .inner-column{
  position: relative;
  padding-left: 0px;
}

.about-section .text{
  margin-bottom: 40px;
  font-size: 17px;
  line-height: 26px;
  color: #848484;
  font-weight: 400;
  text-align:justify;
}

.about-section .list-style-one{
  margin-bottom: 20px;
}

.about-section .btn-box{
  position: relative;
}

.about-section .btn-box a{
  padding: 10px 30px;
}

.about-section .image-column{
  position: relative;
}

.about-section .image-column .text-layer{
    position: absolute;
    right: -110px;
    top: 50%;
    font-size: 325px;
    line-height: 1em;
    color: #ffffff;
    margin-top: -175px;
    font-weight: 500;
}

.about-section .image-column .inner-column{
  position: relative;
  padding-left: 120px;
  padding-bottom: 125px;
}

.about-section .image-column .inner-column:before{
  position: absolute;
  left: -75px;
  top: 65px;
  height: 520px;
  width: auto;
  
  content: "";
}

.about-section .image-column .image-1{
  position: relative;
}

.about-section .image-column .image-2{
    position: absolute;
    left: 36px;
    bottom: -10px;
}

.about-section .image-column .image-2 img,
.about-section .image-column .image-1 img{
  box-shadow: 0 30px 50px rgba(8,13,62,.15);
}

.about-section .image-column .video-link{
  position: absolute;
  left: 70px;
  top: 170px;
}

.about-section .image-column .video-link .link{
  position: relative;
  display: block;
  font-size: 22px;
  color: #191e34;
  font-weight: 400;
  text-align: center;
  height: 100px;
  width: 100px;
  line-height: 100px;
  background-color: #ffffff;
  border-radius: 50%;
  box-shadow: 0 30px 50px rgba(8,13,62,.15);
  -webkit-transition: all 300ms ease;
  -moz-transition: all 300ms ease;
  -ms-transition: all 300ms ease;
  -o-transition: all 300ms ease;
  transition: all 300ms ease;
}

.about-section .image-column .video-link .link:hover{
  background-color: #191e34;
  color: #fff;
}
</style>
<section class="about-section mt-5">
        <div class="container">
            <div class="row">                
                <div class="content-column col-lg-6 col-md-12 col-sm-12 ">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">About Us</span>
                            <h1 class="fntsize">We Believe In Superfood Qualities Of Mushrooms</h1>
                        </div>
                        <div class="text">
                            Ankur mushrooms stands as one of the most progressive mushroom manufacturers and suppliers in India. Apart from mushroom farming, we also offer custom-made consulting and maintenance services for mushroom farms. The company initiated as a small venture in 2010, and has been engaged in manufacturing of Oyster Mushrooms today. We are committed to take mushrooms to each household as a new vegetable full of proteins. Our team, consisting of skilled executives and experienced consultants, strive to effectively contribute to the Indian mushroom Ankurtry and make India a huge mushroom grower on an international level.
                        </div>
                        <div class="sec-title">
                            <span class="title">We are best for:</span>
                        </div>
                        <ul class="list-style-one">
                            <li>Best quality mushroom grower</li>
                            <li>Professional support</li>
                            <li>Proactive Service</li>
                        </ul>
                        <div class="btn-box">
                            <a href="contact-us.php" class="theme-btn btn-style-one">Contact Us</a>
                        </div>
                    </div>
                </div>
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <figure class="image-1">
                            <img src="images/about-us.jpg" alt="abt1">
                        </figure>
                       <!--figure class="image-2"><img src="https://i.ibb.co/JvN0NVB/image-2-about.jpg" alt="abt2"></figure--> 
                       <figure class="image-2">
                           <img src="images/about-us-2.jpg" alt="abt1" height="300px" width="400px">
                        </figure>                        
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php include "footer.php"; ?>