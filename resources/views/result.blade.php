@extends('template.default')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">ผลลัพธ์จากฟอร์ม</h5>
                </div>

                <div class="card-body p-0">
                    <table class="table table-striped mb-0">
                        <tbody>
                            <tr>
                                <th width="30%">ชื่อ</th>
                                <td>{{ $fname }}</td>
                            </tr>
                            <tr>
                                <th>สกุล</th>
                                <td>{{ $lname }}</td>
                            </tr>
                            <tr>
                                <th>วันเกิด</th>
                                <td>{{ $birth }}</td>
                            </tr>
                            <tr>
                                <th>อายุ</th>
                                <td>{{ $age }}</td>
                            </tr>
                            <tr>
                                <th>เพศ</th>
                                <td>{{ $gender }}</td>
                            </tr>
                            <tr>
                                <th>ที่อยู่</th>
                                <td>{{ $address }}</td>
                            </tr>
                            <tr>
                                <th>สีที่ชอบ</th>
                                <td>{{ $color }}</td>
                            </tr>
                            <tr>
                                <th>แนวเพลงที่ชอบ</th>
                                <td>
                                    <ul class="mb-0">
                                        @foreach ($music as $m)
                                            <li>{{ $m }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="card-footer text-center">
                    <a href="{{ url('/workshop') }}" class="btn btn-secondary">
                        กลับไปกรอกฟอร์ม
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
