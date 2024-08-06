<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/klevv_logo.png">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.3/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.1.1/css/buttons.dataTables.css">
    @vite('resources/css/app.css')
    <title>KLEVV PROMO</title>
    <script>
        // JavaScript code for scrolling title
        let title = 'KLEVV PROMO - ';
        let index = 0;

        function scrollTitle() {
            document.title = title.substring(index) + title.substring(0, index);
            index++;
            if (index >= title.length) {
                index = 0;
            }
        }

        setInterval(scrollTitle, 200);
    </script>
</head>
</head>

<body>


    @auth
        <div class="container mx-auto bg-white shadow-xl rounded-3xl p-6 text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Uploaded Data</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">
                Below is the list of data that has been uploaded from <span class="font-bold">{{ $totalData }}</span>
                participants.
            </p>

            <div class="mt-14">
                <table class="row-border w-full" id="example">
                    <thead class="text-left">
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Place of Birth</th>
                            <th>City</th>
                            <th>ID Card Number</th>
                            <th>Headline</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Upload Date</th>
                            <th>Invoice</th>
                        </tr>
                    </thead>
                    <tbody class="text-left">
                        @foreach ($datas as $data)
                            <tr key={formdata.id}>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->gender }}</td>
                                <td>{{ $data->placeOfBirth }}</td>
                                <td>{{ $data->city }}</td>
                                <td>{{ $data->idCardNumber }}</td>
                                <td>{{ $data->headline }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->address }}</td>
                                <td>{{ $data->created_at }}</td>
                                <td>

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
    @else
        <div class="flex items-center justify-center min-h-screen">
            <div class="isolate bg-white px-6 py-20 sm:py-32 lg:px-8">
                <div class="mx-auto max-w-sm text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Access Restricted</h2>
                    <p class="mt-2 text-lg leading-8 text-gray-600">Please enter the password to access the data.</p>
                    <form method="POST" action="/viewdata" class="mt-8">
                        @csrf
                        <input type="hidden" name="email" value="admin@gmail.com">
                        <input type="password" name="password"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                            placeholder="Enter password" />
                        <button type="submit"
                            class="mt-4 rounded-md bg-indigo-600 px-3.5 py-1.5 text-base font-semibold leading-6 text-white shadow-sm ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @endauth
    {{-- View Data --}}

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.print.min.js"></script>

    <script>
        $('#example').DataTable({
            scrollX: true,
            layout: {
                topStart: {
                    buttons: ['csv', 'excel', 'print']
                }
            }
        });
    </script>

</body>

</html>
