  <?php require('views/partials/head.php') ?>
  <?php require('views/partials/nav.php') ?>
  <?php require('views/partials/header.php') ?>
 
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <form  method="post">
        <fieldset>



          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="col-span-full">
              <label for="titel" class="block text-sm/6 font-medium text-gray-900">Note Titel</label>
              <div class="mt-2">
                <div class="mt-2">
                  <textarea name="titel" id="titel" rows="1" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"> <?= $_POST["titel"] ?? "" ?></textarea>
                </div>
              </div>
            </div>
          </div>


          <div class="col-span-full">
            <label for="body" class="block text-sm/6 font-medium text-gray-900">body</label>
            <div class="mt-2">
              <textarea name="body" id="body" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"> <?= $_POST["body"] ?? "" ?></textarea>
            </div>
          </div>
          <label for="titel" class="text-red-500 text-sm">
            <?= $errors["titel"] ?? " " ?>
          </label>

          <div class="pt-4">
            <button type="submit" class="text-gray-100 bg-green-600 hover:bg-green-500 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Submit</button>
          </div>
        </fieldset>





      </form>

    </div>
  </main>
  <?php require('views/partials/footer.php') ?>