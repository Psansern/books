@extends('admin.mainAdmin')
@section('content')
<div class="container">
<h1>hello show major</h1>

<div class="card mt-3">
    <table class="table">

    <tr>
        <td><b> สาขาวิชา</b></td>
    </tr>
<form action="" method="POST">
<tr>
    <td>
       <div class="mt-3">
        <label for="course_code" class="text-primary " >รหัสหลักสูตร</label>
        <input type="text" class="form-control" id="course_code" placeholder="รหัสหลักสูตร ">
      </div>
    </td>
    <td>
        <div class="mt-3">
            <label for="course_name_th" class="form-label">ชื่อหลักสูตร</label>
            <input type="text" class="form-control" id="course_name_th" placeholder="ชื่อหลักสูตรภาษาไทย">
          </div>
    </td>

</tr>
<tr>
    <td>

            <label for="type_course">ประเภทหลักสูตร</label>
            <select class="form-control" id="type_course">
              <option>ปรับปรุง</option>
              <option>หลักสูตรใหม่</option>

            </select>

    </td>
    <td>


            <label for="years" class="form-label">ปีที่ใช้</label>
            <input type="text" class="form-control" id="years" placeholder="ปีที่ใช้">

    </td>

</tr>
</tr>


</table>
 <div class="mt-6" >
<button type="submit" class="btn btn-success">เพิ่มข้อมูล</button>
             &nbsp;  &nbsp;
             <button type="reset" class="btn btn-danger">ยกเลิก</button>
 </div>
</form>
@endsection
