@extends('users.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('users.update',$user->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    @method('PUT')

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nisn:</strong>
                <input type="text" name="nisn" class="form-control" placeholder="NIS" value="{{$user->nisn}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="name" class="form-control" placeholder="Nama" value="{{$user->name}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Rombel" value="{{$user->email}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Presensi Date:</strong>
                <input type="date" name="date" class="form-control" placeholder="Rayon" value="{{$user->date}}" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                <input type="radio" name="ket" value="Hadir" {{$user->ket == 'Hadir'? 'checked' : ''}}> Hadir
                <input type="radio" name="ket" value="Sakit" {{$user->ket == 'Sakit'? 'checked' : ''}}> Sakit
                <input type="radio" name="ket" value="Ijin" {{$user->ket == 'Ijin'? 'checked' : ''}}> Ijin
                <input type="radio" name="ket" value="Alfa" {{$user->ket == 'Alfa'? 'checked' : ''}}> Alfa
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
