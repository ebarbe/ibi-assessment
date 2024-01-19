<form action="{{ route($route) }}" method="GET">
    <input name="search" type="text" placeholder="Search People..." class="w-full p-2 border rounded mb-4" value="{{ request('search') }}">
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Search</button>
</form>