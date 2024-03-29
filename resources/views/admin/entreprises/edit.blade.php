<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
    <title>Edit an Entreprise</title>
</head>

<body class="bg-gray-100">

    <div class="container mx-auto mt-8">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-2xl font-bold">Edit an Entreprise</h2>
            <a class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700" href="{{ route('dashboard') }}">Back</a>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger bg-red-200 text-red-800 p-4 mb-4">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('entreprises.update', $entreprise->id) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input type="text" name="name" id="name" value="{{ $entreprise->name }}" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Name">
            </div>

            <div class="mb-4">
                <label for="location" class="block text-gray-700 text-sm font-bold mb-2">Location:</label>
                <input type="text" name="location" id="location" value="{{ $entreprise->location }}" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Location">
            </div>

            <div class="mb-4">
                <label for="details" class="block text-gray-700 text-sm font-bold mb-2">Details:</label>
                <input type="text" name="details" id="details" value="{{ $entreprise->details }}" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Details">
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">Submit</button>
            </div>
        </form>
    </div>

</body>

</html>
