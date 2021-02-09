<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta content="" name="author"/>
<meta content="atlas is Bootstrap 4 based admin panel.It comes with 100's widgets,charts and icons" name="description"/>
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website"/>
<meta property="og:title"
      content="atlas is Bootstrap 4 based admin panel.It comes with 100's widgets,charts and icons"/>
<meta property="og:description"
      content="atlas is Bootstrap 4 based admin panel.It comes with 100's widgets,charts and icons"/>
<meta property="og:image"
      content="cdn.dribbble.com/users/180706/screenshots/5424805/the_sceens_-_mobile_perspective_mockup_3_-_by_tranmautritam.jpg"/>
<meta property="og:site_name" content="atlas "/>
<title>Atmos Admin Panel- Bootstrap 4 Based Admin Panel</title>
<link rel="icon" type="image/x-icon" href="assets/img/logo.png"/>
<link rel="icon" href="assets/img/logo.png" type="image/png" sizes="16x16">
<link rel='stylesheet' href='d33wubrfki0l68.cloudfront.net/css/478ccdc1892151837f9e7163badb055b8a1833a5/crisp/assets/vendor/pace/pace.css'/>
<script src='d33wubrfki0l68.cloudfront.net/js/3d1965f9e8e63c62b671967aafcad6603deec90c/assets/vendor/pace/pace.min.js'></script>
<!--vendors-->
<link rel='stylesheet' type='text/css' href='d33wubrfki0l68.cloudfront.net/bundles/291bbeead57f19651f311362abe809b67adc3fb5.css'/>

<link rel='stylesheet' href='d33wubrfki0l68.cloudfront.net/bundles/30bc673ce76f73ecf02568498f6b139269f6e4c7.css'/>



<link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,500,600" rel="stylesheet">
<link rel='stylesheet' href='d33wubrfki0l68.cloudfront.net/css/04cc97dcdd1c8f6e5b9420845f0fac26b54dab84/default/assets/fonts/jost/jost.css'/>
<!--Material Icons-->
<link rel='stylesheet' type='text/css' href='d33wubrfki0l68.cloudfront.net/css/548117a22d5d22545a0ab2dddf8940a2e32c04ed/default/assets/fonts/materialdesignicons/materialdesignicons.min.css'/>
<!--Bootstrap + atmos Admin CSS-->
<link rel='stylesheet' type='text/css' href='d33wubrfki0l68.cloudfront.net/css/ed18bd005cf8b05f329fad0688d122e0515499ff/default/assets/css/atmos.min.css'/>
<!-- Additional library for page -->

</head>
<body class="sidebar-pinned">

<?php 

$data=file_get_contents("https://www.refikaninmutfagi.com/tarifler/");

preg_match_all('@<div class="mutfak-yazisi-title">(.*?)</div>@si', $data, $write);

preg_match_all('@<div class="mutfak-yazisi-excerpt">(.*?)</div>@si', $data, $write_2);

preg_match_all('@<h1 class="no-after">(.*?)</h1>@si', $data, $title);

preg_match_all('@<img src="(.*?)">@si', $data, $image);

?>

<main >

 <section class="admin-content" id="contact-search" >

        <div class="bg-dark m-b-30">
            <div class="container">
                <div class="row p-b-60 p-t-60">
                    <div class="col-md-6 text-center mx-auto text-white p-b-30">
                        <div class="m-b-10">
                            <div class="avatar ">
                                <div class="avatar-title rounded-circle mdi mdi-contacts "></div>
                            </div>
                        </div>
                        <h3 >
                            <?php
                            if (isset($data)) {
                                if ($title) {
                                    echo $title[0][0];
                                }
                            } 
                            ?>

                        </h3>
                    </div>
                </div>
            </div>
        </div>


        <div class="container  pull-up">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">
                            <div >

                                <table id="example-height" class="table   " style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Resim</th>
                                        <th>İsim</th>
                                        <th>Yapılışı</th>


 <?php 

    for ($i=0; $i <29 ; $i++)  {

        if (isset($data)) {

    ?>

                                        
                                    </tr>
                                    </thead>
                                    <tbody>

                                        <!-- birincı kart --> 
                                    <tr>

                                        <td style="width: 250px;height: 250px;">
                                            <?php

                                            if(isset($image))
                                            {
                                                echo $image[0][$i];
                                            } 

                                            ?>
                                            
                                        </td>

                                        <td  >
                                            <?php

                                            if (isset($write)) {
                                                echo $write[0][$i];
                                            } 
                                            echo "\n";

                                            ?>
                                        </td>

                                        <td>
                                            <?php 

                                            if (isset($write_2)) {
                                                echo $write_2[0][$i];
                                            }

                                            ?>
                                        </td>

                                    </tr>


                                    <!-- ikinci kart -->

                                    <tr>

                                        <td style="width: 250px;height: 250px;">
                                            <?php
                                            $i++;

                                            if(isset($image))
                                            {
                                                echo $image[0][$i];
                                            } 

                                            ?>
                                            
                                        </td>

                                        <td>
                                            <?php
                                            
                                            if (isset($write)) {
                                                echo $write[0][$i];
                                            } 
                                            echo "\n";

                                            ?>
                                        </td>

                                        <td>
                                            <?php 

                                            if (isset($write_2)) {
                                                echo $write_2[0][$i];
                                            }

                                            ?>
                                        </td>
                                        
                                    </tr>



                                    <!-- ucuncu  kart -->

                                    <tr>
                                        <td style="width: 250px;height: 250px;">
                                            <?php
                                            $i++;

                                            if(isset($image))
                                            {
                                                echo $image[0][$i];
                                            } 

                                            ?>
                                            
                                        </td>

                                        <td>
                                            <?php

                                            if (isset($write)) {
                                                echo $write[0][$i];
                                            } 
                                            echo "\n";

                                            ?>
                                        </td>
                                        <td>
                                            <?php 

                                            if (isset($write_2)) {
                                                echo $write_2[0][$i];
                                            }

                                            ?>
                                        </td>
                                        
                                    </tr>
                                    
                                    </tbody>

<?php 


    echo "\n";

    }

    } // for un parantezı


    ?>



                                    <tfoot>
                                    <tr>
                                        <th>Resim</th>
                                        <th>İsim</th>
                                        <th>Yapılışı</th>
                                    </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

</main>

</body>

</html>