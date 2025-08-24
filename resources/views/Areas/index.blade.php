<x-layout>
    <h2>
        Currently available Areas
    </h2>
    <ul>
        @foreach ($areas as $area)
        <li>
            <x-card href="areas/{{ $area['id'] }}" :highlight="$area['population']>355">
                <h3>{{ $area["name"] }}</h3>
            </x-card>
        </li>
        @endforeach
    </ul>
</x-layout>