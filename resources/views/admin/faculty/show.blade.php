@extends('admin.mainAdmin')
@section('content')
<div class="container">
<h1>hello show major</h1>

<div class="card mt-3">
    <table class="table">

    <tr>
        <td><b> สาขาวิชา</b></td>
        <td><b> รหัสสาขา</b></td>
        <td><b> รหัสคณะ</b></td>
    </tr>
@foreach ($major as $show)
<tr>
    <td><a href="{{url('admin/course/create',$show->id)}}"> {{$show->major_name }}</a></td>
    <td>{{ $show->id}}</td>

</tr>
@endforeach
</table>

@endsection
