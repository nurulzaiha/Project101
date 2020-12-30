
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        
       

            <div class="card">
                <div class="card-header">{{ __('Lokasi Index') }}
                
                <div class="float-right">
                <form method="GET" action="">

                <div class="input-group">
                <input type="text" name="keyword" class="form-control"/>
                <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Search</button>
                </div>
                </div>
                </div>
                </form>

                <div class="card-body">
                <table class="table">
<thead>
<tr>
<th>Kod</th>
<th>Nama Lokasi</th>
<th>Cawangan</th>
<th>Actions</th>

</tr>
</thead>
<tbody>
    @foreach($lokasis as $lokasi)
               
            <tr>
            <td>{{$lokasi->Kod}}</td>
            <td>{{$lokasi->NamaLokasi}}</td>
            <td>{{$lokasi->CawKod}}</td>
            <td>
            <a href="{{route('lokasi:show', $lokasi)}}" class="btn btn-primary">View</a>
            </td>
            <td>
            <a onclick="return confirm('Are you sure want to delete?')" href="{{route('lokasi:forceDelete', $lokasi)}}" class="btn btn-danger">FORCE DELETE</a>
</td>
            </tr>

    @endforeach
</tbody>

</table>


              
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
