<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Éditer {{$post->title}}
        </h2>
    </x-slot>
    <br>
    <div class="my-5">
        @foreach ($errors->all() as $error)
        <span class="block text-red-500">{{$error}}</span>
        @endforeach
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" class="mt-10">

        <form action="{{route('posts.update')}}" method="post" enctype="multipart/form-data">

            @method('put')

            @csrf

            <div class="space-y-4">

                <div>
                    <label for="category" class="text-lx font-serif">Catégories</label>
                    <select name="category" id="category">
                        @foreach ($categories as $category)

                        <option value="{{$category->id}}" {{$post->category_id===$category->id ? 'selected' : ''}}>
                            {{$category->name}}
                        </option>

                        @endforeach
                    </select>
                </div>


                <div>
                    <label for="title" class="text-lx font-serif">Titre</label>
                    <input type="text" placeholder="title" id="title" name="title" value="{{$post->title}}"
                        class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
                </div>
                <div>
                    <label for="content" class="block mb-2 text-lg font-serif">Description</label>
                    <textarea id="content" cols="30" rows="10" placeholder="whrite here.." name="content" value="{{$post->content}}"
                        class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"></textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" placeholder="image" name="image">
                </div>

                <div class="mb-6 pt-4">
                    <button type="submit" class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600">Modifiers mon post</button>
                </div>


        </form>


    </div>


</x-app-layout>