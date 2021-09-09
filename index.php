<!doctype html>
<?php
$classmates=array(
        array(
                'name'=>'Robert Brunner',
                'year'=> 4,
                'skills'=>array('java','linux','apache'),
                'intro'=>'I am working on my second bachelors degree at NKU, my first being a sociology major with a woman\'s 
                    and gender study\'s minor. Over the summer i bought my home in latonia and look forward to the many tech 
                    projects i will be able to create here. my other hobby\'s include working on my two servers, video games and 
                    spending time with my many pets!',
                'dreamC'=>'Linux Developer',
                'dreamJ'=>'KDE'),
        array(
            'name'=>'John Doe',
            'year'=> 3,
            'skills'=>array('HTML','Windows','SQL'),
            'intro'=>'Placerat ultrices lacus elementum eu purus, proin ullamcorper class sagittis molestie, aliquam
                tempor nec maecenas varius sem neque metus nostra ut tortor et auctor augue feugiat, taciti justo sapien
                lobortis vivamus taciti malesuada accumsan egestas.',
            'dreamC'=>'Windows Admin',
            'dreamJ'=>'Microsoft'),
        array(
            'name'=>'Jane Doe',
            'year'=> 2,
            'skills'=>array('Python','linux','Ruby'),
            'intro'=>'Placerat ultrices lacus elementum eu purus, proin ullamcorper class sagittis molestie, aliquam
                tempor nec maecenas varius sem neque metus nostra ut tortor et auctor augue feugiat, taciti justo sapien
                lobortis vivamus taciti malesuada accumsan egestas.',
            'dreamC'=>'Game Dev',
            'dreamJ'=>'Blizzard')
)
?>
<html lang="en">
<head>
    <!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/index.css" />
    <title>ASE 230 - class of Spring/Fall/Summer 20XX</title>
</head>
<body>
<div class="container text-center">
    <h1>This is ASE 230 - class of Fall 2021</h1>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-lg-6">
            <!-- Section Heading-->
            <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <h3>Our Class</h3>
                <div class="line"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Single Advisor-->

        <div class="col-12 col-sm-6 col-lg-3">

            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <!-- Team Thumb-->
                <div class="advisor_thumb"><a href="detail.php?q=0"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></a>
                    <!-- Social Info-->
                    <div class="social-info"><a href="detail.php?q=0"><i class="fa fa-facebook"></i></a><a href="detail.php?q=0"><i class="fa fa-twitter"></i></a><a href="detail.php?q=0"><i class="fa fa-linkedin"></i></a></div>
                </div>
                <!-- Team Details-->
                <div class="single_advisor_details_info">
                    <h6><?php echo $classmates[0]['name'] ?></h6>
                    <p class="designation"><?php foreach($classmates[0]['year']as$year){
                        echo'📕';
                        } ?> </p>
                </div>
            </div>
        </div>
        <!-- Single Advisor-->
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <!-- Team Thumb-->
                <div class="advisor_thumb"><a href="detail.php?q=1"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt=""></a>
                    <!-- /Social Info-->
                    <div class="social-info"><a href="detail.php?q=1"><i class="fa fa-facebook"></i></a><a href="detail.php?q=1"><i class="fa fa-twitter"></i></a><a href="detail.php?q=1"><i class="fa fa-linkedin"></i></a></div>
                </div>
                <!-- Team Details-->
                <div class="single_advisor_details_info">
                    <h6><?php echo $classmates[1]['name'] ?></h6>
                    <p class="designation"><?php foreach($classmates[1]['year']as$year){
                            echo'📕';
                        } ?> </p>
                </div>
            </div>
        </div>
        <!-- Single Advisor-->
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <!-- Team Thumb-->
                <div class="advisor_thumb"><a href="detail.php?q=2"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""></a>
                    <!-- Social Info-->
                    <div class="social-info"><a href="detail.php?q=2"><i class="fa fa-facebook"></i></a><a href="detail.php?q=2"><i class="fa fa-twitter"></i></a><a href="detail.php?q=2"><i class="fa fa-linkedin"></i></a></div>
                </div>
                <!-- Team Details-->
                <div class="single_advisor_details_info">
                    <h6><?php echo $classmates[2]['name'] ?></h6>
                    <p class="designation"><?php foreach($classmates[2]['year']as$year){
                            echo'📕';
                        } ?> </p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>