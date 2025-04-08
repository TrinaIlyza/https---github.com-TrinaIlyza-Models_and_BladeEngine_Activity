<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books List</title>
    @vite('resources/css/app.css') <!-- TailwindCSS integration -->
</head>
<body>
    <!-- Header -->
    <header class="bg-blue-500 p-4 text-white">
        <h1 class="text-2xl">Books Lists</h1>
    </header>

    <!-- Book List -->
    <main class="container mx-auto p-4">
        <table class="min-w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="p-2 border border-gray-300">ISBN</th>
                    <th class="p-2 border border-gray-300">Title</th>
                    <th class="p-2 border border-gray-300">Author</th>
                    <th class="p-2 border border-gray-300">Description</th>
                    <th class="p-2 border border-gray-300">Published Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td class="p-2 border border-gray-300">{{ $book->isbn }}</td>
                        <td class="p-2 border border-gray-300">{{ $book->title }}</td>
                        <td class="p-2 border border-gray-300">{{ $book->author }}</td>
                        <td class="p-2 border border-gray-300">{{ $book->description }}</td>
                        <td class="p-2 border border-gray-300">{{ $book->date_published }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>

    <!-- Footer -->
    <footer class="bg-blue-500 p-4 text-white text-center">
        <p>&copy; 2025 Models and Blade Engine Activity</p>
    </footer>
</body>
</html>
