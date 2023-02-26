
<h1> Add new product</h1>



<form action="{{ url('/') }}/product" method = 'post'>
@csrf
<div class="container">
    <h1>Product Name</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Product Name</b></label>
    <input type="text" placeholder="Enter Email" name="product_name" id="product_name"  value='{{old("product_name")}}'>
    <span>
    @error('product_name')
    {{$message}}
    @enderror
    </span>

    <label for="psw"><b>Category</b></label>
    <input type="password" placeholder="Enter Password" name="category" id="category" value='{{old("category")}}'>
    <span>
    @error('category')
    {{$message}}
    @enderror
    </span>

    <hr>
    <input type="submit" value="Submit">
  </div>

</form>


{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
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
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
               <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}