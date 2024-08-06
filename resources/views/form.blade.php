<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/klevv_logo.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

<body>
    {{-- Hero --}}
    <div class="min-h-screen w-full">
        <img src="/hero-desktop.png" alt="Prize" class="sm:block hidden w-full bg-cover bg-no-repeat">
        <img src="/hero-mobile.png" alt="Prize" class="block sm:hidden w-full bg-cover bg-no-repeat">
    </div>
    {{-- Hero --}}

    {{-- Form --}}
    <div class="isolate bg-white px-6 py-16 lg:px-8">

        <div class="mx-auto max-w-2xl text-center">
            @if (session()->has('success'))
                <div role="alert"
                    class="relative block w-full px-4 py-4 mb-5 text-lg text-white bg-green-400 rounded-lg font-semibold"
                    style="opacity: 1;">
                    <div>{{ session('success') }}</div>
                </div>
            @endif
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Input your Data</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">
                Please fill out the form below to submit your data.
            </p>
        </div>
        <form action="/" method="POST" enctype="multipart/form-data" class="mx-auto mt-16 max-w-xl sm:mt-20">
            @csrf
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div class="sm:col-span-2">
                    <label htmlFor="name" class="text-left block text-sm font-semibold leading-6 text-gray-900">
                        Name
                    </label>
                    <div class="mt-2.5">
                        <input id="name" name="name" type="text" required
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            placeholder="Enter your name" />
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label htmlFor="gender" class="text-left block text-sm font-semibold leading-6 text-gray-900">
                        Gender
                    </label>
                    <div class="mt-2.5">
                        <select id="gender" name="gender" required
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label htmlFor="placeOfBirth" class="text-left block text-sm font-semibold leading-6 text-gray-900">
                        Place of Birth
                    </label>
                    <div class="mt-2.5">
                        <input id="placeOfBirth" name="placeOfBirth" type="text" required
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            placeholder="Enter your place of birth" />
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label htmlFor="city" class="text-left block text-sm font-semibold leading-6 text-gray-900">
                        City
                    </label>
                    <div class="mt-2.5">
                        <input id="city" name="city" type="text" required
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            placeholder="Enter your city" />
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label htmlFor="idCardNumber" class="text-left block text-sm font-semibold leading-6 text-gray-900">
                        ID Card Number
                    </label>
                    <div class="mt-2.5">
                        <input id="idCardNumber" name="idCardNumber" type="number" required
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            placeholder="Enter your ID card number" />
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label htmlFor="headline" class="text-left block text-sm font-semibold leading-6 text-gray-900">
                        Headline
                    </label>
                    <div class="mt-2.5">
                        <input id="headline" name="headline" type="text" required
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            placeholder="Enter a headline" />
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label htmlFor="phone" class="text-left block text-sm font-semibold leading-6 text-gray-900">
                        Phone
                    </label>
                    <div class="mt-2.5">
                        <input id="phone" name="phone" type="number" required
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            placeholder="Enter your phone number" />
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label htmlFor="address" class="text-left block text-sm font-semibold leading-6 text-gray-900">
                        Address
                    </label>
                    <div class="mt-2.5">
                        <textarea id="address" name="address" rows="4" required
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            placeholder="Enter your address"></textarea>
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label htmlFor="invoice" class="text-left block text-sm font-semibold leading-6 text-gray-900">
                        Upload Invoice
                    </label>
                    <div class="mt-2.5">
                        <input id="invoice" name="invoice" type="file" required
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm" />
                    </div>
                    @error('invoice')
                        <div class="mt-4 bg-red-500 text-white text-sm p-2 rounded-md">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="mt-8 flex justify-center">
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3.5 py-1.5 text-base font-semibold leading-6 text-white shadow-sm ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    Submit
                </button>
            </div>

        </form>
    </div>
</body>

</html>
