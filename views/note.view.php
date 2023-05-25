<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Notes Project</title>
</head>
<body>
  <?php require('partials/nav.php') ?> 
  <main class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p class='mb-6'>
      <a href="/notes" class='text-blue-500 underline'>Go Back</a>
    </p>
     <p><?= $note['body'] ?></p> 
  </main>
</body>
</html>