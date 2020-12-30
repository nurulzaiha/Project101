
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<!-- @if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif -->


            <div class="card">
                <div class="card-header">{{ __('Create Lokasi') }}</div>

                <div class="card-body">
               

<form method="POST" action="" enctype="multipart/form-data">


@csrf

<div class="form-group">
<label for="kod">Kod</label>
<!-- <input type ="text" name="title" class="form-control"> -->
<input id="Kod" type ="text" name="Kod" class="form-control" class="" value="{{old('Kod')}}">
<!-- @error('title')
<div class="alert alert-danger">{{$message}}</div>
@enderror -->
</div>


<div class="form-group">
<label>Nama Lokasi</label>
<textarea name="NamaLokasi" class="form-control" class="" value="{{old('NamaLokasi')}}"></textarea>
<!-- @error('description')
<div class="alert alert-danger">{{$message}}</div>
@enderror -->
</div>

<div class="form-group">
<label>Cawangan Kod</label>
<input type ="text" name="CawKod" class="form-control">
</div>

<div class="form-group">
<button type ="submit" class="btn btn-primary"> Store My Lokasi</button>
</div>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
