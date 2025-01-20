   <?php require('partials/head.php') ?>
  <?php require('partials/nav.php') ?>
  <?php require('partials/header.php') ?>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1>hello ,<?= $_SESSION['user']['email'] ?? 'no' ?> welcome home</h1>

      
    </div>
  </main>
  <?php require('partials/footer.php') ?> 