@extends('admin.mainAdmin')


@section('content')
<div class="container">

<div class="row">
  <div class="col-lg-10 col-lg-offset-1">

  <?= link_to('admin.faclty.create',$title="เพิ่มข้มูลคณะ" ,['class'=>'btn btn-primary'],$secure=null); ?>
  </div>
</div>
<div class="card mt-3">
<table class="table">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">รายชื่อคณะ</th>
        <th scope="col">33</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
</div>
@endsection
