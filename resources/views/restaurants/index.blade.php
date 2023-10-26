<form action="" method="post">
    <img src="{{$logo}}" alt="logo" height="200"><br>
    <label for="name">Nombre</label>
    <input type="text" value="{{$name}}"><br><br>

    <label for="name">Slogan</label>
    <input type="text" value="{{$slogan}}"><br><br>

    <label for="name">Empresa:</label>
    <span>{{$company}}</span><br><br>

    <input type="file" name="image" id="inputImage"><br><br>
    <button type="submit">Guardar</button>
</form>

