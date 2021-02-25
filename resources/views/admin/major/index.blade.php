@extends('admin.mainAdmin')
@section('content')
<div class="container">


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>แสดงรายสาขาวิชาทั้งหมด</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('major.create') }}">เพิ่มสาขาวิชา</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>สาขา</th>
            <th>คณะ</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($majors as $major)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $major->major_name }}</td>
            <td>{{ $major->facultys->faculty_name}}</td>
            <td>
                <form action="{{ route('major.destroy',$major->id) }}" method="POST">

                    <a class="btn btn-success" href="#">แสดง</a>

                    <a class="btn btn-primary" href="{{ route('major.edit',$major->id) }}">แก้ไข</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">ลบ</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $majors->links() !!}
</div>
@endsection
