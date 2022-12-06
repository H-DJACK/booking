@extends('layouts.app')

@section("content")

      <div class="slider_brand" style="position:relative; z-index: -1;">
            <div class="flex w-100 mx-auto  items-center justify-center " 
                style="background-image: url('img/librarie.jpg'); height: 90vh;  background-position: center;
                background-size: cover;">
                <div class="flex items-center justify-center flex-col " style="width: 80vw; margin: 0 auto;" >
                    <h1 class="text-white text-7xl">Telecharger des Miliers de livre</h1>
                    <p class="text-gray-500 text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam iusto aliquam odit quidem perspiciatis, nemo harum culpa
                         soluta praesentium reprehenderit minus! Aspernatur similique rerum quo sit vel, accusantium iste sapiente.</p>
                    <div>
                        <button class="bg-yellow-500 text-white p-2 rounded shadow-md mt-4">Explorer Maintenant</button>
                    </div>
                </div>
            </div>
            <div class="grid pb-10 w-100 mx-auto  items-center justify-items-center " 
            style="background-image: url('img/events.jpg'); height: 90vh; background-position: center;
            background-size: cover;">
                    <div class="flex items-center justify-center flex-col" style="width: 80vw; margin: 0 auto;" >
                        <h1 class="text-white text-7xl text-center">Participer à des évenements autour du livre</h1>
                        <p class="text-gray-500 text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Nam iusto aliquam odit quidem perspiciatis, nemo harum culpa
                            soluta praesentium reprehenderit minus! Aspernatur similique rerum quo sit vel, 
                            accusantium iste sapiente.</p>
                        <div>
                            <button class="bg-yellow-500 text-white p-2 rounded shadow-md mt-4">Participer Maintenant</button>
                        </div>
                    </div>
                </div>
            
                <div class="grid pb-10 w-100 mx-auto  items-center justify-items-center " 
                style="background-image: url('img/association.jpg'); height: 90vh; background-position: center;
                background-size: cover;">
                        <div class="flex items-center justify-center flex-col" style="width: 80vw; margin: 0 auto;">
                            <h1 class="text-white text-7xl">Rejoindre notre association</h1>
                            <p class="text-gray-500 text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                Nam iusto aliquam odit quidem perspiciatis, nemo harum culpa
                                soluta praesentium reprehenderit minus! Aspernatur similique rerum quo sit vel, 
                                accusantium iste sapiente.</p>
                            <div>
                                <button class="bg-yellow-500 text-white p-2 rounded shadow-md mt-4">Nous rejoindre</button>
                            </div>
                        </div>
                    </div>
        </div>
        

        <div class="grid grid-cols-2 mx-10 py-10 mt-4 padding-about ">
            <div class="flex flex-col justify-center items-center ">
                <h1 class="text-4xl text-center py-8 mx-auto text-[#000050] font-bold">Take care about your book</h1>
                <p class="text-slate-500 text-justify text-lg w-90">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Repellendus omnis amet blanditiis hic ratione corporis 
                    fuga excepturi ut? Provident cupiditate 
                    nobis porro quaerat velit voluptatibus eius odio error ex. Blanditiis!
                    Repellendus omnis amet blanditiis hic ratione corporis 
                    fuga excepturi ut? Provident cupiditate 
                    nobis porro quaerat velit voluptatibus eius odio error ex. Blanditiis!
                </p>
            </div>
            <div class="mx-auto">
                <img src="img/about.jpg" alt="brand image" />
            </div>
        </div>-

        <section class="bg-slate-50">
            <h1 class="text-4xl text-center py-8 mx-auto text-[#000050] font-bold">Nos Caregories</h1>
            <div class="grid grid-cols-6 gap-10 padding py-8 ">
                <button class="bg-yellow-500 hover:bg-yellow-600 text-white p-2 rounded shadow-md mt-4">Recommended</button>
                <button class="bg-yellow-500 hover:bg-yellow-600 text-white p-2 rounded shadow-md mt-4">Motivation</button>
                <button class="bg-yellow-500 hover:bg-yellow-600 text-white p-2 rounded shadow-md mt-4">Art</button>
                <button class="bg-yellow-500 hover:bg-yellow-600 text-white p-2 rounded shadow-md mt-4">Religion</button>
                <button class="bg-yellow-500 hover:bg-yellow-600 text-white p-2 rounded shadow-md mt-4">Roman</button>
                <button class="bg-yellow-500 hover:bg-yellow-600 text-white p-2 rounded shadow-md mt-4">Poesy</button>
            </div>
        
            <div class="flex bg-gray-200">
                <div class="w-2/12 flex items-center ">
                    <div class="w-full text-right">
                        <button class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mr-5 next">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                              </svg>
                                                      
                        </button>
                    </div>
                </div>
                <div id="sliderContainer" class="w-10/12 overflow-hidden" >
                    <ul id="slider" class="flex w-full transition-margin duration-700 slider">
                        <li class="p-5">
                            <div class="justify-center grid items-start shadown-lg w-full  bg-gray-100 rounded" >
                                <a href="#">
                                <img src="img/1.jpg" class="mx-auto w-full h-60 rounded-t-lg " width="100" height="200" alt="kffl">
                                <h4 class="font-bold text-center w-30 text-xl mt-2">Le meutre </h4>
                                <div class="p-2">
                                    <p class="text-slate-500 text-sm">Paul Eluad</p>
                                    <p class="text-slate-500 text-sm">Romman</p>
                                    <p class="text-slate-500 text-sm">2005</p></a>
                                </div>
                            </div>
                        </li>
    
                        
    
                        <li class="p-5 ">
                            <div class="justify-center grid items-start shadown-lg  bg-gray-100 rounded" >
                                <a href="#">
                                <img src="img/2.jpg" class="mx-auto w-full h-60 rounded-t-lg " width="100" height="200" alt="kffl">
                                <h4 class="font-bold text-center w-30 text-xl mt-2">Le meutre </h4>
                                <div class="p-2">
                                    <p class="text-slate-500 text-sm">Paul Eluad</p>
                                    <p class="text-slate-500 text-sm">Romman</p>
                                    <p class="text-slate-500 text-sm">2005</p></a>
                                </div>
                            </div>
                        </li>
    
                        <li class="p-5">
                            <div class="justify-center grid items-start shadown-lg  bg-gray-100 rounded" >
                                <a href="#">
                                <img src="img/3.jpg" class="mx-auto w-full h-60 rounded-t-lg " width="100" height="200" alt="kffl">
                                <h4 class="font-bold text-center w-30 text-xl mt-2">Le meutre </h4>
                                <div class="p-2">
                                    <p class="text-slate-500 text-sm">Paul Eluad</p>
                                    <p class="text-slate-500 text-sm">Romman</p>
                                    <p class="text-slate-500 text-sm">2005</p></a>
                                </div>
                            </div>
                        </li>
    
                       <li class="p-5 ">
                            <div class="justify-center grid items-start shadown-lg  bg-gray-100 rounded" >
                                <a href="#">
                                <img src="img/4.jpg" class="mx-auto w-full h-60 rounded-t-lg " width="100" height="200" alt="kffl">
                                <h4 class="font-bold text-center w-30 text-xl mt-2">Le meutre </h4>
                                <div class="p-2">
                                    <p class="text-slate-500 text-sm">Paul Eluad</p>
                                    <p class="text-slate-500 text-sm">Romman</p>
                                    <p class="text-slate-500 text-sm">2005</p></a>
                                </div>
                            </div>
                        </li>
                        
                        <li class="p-5 ">
                            <div class="justify-center grid items-start shadown-lg  bg-gray-100 rounded" >
                                <a href="#">
                                <img src="img/5.jpg" class="mx-auto w-full h-60 rounded-t-lg " width="100" height="200" alt="kffl">
                                <h4 class="font-bold text-center w-30 text-xl mt-2">Le meutre </h4>
                                <div class="p-2">
                                    <p class="text-slate-500 text-sm">Paul Eluad</p>
                                    <p class="text-slate-500 text-sm">Romman</p>
                                    <p class="text-slate-500 text-sm">2005</p></a>
                                </div>
                            </div>
                        </li>
    
                        <li class="p-5 ">
                            <div class="justify-center grid items-start shadown-lg  bg-gray-100 rounded" >
                                <a href="#">
                                <img src="img/6.jpg" class="mx-auto w-full h-60 rounded-t-lg " width="100" height="200" alt="kffl">
                                <h4 class="font-bold text-center w-30 text-xl mt-2">Le meutre </h4>
                                <div class="p-2">
                                    <p class="text-slate-500 text-sm">Paul Eluad</p>
                                    <p class="text-slate-500 text-sm">Romman</p>
                                    <p class="text-slate-500 text-sm">2005</p></a>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>
                <div class="w-2/12 flex items-center">
                    <div class="w-full">
                        <button  class="p-3 rounded-full bg-white border border-gray-100 shadow-lg ml-5 prev">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                              </svg>                                                 
                        </button>
                    </div>
                </div>
            </div>
        <div class="mx-auto py-10 flex items-center justify-center">
            <button class="bg-yellow-500  hover:bg-yellow-600 text-white p-2 rounded shadow-md mt-4">Voir plus</button>
        </div>
    </section>
     

    <section  class="bg-gray-800 py-8 padding mt-4">
        <h1 class="text-4xl mx-auto py-8 text-gray-100 font-bold">Nouveau événement</h1>
        <div class="grid grid-cols-4 gap-8 ">
            <div class="flex flex-col justify-center items-center bg-neutral-100 p-10 rounded">
                <img src="img/logo1.png" width="80" height="130" alt="logo" />
                <p>Science</p>
            </div>
            <div class="flex flex-col justify-center items-center  bg-neutral-100 p-10 rounded shadow-md">
                <img src="img/logo1.png" width="80" height="130" alt="logo" />
                <p>Roman</p>
            </div>
            <div class="flex flex-col justify-center items-center  bg-neutral-100 p-10 rounded shadow-md">
                <img src="img/logo1.png" width="80" height="130" alt="logo" />
                <p>Art</p>
            </div>
            <div class="flex flex-col justify-center items-center  bg-neutral-100 p-10 rounded shadow-md">
                <img src="img/logo1.png" width="80" height="130" alt="logo" />
                <p>Bibliography</p>
            </div>
            <div class="flex flex-col justify-center items-center  bg-neutral-100 p-10 rounded shadow-md">
                <img src="img/logo1.png" width="80" height="130" alt="logo" />
                <p>Comics</p>
            </div>
            <div class="flex flex-col justify-center items-center  bg-neutral-100 p-10 rounded shadow-md">
                <img src="img/logo1.png" width="80" height="130" alt="logo" />
                <p>Poesy</p>
            </div>
            <div class="flex flex-col justify-center items-center  bg-neutral-100 p-10 rounded shadow-md">
                <img src="img/logo1.png" width="80" height="130" alt="logo" />
                <p>Ingenery</p>
            </div>
            <div class="flex flex-col justify-center items-center  bg-neutral-100 p-10 rounded shadow-md">
                <img src="img/logo1.png" width="80" height="130" alt="logo" />
                <p>Medecine</p>
            </div>
        </div>
        <div class="mx-auto py-10 flex items-center justify-center">
            <button class="bg-yellow-500 text-white p-2 rounded shadow-md mt-4">Plus d'événement</button>
        </div>
    </section>
       

    <section class="grid grid-cols-5 py-4 my-10 gap-6 ml-8 mr-8 py-8 padding">
        <h2 class="text-4xl mx-auto py-8 text-[#000050] font-bold">A paraitre</h2>
        <div>
            <div class="justify-center grid items-start shadown-lg  bg-gray-100 rounded" >
                <a href="#">
                <img src="img/1.jpg" class="mx-auto w-full h-60 rounded-t-lg " width="100" height="200" alt="kffl">
                <h4 class="font-bold text-center w-30 text-xl mt-2">Le meutre </h4>
                <div class="p-2">
                    <p class="text-slate-500 text-sm">Paul Eluad</p>
                    <p class="text-slate-500 text-sm">Romman</p>
                    <p class="text-slate-500 text-sm">2005</p></a>
                </div>
            </div>
    
           <div class="justify-center grid  bg-gray-100 items-start" >
                <a href="#">
                <img src="img/2.jpg" class="mx-auto w-full h-60 rounded-t-lg" width="150" height="300" alt="kffl">
                <h4 class="font-bold text-center w-30 text-xl mt-2">Le meutre</h4>
                <div class="p-2">
                    <p class="text-slate-500 text-sm">Paul Eluad</p>
                    <p class="text-slate-500 text-sm">Romman</p>
                    <p class="text-slate-500 text-sm">2005</p>
                </div>
                </a>
            </div>
    
           <div class="justify-center grid  bg-gray-100 items-start" >
                <a href="#">
                <img src="img/3.jpg" class="mx-auto w-full h-60 rounded-t-lg" width="150" height="300" alt="kffl">
                <h4 class="font-bold text-center w-30 text-xl mt-2">Le meutre</h4>
                <div class="p-2">
                    <p class="text-slate-500 text-sm">Paul Eluad</p>
                    <p class="text-slate-500 text-sm">Romman</p>
                    <p class="text-slate-500 text-sm">2005</p>
                </div>
                </a>
            </div>
    
            <div class="justify-center grid  bg-gray-100 items-start" >
                <a href="#">
                <img src="img/4.jpg" class="mx-auto w-full h-60 rounded-t-lg" width="150" height="300" alt="kffl">
                <h4 class="font-bold text-center w-30 text-xl mt-2">Le meutre</h4>
                <div class="p-2">
                    <p class="text-slate-500 text-sm">Paul Eluad</p>
                    <p class="text-slate-500 text-sm">Romman</p>
                    <p class="text-slate-500 text-sm">2005</p>
                </div>
                </a>
            </div>
        </div>
        

    </section>


    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
      
      $('.slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
      });

      $('.slider_brand').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        appendDots: $('.slick-slider-dots'),
        appendArrows: $('.slick-slider-nav'),
      });

      $('.comming-slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true, 
        arrows: false
      });
      
    </script>
@endsection