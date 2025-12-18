@extends('template.default')

@section('content')
<h3 class="mb-4">Workshop # HTML - FORM</h3>

<form id="myForm">

    <!-- ชื่อ -->
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">ชื่อ</label>
        <div class="col-sm-9">
            <input id="fname" class="form-control required">
            <div class="invalid-feedback">โปรดระบุชื่อ</div>
        </div>
    </div>

    <!-- สกุล -->
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">สกุล</label>
        <div class="col-sm-9">
            <input id="lname" class="form-control required">
            <div class="invalid-feedback">โปรดระบุนามสกุล</div>
        </div>
    </div>

    <!-- วันเดือนปีเกิด -->
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">วัน/เดือน/ปีเกิด</label>
        <div class="col-sm-9">
            <input type="date" id="birth" class="form-control required">
            <div class="invalid-feedback">โปรดระบุวันเดือนปีเกิด</div>
        </div>
    </div>

    <!-- อายุ -->
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">อายุ</label>
        <div class="col-sm-9">
            <input type="number" id="age" class="form-control required">
            <div class="invalid-feedback">โปรดกรอกอายุ</div>
        </div>
    </div>



     <!-- เพศ -->
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">เพศ</label>
        <div class="col-sm-9">
            <div class="form-check form-check-inline">
                <input class="form-check-input required-radio" type="radio" name="gender">
                <label class="form-check-label">ชาย</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input required-radio" type="radio" name="gender">
                <label class="form-check-label">หญิง</label>
            </div>
            <div class="text-danger d-none" id="genderError">โปรดเลือกเพศ</div>
        </div>
    </div>

    <!-- รูป -->
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">รูป</label>
        <div class="col-sm-9">
            <input type="file" class="form-control required-file">
        <div class="invalid-feedback">โปรดเลือกรูป</div>
    </div>
</div>

    <!-- ที่อยู่ -->
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">ที่อยู่</label>
        <div class="col-sm-9">
            <textarea class="form-control required" rows="4"></textarea>
        <div class="invalid-feedback">โปรดระบุที่อยู่</div>
    </div>
</div>

    <!-- สีที่ชอบ -->
    <div class="row mb-3">
    <label class="col-sm-3 col-form-label">สีที่ชอบ</label>
    <div class="col-sm-9">
        <select class="form-select required-select">
            <option value="">-- กรุณาเลือกสี --</option>
            <option value="red">สีแดง</option>
            <option value="blue">สีน้ำเงิน</option>
            <option value="yellow">สีเหลือง</option>
            <option value="black">สีดำ</option>
        </select>
        <div class="invalid-feedback">โปรดเลือกสีที่ชอบ</div>
    </div>
</div>

    <!-- แนวเพลง -->
<div class="row mb-3">
    <label class="col-sm-3 col-form-label">แนวเพลงที่ชอบ</label>
    <div class="col-sm-9">
        <div class="form-check">
            <input class="form-check-input music" type="checkbox">
            <label class="form-check-label">เพื่อชีวิต</label>
        </div>
        <div class="form-check">
            <input class="form-check-input music" type="checkbox">
            <label class="form-check-label">ลูกทุ่ง</label>
        </div>
        <div class="form-check">
            <input class="form-check-input music" type="checkbox">
            <label class="form-check-label">อื่นๆ</label>
        </div>
        <div class="text-danger d-none" id="musicError">โปรดเลือกแนวเพลงที่ชอบ</div>
    </div>
</div>


    <!-- ยินยอม -->
    <div class="row mb-4">
        <div class="col-sm-9 offset-sm-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">ยินยอมให้เก็บข้อมูล</label>
            </div>
        </div>
    </div>

    <!-- ปุ่ม -->
    <div class="row">
        <div class="col-sm-6 offset-sm-3 d-flex gap-3">
            <button type="reset" class="btn btn-secondary w-100">Reset</button>
            <button type="button" class="btn btn-primary w-100" onclick="clickMe()">Submit</button>
        </div>
    </div>

</form>
@endsection

@push('scripts')

<script>
function clickMe(){
    let isValid = true

    // เช็ค input ที่ต้องกรอกทั้งหมด
    document.querySelectorAll('.required').forEach(input => {
        if(input.value.trim() === ''){
            input.classList.remove('is-valid')
            input.classList.add('is-invalid')
            isValid = false
        }else{
            input.classList.remove('is-invalid')
            input.classList.add('is-valid')
        }
    })

    // เช็คเพศ (radio)
    let genderChecked = document.querySelector('input[name="gender"]:checked')
    let genderError = document.getElementById('genderError')

    if(!genderChecked){
        genderError.classList.remove('d-none')
        isValid = false
    }else{
        genderError.classList.add('d-none')
    }

     // เช็คเพลง (checkbox)
let musicChecked = document.querySelectorAll('.music:checked').length
let musicError = document.getElementById('musicError')
if(musicChecked === 0){
    musicError.classList.remove('d-none')
    isValid = false
}else{
    musicError.classList.add('d-none')
}


    if(isValid){
        alert('ข้อมูลครบถ้วนทั้งหมด 🎉')
        // document.getElementById('myForm').submit()
    }
}
</script>
@endpush

