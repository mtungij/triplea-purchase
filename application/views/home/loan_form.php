<!DOCTYPE html>
<html lang="sw">
<head>
  <meta charset="UTF-8">
  <title>Fomu ya Maombi ya Mkopo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="max-w-5xl mx-auto bg-white shadow-lg p-4 sm:p-6 md:p-8 rounded-lg mt-6">
  <h2 class="text-2xl font-bold mb-4 text-indigo-600 text-center">Fomu ya Maombi ya Mkopo</h2>

  <!-- WhatsApp Notice -->
  <p class="text-center text-green-600 font-bold mb-6 flex flex-col sm:flex-row justify-center items-center gap-2 text-sm sm:text-base">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="w-6 h-6">
    Kwa msaada zaidi, tuma WhatsApp: 
    <a href="https://wa.me/255786542628" target="_blank" class="underline text-blue-600 font-bold">255786542628</a>
  </p>

  <?php if($this->session->flashdata('success')): ?>
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4 text-sm sm:text-base">
      <?= $this->session->flashdata('success'); ?>
    </div>
  <?php endif; ?>

  <form method="post" action="<?= base_url('welcome/save'); ?>" class="space-y-6">
    
    <!-- 1. Taarifa ya Mteja -->
    <div>
      <h3 class="text-lg font-semibold text-gray-700 mb-2">1. Taarifa ya Mteja</h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <div>
          <input type="text" name="jina_kwanza" placeholder="Jina la Kwanza" class="border rounded p-2 w-full" value="<?= set_value('jina_kwanza'); ?>">
          <?= form_error('jina_kwanza','<p class="text-red-600 text-sm mt-1">','</p>'); ?>
        </div>
        <div>
          <input type="text" name="jina_kati" placeholder="Jina la Kati" class="border rounded p-2 w-full" value="<?= set_value('jina_kati'); ?>">
          <?= form_error('jina_kati','<p class="text-red-600 text-sm mt-1">','</p>'); ?>
        </div>
        <div>
          <input type="text" name="jina_mwisho" placeholder="Jina la Mwisho" class="border rounded p-2 w-full" value="<?= set_value('jina_mwisho'); ?>">
          <?= form_error('jina_mwisho','<p class="text-red-600 text-sm mt-1">','</p>'); ?>
        </div>
      </div>

      <input type="text" name="jina_maarufu" placeholder="Jina Maarufu" class="border rounded p-2 w-full mt-2" value="<?= set_value('jina_maarufu'); ?>">
      <input type="text" name="namba_kitambulisho" placeholder="Namba ya Kitambulisho" class="border rounded p-2 w-full mt-2" value="<?= set_value('namba_kitambulisho'); ?>">
      <input type="date" name="tarehe_kuzaliwa" class="border rounded p-2 w-full mt-2" value="<?= set_value('tarehe_kuzaliwa'); ?>">

      <select name="jinsia" class="border rounded p-2 w-full mt-2">
        <option value="Mwanaume" <?= set_select('jinsia','Mwanaume'); ?>>Mwanaume</option>
        <option value="Mwanamke" <?= set_select('jinsia','Mwanamke'); ?>>Mwanamke</option>
      </select>

      <input type="text" name="hali_ndoa" placeholder="Hali ya Ndoa" class="border rounded p-2 w-full mt-2" value="<?= set_value('hali_ndoa'); ?>">
      <input type="number" name="idadi_watoto" placeholder="Idadi ya Watoto" class="border rounded p-2 w-full mt-2" value="<?= set_value('idadi_watoto'); ?>">
      <input type="number" name="idadi_wategemezi" placeholder="Idadi ya Wategemezi Wengine" class="border rounded p-2 w-full mt-2" value="<?= set_value('idadi_wategemezi'); ?>">
      <input type="text" name="jina_mwenza" placeholder="Jina la Mwenza" class="border rounded p-2 w-full mt-2" value="<?= set_value('jina_mwenza'); ?>">

      <input type="text" name="simu" placeholder="Simu Mkononi" class="border rounded p-2 w-full mt-2" value="<?= set_value('simu'); ?>">
      <?= form_error('simu','<p class="text-red-600 text-sm mt-1">','</p>'); ?>

      <input type="text" name="elimu" placeholder="Kiwango cha Elimu" class="border rounded p-2 w-full mt-2" value="<?= set_value('elimu'); ?>">
      <input type="text" name="anuani_posta" placeholder="Anuani ya Posta" class="border rounded p-2 w-full mt-2" value="<?= set_value('anuani_posta'); ?>">
      <input type="text" name="makazi_dumu" placeholder="Makazi ya Kudumu" class="border rounded p-2 w-full mt-2" value="<?= set_value('makazi_dumu'); ?>">
      <input type="text" name="anuani_biashara" placeholder="Anuani ya Biashara" class="border rounded p-2 w-full mt-2" value="<?= set_value('anuani_biashara'); ?>">
      <input type="text" name="shina_mjumbe" placeholder="Shina la Mjumbe" class="border rounded p-2 w-full mt-2" value="<?= set_value('shina_mjumbe'); ?>">
      <input type="text" name="mtaa" placeholder="Mtaa" class="border rounded p-2 w-full mt-2" value="<?= set_value('mtaa'); ?>">
      <input type="text" name="kata" placeholder="Kata" class="border rounded p-2 w-full mt-2" value="<?= set_value('kata'); ?>">

      <div class="flex items-center mt-4">
        <input type="checkbox" name="uthibitisho" value="1" id="uthibitisho" <?= set_checkbox('uthibitisho','1'); ?>>
        <label for="uthibitisho" class="ml-2 text-gray-700">Nimehakikisha taarifa zote nilizojaza ni sahihi</label>
      </div>
      <?= form_error('uthibitisho','<p class="text-red-600 text-sm mt-1">','</p>'); ?>
    </div>

    <!-- 2. Taarifa ya Biashara -->
    <div>
      <h3 class="text-lg font-semibold text-gray-700 mb-2">2. Taarifa ya Biashara</h3>
      <input type="text" name="aina_biashara" placeholder="Aina ya Biashara" class="border rounded p-2 w-full" value="<?= set_value('aina_biashara'); ?>">
      <?= form_error('aina_biashara','<p class="text-red-600 text-sm mt-1">','</p>'); ?>
      <input type="number" name="manunuzi_mwezi" placeholder="Manunuzi kwa Mwezi" class="border rounded p-2 w-full mt-2" value="<?= set_value('manunuzi_mwezi'); ?>">
      <?= form_error('manunuzi_mwezi','<p class="text-red-600 text-sm mt-1">','</p>'); ?>
      <input type="number" name="mauzo_mwezi" placeholder="Mauzo kwa Mwezi" class="border rounded p-2 w-full mt-2" value="<?= set_value('mauzo_mwezi'); ?>">
      <?= form_error('mauzo_mwezi','<p class="text-red-600 text-sm mt-1">','</p>'); ?>
      <input type="number" name="faida_mwezi" placeholder="Faida ya Mwezi" class="border rounded p-2 w-full mt-2" value="<?= set_value('faida_mwezi'); ?>">
      <?= form_error('faida_mwezi','<p class="text-red-600 text-sm mt-1">','</p>'); ?>
    </div>

    <!-- 3. Lengo la Mkopo -->
    <div>
      <h3 class="text-lg font-semibold text-gray-700 mb-2">3. Lengo la Mkopo</h3>
      <input type="number" name="kiasi_mkopo" placeholder="Kiasi cha Mkopo Kinachoombwa" class="border rounded p-2 w-full" value="<?= set_value('kiasi_mkopo'); ?>">
      <?= form_error('kiasi_mkopo','<p class="text-red-600 text-sm mt-1">','</p>'); ?>
      <textarea name="lengo_mkopo" placeholder="Lengo la Mkopo" class="border rounded p-2 w-full mt-2"><?= set_value('lengo_mkopo'); ?></textarea>
      <?= form_error('lengo_mkopo','<p class="text-red-600 text-sm mt-1">','</p>'); ?>
    </div>

    <!-- Submit -->
    <button type="submit" class="w-full sm:w-auto bg-indigo-600 text-white px-6 py-2 rounded-lg shadow hover:bg-indigo-700 mt-4">
      Tuma Maombi
    </button>
  </form>
</div>

</body>
</html>
