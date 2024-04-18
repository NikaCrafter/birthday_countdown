

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday Timer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html,
        body {
            height: 100%;
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>

<body class="bg-gray-200 flex justify-center items-center ">
    <div class="bg-gray-200 shadow-md p-8 flex justify-center items-center " style="height: 90vh; width: 90vw ">
        <div class="bg-white h-[60vh] w-[60vw]rounded-tl-none rounded-tr-none rounded-br-3xl rounded-bl-none bg-white p-4" style="border-radius: 0 0 35% 0;">
            <div class="flex flex-col relative">
                <div class="flex p-4 justify-between p-4">
                    <label for=""><span class="opacity-[70]">Day</span></label>
                    <label for=""><span class="opacity-[70]">Month</span></label>
                    <label for=""><span class="opacity-[70]">Year</span></label>
                </div>
                <form action="index.php" method="get">
                <div class="flex p-4 opacity-[70]">
                    <input type="number" placeholder="DD" id="day" class="border px-2 font-bold mx-2" max="30">
                    <input type="number" placeholder="MM" id="month" class="border p-4 font-bold mx-2" max="12">
                    <input type="number" placeholder="YYYY" id="year" class="border p-4 font-bold mx-2">
                </div>
                <button type="submit" class="absolute top-[30%] left-[80%] rounded-full bg-pink-500 text-white p-2 w-[7rem] h-[7rem] flex items-center justify-center hover:bg-black">
                    <i class="fa-solid fa-arrow-down text-white text-xl"></i>
                </button>
                </form>
                <div class="text-9xl mt-8">
                    <h1><span class="text-[#8550ED] ">0</span>Years</h1>
                    <h1><span class="text-[#8550ED] text-9xl">0</span>Months</h1>
                    <h1><span class="text-[#8550ED] text-9xl">0</span>Days</h1>
                </div>
            </div>

        </div>

    </div>
</body>

</html>