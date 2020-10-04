<div>
    <div class="flex justify-between items-center py-5">
        <div class="flex items-center px-5">
            <div class="flex w-full bg-white shadow rounded">
                {{-- <input wire:model="search" class="form-input rounded-md shadow-sm" autocomplete="off" type="text" title="search" placeholder="Search…"> --}}
            </div>
        </div>
        <div class="flex items-center px-5">
            <div class="flex w-full bg-white shadow rounded">
                <x-jet-button class="btn-indigo">
                    <a href="{{ route('survey') }}">{{ __('New Survey') }}</a>
                </x-jet-button>
            </div>
        </div>
    </div>
    <div class="bg-white rounded shadow overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <tr class="text-left font-bold">
                <th class="px-6 pt-6 pb-4">Requirements</th>
                <th class="px-6 pt-6 pb-4">Cost</th>
                <th class="px-6 pt-6 pb-4">Duration</th>
                <th class="px-6 pt-6 pb-4">Flexible To Change</th>
                <th class="px-6 pt-6 pb-4">Customer Availability</th>
                <th class="px-6 pt-6 pb-4">Simplicity Ratio</th>
                <th class="px-6 pt-6 pb-4">Size</th>
                <th class="px-6 pt-6 pb-4">Complex</th>
                <th class="px-6 pt-6 pb-4"></th>
            </tr>
            @foreach ($answers as $answer)
                <tr class="hover:bg-gray-100 focus-within:bg-gray-100">
                    <td class="border-t">
                        <span class="px-6 py-4 flex items-center" tabindex="-1">
                        {{ $answer->requirements }}
                        </span>
                    </td>
                    <td class="border-t">
                        <span class="px-6 py-4 flex items-center" tabindex="-1">
                        {{ $answer->cost }}
                        </span>
                    </td>
                    <td class="border-t">
                        <span class="px-6 py-4 flex items-center" tabindex="-1">
                        {{ $answer->duration }}
                        </span>
                    </td>
                    <td class="border-t">
                        <span class="px-6 py-4 flex items-center" tabindex="-1">
                        {{ $answer->flexible_to_change }}
                        </span>
                    </td>
                    <td class="border-t">
                        <span class="px-6 py-4 flex items-center" tabindex="-1">
                        {{ $answer->customer_availability }}
                        </span>
                    </td>
                    <td class="border-t">
                        <span class="px-6 py-4 flex items-center" tabindex="-1">
                        {{ $answer->simplicity_ratio }}
                        </span>
                    </td>
                    <td class="border-t">
                        <span class="px-6 py-4 flex items-center" tabindex="-1">
                        {{ $answer->project_size }}
                        </span>
                    </td>
                    <td class="border-t">
                        <span class="px-6 py-4 flex items-center" tabindex="-1">
                        {{ $answer->project_complex }}
                        </span>
                    </td>
                    <td class="border-t">
                        <a href="{{ route('answers.result', $answer->id ) }}" class="px-6 py-4 flex items-center" tabindex="-1">
                        {{ __('View Result') }}
                        </a>
                    </td>
                </tr>
            @endforeach
            @if (count($answers)=== 0)
                <tr>
                    <td class="border-t px-6 py-4" colspan="4">No Answers found.</td>
                </tr>
            @endif
        </table>
    </div>
    <div class="px-4 py-3">
        {{ $answers->links() }}
    </div>
</div>
