<?php require("dynamic.php")?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title> <?php echo $page_title; ?> </title>
</head>
<body>
  <div class="p-4">
    <div class="flex pb-4 justify-between items-center">
      <div class="flex gap-4 items-center ">
        <i class="fa-solid fa-xl fa-bars"></i>
        <img class="" src="<?php echo $page_logo;?>" height="100" width="100" alt="">
      </div>
      <div class="">
        <i class="fa-solid fa-xl fa-magnifying-glass"></i>
        <i class="fa-solid fa-xl fa-cart-shopping"></i>
      </div>  
    </div>
    <div class="bg-gray-200 hidden absolute p-10 top-0 -left-64 translate-x-60 transition-transform ease-in-out duration-1000 delay-1000 ">
      <div class="flex justify-between  items-center">
        <p>Filtrele</p>
        <i class="fa-regular fa-x"></i>
      </div>
      <ul class="flex flex-col">
        <li class="pt-5">
          ANASAYFA
        </li>
        <li class="pt-5">
          BEZ ÇANTA
        </li>
        <li class="pt-5">
           BEZ KESE 
        </li>
        <li class="pt-5">
            PROMOSYON ÇANTA
        </li>
      </ul>
    </div>
    <hr>
