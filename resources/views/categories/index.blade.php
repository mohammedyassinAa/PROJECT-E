
<x-app-layout>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="flex items-center justify-between pb-4 bg-white dark:bg-gray-900">  
            <label for="table-search" class="sr-only">Search</label>
            <div class="flex justify-between  bg-sky-500 mr-20 rounded-xl">
            
                <a href={{ route('categories.create') }}  >
                    <button class=" text-white-400 rounded-xl p-2 text-center  ">
                        Add category
                    </button>
                </a>
            {{-- </caption> --}}
        </div>
        <div>
    
        </div>
        </div>
       
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-100 uppercase bg-gray-50 dark:bg-gray-500 dark:text-gray-400">
            <tr>
                
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Created at 
                </th>
                <th scope="col" class="px-6 py-3">
                    Updated at
                </th>
                <th scope="col" class="px-6 py-3">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category )        
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                
                <td class="px-6 py-4">
                    {{ $category->name }}
                </td>
                <td class="px-6 py-4">
                    {{ $category->created_at }}
                </td>
                <td class="px-6 py-4">
                    {{ $category->updated_at }}
                </td>
               
    
                <td class="px-6 py-6">
                    <div class="flex  gap-8 text-base font-semibold">
                        <form method="GET" action="{{ route('categories.edit', $category->id) }}"  >
                            @csrf
                            <button type="submit" class="text-green-500	"> Edit </a>
                        </form> 

                        <form method="POST" action="{{ route('categories.destroy', $category->id) }}"  >
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="text-red-500	"> Delete </a>
                        </form>          
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        {{-- <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <caption class="p-5 text-lg font-semibold text-left  text-gray-900 bg-white dark:text-white dark:bg-gray-800">
            <div class="flex justify-between">
                categorys
                <a href={{ route('categorys.create') }} class="text-white bg-green-500 hover:bg-green-800 rounded-xl p-2 w-8 text-center  " >
                        +
                </a>
            </div>
        </caption>

        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    category 
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="">Actions</span>
                </th>           
            </tr>
        </thead>
            <tbody>
                @foreach($categorys as $category)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="flex gap-8 text-center">{{ $category->name }} <img src="{{ asset('storage/uploads/'.$category->image) }}" class="rounded-full h-20" /></td>
                    <td>{{ $category->price}}</td>
                    <td > </td>
                    {{-- <td>{{ $category->city->name }}</td>  
                    <td>
                        <button type="button" onclick="confirmDelete({{ $category->id }})">Supprimer</button>
                        {<a href="{{ route('category.edit', ['id' => $category->id]) }}">Modifier</a> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table> --}}
    </div>
</x-app-layout>
