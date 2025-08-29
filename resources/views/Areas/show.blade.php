<x-layout>
    <h2>
        {{ $area->name }}
    </h2>
    <div class="bg-gray-200 p-4 rounded" >
        <p>
            <strong>
                Area {{ $area->id }} Population :
            </strong> {{ $area->population }}
        </p>
                <p>
            <strong>
                About Area {{ $area->id }}  :
            </strong>
        </p>
        <p>
            {{ $area->discription }}
        </p>
    </div>

</x-layout>