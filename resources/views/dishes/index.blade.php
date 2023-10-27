<h1>Platillos</h1><br>
<button><a href="{{ url('/') }}">Home</a></button>
<button><a href="{{ route('dishes.create') }}">Nuevo</a></button><br><br>

<table border="collapse">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td><a href="{{ route('dishes.edit',$item->id) }}">editar</a></td>
                <td><a href="{{ route('dishes.destroy',$item) }}">eliminar</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
