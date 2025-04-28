<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Login History') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Date & Time
                                    </th>
                                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        IP Address
                                    </th>
                                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Device/Browser
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($logins as $login)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">
                                            {{ $login->login_at->format('Y-m-d H:i:s') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">
                                            {{ $login->ip_address }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">
                                            {{ $login->user_agent }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="mt-4">
                        {{ $logins->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 