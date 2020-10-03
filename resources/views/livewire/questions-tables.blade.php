<div>
    <div class="flex justify-between items-center py-5">
        <div class="flex items-center px-5">
            <div class="flex w-full bg-white shadow rounded">
                <input wire:model="search" class="form-input rounded-md shadow-sm" autocomplete="off" type="text" title="search" placeholder="Search…">
            </div>
        </div>
        <div class="flex items-center px-5">
            <div class="flex w-full bg-white shadow rounded">
                <x-jet-button class="btn-indigo">
                    <a href="{{ route('questions.create') }}">{{ __('Create Question') }}</a>
                </x-jet-button>
            </div>
        </div>
    </div>
    <div class="bg-white rounded shadow overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <tr class="text-left font-bold">
                <th class="px-6 pt-6 pb-4">Criteria</th>
                <th class="px-6 pt-6 pb-4">Title</th>
            </tr>
            @foreach ($questions as $question)
                <tr class="hover:bg-gray-100 focus-within:bg-gray-100">
                    <td class="border-t">
                        <a class="px-6 py-4 flex items-center" href="{{route('questions.edit', $question->id)}}" tabindex="-1">
                        {{ $question->criteria }}
                        </a>
                    </td>
                    <td class="border-t">
                        <a class="px-6 py-4 flex items-center" href="{{route('questions.edit', $question->id)}}" tabindex="-1">
                        {{ $question->title }}
                        </a>
                    </td>
                </tr>
            @endforeach
            @if (count($questions)=== 0)
                <tr>
                    <td class="border-t px-6 py-4" colspan="4">No Questions found.</td>
                </tr>
            @endif
        </table>
    </div>
    <div class="px-4 py-3">
        {{ $questions->links() }}
    </div>
</div>
