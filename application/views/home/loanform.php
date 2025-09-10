<!DOCTYPE html>
<html lang="sw">
<head>
  <meta charset="UTF-8">
  <title>Fomu ya Maombi ya Mkopo</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; }
  </style>
</head>
<body class="bg-gray-100 p-6">

  <div class="max-w-5xl mx-auto bg-white p-8 rounded-xl shadow-xl relative">

    <!-- WhatsApp Help Icon juu kulia -->
    <div class="absolute top-4 right-4">
      <a href="https://wa.me/255786542628" target="_blank" class="bg-green-500 hover:bg-green-600 text-white p-3 rounded-full shadow-lg flex items-center justify-center transition-transform transform hover:scale-110">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
          <path d="M16.7 11.1c-.2-.1-1.2-.6-1.4-.7-.2-.1-.3-.1-.5.1-.2.2-.8.7-1 .8-.2.1-.3.1-.5-.1-.2-.2-.8-1-1-.8-.2.1-.4.1-.5.2-.1.1-.5.8-.5.9s.6 1.4 1.4 1.9c.8.5 1.5.6 1.7.7.2.1.3.1.5-.1.2-.2.8-.7 1-.8.2-.1.3-.1.5.1.2.2.8 1 1 .8.2-.1.4-.1.5-.2.1-.1.5-.8.5-.9s-.6-1.4-1.4-1.9z"/>
          <path d="M12 2C6.5 2 2 6.5 2 12c0 1.8.5 3.5 1.5 5l-1.6 5.8 6-1.6c1.5.9 3.1 1.4 4.8 1.4 5.5 0 10-4.5 10-10S17.5 2 12 2zm0 18c-1.5 0-2.9-.5-4-1.4l-3.6 1 .9-3.6C4.5 15 4 13.5 4 12c0-4.4 3.6-8 8-8s8 3.6 8 8-3.6 8-8 8z"/>
        </svg>
      </a>
    </div>

    <h2 class="text-3xl font-semibold mb-8 text-center text-blue-600">Fomu ya Maombi ya Mkopo</h2>

    <?= validation_errors('<div class="text-red-600 mb-4">','</div>'); ?>
    <?= form_open('welcome/store'); ?>
 <p class="text-center text-green-600 font-bold mb-6 flex flex-col sm:flex-row justify-center items-center gap-2 text-sm sm:text-base">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="w-6 h-6">
    Kwa msaada zaidi, tuma WhatsApp: 
    <a href="https://wa.me/255786542628" target="_blank" class="underline text-blue-600 font-bold">255786542628</a>
  </p>
    <!-- 1. TAARIFA BINAFSI ZA MKOPAJI -->
    <h3 class="text-xl font-semibold mb-4 border-b pb-2">1. TAARIFA BINAFSI ZA MKOPAJI</h3>
    <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 mb-4">
      <div>
        <label class="font-semibold">Jina la Kwanza *</label>
        <input type="text" name="first_name" value="<?= set_value('first_name'); ?>" class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>
      <div>
        <label class="font-semibold">Jina la Kati</label>
        <input type="text" name="middle_name" value="<?= set_value('middle_name'); ?>" class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>
      <div>
        <label class="font-semibold">Jina la Mwisho *</label>
        <input type="text" name="last_name" value="<?= set_value('last_name'); ?>" class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>
    </div>

    <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 mb-6">
      <div>
        <label class="font-semibold">Jina Maarufu</label>
        <input type="text" name="nickname" value="<?= set_value('nickname'); ?>" class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>
      <div>
        <label class="font-semibold">Namba ya Kitambulisho *</label>
        <input type="text" name="id_number" value="<?= set_value('id_number'); ?>" class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>
      <div>
        <label class="font-semibold">Tarehe ya Kuzaliwa</label>
        <input type="date" name="dob" value="<?= set_value('dob'); ?>" class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>
    </div>

    <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 mb-6">
      <div>
        <label class="font-semibold">Jinsia</label>
        <select name="gender" class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none">
          <option value="">--Chagua--</option>
          <option value="M" <?= set_select('gender','M'); ?>>M</option>
          <option value="F" <?= set_select('gender','F'); ?>>F</option>
        </select>
      </div>
      <div>
        <label class="font-semibold">Hali ya Ndoa</label>
        <input type="text" name="marital_status" value="<?= set_value('marital_status'); ?>" class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>
      <div>
        <label class="font-semibold">Simu *</label>
        <input type="text" name="phone" value="<?= set_value('phone'); ?>" class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>
    </div>

    <!-- 2. TAARIFA ZA BIASHARA -->
    <h3 class="text-xl font-semibold mb-4 border-b pb-2">2. TAARIFA ZA BIASHARA</h3>
    <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 mb-6">
      <div>
        <label class="font-semibold">Aina ya Biashara</label>
        <input type="text" name="business_type" value="<?= set_value('business_type'); ?>" class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>
      <div>
        <label class="font-semibold">Manunuzi kwa Mwezi</label>
        <input type="number" name="monthly_purchase" value="<?= set_value('monthly_purchase'); ?>" class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>
      <div>
        <label class="font-semibold">Mauzo kwa Mwezi</label>
        <input type="number" name="monthly_sales" value="<?= set_value('monthly_sales'); ?>" class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>
    </div>

    <div class="grid gap-4 sm:grid-cols-2 mb-6">
      <div>
        <label class="font-semibold">Faida kwa Mwezi</label>
        <input type="number" name="monthly_profit" value="<?= set_value('monthly_profit'); ?>" class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>
    </div>

    <!-- 3. TAARIFA ZA MKOPO -->
    <h3 class="text-xl font-semibold mb-4 border-b pb-2">3. TAARIFA ZA MKOPO</h3>
    <div class="grid gap-4 sm:grid-cols-2 mb-6">
      <div>
        <label class="font-semibold">Kiasi cha Mkopo Kinachoombwa (TZS) *</label>
        <input type="number" step="0.01" name="amount_requested" value="<?= set_value('amount_requested'); ?>" class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>
      <div>
        <label class="font-semibold">Lengo la Mkopo</label>
        <input type="text" name="loan_purpose" value="<?= set_value('loan_purpose'); ?>" class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>
    </div>

    <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors mt-4">Hifadhi Maombi</button>

    <?= form_close(); ?>

  </div>

</body>
</html>
