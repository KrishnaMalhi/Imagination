<?php


// CORS Headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With");
header("Content-Type: text/html; charset=UTF-8");

// CORS Headers end
$name = $email = $phone = $city = $message  = "";

    $name = test_input($_POST["name"]);
 
    $email = test_input($_POST["email"]);

    $phone = test_input($_POST["phone"]);
 
    $city = test_input($_POST["city"]);
  
    $message = test_input($_POST["message"]);
  
 

    $CompanyTo = "info@tasleemsteel.com
    ";
    $clientTo = $email;
  
    

    $CompanySubject = "request from " . $name;
    $clientSubject = "Inventic Solution : We have received your email";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: info@tasleemsteel.com";


    $CompanyMessage = <<<EOF
    <html>
    <body>
    <p>Name : $name</p>
    <p>Email Address : $email</p>
   
    <p>Phone : $phone</p>
    <p>Reason : $message</p>
    <p>City : $city</p>

    </body>
        </html>
EOF;

    $clientMessage = <<<EOF
    <html>
    <body>
    
   
    <br/><br/>
    
        Hi $name,
        <div style="min-width:650px">
        <h2>Thanks for taking interest in Inventic Solution</h2>  
        <p>We will contact you shortly. Thank you for your patience.</p>
        
        <br/>
        <p>Best Regards <br/> 
        Inventic Solution<br/> 
      
        </div>
        </body>
        
        </html>
EOF;
  



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 mail($clientTo,$clientSubject,$clientMessage,$headers);
 mail($CompanyTo,$CompanySubject,$CompanyMessage,$headers);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description"
        content="Software development, Mobile app, Website, Web development, Graphic design, Internet services and equipment, Digital Marketing, SEO, CCTV and much more.">
    <meta name="keywords"
        content="software developer, software company, software design, software development company, web design software, mobile development, software companies near me, website design, IT company, it consulting companies">
    <meta name="author" content="Inventic Solutions" />

    <title>Best Website Designing | Software | Solutions | Marketing</title>

    <link rel="shortcut icon" href="assets/images/logo/logo-shortcut.png" type="image/x-icon">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;700;800;900&family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
    <link rel="stylesheet" href="assets/css/libraries.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="form.css">
</head>

<body>
    <div class="wrapper">
        <!-- =========================
        Header
    =========================== -->
        <header id="header" class="header header-white header-full header-full-layout2">
            <?php require "navbar.php"?>;
            <!-- =========================
       Navbar 
    =========================== -->
        </header><!-- /.Header -->
        <div style="        height: 300px;
;">

            <h5 style="text-align:center;">Thank You for Contacting Inventic Solution </h5>
            <h6 style="text-align:center;">Your Email has been Send</h6>


        </div>



        <?php require "footer.php" ?>
    </div>

    Thank You for Contacting Tasleem Steel Your Email has been Send
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>