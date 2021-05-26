<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create podcast') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('podcasts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <x-label for="name" :value="__('Title')" />
    
                    <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                </div>
                <div class="mb-5">
                    <x-label for="name" :value="__('Description')" />
    
                    <x-textarea id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                </div>

                <div class="mb-5">
                    <x-label for="name" :value="__('Image')" />

                    <x-input id="image" class="block mt-1 w-full" type='file' name="image" :value="old('image')" required autofocus />
                </div>

                <div class="flex justify-start">
                    <x-button>
                        Create podcast
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
