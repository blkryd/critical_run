<?php
/**
 * Created by PhpStorm.
 * User: Riyad
 * Date: 10/6/2017
 * Time: 7:12 PM
 */
if(isset($_SERVER['HTTP_REFERER'])){
    if(strpos($_SERVER['HTTP_REFERER'],'file_submit.php') !== false){
        function write_doc(){
            include 'vendor/autoload.php';
            include 'includes/dbconfig.php';

            $team_name = $_SESSION['team_info'][0];
            $university_name = $_SESSION['team_info'][1];
            $leader = $_SESSION['team_info'][2];
            $member2  = $_SESSION['team_info'][3];
            $member3 = $_SESSION['team_info'][4];
            $unserial_leader  = unserialize($leader);
            $unserial_member2  = unserialize($member2);
            $unserial_member3  = unserialize($member3);


            $phpWord = new \PhpOffice\PhpWord\PhpWord();
            $section = $phpWord->addSection();

            $section->addText(
                'Critical Run 2017',
                array('name' => 'Tahoma', 'size' => 25,'bold' => true)
            );

            $section->addText(
                'East West University Business Club Presents',
                array('name' => 'Tahoma', 'size' => 13,'bold' => false)
            );
            $section->addTextBreak(1);

            $section->addText(
                'Participants Info',
                array('name' => 'Arial', 'size' => 17,'bold' => true)
            );

            $section->addTextBreak(1);

            $section->addText(
                'University name : '.$university_name,
                array('name' => 'Arial', 'size' => 15,'bold' => false)
            );

            $section->addText(
                'Team name : '.$team_name,
                array('name' => 'Arial', 'size' => 15,'bold' => false)
            );

            $section->addTextBreak(1);

            $section->addText(
                'Leader : ',array('name' => 'Arial', 'size' => 20,'bold' => true)
            );

            $section->addText(
                'ID: '.$unserial_leader[0] .', Phone: '.$unserial_leader[2].' , Email: '.$unserial_leader[1],array('name' => 'Tahoma', 'size' => 10,'bold' => false
            ));

            $section->addText(
                'Member 1',array('name' => 'Arial', 'size' => 20,'bold' => true
            ));
            $section->addText(
                'ID: '.$unserial_member2[0] .', Phone: '.$unserial_member2[2] .' , Email: '.$unserial_member2[1] ,array('name' => 'Tahoma', 'size' => 10,'bold' => false
            ));
            $section->addText(
                'Member 2',array('name' => 'Arial', 'size' => 20,'bold' => true
            ));
            $section->addText(
                'ID: '.$unserial_member3[0] .' Phone: '.$unserial_member3[2] .' , Email: '.$unserial_member3[1],array('name' => 'Tahoma', 'size' => 10,'bold' => false
            ));

// Adding Text element with font customized using explicitly created font style object...

// Saving the document as OOXML file...
            $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
            $objWriter->save((__DIR__).DIRECTORY_SEPARATOR.'team_files'.DIRECTORY_SEPARATOR.$team_name.DIRECTORY_SEPARATOR.$team_name.'.docx');
            send_sms_new($unserial_leader[2]);
        }

        write_doc();
        session_destroy();
        header('location: index.php?c=1');
    }
}else{
    header('location: index.php');
}

?>