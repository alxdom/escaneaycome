<button><a href="{{ url('dishes') }}">Atras</a></button>
<button><a href="{{ url('/') }}">Home</a></button>
<h1>editando platillo</h1>

<form action="{{ route('dishes.update',$data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <img src="{{$data->image}}" alt="logo" height="200"><br>
    <input type="file" name="image"><br><br>

    <label for="name">Nombre</label>
    <input type="text" value="{{$data->name}}" name="name"><br><br>

    <label for="description">Descripción</label>
    <input type="text" value="{{$data->description}}" name="description"><br><br>

    <label for="category">Categoria:</label>
    <span>{{$data->category->name}}</span><br><br>

    <label for="time">Tiempo:</label>
    <span>{{$data->time->description}}</span><br><br>

    <h3>Ingredientes</h3>
    <ul>
        <li>cilantro</li>
        <li>pechuga</li>
        <li>cascara de naranja</li>
    </ul>

    <button type="submit">Guardar</button>
    <br><br>
    <button><a href="{{ url('/') }}">Home</a></button>
</form>
