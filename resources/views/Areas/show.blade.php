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

</x-layout>