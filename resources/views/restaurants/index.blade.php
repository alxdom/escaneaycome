<form action="{{ route('restaurants.update',$restaurant_id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <img src="{{$logo}}" alt="logo" height="200"><br>
    <label for="name">Nombre</label>
    <input type="text" value="{{$name}}" name="name"><br><br>

    <label for="name">Slogan</label>
    <input type="text" value="{{$slogan}}" name="slogan"><br><br>

    <label for="name">Empresa:</label>
    <span>{{$company}}</span><br><br>

    <input type="file" name="logo"><br><br>

    <button type="submit">Guardar</button>
    <br><br>
    <button><a href="{{ url('/') }}">Home</a></button>
</form>

