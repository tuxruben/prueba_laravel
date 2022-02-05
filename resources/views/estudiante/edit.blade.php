@extends('estudiante.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Estudiante</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('estudiante.index') }}"> Back</a>
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

    <form action="{{ route('estudiante.update',$estudiante->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">

             <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="nombre" value="{{ $estudiante->nombre }}" class="form-control" placeholder="nombre" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apellido:</strong>
               <input type="text" name="apellido" value="{{ $estudiante->apellido }}" class="form-control" placeholder="apellido"required>
            </div>
        </div>
           <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Edad:</strong>
               <input type="text" name="edad" value="{{ $estudiante->edad}}" class="form-control" placeholder="edad" pattern="[0-9]{2}" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
               <input type="email" name="email"  value="{{ $estudiante->email}}" class="form-control" placeholder="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefono:</strong>
               <input type="tel" name="telefono"  value="{{ $estudiante->telefono}}" class="form-control" placeholder="telefono" pattern="[0-9]{10}" required>
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection