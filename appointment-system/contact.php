<?php include 'includes/header.php'; ?>
<main class="min-h-screen bg-gray-100 flex items-center justify-center bg-white">
  <div class="w-full max-w-7xl bg-white rounded-xl shadow-lg overflow-hidden md:flex">

    <!-- Left: Contact Form -->
    <div class="w-full md:w-1/2 p-8">
      <h1 class="text-3xl font-bold text-indigo-600 mb-4">Contact Us</h1>
      <p class="text-gray-600 mb-6">We’d love to hear from you. Fill out the form to get in touch!</p>

      <form method="post" action="" class="space-y-4">
        <div>
          <label class="block text-sm font-medium text-gray-700">Name</label>
          <input type="text" name="name" required
                 class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" name="email" required
                 class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700">Message</label>
          <textarea name="message" rows="4" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
        </div>

        <button type="submit"
                class="w-full bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 transition">
          Send Message
        </button>
      </form>
    </div>

    <!-- Right: Image Section -->
    <div class="w-full md:w-1/2 flex items-center justify-center bg-gray-50">
      <img src="https://cdni.iconscout.com/illustration/premium/thumb/contact-us-3483601-2912018.png?f=webp"
           alt="Contact Us"
           class="w-full h-auto object-contain hidden md:block p-6" />
      <!-- Mobile fallback image -->
      <img src="https://source.unsplash.com/600x400/?contact,help"
           alt="Contact Us"
           class="block md:hidden w-full object-cover rounded-b-xl" />
    </div>

  </div>
</main>
<?php include 'includes/footer.php'; ?>
