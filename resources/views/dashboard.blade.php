<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>Gategories</h1>
                    @foreach ($categories as $category)
                        <h2>{{ $category->name }}</h2>
                    @endforeach
                    @if (auth()->user() && auth()->user()->role_name === 'admin')
                        <a href="{{ route('category.create') }}">Add Category</a>
                    @endif
                    <h1>Trending Stories</h1>
                    @foreach ($stories as $story)
                        <h2>{{ $story->name }}</h2>
                        <a href="{{ route('story.show', $story->id) }}"><button>Details</button></a>
                    @endforeach
                    <h1>Top Adventure Stories</h1>
                    @if ($adventureStories && $adventureStories->stories)
                        <ul>
                            @foreach ($adventureStories->stories as $story)
                                <li>{{ $story->name }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <br>
                    <h1>Top History Stories</h1>
                    @if ($historyStories && $historyStories->stories)
                        <ul>
                            @foreach ($historyStories->stories as $story)
                                <li>{{ $story->name }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <br>
                    @if (auth()->user() && auth()->user()->role_name === 'admin')
                        <a href="{{ route('story.create') }}">Add Story</a>
                    @endif
                    <br>
                    @if (auth()->user() && auth()->user()->role_name === 'admin')
                        <a href="{{ route('author.create') }}">Add Author</a>
                    @endif
                    <br>
                    @if (auth()->user() && auth()->user()->role_name === 'admin')
                        <a href="{{ route('publishing_home.create') }}">Add Publishing Home</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
