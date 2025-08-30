<x-layout>
    <form action="{{ route('areas.store') }}" method="POST">
        @csrf
        <h2>Create a New Area</h2>

        <!-- area Name -->
        <label for="name">Area Name:</label>
        <input
            type="text"
            id="name"
            name="name"
            value="{{ old('name') }}"
            required>

        <!-- area Strength -->
        <label for="population">Population (0-250):</label>
        <input
            type="number"
            id="population"
            name="population"
            value="{{ old('population') }}"
            required>

        <!-- area Bio -->
        <label for="discription">Description:</label>
        <textarea
            rows="5"
            id="discription"
            name="discription"
            required>{{ old('discription') }}</textarea>

        <!-- select a dojo -->
        <label for="allien_clan_id">Clan:</label>
        <select id="allien_clan_id" name="allien_clan_id" required>
            <option value="" disabled selected>Select a Clan</option>
            @foreach ($clans as $clan)
            <option value="{{ $clan->id }}" @selected($clan->id == old('allien_clan_id'))>
                {{ $clan->name }}
            </option>

            @endforeach
        </select>

        <button type="submit" class="btn mt-4">Create Area</button>

        <!-- validation errors -->
        @if($errors->any())
        <ul class="px-4 py-4 bg-red-100">
            @foreach ($errors->all() as $error)
            <li class="my-2 text-red-500">{{ $error }}</li>
            @endforeach
        </ul>

        @endif

    </form>
</x-layout>