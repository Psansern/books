@extends('admin.mainAdmin')


@section('content')
<div class="container">

<div class="row">
  <div class="col-lg-10 col-lg-offset-1">
    <a class="btn btn-primary" href="{{ route('course.create') }}">เพิ่มข้อมูลหลักสูตร</a>
  </div>
</div>
<div class="card mt-3">
<table class="table">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">รหัสคณะ</th>
        <th scope="col">รายชื่อคณะ</th>
        <th scope="col">mask</th>
      </tr>
    </thead>
    <tbody>



      <tr>
        <th scope="row"></th>
        <td></td>
        <td></td>
        <td>-</td>
      </tr>

    </tbody>

  </table>
</div>
@endsection
