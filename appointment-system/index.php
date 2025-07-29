<?php include 'includes/header.php'; ?>
<main class="w-full bg-white">
  <!-- Hero Section -->
  <div class="flex flex-col lg:flex-row items-center justify-center w-full h-[80vh]">

    <!-- Left Side: Centered Text with Inner Padding -->
    <div class="w-full lg:w-1/2 flex items-center justify-center text-left px-6">
      <div class="p-6">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
          Welcome to Our <span class="text-blue-600">Appointment Booking</span> System
        </h1>
        <p class="text-lg text-gray-700 mb-4">
          Book meetings quickly, easily, and securely with our modern scheduling platform.
        </p>
        <p class="text-base text-gray-600 mb-4">
          Whether you're managing client consultations, internal team check-ins, or customer service appointments — our system simplifies everything.
        </p>
        <p class="text-base text-gray-600 mb-4">
          Enjoy real-time availability, instant confirmations, and seamless communication, all in one place. It's fast, user-friendly, and built for your convenience.
        </p>
        <p class="text-base text-gray-600 mb-8">
          Get started today and take control of your time like never before.
        </p>
        <a href="register.php"
           class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold text-lg px-8 py-3 rounded-lg shadow-lg transition duration-300">
          Get Started
        </a>
      </div>
    </div>

    <!-- Right Side: Centered Image -->
    <div class="w-full lg:w-1/2 flex items-center justify-center px-6">
      <img src="https://static.vecteezy.com/system/resources/thumbnails/057/439/934/small/wonderful-traditional-group-of-business-people-in-meeting-cutout-element-high-resolution-png.png" alt="Appointment Illustration" class="w-full max-w-sm md:max-w-lg">
    </div>
  </div>

<!-- 3D Inset Services Section -->
<section class="bg-white py-16 px-4 min-h-[60vh] flex items-center justify-center">
  <div class="max-w-7xl w-full">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-gray-900 mb-2">Our <span class="text-blue-600">Services</span></h2>
      <p class="text-lg text-gray-600">High-quality features with a modern 3D embedded design.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Card -->
      <div class="bg-[#f0f0f0] rounded-2xl p-6 shadow-inner border border-gray-200">
        <div class="w-14 h-14 bg-gray-100 rounded-full flex items-center justify-center mb-4 shadow-inner">
          <i class="fas fa-calendar-check text-xl text-blue-600"></i>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2">Easy Booking</h3>
        <p class="text-sm text-gray-600">Book your appointments instantly and efficiently.</p>
      </div>

      <!-- Card -->
      <div class="bg-[#f0f0f0] rounded-2xl p-6 shadow-inner border border-gray-200">
        <div class="w-14 h-14 bg-gray-100 rounded-full flex items-center justify-center mb-4 shadow-inner">
          <i class="fas fa-user-clock text-xl text-purple-600"></i>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2">Live Scheduling</h3>
        <p class="text-sm text-gray-600">Real-time updates and availability.</p>
      </div>

      <!-- Card -->
      <div class="bg-[#f0f0f0] rounded-2xl p-6 shadow-inner border border-gray-200">
        <div class="w-14 h-14 bg-gray-100 rounded-full flex items-center justify-center mb-4 shadow-inner">
          <i class="fas fa-envelope-open-text text-xl text-green-600"></i>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2">Reminders</h3>
        <p class="text-sm text-gray-600">Automatic email reminders to reduce no-shows.</p>
      </div>

      <!-- Card -->
      <div class="bg-[#f0f0f0] rounded-2xl p-6 shadow-inner border border-gray-200">
        <div class="w-14 h-14 bg-gray-100 rounded-full flex items-center justify-center mb-4 shadow-inner">
          <i class="fas fa-chart-line text-xl text-yellow-600"></i>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2">Analytics</h3>
        <p class="text-sm text-gray-600">Track appointments and analyze trends easily.</p>
      </div>

      <!-- Card -->
      <div class="bg-[#f0f0f0] rounded-2xl p-6 shadow-inner border border-gray-200">
        <div class="w-14 h-14 bg-gray-100 rounded-full flex items-center justify-center mb-4 shadow-inner">
          <i class="fas fa-lock text-xl text-red-600"></i>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2">Secure Access</h3>
        <p class="text-sm text-gray-600">Data is protected with modern security protocols.</p>
      </div>

      <!-- Card -->
      <div class="bg-[#f0f0f0] rounded-2xl p-6 shadow-inner border border-gray-200">
        <div class="w-14 h-14 bg-gray-100 rounded-full flex items-center justify-center mb-4 shadow-inner">
          <i class="fas fa-cogs text-xl text-indigo-600"></i>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2">Custom Tools</h3>
        <p class="text-sm text-gray-600">Tailored settings for your appointment system.</p>
      </div>
    </div>
  </div>
</section>

</main>
<?php include 'includes/footer.php'; ?>
