<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday Timer</title>
    <link rel="stylesheet" href="style.css"> 
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html, body {
            height: 100%;
        }
    </style>
</head>
<body class="bg-gray-200 flex justify-center items-center ">
    <div class="bg-gray-200 border border-red-600 shadow-md p-8 flex justify-center items-center " style="height: 90vh; width: 90vw ">
    <div class="bg-white" style="background-color:white; height: 60vh; width:60vw; border-radius: 0 0 50% 0;">
    <div class="flex" style="flex-direction: column"> <!-- Added flex-col class here -->
        <div class="flex p-4 m-12">
            <label for="">Day</label>
            <label for="">Month</label>
            <label for="">Year</label>
        </div>
        <div class="flex">
            <input type="text" value="10" class="border p-4">
            <input type="text" value="11" class="border p-4">
            <input type="text" value="1984" class="border p-4">
        </div>
    </div>
</div>

    </div>
</body>
</html>