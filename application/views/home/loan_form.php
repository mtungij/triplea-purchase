<!DOCTYPE html>
<html lang="sw">
<head>
  <meta charset="UTF-8">
  <title>Fomu ya Maombi ya Mkopo</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="max-w-5xl mx-auto bg-white shadow-lg p-8 rounded-lg mt-6">
  <h2 class="text-2xl font-bold mb-2 text-indigo-600 text-center">Fomu ya Maombi ya Mkopo</h2>

  <!-- WhatsApp Notice -->
  <p class="text-center text-green-600 font-bold mb-6 flex justify-center items-center gap-2">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="w-6 h-6">
    Kwa msaada zaidi, tuma WhatsApp: 
    <a href="https://wa.me/255786542628" target="_blank" class="underline text-blue-600 font-bold">255786542628</a>
  </p>

  <!-- Confirmation Message -->
  <div id="confirmation" class="hidden bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
    Maombi yako yamepokelewa kikamilifu!
  </div>

  <form id="loanForm" class="space-y-8">
    <!-- 1. Taarifa ya Mteja -->
    <div>
      <h3 class="text-lg font-semibold text-gray-700 mb-4">1. Taarifa ya Mteja</h3>
      <div class="grid grid-cols-3 gap-4">
        <div>
          <input type="text" id="jina_kwanza" name="jina_kwanza" placeholder="Jina la Kwanza" class="border rounded p-2 w-full">
          <p id="error_jina_kwanza" class="text-red-600 text-sm mt-1 hidden"></p>
        </div>
        <div>
          <input type="text" id="jina_kati" name="jina_kati" placeholder="Jina la Kati" class="border rounded p-2 w-full">
        </div>
        <div>
          <input type="text" id="jina_mwisho" name="jina_mwisho" placeholder="Jina la Mwisho" class="border rounded p-2 w-full">
        </div>
      </div>
      <input type="text" name="jina_maarufu" placeholder="Jina Maarufu" class="border rounded p-2 w-full mt-2">
      <input type="text" name="namba_kitambulisho" placeholder="Namba ya Kitambulisho" class="border rounded p-2 w-full mt-2">
      <input type="date" name="tarehe_kuzaliwa" class="border rounded p-2 w-full mt-2">
      <select name="jinsia" class="border rounded p-2 w-full mt-2">
        <option value="Mwanaume">Mwanaume</option>
        <option value="Mwanamke">Mwanamke</option>
      </select>
      <input type="text" name="hali_ndoa" placeholder="Hali ya Ndoa" class="border rounded p-2 w-full mt-2">
      <input type="number" name="idadi_watoto" placeholder="Idadi ya Watoto" class="border rounded p-2 w-full mt-2">
      <input type="number" name="idadi_wategemezi" placeholder="Idadi ya Wategemezi Wengine" class="border rounded p-2 w-full mt-2">
      <input type="text" name="jina_mwenza" placeholder="Jina la Mwenza" class="border rounded p-2 w-full mt-2">
      <input type="text" id="simu" name="simu" placeholder="Simu Mkononi" class="border rounded p-2 w-full mt-2">
      <p id="error_simu" class="text-red-600 text-sm mt-1 hidden"></p>
      <input type="text" name="elimu" placeholder="Kiwango cha Elimu" class="border rounded p-2 w-full mt-2">
      <input type="text" name="anuani_posta" placeholder="Anuani ya Posta" class="border rounded p-2 w-full mt-2">
      <input type="text" name="makazi_dumu" placeholder="Makazi ya Kudumu" class="border rounded p-2 w-full mt-2">
      <input type="text" name="anuani_biashara" placeholder="Anuani ya Biashara" class="border rounded p-2 w-full mt-2">
      <input type="text" name="shina_mjumbe" placeholder="Shina la Mjumbe" class="border rounded p-2 w-full mt-2">
      <input type="text" name="mtaa" placeholder="Mtaa" class="border rounded p-2 w-full mt-2">
      <input type="text" name="kata" placeholder="Kata" class="border rounded p-2 w-full mt-2">
    </div>

    <!-- 2. Taarifa ya Biashara -->
    <div>
      <h3 class="text-lg font-semibold text-gray-700 mb-4">2. Taarifa ya Biashara</h3>
      <input type="text" name="aina_biashara" placeholder="Aina ya Biashara" class="border rounded p-2 w-full">
      <input type="number" name="manunuzi_mwezi" placeholder="Manunuzi kwa Mwezi" class="border rounded p-2 w-full mt-2">
      <input type="number" name="mauzo_mwezi" placeholder="Mauzo kwa Mwezi" class="border rounded p-2 w-full mt-2">
      <input type="number" name="kodi_biashara" placeholder="Kodi ya Biashara" class="border rounded p-2 w-full mt-2">
      <input type="number" name="faida_mwezi" placeholder="Faida ya Mwezi" class="border rounded p-2 w-full mt-2">
      <input type="number" name="matumizi_familia" placeholder="Matumizi ya Familia" class="border rounded p-2 w-full mt-2">
      <input type="number" name="mapato_jumla" placeholder="Jumla ya Mapato" class="border rounded p-2 w-full mt-2">
      <input type="text" name="vyanzo_ziada" placeholder="Vyanzo vya Mapato ya Ziada" class="border rounded p-2 w-full mt-2">
      <input type="number" name="matumizi_jumla" placeholder="Jumla ya Matumizi" class="border rounded p-2 w-full mt-2">
    </div>

    <!-- 3. Lengo la Mkopo -->
    <div>
      <h3 class="text-lg font-semibold text-gray-700 mb-4">3. Lengo la Mkopo</h3>
      <input type="number" name="kiasi_mkopo" placeholder="Kiasi cha Mkopo Kinachoombwa" class="border rounded p-2 w-full">
      <textarea name="lengo_mkopo" placeholder="Lengo la Mkopo" class="border rounded p-2 w-full mt-2"></textarea>
    </div>

    <!-- 4. Taarifa za Ukopaji -->
    <div>
      <h3 class="text-lg font-semibold text-gray-700 mb-4">4. Taarifa za Ukopaji Taasisi Mbalimbali</h3>
      <input type="number" name="idadi_mikopo" placeholder="Idadi ya Mikopo Niliyopata" class="border rounded p-2 w-full">
      <textarea name="mikopo[0]" placeholder="Mikopo (kiasi, kampuni, tarehe...)" class="border rounded p-2 w-full mt-2"></textarea>
    </div>

    <!-- 5. Dhamana -->
    <div>
      <h3 class="text-lg font-semibold text-gray-700 mb-4">5. Dhamana</h3>
      <textarea name="dhamana[0]" placeholder="Aina ya Dhamana, Bei ya Kununua, Bei ya Soko, Bei ya Mnada" class="border rounded p-2 w-full"></textarea>
    </div>

    <!-- 6. Ndugu wa Karibu -->
    <div>
      <h3 class="text-lg font-semibold text-gray-700 mb-4">6. Ndugu wa Karibu</h3>
      <textarea name="ndugu[0]" placeholder="Jina Kamili, Mahusiano, Makazi, Mawasiliano" class="border rounded p-2 w-full"></textarea>
      <textarea name="ndugu[1]" placeholder="Jina Kamili, Mahusiano, Makazi, Mawasiliano" class="border rounded p-2 w-full mt-2"></textarea>
    </div>

    <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded-lg shadow hover:bg-indigo-700">
      Tuma Maombi
    </button>
  </form>
</div>

<!-- WhatsApp Floating Icon -->
<a href="https://wa.me/255786542628" target="_blank" class="fixed bottom-5 right-5 bg-green-500 p-4 rounded-full shadow-lg hover:bg-green-600 transition duration-300">
  <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" class="w-6 h-6" alt="WhatsApp">
</a>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('loanForm');
    const jinaKw = document.getElementById('jina_kwanza');
    const jinaKt = document.getElementById('jina_kati');
    const jinaMw = document.getElementById('jina_mwisho');
    const simu = document.getElementById('simu');
    const errorJinaKw = document.getElementById('error_jina_kwanza');
    const errorSimu = document.getElementById('error_simu');
    const confirmation = document.getElementById('confirmation');

    function isAlpha(str) { return /^[A-Za-z]+$/.test(str); }
    function isValidPhone(str) { return /^(?:0|255)[0-9]{8}$/.test(str); }

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        let valid = true;

        if (!isAlpha(jinaKw.value) || !isAlpha(jinaKt.value) || !isAlpha(jinaMw.value)) {
            errorJinaKw.textContent = 'Tafadhali ingiza jina sahihi (herufi tu).';
            errorJinaKw.classList.remove('hidden');
            valid = false;
        } else { errorJinaKw.classList.add('hidden'); }

        if (!isValidPhone(simu.value)) {
            errorSimu.textContent = 'Tafadhali ingiza namba sahihi ya simu (07xxxxxxxx au 2557xxxxxxxx).';
            errorSimu.classList.remove('hidden');
            valid = false;
        } else { errorSimu.classList.add('hidden'); }

        if (!valid) return;

        // AJAX submit
        fetch('<?= base_url("welcome/save") ?>', {
            method: 'POST',
            body: new FormData(form)
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                confirmation.classList.remove('hidden');
                form.reset();
                setTimeout(() => confirmation.classList.add('hidden'), 5000);
            } else if(data.errors) {
                if(data.errors.jina_kwanza) {
                    errorJinaKw.textContent = data.errors.jina_kwanza;
                    errorJinaKw.classList.remove('hidden');
                }
                if(data.errors.simu) {
                    errorSimu.textContent = data.errors.simu;
                    errorSimu.classList.remove('hidden');
                }
            }
        })
        .catch(err => console.error(err));
    });
});
</script>

</body>
</html>
