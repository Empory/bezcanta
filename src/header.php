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
        <i class="fa-solid fa-xl visible md:invisible fa-bars"></i>
        <img class="" src="<?php echo $page_logo;?>" height="100" width="100" alt="">
      </div>
      <div class="">
        <i class="fa-solid fa-xl fa-magnifying-glass"></i>
        <i class="fa-solid fa-xl fa-cart-shopping"></i>
      </div>  
    </div>
    <div class="w-52 border-2 cart hidden border-gray-200 z-50 p-5 absolute right-4 top-16 bg-white text-gray-300 ">
      <p>Alışveriş sepetinizde hiç ürün yok</p>
      <p>Alışveriş sepetinizde hiç ürün yok</p>
      <p>Alışveriş sepetinizde hiç ürün yok</p>
      <p>Alışveriş sepetinizde hiç ürün yok</p>
      <p>Alışveriş sepetinizde hiç ürün yok</p>
    </div>
    <input placeholder="Aranan kelimeyi buraya yazınız..."  type="text" class="border-gray-400 w-full m-2 p-2 outline-none delay-400 hidden  border-2  my-0 mx-auto visible md:invisible">
    
    <div class="bg-gray-200 visible md:invisible hidden fixed z-10 w-56  px-4 py-10 top-0 left-0 h-[80%] transform-gpu ease-in-out duration-1000 delay-1000 ">
      <div class="flex justify-between  items-center">
        <p>Filtrele</p>
        <i class="fa-regular fa-x"></i>
      </div>
      <ul class="flex flex-col">
        <li class="py-2 li w-full hover:bg-[rgb(176,210,53)]">
          ANASAYFA
        </li>
        <li class="py-2 li w-full flex justify-between items-center hover:bg-[rgb(176,210,53)]">
          BEZ ÇANTA <span class="text-3xl topla">+</span> <span class="text-3xl minus hidden">-</span>
        </li>
        <li class="py-2 li w-full flex justify-between items-center  hover:bg-[rgb(176,210,53)]">
           BEZ KESE <span class="text-3xl topla">+</span> <span class="text-3xl minus hidden">-</span>
        </li>
        <li class="py-2 li w-full flex justify-between items-center hover:bg-[rgb(176,210,53)]">
            PROMOSYON ÇANTA <span class="text-3xl topla">+</span> <span class="text-3xl minus hidden">-</span>
        </li>
      </ul>
    </div>
    <hr>
