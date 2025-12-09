<!-- file: resources/views/html101.blade.php -->
<!Doctype html>

<html>
    <head>
        <title>ส่วนหัวของ HTML</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: "Sarabun", sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container mt-4">
    <h1 class="mb-4">Workshop #HTML - FORM</h1>

    <form >

        <!-- ชื่อ -->
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">ชื่อ &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;</label>
            
                <input type="text" class="form-control">
            </div>
        </div>

        <!-- สกุล -->
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">สกุล &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;</label>
        
                <input type="text" class="form-control">
            </div>
        </div>

        <!-- วันเดือนปีเกิด -->
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">วัน/เดือน/ปีเกิด&emsp;&emsp;&nbsp;&nbsp;&nbsp;</label>
            
                <input type="date" class="form-control">
            </div>
        </div>

        <!-- อายุ -->
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">อายุ&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
        
                <input type="number" class="form-control">
            </div>
        </div>

        <!-- เพศ -->
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">เพศ&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
            
                <label class="me-3"><input type="radio" name="gender"> ชาย</label>
                <label class="me-3"><input type="radio" name="gender"> หญิง</label>
            </div>
        </div>

        <!-- รูป -->
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">รูป&emsp; &emsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&emsp;&emsp;</label>
                <input type="file" class="form-control">
            </div>
        </div>

        <!-- ที่อยู่ -->
        <div class="row mb-3">
    <label class="col-sm-3 col-form-label">ที่อยู่&emsp; &emsp;&emsp;&nbsp;&emsp; &emsp;&emsp;&nbsp;</label>
    <form>
  <textarea rows="4" cols="40"></textarea>
</form>
        
    </div>
</div>

        <!-- สีที่ชอบ -->
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">สีที่ชอบ&emsp;&nbsp;&emsp;&nbsp;&nbsp;&emsp;&nbsp;&emsp;&emsp;</label>
            
                <select class="form-select">
                    <option>สีแดง</option>
                    <option>สีน้ำเงิน</option>
                    <option>สีเหลือง</option>
                    <option>สีดำ</option>
                </select>
            </div>
        </div>

        <!-- แนวเพลง -->
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">แนวเพลงที่ชอบ&emsp;&emsp;&nbsp;&nbsp;</label>
        
                <label class="me-3"><input type="checkbox"> เพื่อชีวิต</label>
                <label class="me-3"><input type="checkbox"> ลูกทุ่ง</label>
                <label class="me-3"><input type="checkbox"> อื่นๆ</label>
            </div>
        </div>

        <!-- ยินยอม -->
        <div class="row mb-3">
            <br>
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
                <label><input type="checkbox"> ยินยอมให้เก็บข้อมูล</label>
               
            </div>
        </div>

        <!-- ปุ่ม -->
        <div class="row mt-4">
            <br>
            <div class="col-sm-6">
                <button type="reset" class="btn btn-secondary w-100">Reset</button>
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </div>
            
            </div>
        </div>

    </form>
</div>


                </div>
            </form>
        </div>
    </body>
</html>