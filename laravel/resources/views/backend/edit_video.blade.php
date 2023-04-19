<x-app-layout>
    <form method="POST" action="http://127.0.0.1:5000/" enctype="multipart/form-data">
        @csrf
        <!-- Name -->
        <div>
            <x-input-label for="speed" :value="__('Speed')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="speed" :value="old('speed')" required autofocus />
            <x-input-error :messages="$errors->get('Product Name')" class="mt-2" />
        </div>

        {{-- Video upload --}}
        <div class="mt-4">
            <x-input-label for="Video" :value="__('Video')" />
            <x-text-input id="product_video" class="block mt-1 w-full" type="file" name="file" :value="old('product_video')" required />
            <x-input-error :messages="$errors->get('product_video')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Add Product') }}
            </x-primary-button>
        </div>
    </form>

    <!-- Display video -->
    @if(isset($video_url))
    <video controls>
        <source src="{{ $video_url }}" type="video/mp4">
    </video>
    @endif

</x-app-layout>

















{{--
<x-guest-layout>
    <form method="POST" action="{{ url('/') }}/product" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="product_name" :value="__('Product Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="product_name" :value="old('product_name')" required autofocus />
            <x-input-error :messages="$errors->get('Product Name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="Category" :value="__('Category')" />
            <x-text-input id="category" class="block mt-1 w-full" type="text" name="category" :value="old('category')" required />
            <x-input-error :messages="$errors->get('category')" class="mt-2" />
        </div>

        <!-- image upload -->
        <div class="mt-4">
            <x-input-label for="Image" :value="__('Image')" />
            <x-text-input id="product_image" class="block mt-1 w-full" type="file" name="product_image" :value="old('product_image')" required />
            <x-input-error :messages="$errors->get('product_image')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
               <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
