<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <form action="{{ route('admin.user.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label class="block font-medium">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                   class="w-full border rounded p-2">
                            @error('name') <p class="text-red-600">{{ $message }}</p> @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                   class="w-full border rounded p-2">
                            @error('email') <p class="text-red-600">{{ $message }}</p> @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium">Password</label>
                            <input type="password" name="password" class="w-full border rounded p-2">
                            @error('password') <p class="text-red-600">{{ $message }}</p> @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" class="w-full border rounded p-2">
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium">Role</label>
                            <select name="roles[]" multiple class="w-full border rounded p-2">
                                @foreach($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                            Simpan
                        </button>
                        <a href="{{ route('admin.user.index') }}" class="ml-2 text-gray-600 hover:underline">Batal</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
