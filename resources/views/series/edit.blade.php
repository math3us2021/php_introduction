<x-layout title="Edit serie '{{ $serie->name }}'">
    <div>
        <form action="{{route('series.update', $serie->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" id="name" name="name" class="form-control"
                       value="{{ $serie->name }}">
                <div id="emailHelp" class="form-text">Digite o nome da série.</div>
            </div>
            <button type="submit" class="btn btn-dark">Adicionar</button>
        </form>
    </div>
</x-layout>
