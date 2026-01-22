<?php
$blogs = [
  [
    "title" => "New Construction technology awarness.",
    "desc" => "Elinor her his secure far twenty eat object. Late any far saw size want man. Which way you wrong add shall one. As guest right of he scale these. Horses nearer oh elinor of denote.",
    "image" => "assets/constructionawareness.png",
    "link" => "#"
  ],
  [
    "title" => "Best Construction techniques.",
    "desc" => "",
    "image" => "assets/bestconstructiontech.png",
    "link" => "#"
  ],
  [
    "title" => "Building your dreams with quality material.",
    "desc" => "",
    "image" => "assets/buildingyourdreams.png",
    "link" => "#"
  ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latest News</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
        @font-face {
            font-family: 'Neutrif Pro';
            src: url('assets/font/NeutrifPro-Regular.woff2') format('woff2'),
                url('assets/font/NeutrifPro-Regular.woff') format('woff');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Neutrif Pro';
            src: url('assets/font/NeutrifPro-Bold.woff2') format('woff2'),
                url('assets/font/NeutrifPro-Bold.woff') format('woff');
            font-weight: 700;
            font-style: normal;
            font-display: swap;
        }

        body {
            font-family: 'Neutrif Pro', sans-serif;
        }
</style>

</head>

<body class="bg-white">

<section class="max-w-7xl mx-auto px-4 py-20">
  
  <h2 class="text-3xl font-bold text-center mb-12">
    Latest News
  </h2>

  <!-- Cards -->
  <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4 md:grid-cols-3">
    
    <?php foreach ($blogs as $index => $blog): ?>
      <div class="<?= $index === 0 ? 'lg:col-span-2' : '' ?>">
        <div class="bg-white rounded-xl overflow-hidden transition h-full flex flex-col">
          
          <!-- Image -->
          <img 
            src="<?= $blog['image'] ?>" 
            class="w-full h-56 object-cover rounded-md"
            alt="Blog image"
          >

          <!-- Content -->
          <div class="p-5">
            <h3 class="text-lg font-semibold mb-2">
              <?= $blog['title'] ?>
            </h3>

            <?php if ($blog['desc']): ?>
              <p class="text-gray-600 text-sm mb-4">
                <?= $blog['desc'] ?>
              </p>
            <?php endif; ?>


            <?php if ($index != 0): ?>
              <a href="<?= $blog['link'] ?>" class="text-[#00B7C3] text-sm font-medium underline">
              Read More
            </a>
            <?php endif; ?>

            
          </div>
        </div>
      </div>
    <?php endforeach; ?>

  </div>

  <!-- Button -->
  <div class="text-center mt-12">
    <a href="#" class="inline-block bg-[#00B7C3] text-white px-6 py-3 rounded-lg hover:bg-teal-400 transition">
      View All Blogs
    </a>
  </div>

</section>

</body>
</html>
