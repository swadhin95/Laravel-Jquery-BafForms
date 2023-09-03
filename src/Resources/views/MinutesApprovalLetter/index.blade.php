@extends('bafforms::master')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Info Sheet for ESC</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('MinutesApprovalLetter.create') }}"> Create New Tender</a>
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
            <th>Serial No</th>
            <th>Title</th>
            <th>Equipment Selection Title</th>
            <th>From</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($index as $index)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $index->serial_no }}</td>
            <td>{{ $index->title }}</td>
            <td>{{ $index->equip_sele_tit }}</td>
            <td>{{ $index->name }}</td>
            <td>
                <form action="{{ route('MinutesApprovalLetter.destroy') }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('MinutesApprovalLetter.show',$index->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('MinutesApprovalLetter.edit',$index->id) }}">Edit</a>

                    <a class="btn btn-primary" href="{{ route('MinutesApprovalLetter.downloadPdf',$index->id) }}">PDF</a>
   
                    @csrf
                    <input type='hidden' name='id' value="{{$index->id}}">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>


@endsection