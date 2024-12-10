<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="min-h-screen bg-space-gradient text-white relative overflow-auto">

    <!-- Stars Layer -->
    <div class="absolute inset-0 overflow-hidden">
      <div class="absolute w-1 h-1 bg-white rounded-full opacity-70 animate-stars-twinkle" style="top: 10%; left: 20%;"></div>
      <div class="absolute w-1 h-1 bg-blue-300 rounded-full opacity-70 animate-stars-twinkle" style="top: 50%; left: 40%;"></div>
      <div class="absolute w-1 h-1 bg-purple-400 rounded-full opacity-70 animate-stars-twinkle" style="top: 70%; left: 60%;"></div>
      <div class="absolute w-1 h-1 bg-pink-500 rounded-full opacity-70 animate-stars-twinkle" style="top: 30%; left: 80%;"></div>
      <div class="absolute w-1 h-1 bg-yellow-300 rounded-full opacity-70 animate-stars-twinkle" style="top: 80%; left: 25%;"></div>
    </div>

    <body class="relative min-h-screen bg-gradient-to-br from-purple-800 via-indigo-500 to-black overflow-auto text-white">
    <nav class=" flex p-4 backdrop-blur-md bg-transparent text-white justify-between sticky top-0 drop-shadow-md">
        <div>
            <h1 class="text-lg font-bold">MaaSelf</h1>
        </div>
        <div >
            <ul class="flex">
                <li><a class="mx-4" href="#">home</a></li>
                <li><a class="mx-4" href="#">bout</a></li>
            </ul>
        </div>
    </nav>
    <div class="flex  justify-between">
        <div class=" p-20 justify-center items-center h-screen">
            <div class="ml-20">
                <h2 class="text-3xl "> <span class=" font-bold ">HELLO!</span> SAYA <span class=" underline decoration-pink-500">DAFFA RIZQULOH</span></h2>
                <h5 class="text">Programer Muda</h5>
            </div>
            
        </div>
        <div class=" my-10 justify-center items-center">
            <img src="{{ asset('images/20241124_081556.jpg') }}" alt="Example"  class=" mr-48 h-96 w-auto rounded shadow-lg">
          </div>          
    </div>
     <div>
        
     </div>
</body>
</html>