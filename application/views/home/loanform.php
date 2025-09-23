<!DOCTYPE html>
<html lang="sw">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fomu ya Maombi ya Mkopo</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
    }

    /* Background */
    .background-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: -1;
    }

    .background-container img,
    .background-container video {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .background-container::after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.55);
    }

    /* Blurred form */
    .form-container {
      position: relative;
      z-index: 10;
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(15px);
      -webkit-backdrop-filter: blur(15px);
      border-radius: 1rem;
      padding: 2rem;
      max-width: 5xl;
      margin: 2rem auto;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
    }

    .whatsapp-btn {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #25D366;
      color: white;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
      transition: transform 0.2s;
      z-index: 20;
    }

    .whatsapp-btn:hover {
      transform: scale(1.1);
    }

    @media (max-width: 640px) {
      .form-container { padding: 1rem; margin: 1rem; }
    }
  </style>
</head>
<body>

  <!-- Background -->
  <div class="background-container">
    <img src="https://i.gifer.com/7efs.gif" alt="Background">
  </div>

  <!-- WhatsApp Floating Button -->
  <a href="https://wa.me/255786542628" target="_blank" class="whatsapp-btn">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-7 w-7" viewBox="0 0 24 24">
      <path d="M16.7 11.1c-.2-.1-1.2-.6-1.4-.7-.2-.1-.3-.1-.5.1-.2.2-.8.7-1 .8-.2.1-.3.1-.5-.1-.2-.2-.8-1-1-.8-.2.1-.4.1-.5.2-.1.1-.5.8-.5.9s.6 1.4 1.4 1.9c.8.5 1.5.6 1.7.7.2.1.3.1.5-.1.2-.2.8-.7 1-.8.2-.1.3-.1.5.1.2.2.8 1 1 .8.2-.1.4-.1.5-.2.1-.1.5-.8.5-.9s-.6-1.4-1.4-1.9z"/>
      <path d="M12 2C6.5 2 2 6.5 2 12c0 1.8.5 3.5 1.5 5l-1.6 5.8 6-1.6c1.5.9 3.1 1.4 4.8 1.4 5.5 0 10-4.5 10-10S17.5 2 12 2zm0 18c-1.5 0-2.9-.5-4-1.4l-3.6 1 .9-3.6C4.5 15 4 13.5 4 12c0-4.4 3.6-8 8-8s8 3.6 8 8-3.6 8-8 8z"/>
    </svg>
  </a>

  <!-- Form -->
  <div class="form-container text-white">

    <h2 class="text-3xl font-semibold mb-6 text-center">Fomu ya Maombi ya Mkopo</h2>

    <?= validation_errors('<div class="text-red-400 mb-4">','</div>'); ?>
    <?= form_open('welcome/store'); ?>

    <!-- Step 1: Personal Info -->
    <h3 class="text-xl font-semibold mb-4 border-b border-white pb-2">1. TAARIFA BINAFSI ZA MKOPAJI</h3>
    <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 mb-4">
      <input type="text" name="first_name" placeholder="Jina la Kwanza *" value="<?= set_value('first_name'); ?>" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
      <input type="text" name="middle_name" placeholder="Jina la Kati" value="<?= set_value('middle_name'); ?>" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
      <input type="text" name="last_name" placeholder="Jina la Mwisho *" value="<?= set_value('last_name'); ?>" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
    </div>

    <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 mb-6">
      <input type="text" name="phone" placeholder="Simu *" value="<?= set_value('phone'); ?>" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
      <input type="number" name="children_count" placeholder="Idadi ya Watoto" value="<?= set_value('children_count'); ?>" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
      <input type="number" name="dependents_count" placeholder="Idadi ya Wategemezi" value="<?= set_value('dependents_count'); ?>" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
      <input type="date" name="dob" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
      <select name="gender" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
        <option value="">-- Chagua Jinsia --</option>
        <option value="mume" <?= set_value('gender') == 'mume' ? 'selected' : '' ?>>Mume</option>
        <option value="mke" <?= set_value('gender') == 'mke' ? 'selected' : '' ?>>Mke</option>
      </select>
      <input type="text" name="education_level" placeholder="Kiwango cha Elimu" value="<?= set_value('education_level'); ?>" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
    </div>

    <!-- Step 2: Business Info -->
    <h3 class="text-xl font-semibold mb-4 border-b border-white pb-2 mt-6">2. TAARIFA ZA BIASHARA/KAZI</h3>
    <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 mb-6">
      <div>
        <label class="font-semibold text-white">Eneo la Biashara/Kazi</label>
        <input type="text" name="business_location" value="<?= set_value('business_location'); ?>" class="w-full p-2 rounded focus:ring-2 focus:ring-blue-400 focus:outline-none text-black">
      </div>
      <div>
        <label class="font-semibold text-white">Aina ya Biashara/Kazi</label>
        <input type="text" name="business_type" value="<?= set_value('business_type'); ?>" class="w-full p-2 rounded focus:ring-2 focus:ring-blue-400 focus:outline-none text-black">
      </div>
      <div>
        <label class="font-semibold text-white">Sector Ya uchumi</label>
        <input type="text" name="business_sector" value="<?= set_value('business_sector'); ?>" class="w-full p-2 rounded focus:ring-2 focus:ring-blue-400 focus:outline-none text-black">
      </div>
      <div>
        <label class="font-semibold text-white">Kipato cha Sasa</label>
        <input type="number" name="current_income" value="<?= set_value('current_income'); ?>" class="w-full p-2 rounded focus:ring-2 focus:ring-blue-400 focus:outline-none text-black">
      </div>
      <div>
        <label class="font-semibold text-white">Matumizi Ya Mwezi</label>
        <input type="number" name="monthly_expenses" value="<?= set_value('monthly_expenses'); ?>" class="w-full p-2 rounded focus:ring-2 focus:ring-blue-400 focus:outline-none text-black">
      </div>
      <div>
        <label class="font-semibold text-white">Dhamana za Mkopo</label>
        <textarea name="my_investment" rows="3" class="w-full p-2 rounded focus:ring-2 focus:ring-blue-400 focus:outline-none text-black"><?= set_value('my_investment'); ?></textarea>
      </div>
    </div>

      <h3 class="text-xl font-semibold mb-4 border-b border-white pb-2 mt-6">3. TAARIFA ZA MAOMBI YA MKOPO</h3>
    <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 mb-6">
      <div>
        <label class="font-semibold text-white">KIASI CHA MKOPO KINACHOOMBWA</label>
        <input type="text" name="amount_requested" value="<?= set_value('amount_requested'); ?>" class="w-full p-2 rounded focus:ring-2 focus:ring-blue-400 focus:outline-none text-black">
      </div>
      <div>
        <label class="font-semibold text-white">Lengo la Mkopo</label>
        <input type="text" name="loan_purpose" value="<?= set_value('loan_purpose'); ?>" class="w-full p-2 rounded focus:ring-2 focus:ring-blue-400 focus:outline-none text-black">
      </div>
    <div>
        <label class="font-semibold text-white">Dhamana za Mkopo Unaoombwa</label>
        <textarea name="loan_collateral" rows="3" class="w-full p-2 rounded focus:ring-2 focus:ring-blue-400 focus:outline-none text-black"><?= set_value('loan_collateral'); ?></textarea>
      </div>
     
    </div>

    <!-- Step 3: Loan Section -->
    <h3 class="text-xl font-semibold mb-4 border-b border-white pb-2">3. TAARIFA ZA MIKOPO KWENYE TAASISI ZINGINE</h3>
    <div id="loans-wrapper" class="space-y-4">
      <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-4 mb-4 loan-item p-4 rounded-lg bg-white bg-opacity-25">
        <input type="text" name="loans[0][count]" placeholder="Idadi Ya Mikopo" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
        <input type="text" name="loans[0][company]" placeholder="Kampuni" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
        <input type="number" name="loans[0][amount]" placeholder="Kiasi Ulichukua" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
        <input type="date" name="loans[0][end_date]" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
      </div>
    </div>
    <div class="flex gap-4 mt-2">
      <button type="button" onclick="addLoan()" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">Ongeza Mkopo</button>
      <button type="button" onclick="removeLoan()" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">Ondoa Mkopo</button>
    </div>

    <!-- Step 4: Kin Section -->
    <h3 class="text-xl font-semibold mb-4 border-b border-white pb-2 mt-6">4. TAARIFA ZA MTU WA KARIBU</h3>
    <div id="kin-wrapper" class="space-y-4">
      <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-4 mb-4 kin-item p-4 rounded-lg bg-white bg-opacity-25">
        <input type="text" name="kins[0][name]" placeholder="Jina Kamili" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
        <input type="text" name="kins[0][phone]" placeholder="Namba ya Simu" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
        <input type="text" name="kins[0][relation]" placeholder="Uhusiano na Mteja" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
        <input type="text" name="kins[0][residence]" placeholder="Makazi Yake" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
      </div>
    </div>
    <div class="flex gap-4 mt-2">
      <button type="button" onclick="addKin()" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">Ongeza Mtu</button>
      <button type="button" onclick="removeKin()" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">Ondoa Mtu</button>
    </div>

    <!-- Agreement -->
    <div class="mt-5">
      <label class="font-bold text-red-600 flex items-start gap-2">
        <input type="checkbox" id="agreement" class="mt-1" required>
        Nakubali wakati wowote mkopeshaji anaweza kutoa taarifa zangu za mkopo kwa mtu mwingine au Credit Reference Bureu iwapo itaonekana ni lazima katika kufanya tathmini ya mkopo
      </label>
    </div>

    <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 w-full mt-4">Hifadhi Maombi</button>

    <?= form_close(); ?>
  </div>

  <script>
    // Dynamic Loans
    let loanIndex = 1;
    function addLoan() {
      const wrapper = document.getElementById('loans-wrapper');
      const newItem = document.createElement('div');
      newItem.classList.add('grid','gap-4','sm:grid-cols-2','md:grid-cols-4','mb-4','loan-item','p-4','rounded-lg','bg-white','bg-opacity-25');
      newItem.innerHTML = `
        <input type="text" name="loans[${loanIndex}][count]" placeholder="Idadi Ya Mikopo" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
        <input type="text" name="loans[${loanIndex}][company]" placeholder="Kampuni" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
        <input type="number" name="loans[${loanIndex}][amount]" placeholder="Kiasi Ulichukua" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
        <input type="date" name="loans[${loanIndex}][end_date]" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
      `;
      wrapper.appendChild(newItem);
      loanIndex++;
    }
    function removeLoan() {
      const wrapper = document.getElementById('loans-wrapper');
      if(wrapper.children.length > 1) wrapper.removeChild(wrapper.lastChild);
    }

    // Dynamic Kins
    let kinIndex = 1;
    function addKin() {
      const wrapper = document.getElementById('kin-wrapper');
      const newItem = document.createElement('div');
      newItem.classList.add('grid','gap-4','sm:grid-cols-2','md:grid-cols-4','mb-4','kin-item','p-4','rounded-lg','bg-white','bg-opacity-25');
      newItem.innerHTML = `
        <input type="text" name="kins[${kinIndex}][name]" placeholder="Jina Kamili" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
        <input type="text" name="kins[${kinIndex}][phone]" placeholder="Namba ya Simu" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
        <input type="text" name="kins[${kinIndex}][relation]" placeholder="Uhusiano na Mteja" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
        <input type="text" name="kins[${kinIndex}][residence]" placeholder="Makazi Yake" class="p-2 rounded w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
      `;
      wrapper.appendChild(newItem);
      kinIndex++;
    }
    function removeKin() {
      const wrapper = document.getElementById('kin-wrapper');
      if(wrapper.children.length > 1) wrapper.removeChild(wrapper.lastChild);
    }
  </script>

</body>
</html>
