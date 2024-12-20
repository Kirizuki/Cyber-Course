<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#E0D6ED] dark:text-[#E0D6ED] leading-tight">
            {{ __('User Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-bold text-[#E0D6ED]">Users</h3>
                </div>

                <table class="min-w-full bg-gray-800 text-gray-200 rounded-lg">
                    <thead class="bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 border-b border-gray-700 text-left">Name</th>
                        <th class="px-6 py-3 border-b border-gray-700 text-left">Email</th>
                        <th class="px-6 py-3 border-b border-gray-700 text-left">Role</th>
                        <th class="px-6 py-3 border-b border-gray-700 text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr class="bg-gray-800">
                            <td class="px-6 py-4 border-b border-gray-700">{{ $user->name }}</td>
                            <td class="px-6 py-4 border-b border-gray-700">{{ $user->email }}</td>
                            <td class="px-6 py-4 border-b border-gray-700">{{ $user->is_admin ? 'Admin' : 'User' }}</td>
                            <td class="px-6 py-4 border-b border-gray-700 text-center">
                                @if(!$user->is_admin)
                                    <div class="flex justify-center space-x-4">
                                        <livewire:delete-user :user="$user" />
                                    </div>
                                @else
                                    <h1 class="text-gray-500">No Action</h1>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                @if(session('success'))
                    <livewire:delete-confirmation :successMessage="session('success')" />
                @endif

            @if(session('errors'))
                    <script>
                        alert("{{ session('errors') }}");
                    </script>
                @endif

                @if($errors->any())
                    <script>
                        alert("{{ implode(' ', $errors->all()) }}");
                    </script>
                @endif

                <div class="mt-4">
                    {{ $users->links() }} <!-- Pagination Links -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
