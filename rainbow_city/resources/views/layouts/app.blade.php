<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/index.css" />

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>{{$title ?? 'Rainbow City'}}</title>
</head>
<body class="bg-gradient-to-t from-sky-600 to-sky-300">
    <div class="flex flex-col justify-between min-h-screen h-full">

      
        @include('layouts.header')
        {{-- <div class="flex justify-between w-[60%] mx-auto ">
            <a href="/" class="hover:text-white duration-200 font-bold">Accueil</a>
            <nav class="w-fit space-x-8">
                <a href="/bibou" class="hover:text-white duration-200" >Presentation</a>
                <a href="/a-propos" class="hover:text-white duration-200">A propos</a>
                <a href="/categories" class="hover:text-white duration-200">Catégories</a>
                <a href="/films" class="hover:text-white duration-200">Films</a>
            </nav>
        </div> --}}
    

         {{-- MAIN --}}
        <main class="mt-8 mb-auto w-[80%] mx-auto">
            @yield('content')
        </main>

        {{-- FOOTER --}}
        @include('layouts.footer')

    </div>

</body>
</html>