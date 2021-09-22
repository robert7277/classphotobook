<?php
function calcAge($dob){
    return date_diff(date_create($dob), date_create())->y;
}

/**
 * @throws Exception
 */
function calcdays($dob){
    $new_dob = new DateTime($dob);
    $today = new DateTime('now');
    $time = $new_dob->diff($today);
    return $time->y . " Years, " . $time->m." Months, ".$time->d." Days!";
}

/**
 * @throws Exception
 */
function displayCards($classmates){
        $n=0;
        foreach($classmates as $classmate){
            ?>
            <div class="col-12 col-sm-6 col-lg-3">

                <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Team Thumb-->
                    <div class="advisor_thumb"><a href="detail.php?q=<?=$n?>"><img src="<?=$classmate['profile_pic']?>" alt=""></a>
                        <!-- Social Info-->
                        <div class="social-info">
                                <a href="detail.php?q=<?=$n?>"><i class="fa fa-facebook"></i></a>
                                <a href="<?=$classmate['facebook']?>"><i class="fa fa-twitter"></i></a>
                                <a href="<?=$classmate['twitter']?>"><i class="fa fa-linkedin"></i></a>
                            <a href="<?=$classmate['linkedin']?>"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <!-- Team Details-->
                    <div class="single_advisor_details_info">
                        <h6><?php echo $classmate['name'] ?></h6>

                        <p class="designation">Year<?php for($i=1;$i<=$classmate['school_year'];$i++) {
                                echo '📕';
                            }?> </p>
                        <p class="designation">
                        Age:<?=calcAge($classmate['dob'])
                       ?>
                        </p>
                        <p class="designation">
                            Time since being birthed: <br><?=calcdays($classmate['dob'])?>
                        </p>
                    </div>
                </div>
            </div>
        <?php
            $n++;
        }
}
