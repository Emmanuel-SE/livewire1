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
   <div class="ideas-container space-y-6 my-6">
        <div class="idea-container bg-white rounded-xl flex">
                <div class="border-r border-gray-100 px-5 py-8">
                        <div class="text-center">
                                <div class="font-semibold text-2xl">12</div>
                                <div class="text-gray-500">Votes</div>
                        </div>

                        <div class="mt-8">
                                <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 
                                font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Vote</button>
                        </div>
                </div>
                <div class="flex px2 py-6">
                        <a href="#">
                                <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                                class="w-14 h-14 rounded-xl">
                        </a>
                </div>
        </div>
   </div>
</x-app-layout>