<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 2px solid green;
            border-collapse: collapse;
        }
         {
            width: 900px;
            height: 450px;
            border: 2px solid #000;
            border-radius: 10px;
            padding: 20px;
            position: relative;
        }
    </style>
</head>
<body>
<div class="aumjacrazy">
<table style="width:40%">
     <tr>
       <td><h3>ผู้ส่ง</h3></td>
     </tr>

     <tr>
           <td>ชื่อ: <?php echo $_GET["name"] ?? 'น.ส.ภคนันท์'; ?> &nbsp; นามสกุล: <?php echo $_GET["lastname"] ?? 'ธัญญทองกูล'; ?></td>
     </tr>

     <tr>
           <td>ที่อยู่: <?php echo $_GET["address"] ?? 'บ้านเลขที่ 206 หมู่ 3 '; ?> &nbsp; ตำบล: <?php echo $_GET["district"] ?? 'ดอนกรวย'; ?> </td>
     </tr>

     <tr>
           <td>เขต/อำเภอ: <?php echo $_GET["dis"] ?? 'ดำเนินสะดวก'; ?> &nbsp; จังหวัด: <?php echo $_GET["county"] ?? 'ราชบุรี'; ?> &nbsp; รหัสไปรษณี: <?php echo $_GET["code"] ?? '70130'; ?></td>
     </tr>

     <tr>
           <td>เบอร์โทร: <?php echo $_GET["tel"] ?? '098-xxx-xx23'; ?> &nbsp; วันที่: <?php echo $_GET["date"] ?? '4/11/67'; ?></td>
     </tr>

     <tr>
     <td><h3>ผู้รับ</h3></td>
     </tr>

     <tr>
           <td>ชื่อ: <?php echo $_GET["nameee"] ?? 'นาย พงษ์ศิริ'; ?> &nbsp; นามสกุล: <?php echo $_GET["lastnameee"] ?? 'พวงลำเจียก'; ?></td>
     </tr>

     <tr>
           <td>ที่อยู่: <?php echo $_GET["addres"] ?? 'บ้านเลขที่ 66 หมู่ 1'; ?> &nbsp; ตำบล: <?php echo $_GET["districttt"] ?? 'ไผ่ดำพัฒนา'; ?> </td>
     </tr>

     <tr>
           <td>เขต/อำเภอ: <?php echo $_GET["disss"] ?? 'วิเศษชัยชาญ'; ?> &nbsp; จังหวัด: <?php echo $_GET["countyyy"] ?? 'อ่างทอง'; ?> &nbsp; รหัสไปรษณี: <?php echo $_GET["codeee"] ?? '14100'; ?></td>
     </tr>

     <tr>
           <td>เบอร์โทร: <?php echo $_GET["tell"] ?? '086-xxx-xx26'; ?> &nbsp; วันที่: <?php echo $_GET["dateee"] ?? '8/11/67'; ?></td>
     </tr>
</table>
</div>
</body>
</html>
