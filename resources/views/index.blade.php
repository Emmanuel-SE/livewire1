<x-app-layout>
   <div class="filters flex  space-x-6">
            <div class="w-1/3">
                    <select name="Category" id="category" class="w-fill rounded-xl border-none px-4 py-2">
                            <option value="Category1">Category One</option>
                            <option value="Category2">Category Two</option>
                            <option value="Category3">Category  Three</option>
                            <option value="Category4">Category Four</option>
                    </select>
            </div>
            <div class="w-1/3">
                <select name="Category" id="category" class="w-fill rounded-xl border-none px-4 py-2">
                        <option value="filter1">Filter One</option>
                        <option value="filter2">Filter Two</option>
                        <option value="filter3">Filter  Three</option>
                        <option value="filter4">Filter Four</option>
                </select>
        </div>
        <div class="w-2/3 relative">
                <input type="search" placeholder="Find an idea..." class="w-full rounded-xl bg-white px-4 py-2 pl-8 placeholder-gray-900">
                <div class=" absolute  top-0 flex items-center h-full ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 text-gray-700 ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>       
            </div>
        </div> 
      
   </div>
</x-app-layout>