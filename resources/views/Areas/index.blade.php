<x-layout>
    <h2>
        Currently available Areas
    </h2>
    <ul>
        @foreach ($areas as $area)
        <li>
            <x-card href="{{ route('areas.show',$area->id)}}" :highlight="$area['population']>120">
                <h3>{{ $area->name }}</h3>
            </x-card>
        </li>
        @endforeach
    </ul>
    {{ $areas->links() }}
</x-layout>