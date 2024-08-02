<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Klevv Indonesia</title>
</head>

<body>
    {{-- Nav --}}
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">

                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <img alt="Your Company" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                            class="h-8 w-auto" />
                    </div>
                </div>
            </div>
        </div>
    </nav>
    {{-- Nav --}}

    {{-- Hero --}}
    <div class="relative overflow-hidden bg-gray-900">
        <div class="relative px-6 pt-16 pb-24 text-center">
            <h1 class="text-4xl font-bold text-white sm:text-5xl md:text-6xl">
                KLEVV x Cahaya
            </h1>
            <p class="mt-6 text-lg leading-8 text-gray-300">
                Q3 Back to school and Independence day doorprize 2024 </p>
        </div>
    </div>
    {{-- Hero --}}

    {{-- View Data --}}
    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Uploaded Data</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">
                Below is the list of data that has been uploaded.
            </p>
        </div>

        <div class="mt-8">
            <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Name</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Gender</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Place of Birth</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">City</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">ID Card Number</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Headline</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Phone</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Address</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Invoice</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($datas as $data)
                        <tr key={formdata.id}>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $data->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $data->gender }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $data->placeOfBirth }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $data->city }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $data->idCardNumber }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $data->headline }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $data->phone }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $data->address }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">

                                <a href="{{ route('invoice.get', $data->invoice) }}" target="_blank"
                                    rel="noopener noreferrer" class="text-blue-600 hover:underline">
                                    View Invoice
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- View Data --}}
</body>

</html>
