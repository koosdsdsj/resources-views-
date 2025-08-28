<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Detail Buku</title>
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

  <main class="container mx-auto py-10 grid grid-cols-1 md:grid-cols-2 gap-10">
    <div>
      <img src="https://placehold.co/300x450" alt="Cover Buku" class="rounded shadow">
    </div>

    <div>
      <h2 class="text-3xl font-bold mb-2">Belajar Laravel Dasar</h2>
      <p class="text-gray-600 mb-4">Author: John Doe</p>
      <div class="flex items-center mb-4">
        <span class="text-yellow-400">★★★★☆</span>
        <span class="ml-2 text-sm text-gray-500">(32 Reviews)</span>
      </div>
      <p class="text-gray-700 leading-relaxed mb-6">
        Buku ini membahas dasar-dasar Laravel secara lengkap, cocok untuk pemula
        maupun developer berpengalaman yang ingin memperdalam framework populer ini.
      </p>

      <h3 class="text-xl font-semibold mb-2">Reviews:</h3>
      <ul class="space-y-3">
        <li class="p-3 bg-white rounded shadow">
          <strong>Ani</strong>: "Buku yang sangat membantu saya belajar Laravel!"
        </li>
        <li class="p-3 bg-white rounded shadow">
          <strong>Budi</strong>: "Bahasanya mudah dipahami."
        </li>
      </ul>
    </div>
  </main>
</body>
</html>
