
<?php require("header.php")?>



    <!-- Implement the carousel -->
    
    <div class="relative w-[100%] my-2 mx-auto">
        <div class="slide relative">
            <img class="w-full h-[300px] object-cover"
                src="https://www.kindacode.com/wp-content/uploads/2022/07/flower-1.jpeg">
        </div>

        <div class="slide relative">
            <img class="w-full h-[300px] object-cover"
                src="https://www.kindacode.com/wp-content/uploads/2022/07/flower-2.jpeg">
        </div>

        <div class="slide relative">
            <img class="w-full h-[300px] object-cover"
                src="https://www.kindacode.com/wp-content/uploads/2022/07/flower-3.jpeg">
            </div>
        </div>

        <!-- The previous button -->
        <a class="absolute top-1/3 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
            onclick="moveSlide(-1)">❮</a>

        <!-- The next button -->
        <a class="absolute right-4 top-1/3 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
            onclick="moveSlide(1)">❯</a>

    </div>
    <br>

    <!-- The dots -->
    <div class="flex absolute top-[53%] left-0 right-0 justify-center items-center space-x-5">
        <div class="dot w-3 h-3 rounded-full cursor-pointer" onclick="currentSlide(1)"></div>
        <div class="dot w-3 h-3 rounded-full cursor-pointer" onclick="currentSlide(2)"></div>
        <div class="dot w-3 h-3 rounded-full cursor-pointer" onclick="currentSlide(3)"></div>
    </div>

    <!-- Javascript code -->
    
<?php require("footer.php")?>