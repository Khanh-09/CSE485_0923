<?php
    try{
        $conn = new PDO('mysql:host=localhost;dbname=hms','root','');
            //buoc2: truy vấn dữ liệu
        $sql= "SELECT * FROM patients ORDER BY id DESC";
        $stmt = $conn->query($sql);

            //buoc3: xử lý kết quả trả về
        $patients = []; //khai báo mảng rỗng
        while ($row = $stmt->fetch()){
            $patient = new Patient($row['id'],$row['fullname'],$row['gender'],$row['dateOfBirth'],$row['address'],$row['mobile']);
            $patients[]=$patient;
        }
        return $patients;
    }catch(PDOException $e){
        return $patients = [];
    }
?>