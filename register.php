<?php include 'includes/header.php'?>
    <!-- End Header -->

<!--Starts PHP-->
<?php
    if(isset($_POST['leader_uni_id'])){
        $team_name = mysqli_real_escape_string($con,$_POST['team_name']);
        $university_name = mysqli_real_escape_string($con,$_POST['university_name']);

        $leader_uni_id = mysqli_real_escape_string($con,$_POST['leader_uni_id']);
        $leader_phone = mysqli_real_escape_string($con,$_POST['leader_phone']);
        $leader_email = mysqli_real_escape_string($con,$_POST['leader_email']);

        $member2_uni_id = mysqli_real_escape_string($con,$_POST['member2_uni_id']);
        $member2_phone = mysqli_real_escape_string($con,$_POST['member2_phone']);
        $member2_email = mysqli_real_escape_string($con,$_POST['member2_email']);

        $member3_uni_idl = mysqli_real_escape_string($con,$_POST['member3_uni_id']);
        $member3_phone = mysqli_real_escape_string($con,$_POST['member2_phone']);
        $member3_email = mysqli_real_escape_string($con,$_POST['member3_email']);

        $leader = serialize(array($leader_uni_id,$leader_email,$leader_phone));
        $member2  = serialize(array($member2_uni_id,$member2_email,$member2_phone));
        $member3 = serialize(array($member3_uni_idl,$member3_email,$member3_phone));

        $team_info = array($team_name,$university_name,$leader,$member2,$member3);
        $_SESSION['team_info'] = $team_info;
        $ds = DIRECTORY_SEPARATOR;
        $folder_name = dirname( __FILE__ ).$ds."team_files".$ds.$_SESSION['team_info'][0];
        if(FALSE == ($path = folder_exist($folder_name)))
        {
            mkdir($folder_name,0700);
        }

       echo '<script type="text/javascript">
                window.location.href=\'file_submit.php\';
            </script>';
    }

?>

<!--Ends PHP-->

    <!-- Start Page Banner Area -->
    <div class="page-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title">
                        <h2>Registration Page</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pages Banner Area -->
    <!-- Start Login Form -->
    <div class="login-form-area login-fix">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="login-form">
                        <form name="registerform" action="register.php" method="post" enctype="multipart/form-data">
                            <div class="dropzone-previews"></div>

                            <h3>Team Info</h3>
                            <hr>
                            <label for="team_name">Team name : </label>
                            <input type="text" name="team_name" id="team_name" >
                            <label for="university_name">University</label>
                            <input type="text" name="university_name" id="university_name" >
                            <h3>Team Leader Info</h3>
                            <hr>
                            <label for="leader_uni_id">University ID</label>
                            <input type="text" name="leader_uni_id" id="leader_uni_id" >
                            <label for="leader_phone">Phone number</label>
                            <input type="text" name="leader_phone" id="leader_phone" >
                            <label for="leader_email">Email</label>
                            <input type="email" name="leader_email" id="leader_email" >
                            <h3>Team Member 2</h3>
                            <hr>
                            <label for="member2_uni_id">University ID</label>
                            <input type="text" name="member2_uni_id" id="member2_uni_id" >
                            <label for="member2_phone">Phone number</label>
                            <input type="text" name="member2_phone" id="member2_phone" >
                            <label for="member2_email">Email</label>
                            <input type="email" name="member2_email" id="member2_email" >
                            <h3>Team Member 3</h3>
                            <hr>
                            <label for="member3_uni_id">University ID</label>
                            <input type="text" name="member3_uni_id" id="member3_uni_id" >
                            <label for="member3_phone">Phone number</label>
                            <input type="text" name="member3_phone" id="member3_phone" >
                            <label for="member3_email">Email</label>
                            <input type="email" name="member3_email" id="member3_email" >
                            <button type="submit" id="submit-all" name="submit" class="hemeix-btn hover-bg center-block btn-lg btn-block"> Next step </button>
                        </form>
                        <div>

                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>


    <!-- End Login Form -->

<?php include 'includes/footer.php'?>

