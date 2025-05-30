<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CA Website</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/Features-Small-Icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Ludens-Users---2-Register.css">
    <link rel="stylesheet" href="assets/css/Ludens-Users---25-After-Register.css">
    <link rel="stylesheet" href="assets/css/Register-form.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team.css">
</head>

<body style="color: rgb(154,171,188); width:100%"><!-- for fix header -> nav class -> fixed-top -->
    <nav class="navbar navbar-light navbar-expand-md bg-white shadow" id="home">
        <?php  
                  foreach ($this->db->get('header')->result_array() as  $value) {
                
   
                   ?>
        <div class="container">
            <a class="navbar-brand" href="index">
                <img class="img-fluid" src="<?= base_url()?>image/<?= $value['image']?>">

            </a>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-md-start" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#service">Services</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact" style="color: var(--bs-body-color);">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="register" style="color: var(--bs-dark);">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="login" style="color: var(--bs-dark);">Login</a></li> &nbsp
                    <li class="nav-item" data-bss-hover-animate="pulse"><a class="nav-link" data-bss-hover-animate="pulse" href="tel: 8237701884" style="background: rgba(65,170,120,0.97);border-radius: 25px;color: var(--bs-body-bg); font-weight: bold;"> &nbsp +91 <?= $value['contact_no']?> &nbsp &nbsp <br></a></li>
                </ul>
            </div>
        </div>
    <?php } ?>
    </nav>


    <div id="home" class="simple-slider" style="transform: perspective(0px);">
        <div class="swiper-container">
            <div class="swiper-wrapper ">
  <?php  
                  foreach ($this->db->get('slider')->result_array() as  $value) {
                
   
                   ?>
                <div class="swiper-slide" style="background: url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;) center center / cover no-repeat;"><img src="<?= base_url()?>image/<?= $value['image']?>" width="100%" height="100%"></div>
               
              
               <?php   }  ?>
                
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <?php  
       foreach ($this->db->get('header_hide')->result_array() as  $value) {
                
   
                   ?>
<div style="display:<?= $value['display']?>">
    <?php } ?>
 <?php  foreach ($this->db->get('headline')->result_array() as  $value) {
                   ?>
                    
    <marquee  width="100%" direction="left" height="50px" style="background-color: blue; color: white; font-style: bold; font-size: 25px; margin-top: 25px">
<p><?= $value['headline']?></p></marquee>


<?php } ?>
</div>

 <?php  
       foreach ($this->db->get('why_choose_us_hide')->result_array() as  $value) {
                
   
                   ?>
    <div style="display:<?= $value['display']?>;">
        <?php } ?>

        <h1 class="text-center text-dark" style="margin-top: 25px;">Why Choose Us ?</h1>
        <div class="row" style="margin-top: 25px;">
            
            <?php  foreach ($this->db->get('why_choose_us')->result_array() as  $value) {
                   ?>

            <div class="col-md-4 pb-4" data-bss-hover-animate="pulse">
                <img class="img-fluid" src="<?= base_url()?>image/<?= $value['image']?>">
                
                <div style="margin-left: 10px;">
                    <h3 class="text-white" style="margin: 0px;margin-top: -125px;"><strong><?= $value['title']?></strong><br></h3>
                    <p class="fs-5 fw-normal text-white" style="width: 275.656px;"><?= $value['description']?></p>
                </div>
            </div>
             <?php   }  ?>
        </div>
    </div>
    <?php  
       foreach ($this->db->get('about_hide')->result_array() as  $value) {
                ?>
    <div class="container-fluid" id="about" style="margin-top: 25px;display:<?= $value['display']?>;">
        <?php   }  ?>
        <h1 class="text-center text-dark">About Us</h1>
        <div class="text-center">
            <div class="row" style="background: var(--bs-blue);padding: 25px;margin-top: 25px;">
                <?php  foreach ($this->db->get('about')->result_array() as  $value) {
                   ?>
                <div class="col-sm-3" data-bss-hover-animate="pulse" style="border-style: solid;border-color: rgb(255,255,255);height: 250.484px;margin-top: 5px;">
                    <h1 class="text-white" style="margin-top: 65px;font-size: 50.4px;"><?= $value['title']?></h1>
                    <p class="fs-5 text-white"><?= $value['description']?></p>
                </div>
                <?php   }  ?>
            </div>
        </div>
    </div>
    <?php  
       foreach ($this->db->get('features_hide')->result_array() as  $value) {
                ?>
    <div class="container-fluid py-4 py-xl-5" id="features" style="background: var(--bs-gray-200);display:<?= $value['display']?>;">
    <?php } ?>
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="text-dark">Special Features</h2>
                <p class="w-lg-50">We offer some awesome features that will help you</p>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3" style="padding: 25px;">
            <?php  foreach ($this->db->get('features')->result_array() as  $value) {
                   ?>
            <div class="col">
                <div class="d-flex">
                    <div class="bs-icon-lg bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-globe2">
                            <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"></path>
                        </svg></div>
                    <div data-bss-hover-animate="pulse" class="px-3" style="background: var(--bs-gray-100);border-width: 1px;border-style: solid;width: 333px;height: 115px;padding: 10px;">
                        <h4 class="fw-bold text-dark"><?= $value['title']?></h4>
                        <p class="text-dark"><?= $value['description']?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
            
        </div>
        
    </div>
    <?php  
       foreach ($this->db->get('services_hide')->result_array() as  $value) {
                ?>
    <div class="container" id="service" style="display:<?= $value['display']?>;">
    <?php } ?>
        <h1 class="text-center text-dark" style="padding: 10px;margin-top: 25px;">Our Services</h1>
        <div class="row">

            <div class="col-xxl-12 col-sm-12" style="padding: 0px;margin: 0px;">
                <div class="row" style="padding: 7px;">
                    <?php  foreach ($this->db->get('services')->result_array() as  $value) {
                   ?>
                    <div class="col text-center" data-bss-hover-animate="pulse" style="padding: 7px;margin: 10px;border-style: solid;border-color: rgb(199,203,207);box-shadow: 2px 2px 2px 2px;">
                        <img class="img-fluid" src="<?= base_url()?>image/<?= $value['image']?>">
                        <h4 class="text-dark"><?= $value['title']?></h4>
                        <p><span style="color: rgb(46, 46, 46);"><?= $value['description']?></span><br></p>
                    </div>
                    <?php } ?>
                </div>
                
            </div>
        </div>
    </div>
    <?php  
       foreach ($this->db->get('team_hide')->result_array() as  $value) {
                ?>
    <div class="container-fluid py-4 py-xl-5" id="team" style="background: var(--bs-gray-200);margin: 0px;margin-top: 50px;display:<?= $value['display']?>;">
    <?php } ?>
        <div class="row mb-4 mb-lg-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="text-dark">Our Team</h2>
            </div>
        </div>
        <div class="row gy-4 row-cols-2 row-cols-md-4" style="padding: 25px;margin-top: -50px;">
            <?php  foreach ($this->db->get('team')->result_array() as  $value) {
                   ?>
            <div class="col">
                <div class="card border-0" data-bss-hover-animate="pulse" style="margin: 0px;padding: 25px;box-shadow: 1px 1px 1px 1px, 0px 0px;">
                    <div class="card-body text-center d-flex flex-column align-items-center p-0">
                        <img class="rounded-circle mb-3 fit-cover" width="130" height="130" src="<?= base_url()?>image/<?= $value['image']?>">
                        <h5 class="fw-bold text-primary card-title mb-0"><?= $value['title']?></h5>
                        <p class="text-muted card-text mb-2"><?= $value['description']?></p>
                        <ul class="list-inline fs-6 text-muted w-100 mb-0">
                            <li class="list-inline-item text-center">
                                <div class="d-flex flex-column align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                    </svg></div>
                            </li>
                            <li class="list-inline-item text-center">
                                <div class="d-flex flex-column align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                    </svg></div>
                            </li>
                            <li class="list-inline-item text-center">
                                <div class="d-flex flex-column align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                                    </svg></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } ?>
            
                
        </div>
    </div>











<?php foreach ($this->db->get('news_hide')->result_array() as  $value) { ?>
    <div class="container py-4 py-xl-5" style="display:<?= $value['display']?>;">
    <?php } ?>
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center text-dark mx-auto">
                <h2>Latest News</h2><hr>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3 text-dark">
            <?php  foreach ($this->db->get('news')->result_array() as  $value) {
                   ?>
            <div class="col">
                <div class="card" data-bss-hover-animate="pulse">
                    <img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="<?= base_url()?>image/<?= $value['image']?>">
                    <div class="card-body p-4">
                        <h4 class="card-title"><?= $value['title']?></h4>
                        <p class="card-text"><?= $value['description']?></p>
                        <div class="d-flex"><button class="btn btn-dark" type="button" style="border-style: solid;border-radius: 50px;">Read More</button></div>
                    </div>
                </div>
            </div>
        <?php } ?>
            
        </div>
    </div>
    <hr class="text-dark">
    <div class="text-center" style="margin: 35px;"><button class="btn btn-primary" data-bss-hover-animate="pulse" type="button" style="background: var(--bs-success);border-radius: 25px;width: 200.734px;box-shadow: 1px 1px 1px 1px, inset 1px 2px 1px 1px;border-width: 0px;"><a href="contact" style="color: white; text-decoration: none;">Book Appointment</a></button></div>
    
    <section id="contact" class="position-relative py-4 py-xl-5" style="background: var(--bs-gray-200);">
        <h1 class="text-center text-dark" style="padding: 0px;margin-top: -25px;padding-bottom: 15px;">Contact Us</h1>
        <div class="container position-relative" style="background: #ffffff;">
            <div class="row" style="padding: 0px;">
                <div class="col" style="border-width: 1px;border-style: solid;padding: 0px;"><iframe allowfullscreen="" frameborder="0" loading="lazy" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyALBOgobUw5vohwUm2sfOi6aKdfsCzyaiw&amp;q=API+Financial+Consultancy%2C+Jaipur%2C+Rajasthan&amp;zoom=11" width="100%" height="100%"></iframe></div>
                <div class="col-md-6 col-xl-4" style="border-width: 1px;border-style: solid;padding: 0px;">
                    <div>
                        <form class="p-3 p-xl-4" method="post" action="<?= base_url() ?>Ca/contact"  style="color: var(--bs-body-color);">
                            <div class="mb-3"><label class="form-label" for="name">Name</label><input class="form-control" type="text" id="name" name="name"></div>
                            <div class="mb-3"><label class="form-label" for="email">Email</label><input class="form-control" type="email" id="email" name="email"></div>
                            <div class="mb-3"><label class="form-label" for="message">Message</label><textarea class="form-control" id="message" name="message" rows="6"></textarea>
            
                            </div>


                            <div class="mb-3"><button class="btn btn-primary" type="submit">Send </button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <footer class="text-center bg-dark">
        <div class="container text-white py-4 py-lg-5">
            <ul class="list-inline">
                <li class="list-inline-item me-4"></li>
                <li class="list-inline-item me-4"><a class="fs-5 link-light" href="#">API Financial Consultancy</a></li>
                <li class="list-inline-item"></li>
            </ul>
            
            <ul class="list-inline">
                <a href=""><li class="list-inline-item me-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook text-light">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                    </svg></li></a>
                <a href=""><li class="list-inline-item me-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter text-light">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                    </svg></li></a>
                <a href=""><li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram text-light">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                    </svg></li></a>
            </ul>
            <p class="text-muted mb-0">Copyright © 2022 Brand</p>
        </div>
    </footer>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="https://geodata.solutions/includes/countrystate.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>


    
    
</body>

</html>