<x-app-layout >
    <div class="max-w-2xl mx-auto p-1 sm:p-6 lg:p-2">
        <form method="POST" action="{{ route('bio.store') }}" enctype="multipart/form-data">
            @csrf
            <textarea
                name="bio_text"
                placeholder="{{ __('Introduce yourself and refresh here when you like') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                >{{ old('bio_text') }}</textarea>
            <input type="file"
                name="bio_img_ref"
                placeholder="{{ __('An image that represents you') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 mt-4 focus:ring-opacity-50 rounded-md shadow-sm">

            <x-input-error :messages="$errors->get('bio_text')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Share!') }}</x-primary-button>
        </form>
    </div>
   

    <div class="max-w-2xl mx-auto p-2 sm:p-4 lg:p-4">  
        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
        
            <div class="p-6 flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                </svg>
                <div class="flex-1">
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-gray-900 mt-4 "> {{ $user_name}} Bio and pic ! </span>
                        </div>
                    </div>
                    <img class="w-10 h-10 rounded" src="/images_bio/{{$bio->bio_img_ref ?? 'Upload a photo that represents you.'}}" alt="">
            
                    <p class="mt-4 text-lg text-gray-900 lg:p-4" >{{ $bio->bio_text ?? "Don't forget to write your bio!" }}</p>
            </div>
        </div>
    </div>


    <div class="mt-6 bg-white shadow-sm rounded-lg divide-y p-1 sm:p-6 lg:p-4">
        @foreach ($chirps as $chirp)
            <div class="p-6 flex space-x-8 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
                <div class="flex-1">
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-gray-800">{{ $user_name}}</span>
                            <small class="ml-2 text-sm text-gray-600">{{ $chirp->created_at }}</small>

                            <img class="w-10 h-10 rounded-full mr-4" src="{{ $chirp->img_url }}" alt="{{ $chirp->message }}">
                        </div>
                    </div>
                    <p class="mt-4 text-lg text-gray-900">{{ $chirp->message }}</p>
                </div>
            </div>
        @endforeach
    
    </div>    
</x-app-layout>