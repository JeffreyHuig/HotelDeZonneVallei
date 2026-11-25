<x-layout>
    <x-slot:heading>
        Home
    </x-slot:heading>

    @foreach ($kamertypes as $kamertype)
        <div class="border-2 border-gray-900/10 rounded-lg py-3 px-2 w-1/2 flex mx-auto mb-4 bg-white">
            <div>
                <p class="text-black font-bold text-md p-1">
                    {{ $kamertype->bezettingstype }}
                </p>
                <p class="text-black text-md p-1">
                    {{ $kamertype->omschrijving }}
                </p>
                <div class="flex">
                    <img src="/images/user-group-solid-full.svg" height="12px" width="12px">
                    @if ($kamertype->id == 1)
                        <p> 1</p>
                    @elseif ($kamertype->id == 2 || $kamertype->id == 3 || $kamertype->id == 8)
                        <p> 2</p>
                    @elseif ($kamertype->id == 4)
                        <p> 3</p>
                    @elseif ($kamertype->id == 5)
                        <p> 4</p>
                    @elseif ($kamertype->id == 6 || $kamertype->id == 9)
                        <p> 4-6</p>
                    @elseif ($kamertype->id == 7)
                        <p> 1-2</p>
                    @endif
                </div>
            </div>
        </div>    
    @endforeach

</x-layout>