@extends('admin.mainAdmin')
@section('content')
<div class="container">


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>แสดงรายสาขาวิชาทั้งหมด</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('prefix.create') }}">เพิ่มสาขาวิชา</a>
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
            <th>คำนำหน้าชื่อ</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pfix as $prefix)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pfix->prefix }}</td>

            <td>
                <form action="{{ route('prefix.destroy',$prefix->id) }}" method="POST">

                <a class="btn btn-primary" href="{{ route('prefix.edit',$prefix->id) }}">แก้ไข</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">ลบ</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $pfix->links() !!}
</div>
@endsection
