<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>UnitedListing</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<?php 
$con = mysqli_connect('127.0.0.1', 'root', '', 'miniproject');
$query="select * from seller_registration";
$result=mysqli_query($con, $query);

if($_SERVER['QUERY_STRING']) {
    $queryParam = $_SERVER['QUERY_STRING'];
    $queryParam = substr($queryParam, 9);
    $queryParam = str_replace("%20", " ", $queryParam);
    $query="SELECT * FROM `seller_registration` WHERE `category` = '" . $queryParam . "'";
    $result=mysqli_query($con, $query);
}

if(isset($_POST['filter'])) {
    $filter = "";
    foreach($_POST['filter'] as $category) {
        $filter .= "'".$category."',";
    }
    $filter = chop($filter, ",");
    $query = "SELECT * FROM `seller_registration` WHERE `category` IN (".$filter.");";
    $result=mysqli_query($con, $query);
}

?>

<body class="main-layout" style="background: #F0F0F0">
    <!-- loader  -->
    
    <!-- end loader -->
    <!-- header -->
   <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo.png" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="index.html">Home</a> </li>
                                        <li> <a href="about.html">About</a> </li>
                                        <li> <a href="contact.php">Contact</a> </li>
                                        <li><a href="brand.html">Brand</a></li>
                                        <!--<li><a href="signIn.php">Sign In</a></li>-->
                                        <li><a href="seller_registration.php">Become a Seller</a></li>
                                       
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-6">
                        <div class="location_icon_bottum">
                            <ul>
                                <li><img src="icon/call.png" />(+91)7738665846</li>
                                <li><img src="icon/email.png" />unilists@gmail.com</li>
                                <li><img src="icon/loc.png" />Mumbai</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->

    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Browse Business Listing</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filter">
                    <h2>Filter Businesses</h2>
                    <form method="POST">
                        <div class="filter-options">
                            <div class="filter-option">
                                <input type="checkbox" id="jewelry" value="Jewelry" name="filter[]" />
                                <label for="jewelry">Jewelry</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="clothing" value="Clothing" name="filter[]" />
                                <label for="clothing">Clothing</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="arts&decor" value="Arts & Decor" name="filter[]" />
                                <label for="arts&decor">Arts & Decor</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="accessories" value="Accessories" name="filter[]" />
                                <label for="accessories">Accessories</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="food" value="Food" name="filter[]" />
                                <label for="food">Food</label>
                            </div>
                            <div class="filter-option">
                                 <input type="checkbox" id="bath&beauty" value="Bath & Beauty" name="filter[]" />
                                <label for="bath&beauty">Bath & Beauty</label>
                            </div>
                        </div>
                        <input type="submit" value="Filter" />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- End Filter -->
    <?php
    $key = 'qkwjdiw239&&jdafweihbrhnan&^%$ggdnawhd4njshjwuuO';
        function decryptthis($data, $key) {
        $encryption_key = base64_decode($key);
        list($encrypted_data, $iv) = array_pad(explode('::', base64_decode($data), 2),2,null);
        return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $iv);
        }

    ?>
    <!-- listing -->
    
    <div class="container">
                                            <?php 
                                            
                           while($rows=mysqli_fetch_assoc($result))
                           {
                              $proimgs = json_decode($rows['proimg']);
                        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="brand-list">
                        <div class="brand-left">
                            <div class="brand-logo">
                            <img src="atlasfol/<?php echo @$rows['logo'];?>" alt="brand-logo" />
                        </div>
                        <p>Phone: <br><?php echo @$rows['pnumber'];?></p>
                        <p>Address: <br><?php $address = decryptthis(@$rows['address'],$key); echo $address ;?></p>
                        <p>Email: <br><?php echo @$rows['email'] ;?></p>

                    </div>
                    <div class="brand-right">
                        <h2>
                            <?php echo @$rows['name'];?>
                            <?php if($rows['website'] != '') { ?>
                                <a href="<?php echo @$rows['website']; ?>" target="_blank">
                                    <img src="images/external-link.png" />
                                </a>
                            <?php } ?>
                        </h2>
                        <h3><?php echo @$rows['category'];?></h3>
                        <p><?php $prdesc = decryptthis(@$rows['prdesc'],$key); echo $prdesc ;?></p>
                        <h4>Product Images</h4>
                        <div class="brand-product-images">
                            <?php
                              foreach($proimgs as $proimg)
                              {
                            ?>
                            <img src="atlasfol/<?php echo $proimg;?>" />
                            <?php
                        }
                            ?>
                            
                        </div>
                        <div class="w-100">
                           <p class="social-media d-flex justify-content-end">
                                <a href="https://www.facebook.com/<?php echo @$rows['fb']?>/" class="social-icon facebook d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                <a href="https://www.instagram.com/<?php echo @$rows['insta']?>/" class="social-icon instagram d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a>
                            </p>
                        </div>
                    </div>
                </div>                                               
            </div>
        </div>
        <?php
                    }
                    ?>
        
    </div>

    <!-- end listing -->

    <!-- footer -->
    <footer>
        <div id="contact" class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-md-12 ">
                        <div class="footer-box">
                            <div class="headinga">
                                <h3>Address</h3>
                                <span>356, Service Road, Near Highway, Vile Parle (east), Mumbai</span>
                                <p>(+91)7738665846
                                    <br>unilists@gmail.com</p>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </footer>
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }
            , function() {
            }


                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>