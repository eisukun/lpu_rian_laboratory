<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Fname = $_POST['fname'];
        $Mname = $_POST['mname'];
        $Lname = $_POST['lname'];
        $Suffix = $_POST['suffix'];
        $Bdate = $_POST['birth_date'];
        $Gender = $_POST['gender'];
        $Nationality = $_POST['nationality'];
        $CivilStatus = $_POST['civil_status'];
        $Department = $_POST['department'];
        $Designation = $_POST['designation'];
        $QualiDependent = $_POST['qualified_dependent_status'];
        $EmployeeStatus = $_POST['employee_status'];
        $PayDate = $_POST['pay_date'];
        $EmployeeNum = $_POST['employee_number'];
        $ContactNum = $_POST['contact_number'];
        $EmailAdd = $_POST['email_address'];
        $SocialMedia = $_POST['social_media'];
        $SocialMediaID = $_POST['social_media_account_id'];
        $AddressLine1 = $_POST['address_line1'];
        $AddressLine2 = $_POST['address_line2'];
        $Municipality = $_POST['municipality'];
        $StateProvince = $_POST['state_province'];
        $Country = $_POST['country'];
        $ZipCode = $_POST['zip_code'];
        $PicPath = $_POST['picpath'];


        $picpath = $PicPath;
        if(file_exists($picpath)){
            $pic_filename = explode('temp/', $picpath)[1];
            rename($picpath, 'uploads/' . $pic_filename);
            $picpath = 'uploads/' .$pic_filename;
        }

        include 'db_connection.php';

        $conn = OpenCon();
        $sql1 = "INSERT INTO personal_infotbl(fname, mname, lname, suffix, birth_date, gender, nationality, civil_status ,department, designation, qualified_dependent_status, employee_status, pay_date, employee_no, contact_no, email_address,other_social_media_account ,social_media_account_id, address_line1, address_line2, municipality, state_province,country ,zip_code, picpath)
        VALUES('$Fname','$Mname','$Lname','$Suffix','$Bdate','$Gender','$Nationality', '$CivilStatus', '$Department', '$Designation', '$QualiDependent','$EmployeeStatus','$PayDate ',' $EmployeeNum', '$ContactNum', '$EmailAdd', '$SocialMedia', '$SocialMediaID', ' $AddressLine1', ' $AddressLine2', ' $Municipality', ' $StateProvince', '$Country', '$ZipCode', '$picpath')";
        $conn->query($sql1);

        $sql2 = "INSERT INTO user_accounttbl(employee_no) VALUES(' $EmployeeNum')";
        $conn->query($sql2);

        CloseCon($conn);
        echo json_encode([
            'ok' => 1,
        ]);
}