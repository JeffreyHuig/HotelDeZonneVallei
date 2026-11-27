<x-layout>
    <x-slot:heading>
        Hotelkamers
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
                    <img src="/images/group.png" width="16px" height="16px" class="aspect-square">
                    @if ($kamertype->id == 1)
                        <p>1</p>
                    @elseif ($kamertype->id == 2 || $kamertype->id == 3 || $kamertype->id == 8)
                        <p>2</p>
                    @elseif ($kamertype->id == 4)
                        <p>3</p>
                    @elseif ($kamertype->id == 5)
                        <p>4</p>
                    @elseif ($kamertype->id == 6 || $kamertype->id == 9)
                        <p>4-6</p>
                    @elseif ($kamertype->id == 7)
                        <p>1-2</p>
                    @endif
                </div>
                @php
                    $aantalBeschikbaar = (int) ($beschikbaarheid[$kamertype->id] ?? 0);
                @endphp
                <div class="flex">
                    <p class="text-red-600">
                        @if ($aantalBeschikbaar === 0)
                            Geen kamers beschikbaar!
                        @elseif ($aantalBeschikbaar === 1)
                            Nog {{ $aantalBeschikbaar }} kamer beschikbaar!
                        @else
                            Nog {{ $aantalBeschikbaar }} kamers beschikbaar!
                        @endif
                    </p>
                </div>
            </div>
        </div>    
    @endforeach
</x-layout>