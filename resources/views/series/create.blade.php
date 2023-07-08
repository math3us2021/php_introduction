<x-layout title="Create">
    <form action="{{ route('series.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name"  class="form-label">Nome</label>
            <input type="text" id="name" name="name" class="form-control"
                   value="{{ old('name') }}">
            <div id="emailHelp" class="form-text">Digite o nome da série.</div>
        </div>
        <button type="submit" class="btn btn-dark">Adicionar</button>
    </form>
</x-layout>
