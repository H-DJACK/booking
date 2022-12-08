<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Fenix') }}</title>

    @vite(['resources/css/app.css'])
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">

    <link rel="stylesheet" href="css/app.css">
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
    </style>
            <style>
                body {
                    font-family: 'Nunito', sans-serif;
                }
    
                h1{
                    font-family: 'Open Sans';
                }
    
              .brand {
                    font-family: 'Poppins';
                    font-size: 75px;
                   
                }
    
            .padding {
                    padding-left: 150px;
                    padding-right: 150px;
                }
            .padding-about {
                    padding-left: 100px;
                    padding-right: 100px;
                }
            .bg{
                background: rgba(255, 255, 255, 0.95)
            }
    
            .slick-slider-dots{
                position: absolute;
                bottom: 0px;
                left: 50%;
                transform: translateX(-50%);
                display: flex;
            }
    
            .dropdown-menu li {
                position: relative;
            }
            .dropdown-menu .dropdown-submenu {
                display: none;
                position: absolute;
                left: 100%;
                top: -7px;
            }
            .dropdown-menu .dropdown-submenu-left {
                right: 100%;
                left: auto;
            }
            .dropdown-menu > li:hover > .dropdown-submenu {
                display: block;
            }
    
    
    
    </style>

    <style>
        @media (min-width: 1337px) {
            .nav-items {
                display: flex;
            }
            .login-btn {
                display: flex;
            }
            .hamburger{
                display: none ;
            }
        }

        @media (max-width: 1337px) {
            .hamburger{
                display: flex;
            }
        }


        
    </style>
</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="flex justify-between items-center mx-auto w-full bg" style="width: 80%">
                <div class="flex items-center">
                    <img src="img/logo.png" width="80" height="130" alt="logo" />
                    <small class="text-xl">Fénix sarl</small>
                </div>

                <div id="openBackdrop" class="hamburger cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </div>

                <div id="backdrop" style="position: absolute; width: 90%; height: 100vh; top: 0%; background:rgba(0, 0, 0, 0.932)">
                    <div id="closeBackdrop" class="text-white text-7xl" style="display: flex; justify-content:flex-end; padding: 10px;" >
                        X
                    </div>
                    <ul class="flex items-center justify-center text-slate-500 flex-col" style="margin-top:  100px; ">
                        <li class="@if (Route::has('/')) border-b-2 border-yellow-500 @else hover:text-slate-600 @endif ">
                            <a href="/" style="font-size: 20px;">Accueil</a>
                        </li>
                        <li class="@if (Route::has('/authors')) border-b-2 border-yellow-500 @else hover:text-slate-600 @endif">
                            <a href="/authors" style="font-size: 20px;">Auteurs</a>
                        </li>
                        <li class="@if (Route::has('/')) border-b-2 border-yellow-500 @else hover:text-slate-600 @endif">
                            <a href="/publications" style="font-size: 20px;">Publications</a>
                        </li>
                        <li class="hover:text-slate-600">
                            <a href="/paraitre" style="font-size: 20px;">A paraitre</a>
                        </li>
                        <li class="@if (Route::has('/events')) border-b-2 border-yellow-500 @else hover:text-slate-600 @endif">
                            <a href="/events" style="font-size: 20px;">Evenement</a>
                        </li>
                        <li class="@if (Route::has('/books')) border-b-2 border-yellow-500 @else hover:text-slate-600 @endif">
                            <a href="/books" style="font-size: 20px;">Librairie</a>
                        </li>
                        <li class="hover:text-slate-600">
                            <a href="#" style="font-size: 20px;">Aliv</a> 
                        </li>

                        
                    </ul>
                </div>
                
                <div class="hidden nav-items col-span-2 items-center justify-items-center">
                   
                    <ul class="flex mx-auto text-slate-500 flex-row space-x-10">
                        <li class="@if (Route::has('/')) border-b-2 border-yellow-500 @else hover:text-slate-600 @endif ">
                            <a href="/">Accueil</a>
                        </li>
                        <li class="@if (Route::has('/authors')) border-b-2 border-yellow-500 @else hover:text-slate-600 @endif">
                            <a href="/authors">Auteurs</a>
                        </li>
                        <li class="@if (Route::has('/')) border-b-2 border-yellow-500 @else hover:text-slate-600 @endif">
                            <a href="/publications">Publications</a>
                        </li>
                        <li class="hover:text-slate-600">
                            <a href="/paraitre">A paraitre</a>
                        </li>
                        <li class="@if (Route::has('/events')) border-b-2 border-yellow-500 @else hover:text-slate-600 @endif">
                            <a href="/events">Evenement</a>
                        </li>
                        <li class="@if (Route::has('/books')) border-b-2 border-yellow-500 @else hover:text-slate-600 @endif">
                            <a href="/books">Librairie</a>
                        </li>
                        <li class="hover:text-slate-600">
                            <a href="#">Aliv</a> 
                        </li>
                    </ul>
                    
                </div>

                <div class="relative hidden flex login-btn justify-items-end items-center  justify-center dark:bg-gray-900 sm:items-center pr-4 sm:pt-0">
                    @if (Route::has('login'))
                        <div class="hidden fixed  sm:block">
                            @auth
                            <div class="dropdown relative">
                                <button
                                  class="
                                    dropdown-toggle
                                    px-6
                                    py-2.5
                                    bg-blue-600
                                    text-white
                                    font-medium
                                    text-xs
                                    leading-tight
                                    uppercase
                                    rounded
                                    shadow-md
                                    hover:bg-blue-700 hover:shadow-lg
                                    focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                                    active:bg-blue-800 active:shadow-lg active:text-white
                                    transition
                                    duration-150
                                    ease-in-out
                                    flex
                                    items-center
                                    whitespace-nowrap
                                  "
                                  type="button"
                                  id="btndrop"
                                  data-bs-toggle="dropdown"
                                  aria-expanded="false"
                                >
                                {{ Auth::user()->name }}
                                  <svg
                                    aria-hidden="true"
                                    focusable="false"
                                    data-prefix="fas"
                                    data-icon="caret-down"
                                    class="w-2 ml-2"
                                    role="img"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 320 512"
                                  >
                                    <path
                                      fill="currentColor"
                                      d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"
                                    ></path>
                                  </svg>
                                </button>
                                <ul
                                id="dropmenu"
                                  class="
                                    dropdown-menu
                                    min-w-max
                                    absolute
                                    hidden
                                    bg-white
                                    text-base
                                    z-50
                                    float-left
                                    py-2
                                    list-none
                                    text-left
                                    rounded-lg
                                    shadow-lg
                                    mt-1
                                    m-0
                                    bg-clip-padding
                                    border-none
                                  "
                                  style="position: absolute; z-index: 5;"
                                  aria-labelledby="dropdownMenuButton1"
                                >
                                  <li>
                                    <a
                                      class="
                                        dropdown-item
                                        text-sm
                                        py-2
                                        px-4
                                        font-normal
                                        block
                                        w-full
                                        whitespace-nowrap
                                        bg-transparent
                                        text-gray-700
                                        hover:bg-gray-100
                                      "
                                      href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"
                                      >Se deconnecter</a
                                    >
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                  </li>
                                  <li>
                                    <a
                                      class="
                                        dropdown-item
                                        text-sm
                                        py-2
                                        px-4
                                        font-normal
                                        block
                                        w-full
                                        whitespace-nowrap
                                        bg-transparent
                                        text-gray-700
                                        hover:bg-gray-100
                                      "
                                      href="#"
                                      onclick="event.preventDefault();
                                      document.getElementById('profile-form').submit();"
                                      >Profile</a
                                    >

                                    <form id="profile-form" action="#" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                  </li>
                                  
                                </ul>
                              </div>    
                            @else
                                
                                    <a href="{{ route('login') }}" class="text-sm text-white 
                                    dark:text-gray-500 px-4 py-2 bg-yellow-500 hover:bg-yellow-600 rounded shadow-md ">
                                        Log in</a>
                                
                                
    
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 
                                    text-sm text-gray-700 dark:text-gray-500 p-2 
                                    border-2 border-yellow-400 rounded shadow-md ">
                                        
                                             Register
                                        
                                       
                                    </a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div> 
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer>
            <div class="bg-neutral-900 py-10" style="display: flex;  justify-content: center; margin: 0 auto;">
                <div style="display: flex; flex-wrap:wrap; width: 90%; justify-content: center;">
                    <div class="flex flex-col items-center justify-content: center; text-neutral-500"  style="min-width: 25%;  width: 200px;">
                        <h2 class="text-base">About us</h2>
                        <p class="text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Ab impedit error id quidem nostrum tempora aliquid dignissimos commodi velit? 
                            Repellendus non at unde ratione magni quasi sed pariatur dignissimos porro.</p>
                        <img src="img/logo.png" width="80" height="130" alt="logo" />
                    </div>
                    <div class="flex flex-col items-center justify-content: center; text-neutral-500" style="min-width: 25%;  width: 200px;">
                        <h2 class="text-base" >Auteurs</h2>
                        <ul class="text-sm">
                            <li>Eveline Mpondi Ngolle</li>
                            <li>Eveline Mpondi Ngolle</li>
                            <li>Eveline Mpondi Ngolle</li>
                            <li>Eveline Mpondi Ngolle</li>
                            <li>Eveline Mpondi Ngolle</li>
                        </ul>
                    </div>
                    <div class="flex flex-col items-center justify-content: center; text-neutral-500" style="min-width: 25%;  width: 200px;">
                        <h2 class="text-base" >Librairie</h2>
                        <ul class="text-sm">
                            <li>Art</li>
                            <li>Science</li>
                            <li>Mathematic</li>
                            <li>Romman</li>
                            <li>Medecin</li>
                        </ul>
                    </div>
                    <div class="flex flex-col items-center justify-content: center; text-neutral-500" style="min-width: 25%;  width: 200px;">
                        <h2 class="text-base" >Nos Contacts</h2>
                        <ul class="text-sm">
                            <li class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                Ad repellendus ut autem sunt nihil maiores aliquid sed commodi  
                            </li>
                            <li class="mb-4" >Tel: +237 670 70 40 31 / 
                                +237 620 921 174 / +237 697 621 731 / +237 690 417 212 </li>
                            <li>Email: labred@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center py-2 text-neutral-500 bg-neutral-800">
                <small>Copyright@2022 designed by labred</small>
            </div>
            <script>
                var elt = document.getElementById('dropmenu');
                var btn = document.getElementById('btndrop');

                var openBackdrop = document.getElementById('openBackdrop');
                var closeBackdrop = document.getElementById('closeBackdrop');
                var backdrop = document.getElementById('backdrop');
                openBackdrop.addEventListener('click', ()=> {
                    backdrop.classList.remove('hidden')
                })

                closeBackdrop.addEventListener('click', ()=> {
                    backdrop.classList.add('hidden')
                })
                
                if (btn != null){
                  btn.addEventListener('click', ()=> {
                  if(elt.classList.contains('hidden')){
                    elt.classList.remove('hidden')
                  }else {
                    elt.classList.add('hidden')
                  }
                  
                })
            }
            
            
              </script>
        </footer>
    </div>
</body>

</html>
