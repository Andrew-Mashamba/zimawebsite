<div class="p-2 ">

    <div class="w-full flex gap-2 h-full">
        <style>
            /* Hide scrollbar for Chrome, Safari, and Edge */
            .dodo::-webkit-scrollbar {
                display: none;
            }
            /* Hide scrollbar for IE and Firefox */
            .dodo {
                scrollbar-width: none;
                -ms-overflow-style: none; /* IE and Edge */
            }
        </style>

        <div class="w-1/6 overflow-y-auto h-screen dodo" style="scrollbar-width: none; -ms-overflow-style: none;">


            @php
                $menuItems = [
                    ['id' => 1, 'label' => 'Organizational controls'],
                    ['id' => 2, 'label' => 'People controls'],
                    ['id' => 3, 'label' => 'Physical controls'],
                    ['id' => 4, 'label' => 'Technological controls'],

                ];
            @endphp

            @foreach ($menuItems as $menuItem)
                <div wire:click="menuItemClicked({{ $menuItem['id'] }})" class=" @if ($this->tab_id == $menuItem['id']) bg-yellow-900 @else bg-white @endif
            @if ($this->tab_id == $menuItem['id']) text-white font-bold @else text-gray-400 font-semibold @endif p-1 rounded-md w-full mb-1 cursor-pointer"
                     onmouseover="this.style.backgroundColor='#a0afea'; this.style.color='white';"
                     onmouseout="this.style.backgroundColor=''; this.style.color='';">

                    <div class="flex items-center space-x-4">
                        <div class="">
                            <div wire:loading wire:target="menuItemClicked({{ $menuItem['id'] }})">
                                <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-900 fill-red-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                </svg>
                            </div>
                            <div wire:loading.remove wire:target="menuItemClicked({{ $menuItem['id'] }})">
                                <svg wire:click="visit(1)" xmlns="http://www.w3.org/2000/svg" class="cursor-pointer h-9 bg-slate-50 rounded-full stroke-slate-400 p-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                        <div class="w-full">
                            <h3 class="text-sm font-medium my-auto">{{ $menuItem['label'] }}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>



        <div class="w-5/6  h-screen">

            <div class="tab-pane fade " id="tabs-homeJustify"
                 role="tabpanel" aria-labelledby="tabs-home-tabJustify">
                <div class="mt-2"></div>
                <div class="w-full flex items-center justify-center">
                    <div wire:loading wire:target="setView">
                        <div class="h-96 m-auto flex items-center justify-center">
                            <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-yellow-500"></div>
                        </div>
                    </div>
                </div>


            </div>


            @switch($this->tab_id)
                @case(1)
                <livewire:audit.item-list />
                    @break

                    @case(2)
                        Nothing to show 
                    @break

                @default

            @endswitch















        </div>
    </div>
</div>
