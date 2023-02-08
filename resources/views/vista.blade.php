<table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($registros as $registro)
        <tr>
          <td>{{ $registro->id }}</td>
          <td>{{ $registro->nombre }}</td>
          <td>
            <a href="{{ route('nombre-ruta.edit', $registro->id) }}">Editar</a>
            <form action="{{ route('nombre-ruta.destroy', $registro->id) }}" method="post">
              @csrf
              @method('delete')
              <input type="submit" value="Borrar">
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>