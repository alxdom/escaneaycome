<button><a href="{{ url('dishes') }}">Atras</a></button>
<button><a href="{{ url('/') }}">Home</a></button>
<h1>creando platillo</h1>

<form action="{{ route('restaurants.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="name">Nombre</label>
    <input type="text" name="name"><br><br>

    <label for="name">Descripción</label>
    <input type="text" name="description"><br><br>

    <label for="time_id">Tiempo</label>
    <select name="time_id" id="">
        <option value="1">Desayuno</option>
        <option value="2">Comida</option>
        <option value="3">Cena</option>
    </select>

    <br><br>

    <label for="category_id">Categoria</label>
    <select name="category_id" id="">
        <option value="1">Keka</option>
        <option value="2">Bebidas</option>
        <option value="3">Postres</option>
    </select>

    <br><br>

    <button type="submit">Guardar</button>
</form>
