<x-layout>
    <h1>Population Group: </h1>
    <p>ID: {{ $group->id }}</p>
    <p>Culture: {{ $group->culture }}</p>
    <p>Religion: {{ $group->religion }}</p>
    <p>Profession: {{ $group->profession }}</p>
    <p>Population: {{ $group->population }}</p>

    <form action="{{ route('population.destroy', $group->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>

        <a href="{{ route('population.edit', $group->id) }}" class="btn btn-primary">Edit</a>
    </form>
</x-layout>
