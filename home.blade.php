<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Katalog Buku</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">
  <header class="bg-white shadow p-4">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-2xl font-bold text-indigo-600">Katalog Buku</h1>
      <nav class="space-x-4">
        <a href="/" class="text-gray-700 hover:text-indigo-600">Home</a>
        <a href="/books" class="text-gray-700 hover:text-indigo-600">Daftar Buku</a>
        <a href="/authors" class="text-gray-700 hover:text-indigo-600">Author</a>
      </nav>
    </div>
  </header>

  <main class="container mx-auto py-10">
    <h2 class="text-xl font-semibold mb-6">Daftar Buku Terbaru</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      @foreach([1,2,3,4] as $i)
      <div class="bg-white rounded-lg shadow p-4">
        <img src="https://placehold.co/200x300" alt="Cover Buku" class="rounded mb-3">
        <h3 class="font-semibold text-lg">Judul Buku {{ $i }}</h3>
        <p class="text-gray-600">Author {{ $i }}</p>
        <div class="flex items-center mt-2">
          <span class="text-yellow-400">★★★★☆</span>
          <span class="ml-2 text-sm text-gray-500">(12 Reviews)</span>
        </div>
        <a href="/book-detail" class="block mt-3 text-indigo-600 hover:underline">Lihat Detail →</a>
      </div>
      @endforeach
    </div>
  </main>
</body>
</html>
