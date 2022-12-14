<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ config('app.name') }}
        </h2>
    </x-slot>
    <div class="py-8">
        <div class="container mx-auto max-w-7xl sm:px-6 lg:px-8">
            <livewire:add-joke-form />

            @forelse ($jokes as $joke)
                <div  class="max-w-6xl px-4 py-4 mb-1 bg-white shadow-md sm:rounded-lg sm:px-6 lg:px-8">

                    <small class="top-0 float-right mb-9 pl-4 text-sm text-[0.8em] text-gray-400">
                        By {{ $joke->getAuthorName() }}
                        {{ $joke->created_at->diffForHumans(null,false,true) }}
                    </small>
                    <strong>{{ $joke->title ?? '' }}</strong>
                    <x-markdown>
                        <p>{{ $joke->body ?? '' }}</p>
                    </x-markdown>
                    <p>{{ $joke->punchline ?? '' }}</p>
                </div>
            @empty
            <div  class="max-w-6xl px-4 py-4 mb-1 bg-white shadow-md sm:rounded-lg sm:px-6 lg:px-8">
                <p>No jokes yet :(. &nbsp;&nbsp; Add some?</p>
            </div>
            @endforelse
        </div>

        {{ $jokes->links() }}
    </div>

</div>
