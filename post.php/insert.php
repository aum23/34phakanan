<?php
    $name = $_GET['name'];
    $lastname = $_GET['lastname'];
    $address = $_GET['address'];
    $city = $_GET['city'];
    $province = $_GET['province'];
    $zip = $_GET['zip'];
    $number = $_GET['number'];
    include('config.php');
    
     $sql = "INSERT INTO `post`(`firt_name`, `last_name`, `address`, `city`, `province`, `zip`, `number`) VALUES ('$name','$lastname','$address','$city','$province','$zip','$number')";
     $query = $dbcon->prepare($sql);
     $result = $query->execute();
     if ($result) {
          echo "<script>
          alert('เพิ่มข้อมูลเรียบร้อย')
          window.location='form.php';
     </script>";
     } else {
         echo "<script>alert('มีบางอย่างผิดปกติ')</script>";
      }
    ?>