<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Backup & Recovery') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-8">

                    <!-- Database Backup Section -->
                    <div>
                        <h2 class="text-2xl font-semibold mb-4">Database Backup</h2>
                        <form method="post" action="{{ route('admin.backup.database') }}">
                            @csrf
                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                Download Backup
                            </button>
                        </form>
                    </div>

                    <!-- Database Restore Section -->
                    <div>
                        <h2 class="text-2xl font-semibold mb-4">Database Restore</h2>
                        <form method="post" action="{{ route('admin.restore.database') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="flex items-center space-x-4">
                                <input type="file" name="restore_file" accept=".sql" class="block w-full text-sm text-gray-900 bg-gray-100 rounded-md border border-gray-300 cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <button type="submit" class="px-4 py-2 bg-green-600 text-white font-semibold rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                                    Restore
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Database Management Section -->
                    <div>
                        <h2 class="text-2xl font-semibold mb-4">Database Management</h2>
                        <div class="flex space-x-4">
                            <form method="post" action="{{ route('admin.drop.database') }}">
                                @csrf
                                <button type="submit" class="px-4 py-2 bg-red-600 text-white font-semibold rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                                    Drop Database
                                </button>
                            </form>
                            <form method="post" action="{{ route('admin.create.database') }}">
                                @csrf
                                <button type="submit" class="px-4 py-2 bg-yellow-600 text-white font-semibold rounded-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2">
                                    Create Database
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
