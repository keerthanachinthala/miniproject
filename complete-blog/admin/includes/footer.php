<?php if(in_array($_SESSION['user']['role'], ["Author"])){?>
    <footer class="footer ">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5 style="color:white;">Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="./index.html">Explore</a></li>
                        <li><a href="./demo3.html">Search</a></li>
                        <li><a href="./Blog.html">Blog</a></li>
                        <li><a href="#">Myjourney</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5 style="color:white;">Our Address</h5>
                    <address>
		              101, Somewhere Somewhere<br>
		              Somewhere, Hyderabad<br>
		              INDIA<br>
		              <i class="fa fa-phone fa-lg"></i>: +91 555 555 555<br>
		              <i class="fa fa-fax fa-lg"></i>: +040 5555 5555<br>
		              <i class="fa fa-envelope fa-lg"></i>: <a href="#">noidea@lost.net</a>
		           </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center" style="background-color: white;">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon " href="mailto:"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2020 Travel Advisor</p>
                </div>
           </div>
        </div>
    </footer>


    <?php } ?>