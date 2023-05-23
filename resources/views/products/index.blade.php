
<x-app-layout>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="flex items-center justify-between pb-4 bg-white dark:bg-gray-900">  
            <label for="table-search" class="sr-only">Search</label>
            <div class="flex justify-between  bg-sky-500 mr-20 rounded-xl">
        
                <a href={{ route('products.create') }}  >
                    <button class=" text-white-400 rounded-xl p-2 text-center  ">
                        Add Product
                    </button>
                </a>
            {{-- </caption> --}}
        </div>
        <div class="flex space-x-4">
            <a href="{{ route('products.export') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Export Products
            </a>
            <a href="{{ route('generate') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Generate
            </a>
        </div>

        </div>
        <table class="w-full text-sm text-left text-gray-100 dark:text-gray-400">
        <thead class="text-xs text-gray-100 uppercase bg-gray-50 dark:bg-gray-500 dark:text-gray-400">
            <tr>
                
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product )        
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="px-6 py-0">
                        <div class="flex items-center gap-8 text-base font-semibold "> <img class="w-20 h-20 object-cover rounded-xl"src="{{ asset('storage/uploads/'.$product->image) }}" class="rounded-xl h-20 " /> {{ $product->name }}</div> 
                    </div>  
                </th>
                <td class="px-6 py-4 text-green-600 font-semibold">
                    {{ $product->price }} DH
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center uppercase"  id="{{ $product->category_id }}">
                        {{ $product->category->name }}
                    </div>
                    
                </td>
    
                <td class="px-6 py-6">
                    <div class="flex  gap-8 text-base font-semibold">
                        <form method="GET" action="{{ route('products.edit', $product->id) }}"  >
                            @csrf
                            <button type="submit" class="text-cyan-500	"> Edit </a>
                        </form> 


                        <form method="POST" action="{{ route('products.destroy', $product->id) }}"  >
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
    </div>
</x-app-layout>
