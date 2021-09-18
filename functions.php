<?php
function calcAge($dob){
    $dobarray = $dob;
    $todayarray = getdate();
    $age = $todayarray['year'] -$dobarray[2];
    if($todayarray['mon'] < $dobarray[0]){
        $age--;
    }
    return $age;
}
/*function calcdays($dob){
   $dobdate = date_create("$dob[0]-$dob[1]-$dob[2]");
   $temptodaydate = getdate();
   $todaydate= date_create("$temptodaydate['mon']-$temptodaydate['mday']-$temptodaydate['year']")
   $datediff = date_diff($todaydate,$dobdate);
   return $datediff;
}*/
function displayCards($classmates){
        $n=0;
        foreach($classmates as $classmate){
            ?>
            <div class="col-12 col-sm-6 col-lg-3">

                <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Team Thumb-->
                    <div class="advisor_thumb"><a href="detail.php?q=<?=$n?>"><img src="<?=$classmate['pic']?>" alt=""></a>
                        <!-- Social Info-->
                        <div class="social-info"><a href="detail.php?q=<?=$n?>"><i class="fa fa-facebook"></i></a><a href="detail.php?q=<?=$n?>"><i class="fa fa-twitter"></i></a><a href="detail.php?q=<?=$n?>"><i class="fa fa-linkedin"></i></a></div>
                    </div>
                    <!-- Team Details-->
                    <div class="single_advisor_details_info">
                        <h6><?php echo $classmate['name'] ?></h6>

                        <p class="designation">Year<?php for($i=1;$i<=$classmate['year'];$i++) {
                                echo '📕';
                            }?> </p>
                        <p class="designation">
                        Age:<?=calcAge($classmate['dob'])
                       ?>
                        </p>
                        <!--<p class="designation">
                            Days since born:
                        </p>-->
                    </div>
                </div>
            </div>
        <?php
        }
}
