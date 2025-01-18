  <?php require('views/partials/head.php') ?>
  <?php require('views/partials/nav.php') ?>
  <?php require('views/partials/header.php') ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">


      <?php foreach ($notes as $note): ?>
        <li>
          <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
            <?= $note['titel'] ?>
          </a>
        </li>
      <?php endforeach; ?>
      <div class="m-4">
      <a href="/notes/Create" class=" text-gray-100 bg-green-600 hover:bg-green-500 hover:text-white rounded-md px-3 py-2 text-sm font-medium"> Creat Note</a>
      </div>

    </div>
  </main>
  <?php require('views/partials/footer.php') ?>