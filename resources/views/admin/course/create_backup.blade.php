@extends('admin.mainAdmin')
@section('content')
<div class="container">
<h1>hello show major</h1>

<div class="card mt-3">
    <table class="table">

    <tr>
        <td><b> สาขาวิชา</b></td>
    </tr>
<td>{{ $id }}</td>





<td>{{$facid['faculty_id']}}</td>

<tr>

</tr>

</table>

@endsection
