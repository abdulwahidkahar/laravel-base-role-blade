<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detail User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <table class="min-w-full border-collapse border border-gray-300 dark:border-gray-700">
                        <tr>
                            <th class="border px-4 py-2 text-left">ID</th>
                            <td class="border px-4 py-2">{{ $user->id }}</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2 text-left">Name</th>
                            <td class="border px-4 py-2">{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2 text-left">Email</th>
                            <td class="border px-4 py-2">{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2 text-left">Role</th>
                            <td class="border px-4 py-2">
                                {{ $user->roles->pluck('name')->join(', ') ?: '-' }}
                            </td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2 text-left">Created At</th>
                            <td class="border px-4 py-2">{{ $user->created_at->format('d M Y H:i') }}</td>
                        </tr>
                        <tr>
                            <th class="border px-4 py-2 text-left">Updated At</th>
                            <td class="border px-4 py-2">{{ $user->updated_at->format('d M Y H:i') }}</td>
                        </tr>
                    </table>

                    <div class="mt-4">
                        <a href="{{ route('admin.user.index') }}" class="text-blue-600 hover:underline">← Kembali</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
