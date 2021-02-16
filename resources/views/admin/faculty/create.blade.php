@extends('admin.mainAdmin')

@section('content')
<div class="container">
<div  class="row">
    <div class="col-md-9"> <h2>เพิ่มข้อมูลคณะ</h2></div>
    <div class="col-md-3"> 

        <a class="btn btn-primary" href="#">Black to faculty</a>

    </div>


</div>
<form action=""  method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div  class="form-group">
    <label for="name">รหัสคณะ</label>
    <input type="text" name="faculty_code" class="form-control"> 
</div>
<div  class="form-group">
    <label for="faculty">ชื่อคณะ</label>
    <input type="text" name="faculty_name" class="form-control"> 
</div>
<button type="submit" class="btn btn-success">เพิ่มข้อมูล</button>
<button type="reset" class="btn btn-danger">ยกเลิก</button>
</form>

@endsection