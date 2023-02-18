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

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
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
                        <h2>Add your Company Details</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" enctype="multipart/form-data">
                        <div class="row">
                            <h2>Company Basic Details</h2>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Name" type="text" name="name" required>
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Address" type="text" name="address" required>
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Contact Number" pattern="[0-9]{10}" type="number" name="pnumber" required>
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Email Address" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="A form with an email field that that must be in the following order: characters@characters.domain (characters followed by an @ sign, followed by more characters, and then a "." After the "." sign, add at least 2 letters from a to z:" size="30"required="">
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Aadhaar Number" pattern="[0-9]{12}" type="number" name="aadhaar" required>
                            </div>

                            <h2>Company Website (Optional)</h2>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Webiste URL" type="url" name="website">
                            </div>
                            
                            <h2>Company Social Media Handles (Optional)</h2>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Instagram" type="text" name="insta">
                                <input class="form-control" placeholder="Facebook" type="text" name="fb">
                            </div>
                            
                            <h2>Company Logo</h2>
                            <div class=" col-md-12">
                                <input class="file-input" type="file" id="logo" name="logo" accept="image/*"  required>
                                <div class="image-preview" id="imagePreview">
                                    <img src="" alt="Image Preview" class="image-preview__image">
                                    <span class="image-preview__default-text"></span>
                            </div>
                            </div>
                            <h2>Product Details</h2>
                            <div class=" col-md-12 product-dropdown">
                                <select class="form-control" name="category" required>
                                    <option>-Select Product Category-</option>
                                    <option value="jewelry">Jewelry</option>
                                    <option value="clothing">Clothing</option>
                                    <option value="Arts & Decor">Arts & Decor</option>
                                    <option value="accessories">Accessories</option>
                                    <option value="food">Food</option>
                                    <option value="Bath & Beauty">Bath & Beauty</option>
                                </select>
                            </div>
                            <div class=" col-md-12">
                                <textarea class="textarea" placeholder="Product Description" name="prdesc" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="product-images">Product Images</label>
                                <input class="file-input" type="file" id="proimg" name="proimg[]" accept="image/*"  multiple required>
                                <div class="image-preview" id="imagePreview">
                                    <img src="" alt="Image Preview" class="image-preview__image">
                                    <div id="preview"></div>
                                    <span class="image-preview__default-text"></span>
                            </div>
                            </div>
                            <div class=" col-md-12">
                                <button class="send" name="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

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
    <!-- end footer -->
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
            }, function() {

                $(this).removeClass('transition');
            });
        });
        const inpFile = document.getElementById("logo");
        const previewContainer = document.getElementById("imagePreview");
        const previewImage = previewContainer.querySelector(".image-preview__image");
        const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");

        inpFile.addEventListener("change", function() {
            const file = this.files[0];
            console.log(file);

            if(file) {
                const reader = new FileReader();

                previewDefaultText.style.display = "none";
                previewImage.style.display = "block";

                reader.addEventListener("load", function() {
                    previewImage.setAttribute("src", this.result);
                });
                reader.readAsDataURL(file);
            }
        });
        
   
    </script>

    <script>
        function previewImages() {

  var preview = document.querySelector('#preview');
  
  if (this.files) {
    [].forEach.call(this.files, readAndPreview);
  }

  function readAndPreview(file) {
    
    var reader = new FileReader();
    
    reader.addEventListener("load", function() {

      var image = new Image();
      
      
      image.src    = this.result;
      preview.appendChild(image);
    });
    
    reader.readAsDataURL(file);
    
  }

}

document.querySelector('#proimg').addEventListener("change", previewImages);
    </script>



    

<!-- PHP DATABASE LINKING --> 
<?php

$con = mysqli_connect('127.0.0.1', 'root', '', 'miniproject');

$key = 'qkwjdiw239&&jdafweihbrhnan&^%$ggdnawhd4njshjwuuO';
function encryptthis($data, $key) {
$encryption_key = base64_decode($key);
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
$encrypted = openssl_encrypt($data, 'aes-256-cbc', $encryption_key, 0, $iv);
return base64_encode($encrypted . '::' . $iv);
}

if(isset($_POST['submit'])) {

$aadhaar = isset($_POST['aadhaar']) ? $_POST['aadhaar'] : '';

$sql = "SELECT * FROM `seller_registration` WHERE `aadhaar` = '$aadhaar'";
$result=mysqli_query($con, $sql);
if($result->num_rows !== 0) {
    echo "<script>alert('Your Aadhaar number is already registered.');</script>";
} else {

$aadhaar = encryptthis($aadhaar, $key);
$address = isset($_POST['address']) ? $_POST['address'] : '';
$address = encryptthis($address, $key);
echo $address;

$pnumber = isset($_POST['pnumber']) ? $_POST['pnumber'] : '';

$email = isset($_POST['email']) ? $_POST['email'] : '';

$website = isset($_POST['website']) ? $_POST['website'] : '';

$insta = isset($_POST['insta']) ? $_POST['insta'] : '';

$fb = isset($_POST['fb']) ? $_POST['fb'] : '';


$logo = isset($_POST['logo']) ? $_POST['logo'] : '';

$category = isset($_POST['category']) ? $_POST['category'] : '';

$prdesc = isset($_POST['prdesc']) ? $_POST['prdesc'] : '';
$prdesc = encryptthis($prdesc, $key);

$proimgs = isset($_POST['proimg']) ? $_POST['proimg'] : [];

$msg="";

//var_dump($_FILES["proimg"]);


$proimgs = $_FILES["proimg"]["name"];

$tempname= $_FILES["proimg"]["tmp_name"];
// $folder = "atlasfol/".$proimgs;

foreach ($proimgs as $index => $name) {

  if(move_uploaded_file($_FILES["proimg"]["tmp_name"][$index], "atlasfol/".$name)){
     $msg="Uploaded successfully";
  }else{
    $msg="Failed to Upload";
  }
    # code...
}

$proimgs = json_encode($proimgs);

$logo= $_FILES["logo"]["name"];
$tempname2= $_FILES["logo"]["tmp_name"];
$folder2 = "atlasfol/".$logo;
if(move_uploaded_file($tempname2,$folder2)){
    $msg="Uploaded successfully";
}else{
    $msg="Failed to Upload";
}

$name = isset($_POST['name']) ? $_POST['name'] : '';

$sql = "INSERT INTO seller_registration(aadhaar, name, address, pnumber, email, website, insta, fb, logo, category, prdesc, proimg) VALUES ('$aadhaar', '$name', '$address', '$pnumber', '$email', '$website', '$insta', '$fb', '$logo', '$category', '$prdesc', '$proimgs')";

if(isset($_POST['name'])){
    if(mysqli_query($con, $sql))
{
    echo "<script>alert('Registered Successfully');</script>";
}
 else
 {
    echo "<script>alert('An unexpected error occurred.');</script>";
 }
}
    
}

}

mysqli_close($con);

// echo "
// <script>
// alert(\"Type: $proimgs\");
// </script>";


?>

</body>
</html>