<!-- app/Views/home.php -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>GCIIL Marketplace</title>
  <!-- Tailwind via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <header class="bg-white shadow">
    <div class="container mx-auto px-4 py-6">
      <h1 class="text-3xl font-bold text-gray-900">GCIIL Marketplace</h1>
    </div>
  </header>

  <main class="container mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Ejemplo de producto -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
      <img src="<?php echo base_url('assets/images/product1.jpg') ?>" alt="Producto" class="w-full h-48 object-cover">
      <div class="p-4">
        <h2 class="text-xl font-semibold">Producto 1</h2>
        <p class="mt-2 text-gray-600">Descripción breve del producto.</p>
        <div class="mt-4">
          <span class="text-lg font-bold text-blue-600">$19.99</span>
          <button class="float-right bg-blue-500 text-white px-3 py-1 rounded">Comprar</button>
        </div>
      </div>
    </div>
    <!-- Repite bloques según tu data -->
  </main>
</body>
</html>
