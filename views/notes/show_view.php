  <?php require('views/partials/head.php') ?>
  <?php require('views/partials/nav.php') ?>
  <?php require('views/partials/header.php') ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h4>
        <?= $note['titel'] ?>
      </h4>

      <div class="mt-4 mb-4 flex   justify-between items-center">
        <div>
          <a href="/notes" class=" text-gray-300 bg-green-600 hover:bg-green-500 hover:text-white rounded-md px-3 py-2 text-sm font-medium"> Go Back</a>
        </div>
        <div>
          <a href="/notes/edit?id=<?= $note['id'] ?>" class=" text-gray-300 bg-blue-600 hover:bg-blue-500 hover:text-white rounded-md px-3 py-2 text-sm font-medium"> Edit Note</a>
        </div>
        <div>
          <form action="" method="post">
            <input type="hidden" name= "_method" value="DELETE">
            <input type="hidden" name= "id" value="<?= $note['id'] ?>">
            <button type="submit" class=" text-gray-300 bg-red-600 hover:bg-red-500 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Delete</button>
          </form>
        </div>
      </div>

      <hr>
      <p class="mt-4">
        <?= htmlspecialchars($note['body']) ?>
      </p>


    </div>
  </main>
  <?php require('views/partials/footer.php') ?>