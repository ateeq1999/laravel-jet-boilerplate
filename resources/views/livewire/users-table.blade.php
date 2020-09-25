<div>
    <div class="flex justify-between items-center py-5">
        <div class="flex items-center px-5">
            <div class="flex w-full bg-white shadow rounded">
                <input wire:model="search" class="form-input rounded-md shadow-sm" autocomplete="off" type="text" name="search" placeholder="Search…">
            </div>
        </div>
        <div class="flex items-center px-5">
            <div class="flex w-full bg-white shadow rounded">
                <x-jet-button class="btn-indigo">
                    <a href="{{ route('users.create') }}">{{ __('Create User') }}</a>
                </x-jet-button>
            </div>
        </div>
    </div>
    <div class="bg-white rounded shadow overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <tr class="text-left font-bold">
                <th class="px-6 pt-6 pb-4">Name</th>
                <th class="px-6 pt-6 pb-4">Email</th>
                <th class="px-6 pt-6 pb-4" colspan="2">Team</th>
            </tr>
            @foreach ($users as $user)
                <tr class="hover:bg-gray-100 focus-within:bg-gray-100">
                    <td class="border-t">
                        <a class="px-6 py-4 flex items-center focus:text-indigo-500" href="{{route('users.edit', $user->id)}}">
                            @if ($user->profile_photo_url != null)
                                <img class="block w-5 h-5 rounded-full mr-2 -my-2" src="{{ $user->profile_photo_url }}">
                            @endif
                            {{ $user->name }}
                        {{-- <icon v-if="user.deleted_at" name="trash" class="flex-shrink-0 w-3 h-3 fill-gray-400 ml-2" /> --}}
                        </a>
                    </td>
                    <td class="border-t">
                        <a class="px-6 py-4 flex items-center" href="{{route('users.edit', $user->id)}}" tabindex="-1">
                        {{ $user->email }}
                        </a>
                    </td>
                    <td class="border-t">
                        <a class="px-6 py-4 flex items-center" href="{{route('users.edit', $user->id)}}" tabindex="-1">
                        {{ $user->currentTeam->name }}
                        </a>
                    </td>
                    <td class="border-t w-px">
                        <a class="px-4 flex items-center" href="{{route('users.edit', $user->id)}}" tabindex="-1">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" />
                        </a>
                    </td>
                </tr>
            @endforeach
            @if (count($users)=== 0)
                <tr>
                    <td class="border-t px-6 py-4" colspan="4">No users found.</td>
                </tr>
            @endif
        </table>
    </div>
    <div class="px-4 py-3">
        {{ $users->links() }}
    </div>
</div>
