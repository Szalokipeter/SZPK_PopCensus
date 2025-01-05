<x-layout>
    <h1>New Group</h1>

    <form method="POST" action="{{ route('population.store') }}">
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id"
                required value="{{ old('id') }}">
            @error('id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="culture" class="form-label">Culture</label>
            <input type="text" class="form-control @error('culture') is-invalid @enderror" id="culture"
                name="culture" value="{{ old('culture') }}">
            @error('culture')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="religion" class="form-label">Religion</label>
            <input type="text" class="form-control @error('religion') is-invalid @enderror" id="religion"
                name="religion" value="{{ old('religion') }}">
            @error('religion')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="profession" class="form-label">Profession</label>
            <input type="text" class="form-control @error('profession') is-invalid @enderror"
                id="profession" name="profession" value="{{ old('profession') }}">
            @error('profession')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="population" class="form-label">Population</label>
            <input type="number" class="form-control @error('population') is-invalid @enderror"
                id="population" name="population" value="{{ old('population') }}">
            @error('population')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
