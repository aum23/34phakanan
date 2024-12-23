<HTML>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>ตารางขนส่ง</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #ffffff;
            padding: 20px;
        }
        .form-container {
            background-color: rgb(173, 241, 253);
            border: 2px solid #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 5px;
        }
        .input-group-text {
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: 5px 0 0 5px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .invalid-feedback {
            font-size: 0.875em;
            color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form class="row g-3 needs-validation" novalidate action="insert.php">
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" id="validationCustom01" required name="name">
                <div class="valid-feedback">
                    *กรุณากรอกชื่อ
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" id="validationCustom02" required name="lastname">
                <div class="valid-feedback">
                    *กรุณากรอกนามสกุล
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">ที่อยู่</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">บ้านเลขที่/หมู่</span>
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required name="address">
                    <div class="invalid-feedback">
                        *กรุณากรอกที่อยู่
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">อำเภอ/เมือง</label>
                <input type="text" class="form-control" id="validationCustom03" required name="city">
                <div class="invalid-feedback">
                    *กรุณากรอกเมือง
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">จังหวัด</label>
                <select class="form-select" id="validationCustom04" required name="province">
                    <option selected disabled value="">โปรดเลือก</option>
                    <option>กรุงเทพมหานคร</option>
                    <option>กระบี่</option>
                    <option>กาญจนบุรี</option>
                    <option>การะเกด</option>
                    <option>ขอนแก่น</option>
                    <option>จันทบุรี</option>
                    <option>ฉะเชิงเทรา</option>
                    <option>ชลบุรี</option>
                    <option>ชัยนาท</option>
                    <option>ชัยภูมิ</option>
                    <option>ชุมพร</option>
                    <option>ตรัง</option>
                    <option>ตาก</option>
                    <option>นครนายก</option>
                    <option>นครปฐม</option>
                    <option>นครราชสีมา</option>
                    <option>นครศรีธรรมราช</option>
                    <option>นนทบุรี</option>
                    <option>นราธิวาส</option>
                    <option>น่าน</option>
                    <option>ปทุมธานี</option>
                    <option>ประจวบคีรีขันธ์</option>
                    <option>ปราจีนบุรี</option>
                    <option>ปัตตานี</option>
                    <option>พะเยา</option>
                    <option>พังงา</option>
                    <option>พัทลุง</option>
                    <option>พิจิตร</option>
                    <option>พิษณุโลก</option>
                    <option>เพชรบุรี</option>
                    <option>เพชรบูรณ์</option>
                    <option>แพร่</option>
                    <option>ยโสธร</option>
                    <option>ระนอง</option>
                    <option>ระยอง</option>
                    <option>ราชบุรี</option>
                    <option>ร้อยเอ็ด</option>
                    <option>ลพบุรี</option>
                    <option>ลำปาง</option>
                    <option>ลำพูน</option>
                    <option>เลย</option>
                    <option>ศรีสะเกษ</option>
                    <option>สกลนคร</option>
                    <option>สงขลา</option>
                    <option>สมุทรปราการ</option>
                    <option>สมุทรสงคราม</option>
                    <option>สมุทรสาคร</option>
                    <option>สระแก้ว</option>
                    <option>สระบุรี</option>
                    <option>สุโขทัย</option>
                    <option>สุพรรณบุรี</option>
                    <option>สุราษฎร์ธานี</option>
                    <option>สุรินทร์</option>
                    <option>หนองคาย</option>
                    <option>หนองบัวลำภู</option>
                    <option>อ่างทอง</option>
                    <option>อำนาจเจริญ</option>
                    <option>อุดรธานี</option>
                    <option>อุตรดิตถ์</option>
                    <option>อุบลราชธานี</option>
                    <option>อุทัยธานี</option>
                </select>
                <div class="invalid-feedback">
                    *กรุณากรอกจังหวัด
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom05" class="form-label">รหัสไปรษณีย์</label>
                <input type="INT" class="form-control" id="validationCustom05" required name="zip">
                <div class="invalid-feedback">
                    *กรุณากรอกรหัสไปรษณีย์
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom06" class="form-label">เบอร์โทรศัพท์</label>
                <input type="INT" class="form-control" id="validationCustom06" required name="number">
                <div class="invalid-feedback">
                    *กรุณากรอกเบอร์โทรศัพท์
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        ยอมรับเงื่อนไขและข้อตกลง
                    </label>
                    <div class="invalid-feedback">
                        *คุณแน่ใจหรือไม่ที่จะยืนยัน
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">ยืนยัน</button>
            </div>
        </form>
    </div>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
    </script>
</body>


</HTML>







