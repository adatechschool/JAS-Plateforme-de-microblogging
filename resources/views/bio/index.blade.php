<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('bio.store') }}" enctype="multipart/form-data">
            @csrf
            <textarea
                name="bio_text"
                placeholder="{{ __('Introduce yourself') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                >{{ old('bio_text') }}</textarea>
            <input type="file"
                name="bio_img_ref"
                placeholder="{{ __('An image that represents you') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">

            <x-input-error :messages="$errors->get('bio_text')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Share!') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>