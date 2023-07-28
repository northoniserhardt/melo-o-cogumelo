<div>
    <div class="container mt-16 ml-40 bg-gray-100">
        <div class="grid grid-cols-2">
            <div class="flex flex-col items-center pt-8 mt-32">
                <div class="flex">
                    <div
                        class="bg-gray-300 p-4 rounded border border-t-4 border-r-4 border-l-4 {{$selectedTab == 1 ? 'border-black' : 'border-gray-400'}}">
                        <img src="{{asset('character_customization/tabs/head/head.png')}}" height="70" width="70"
                             wire:click="setTab(1)">
                    </div>
                    <div
                        class="bg-gray-300 p-4 rounded border border-t-4 border-r-4 border-l-4  {{$selectedTab == 2 ? 'border-black' : 'border-gray-400'}}">
                        <img src="{{asset('character_customization/tabs/candy/candy.png')}}" height="70" width="70"
                             wire:click="setTab(2)">
                    </div>
                    <div
                        class="bg-gray-300 p-4 rounded border border-t-4 border-r-4 border-l-4  {{$selectedTab == 3 ? 'border-black' : 'border-gray-400'}}">
                        <img src="{{asset('character_customization/tabs/glasses/glasses.png')}}" height="70" width="70"
                             wire:click="setTab(3)">
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-4 border-double border-16 border-black rounded-md">
                    @if($selectedTab == 1)
                        <div class="bg-gray-300 p-4 rounded shadow-md w-32 h-32 border border-4 border-gray-400 m-2">
                            <img src="{{asset('character_customization/thumbs/heads/none.png')}}" height="100" width="100"
                                 wire:click="setAccessory('none', 'head')">
                        </div>
                        <div class="bg-gray-300 p-4 rounded shadow-md w-32 h-32 border border-4 border-gray-400 m-2">
                            <img src="{{asset('character_customization/thumbs/heads/1.png')}}" height="100" width="100"
                                 wire:click="setAccessory(1, 'head')">
                        </div>
                        <div class="bg-gray-300 p-4 rounded shadow-md w-32 h-32 border border-4 border-gray-400 m-2">
                            <img src="{{asset('character_customization/thumbs/heads/2.png')}}" height="100" width="100"
                                 wire:click="setAccessory(2, 'head')">
                        </div>
                        <div class="bg-gray-300 p-4 rounded shadow-md w-32 h-32 border border-4 border-gray-400 m-2">
                            <img src="{{asset('character_customization/thumbs/heads/3.png')}}" height="100" width="100"
                                 wire:click="setAccessory(3, 'head')">
                        </div>
                        <div class="bg-gray-300 p-4 rounded shadow-md w-32 h-32 border border-4 border-gray-400 m-2">
                            <img src="{{asset('character_customization/thumbs/heads/4.png')}}" height="100" width="100"
                                 wire:click="setAccessory(4, 'head')">
                        </div>
                    @elseif($selectedTab == 2)
                        <div class="bg-gray-300 p-4 rounded shadow-md w-32 h-32 border border-4 border-gray-400 m-2">
                            <img src="{{asset('character_customization/thumbs/candies/none.png')}}" height="100" width="100"
                                 wire:click="setAccessory('none', 'candy')">
                        </div>
                        <div class="bg-gray-300 p-4 rounded shadow-md w-32 h-32 border border-4 border-gray-400 m-2">
                            <img src="{{asset('character_customization/thumbs/candies/1.png')}}" height="100" width="100"
                                 wire:click="setAccessory(1, 'candy')">
                        </div>
                        <div class="bg-gray-300 p-4 rounded shadow-md w-32 h-32 border border-4 border-gray-400 m-2">
                            <img src="{{asset('character_customization/thumbs/candies/2.png')}}" height="100" width="100"
                                 wire:click="setAccessory(2, 'candy')">
                        </div>
                        <div class="bg-gray-300 p-4 rounded shadow-md w-32 h-32 border border-4 border-gray-400 m-2">
                            <img src="{{asset('character_customization/thumbs/candies/3.png')}}" height="100" width="100"
                                 wire:click="setAccessory(3, 'candy')">
                        </div>
                    @elseif($selectedTab == 3)
                        <div class="bg-gray-300 p-4 rounded shadow-md w-32 h-32 border border-4 border-gray-400 m-2">
                            <img src="{{asset('character_customization/thumbs/glasses/none.png')}}" height="100" width="100"
                                 wire:click="setAccessory('none', 'glasses')">
                        </div>
                        <div class="bg-gray-300 p-4 rounded shadow-md w-32 h-32 border border-4 border-gray-400 m-2">
                            <img src="{{asset('character_customization/thumbs/glasses/1.png')}}" height="100" width="100"
                                 wire:click="setAccessory(1, 'glasses')">
                        </div>
                        <div class="bg-gray-300 p-4 rounded shadow-md w-32 h-32 border border-4 border-gray-400 m-2">
                            <img src="{{asset('character_customization/thumbs/glasses/2.png')}}" height="100" width="100"
                                 wire:click="setAccessory(2, 'glasses')">
                        </div>
                        <div class="bg-gray-300 p-4 rounded shadow-md w-32 h-32 border border-4 border-gray-400 m-2">
                            <img src="{{asset('character_customization/thumbs/glasses/3.png')}}" height="100" width="100"
                                 wire:click="setAccessory(3, 'glasses')">
                        </div>
                        <div class="bg-gray-300 p-4 rounded shadow-md w-32 h-32 border border-4 border-gray-400 m-2">
                            <img src="{{asset('character_customization/thumbs/glasses/4.png')}}" height="100" width="100"
                                 wire:click="setAccessory(4, 'glasses')">
                        </div>
                    @endif
                </div>

            </div>
            <div class="flex flex-col items-center pt-8">
                <div>
                    <img src="{{ $this->createCustomCharacter() }}" alt="Personagem Personalizado">
                </div>
            </div>
        </div>
    </div>
</div>
