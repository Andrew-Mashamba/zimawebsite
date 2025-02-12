<div>
    <div class="bg-white shadow rounded-lg mb-4">
        <div class="flex justify-between items-center p-4 border-b">
            <h2 class="text-lg font-semibold"> Organisational Controls </h2>
            <button class="bg-[#3E9EDA] text-white text-sm px-4 py-2 rounded">Add Control </button>
        </div>
        <div class="p-4 space-y-4">
            <!-- Payment method 1 -->
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img src="{{ asset(path: '/logo/controlIcon.png') }}" class="h-12 w-12" />
                    <div class="ml-4">
                        <div class="text-sm font-medium">Policies for information security </div>
                        <div class="text-xs text-gray-500">Expires 04/2024</div>
                    </div>
                </div>
                <div class="text-sm">
                    <span class="bg-gray-200 text-gray-700 px-2 py-1 rounded mr-3">Default</span>
                    <a href="#!" class="text-blue-500">Edit</a>
                </div>
            </div>
            <hr>
            <!-- Payment method 2 -->
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img src="{{ asset(path: '/logo/controlIcon.png') }}" class="h-12 w-12" />
                    <div class="ml-4">
                        <div class="text-sm font-medium"> Information security roles and responsibilities </div>
                        <div class="text-xs text-gray-500">Expires 08/2025</div>
                    </div>
                </div>
                <div class="text-sm">
                    <a href="#!" class="text-blue-500">Edit</a>
                </div>
            </div>
        </div>
    </div>










    <div class="p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-lg font-semibold">Upload File</h2>

        @if (session()->has('message'))
            <div class="mt-2 text-green-500">{{ session('message') }}</div>
        @endif

        <input type="file" wire:model="file" class="mt-2 border border-gray-300 rounded-lg p-2 w-full">

        @error('file')
            <span class="text-red-500">{{ $message }}</span>
        @enderror

        @if ($preview)
            <div class="mt-4">
                <img src="{{ $preview }}" class="w-32 h-32 object-cover rounded-lg">
            </div>
        @endif

        <button wire:click="save" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
            Upload
        </button>
    </div>

    

</div>
