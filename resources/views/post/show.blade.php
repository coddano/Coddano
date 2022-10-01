<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>
    <br>
    
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" class="mt-10">

        <main class="mt-10">

            <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
              <div class="absolute left-0 bottom-0 w-full h-full z-10"
                style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
              <img src="{{asset('/storage/' . $post->image)}}" class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
              <div class="p-4 absolute bottom-0 left-0 z-20">
                <a href="#"
                  class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">{{$post->title}}</a>
                <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                  Pellentesque a consectetur velit, ac molestie ipsum. Donec sodales, massa et auctor.
                </h2>
                <div class="flex mt-3">
                  <img src="https://randomuser.me/api/portraits/men/97.jpg"
                    class="h-10 w-10 rounded-full mr-2 object-cover" />
                  <div>
                    <p class="font-semibold text-gray-200 text-sm">{{$post->user->name}}</p>
                    <p class="font-semibold text-gray-400 text-xs">{{$post->created_at->format('d M Y')}}</p>
                  </div>
                </div>
              </div>
            </div>
      
            <div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
                {{$post->content}}
            </div>
          </main>

    </div>


</x-app-layout>