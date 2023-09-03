@extends('bafforms::master')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Info Sheet for ESC</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('InfoSheetEsc.create') }}"> Create New Tender</a>
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
            <th>Title</th>
            <th>Officer</th>
            <th>Cadet</th>
            <th>Airmen</th>
            <th>Recruits</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($index as $index)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $index->info_title }}</td>
            <td>{{ $index->scale_officer_value }}</td>
            <td>{{ $index->scale_cadets_value }}</td>
            <td>{{ $index->scale_airmen_value }}</td>
            <td>{{ $index->scale_recruits_value }}</td>
            <td>
                <form action="{{ route('InfoSheetEsc.destroy') }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('InfoSheetEsc.show',$index->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('InfoSheetEsc.edit',$index->id) }}">Edit</a>

                    <a class="btn btn-primary" href="{{ route('InfoSheetEsc.downloadPdf',$index->id) }}">PDF</a>
   
                    @csrf
                    <input type='hidden' name='id' value="{{$index->id}}">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>


@endsection