<?php
$cntMovedOut = 0; $cntMovedIn = 0;
if (isset($_POST['name']))
{
    saveVideoFile();
}
function saveVideoFile()
{
    // var_dump($_FILES);
    // var_dump($_POST); 
    // exit;
    $sCndName = (isset($_POST['name'])) ? $_POST['name'] : '';
    $cntMovedOut += (isset($_POST['cntMovedOut'])) ? intval($_POST['cntMovedOut']) : 0;
    $cntMovedIn += (isset($_POST['cntMovedIn'])) ? intval($_POST['cntMovedIn']) : 0;
    $temp_file_name = $sCndName . "-" . date("Y-m-d");
    move_uploaded_file($_FILES['blobFile']['tmp_name'], "./files/webcam_file{$temp_file_name}.mp4"); 
    
}