<x-layout>
    <h2>
        {{ $area->name }}
    </h2>
    <div class="bg-gray-200 p-4 rounded">
        <p>
            <strong>
                Area {{ $area->id }} Population :
            </strong> {{ $area->population }}
        </p>
        <p>
            <strong>
                About Area {{ $area->id }} :
            </strong>
        </p>
        <p>
            {{ $area->discription }}
        </p>
    </div>
    <div class="border-s border-dashed bg white px-4 pd-4 my-4 rounded">
        <h3>
            Clan Information
        </h3>
        <p>
            <strong>Area Name :</strong> {{ $area->clan->name }}
        </p>
        <p>
            <strong>Location :</strong> {{ $area->clan->location }}
        </p>
        <p>
            <strong>About the Clan :</strong> {{ $area->clan->description }}

        <p>
            {{ $area->clan->description }}
        </p>
    </div>

    <form action="{{ route('areas.delete',$area->id) }}" method="POSt">
        @csrf
        @method('DELETE')
        <button
            type="submit"
            class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded shadow transition duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-red-400"
            onclick="return confirm('Are you sure you want to delete this area?');">
            <svg class="inline w-5 h-5 mr-2 -mt-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            Delete Area
        </button>
    </form>

</x-layout>