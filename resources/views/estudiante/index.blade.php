@extends('estudiante.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('estudiante.create') }}"> Create New Estudiante</a>
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
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
             <th>Email/th>
              <th>Telefono</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($estudiantes as $estudiante)
        <tr>

            <td>{{ $estudiante->nombre }}</td>
            <td>{{ $estudiante->apellido }}</td>
             <td>{{ $estudiante->edad }}</td>
               <td>{{ $estudiante->email}}</td>
                <td>{{ $estudiante->telefono}}</td>
            <td>
                <form action="{{ route('estudiante.destroy',$estudiante->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('estudiante.show',$estudiante->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('estudiante.edit',$estudiante->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger" >Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $estudiantes->links() !!}

@endsection