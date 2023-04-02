<?php
$conn = mysqli_connect("localhost", "root", "", "minor_project");
if (isset($_POST["Import"])) {

    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    echo $filename = $_FILES["file"]["tmp_name"];


    if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)) {

        $file = fopen($filename, "r");
        while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE) {
        $d = explode("/",$emapData[8]);
        $password = md5($emapData[2]);
            //It wiil insert a row to our subject table from our csv file`
            $sql = "INSERT into student (`s_id`, `s_name`, `s_email`, `s_pass`,`s_phn`, `s_adr`, `s_city`,`s_pincode`,`s_state`,`s_dob`,`s_m1`,`s_m2`,`s_m3`,`s_degname`,`time`,`ip`,`status`,`selected_status`,`filepath`) 
                values(NULL,'$emapData[0]','$emapData[1]','$password','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]',STR_TO_DATE('$d[2],$d[0],$d[1]','%Y,%m,%d'),'$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]',NULL,1,1,1,'$emapData[13]')";
            //we are using mysql_query function. it returns a resource on true else False on error
        //    echo $sql;
            $result = mysqli_query($conn, $sql);
            if (!$result) {
                echo "<script type=\"text/javascript\">
                        alert(\"Invalid File:Please Upload CSV File.\");
                        window.location = \"po_uploadstudent.php\"
                    </script>";

           }

        }


        fclose($file);
        //throws a message if data successfully imported to mysql database from excel file
        echo "<script type=\"text/javascript\">
                    alert(\"CSV File has been successfully Imported.\");
                    window.location = \"po_uploadstudent.php\"
                </script>";



        //close of connection
        mysqli_close($conn);



    }

}



?>