<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
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


        

        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
          
            <div class="p-6 flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                </svg>
                <div class="flex-1">
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-gray-800 mt-4 "> {{ $user_name}}</span>
                        </div>
                    </div>
                    <img class="w-10 h-10 rounded" src="/images_bio/{{$bio->bio_img_ref}}" alt="Default avatar">
            
                    <p class="mt-4 text-lg text-gray-900 lg:p-4" >{{ $bio->bio_text }}</p>
            </div>        
        </div>
                    
                    <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Your last post!</h1>  
            @foreach ($chirps as $chirp)
            

            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-10 h-10 rounded-full mr-4" src="{{ $chirp->img_url }}" alt="{{ $chirp->message }}">
                    <div class="px-6 py-4">
                    <p class="text-gray-700 text-base">
                    {{ $chirp->message }}
                    </p>
                </div>
                
            </div>

            @endforeach
        </div>

                </div>
           
        </div>
       
    
    </div>
</x-app-layout>