

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show Lokasi') }}</div>

                <div class="card-body">
               
<form method="POST" action="">
@csrf
<div class="form-group">
<label>Kod</label>
<input type ="text" name="Kod" class="form-control" required value="{{$lokasi->Kod}}" readonly>
</div>

<div class="form-group">
<label>Nama Lokasi</label>
<textarea name="NamaLokasi" class="form-control" readonly>{{$lokasi->NamaLokasi}}</textarea>
</div>

<div class="form-group">
<label>Cawangan Kod</label>
<input type ="text" name="CawKod" class="form-control" required value="{{$lokasi->CawKod}}" readonly>
</div>



<!-- <a href="javascript:history.back()" class="btn btn-primary">Back to Training list</a> -->
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
