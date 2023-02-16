<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./assents/css/bootstrap.min.css">
    <?php wp_head(); ?>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title> বাংলাদেশ জাতীয় তথ্য বাতায়ন</title>
</head>
<body>
    <header class="con">
        <div class="topbar row">
          <div class="col-lg-6 left">
          <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
          </div>
          <div class="col-lg-6 right text-end">
          <p>৩ অগ্রহায়ণ, ১৪২৯</p>
          <a href="">English</a>
          </div>
        </div>
        

        <div class="row logo">
          <div class="col-lg-5 logoimg">
            <?php the_custom_logo();?>
            <!-- <img src="<?= get_template_directory_uri()?>./assents/images/header/logo_bn.png" alt=""> -->
          </div>
          <div class="col-lg-5 search">
            <input type="text" placeholder="খুঁজুন"><button>অনুসন্ধান</button>
          </div>
          <div class="social col-lg-2 d-flex justify-content-end" >
            <div class="sleft">
              <img src="<?= get_template_directory_uri()?>./assents/images/header/a2i-logo-footer.png" alt="">
            </div>
            <div class="sright">
              <img src="<?= get_template_directory_uri()?>./assents/images/header/facebook-icon.png" alt="">
              <img src="<?= get_template_directory_uri()?>./assents/images/header/gplus-icon.png" alt="">
              <img src="<?= get_template_directory_uri()?>./assents/images/header/gplus-icon.png" alt="">
              <img src="<?= get_template_directory_uri()?>./assents/images/header/twitter-blue-icon.png" alt="">
              <img src="<?= get_template_directory_uri()?>./assents/images/header/twitter-blue-icon.png" alt="">
            </div>
          </div>
        </div>

        <div class="menu">
          <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php 
                wp_nav_menu([
                 'theme_location'=>'TM',
                  'menu_class'=>'navbar-nav mtop'
                ]);
                ?>
                
              </div>
            </div>
          </nav>
        </div>
    </header>
    <!-- heaser end  -->
   
    <div class="con">
      <div class="row">
          <div class="col-lg-8">
                <!-- banner stasrt  -->
                <div class="banner">
                <a href=""><?php dynamic_sidebar('mainbanner') ?></a>
                </div>
                <!-- banner end -->
                <!-- slider start -->
                <div class="slider">
                  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <?php
                    $qry = new WP_Query([
                      'post_type'=>'post',
                    'category_name'=>'Slider'
                    ]);
                    ?>
                    <div class="carousel-inner">
                      <?php 
                      $x=0;
                      while($qry->have_posts()){$qry-> the_post();
                        $x++;
                        // while($qry->have_posts()){$qry->the_post(); 
                      ?>
                      <div class="carousel-item active<?= ($x==1)? 'active' : '' ?>">
                        <?php the_post_thumbnail();?>
                        <!-- <img src="<?= get_template_directory_uri()?>./assents/images/slider/Banner-1.jpg" class="d-block w-100" alt="..."> -->
                      </div>
                      <?php } ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
                <!-- slider end -->
                <!-- tab start-->
                <div class="tab">
                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">মোবাইল সেবা</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">মোবাইল সেবা</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">মোবাইল সেবা</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" >মোবাইল সেবা</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">মোবাইল সেবা1</div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">মোবাইল সেবা2</div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                      <div class="row tvalue">
                        <div class="col-lg-2">
                          <a href=""> <img src="<?= get_template_directory_uri()?>./assents/images/tabbar/1.png" alt=""></a>
                          <p>কৃষি</p>
                        </div>
                        <div class="col-lg-2">
                          <a href=""> <img src="<?= get_template_directory_uri()?>./assents/images/tabbar/2.png" alt=""></a>
                          <p>কৃষি</p>
                        </div>
                        <div class="col-lg-2">
                          <a href=""> <img src="<?= get_template_directory_uri()?>./assents/images/tabbar/1.png" alt=""></a>
                          <p>কৃষি</p>
                        </div>
                        <div class="col-lg-2">
                          <a href=""> <img src="<?= get_template_directory_uri()?>./assents/images/tabbar/2.png" alt=""></a>
                          <p>কৃষি</p>
                        </div>
                        <div class="col-lg-2">
                          <a href=""> <img src="<?= get_template_directory_uri()?>./assents/images/tabbar/1.png" alt=""></a>
                          <p>কৃষি</p>
                        </div>
                        <div class="col-lg-2">
                          <a href=""> <img src="<?= get_template_directory_uri()?>./assents/images/tabbar/2.png" alt=""></a>
                          <p>কৃষি</p>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">মোবাইল সেবা4</div>
                  </div>
                </div>
                <!-- tab end  -->
                <!-- uddog start  -->
                <div class="uddog">
                  <div class="utitle">
                    <h6><?php dynamic_sidebar('uddogtitle');?></h6>
                  </div>
                  <ul>
                    <li>
                      <a href=""><?php dynamic_sidebar('uddog');?></a>
                    </li>
                  </ul>
                </div>
                <!-- uddog end  -->
                <!-- sokol start  -->
                <div class="sokol">
                 <p class="text-center"> <a href="">সকল</a></p>
                 <p> <p>আশ্রয়ণের অধিকার শেখ হাসিনার উপহার</p></p>
                  <table>
                    <tbody>
                      <td>
                        <?php dynamic_sidebar('tabbartwo');?>
                      </td>
                    </tbody>
                  </table>
                </div>
                <!-- sokol end -->
                <!-- youtube video START -->
                <div class="yvdo">
                  <table>
                    <tbody>
                      <tr>
                        <td><iframe class="d-block w-100 img-thumbnail " width="560" height="315" src="https://www.youtube.com/embed/4Om3kZJL-qU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                        <td><iframe class="d-block w-100 img-thumbnail" width="560" height="315" src="https://www.youtube.com/embed/4Om3kZJL-qU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                        <td><iframe class="d-block w-100 img-thumbnail" width="560" height="315" src="https://www.youtube.com/embed/4Om3kZJL-qU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="card bg">
                            <iframe class="w-100" width="560" height="315"  src="https://www.youtube.com/embed/MvTLqrU9ZbQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="container"><br>
                              <p>বন্যার সময় কি করণীয়</p>
                        </td>
                        <td>
                          <div class="card bg">
                            <iframe class="w-100" width="560" height="315"  src="https://www.youtube.com/embed/MvTLqrU9ZbQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="container"><br>
                              <p>বন্যার সময় কি করণীয়</p>
                        </td>
                        <td>
                          <div class="card bg">
                            <iframe class="w-100" width="560" height="315"  src="https://www.youtube.com/embed/MvTLqrU9ZbQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="container"><br>
                              <p>বন্যার সময় কি করণীয়</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- youtube video  end -->
          </div>
          <div class="col-lg-4 sidebar">
            <?php dynamic_sidebar('sideimg'); ?>
            <h5>সকল বাতায়ন</h5>
            <form action="">
              <select name="" id="">
                <option value="">ঢাকা বিভাগ</option>
                <option value="">রাজশাহী বিভাগ</option>
                <option value="">বরিশাল  বিভাগ</option>
                <option value="">ঢাকা বিভাগ</option>
                <option value="">ঢাকা বিভাগ</option>
                <option value="">ঢাকা বিভাগ</option>
                <option value="">সিলেট  বিভাগ</option>
              </select>
              <button>চলুন</button>
            </form>
            <div class="two">
              <h5>মুজিব১০০ আ্যাপ</h5>
              <<?php dynamic_sidebar('sidevideo'); ?>
            </div>
            <div class="bigimagesidebar">
              <?php dynamic_sidebar('sideimgbig');?>
              <!-- <h5>মাস্ক পরুন সেবা </h5>
              <img src="<?= get_template_directory_uri()?>./assents/images/tabbar/mask-bd-portal (1).jpg" class="d-block w-100" alt="">
            <h5>মাস্ক পরুন সেবা </h5>
            <img src="<?= get_template_directory_uri()?>./assents/images/tabbar/mask-bd-portal (1).jpg" class="d-block w-100" alt=""> -->
            </div>
            <?php dynamic_sidebar('sidevideobottom'); ?>
            <?php dynamic_sidebar('sideimgbottom'); ?>
          </div>

      </div>
      <footer>
        <img src="<?= get_template_directory_uri()?>./assents/images/footer/footer_top_bg.png" alt="">
        <div class="row">
          <div class="fmenu col-lg-7">
            <div class="menu">
              <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php 
                    wp_nav_menu([
                      'theme_location'=>'FM',
                      'menu_class'=>'navbar-nav   fm'
                    ])
                    ?>

                  </div>
                </div>
              </nav>
            </div>
          </div>
          <div class="col-lg-5 fright">
            <p><?php dynamic_sidebar('ftitle')?></p>
            <!-- পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, বেসিস, ডিওআইসি -->
            <?php dynamic_sidebar('footerimg'); ?>
          </div>
        </div>
      </footer>
    </div>
    <?php wp_footer(); ?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>  
</body>
</html>
