<?php
/**
 * Created by PhpStorm.
 * User: Heisenburg
 * Date: 10/6/2017
 * Time: 8:50 PM
 */

?>
<?php
include 'dbconfig.php';

if(isset($_POST['submit'])){
    $time = date('Y-m-d H:i:s');
    $ip = getUserIP();
    $team_name = $_SESSION['team_info'][0];
    $university_name = $_SESSION['team_info'][1];
    $leader = $_SESSION['team_info'][2];

  /*  $phone = unserialize($_SESSION['team_info'][2]);

    $phone = '88'.$phone[2];
    $from = '8801800000000';
    $message  = 'Dear Participants,
Your registration for Critical Run 2017 organized by EWUBC has been completed successfully.
For further information, you are cordially requested to stay connected with our EWUBC official Facebook page.';*/

    /* if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone)) {
         send_sms($phone,$from,$message);
     }*/

    $member2  = $_SESSION['team_info'][3];
    $member3 = $_SESSION['team_info'][4];

    $team_info = array($team_name,$university_name,$leader,$member2,$member3);
    $sql_query = "INSERT INTO tbl_team_info(team_name,team_university,team_leader,team_member2, team_member3,team_reg_time,team_reg_ip) VALUES('$team_name','$university_name','$leader','$member2','$member3','$time','$ip')";

    if(mysqli_query($con, $sql_query)) {

        header('location: ../doc.php');
    }else{
        echo 'DB error';
    }
}else{
    echo 'error';
}
?>
