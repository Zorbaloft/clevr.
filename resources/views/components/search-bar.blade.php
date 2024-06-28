@props(['route'])

<form {{ $attributes }} class="d-flex" role="search">
    <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search" name="search">
    <button class="btn btn-outline-success" type="submit">Procurar</button>
</form>
