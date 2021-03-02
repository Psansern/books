@extends('admin.mainAdmin')


@section('content')
<div class="container">

<div class="row">
  <div class="col-lg-10 col-lg-offset-1">
    <a class="btn btn-primary" href="{{ route('newfaculty') }}">เพิ่มข้อมูลคณะ</a>
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
      @foreach ($facultys as $fac)


      <tr>
        <th scope="row">{{ $fac->id }}</th>
        <td>{{ $fac->faculty_code }}</td>
        <td><a href="{{ route('faculty.show',$fac->id) }}"> {{ $fac->faculty_name}}</a></td>
        <td>-</td>
      </tr>
      @endforeach
    </tbody>

  </table>
</div>
@endsection
