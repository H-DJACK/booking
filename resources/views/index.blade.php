@extends('layouts.app')

@section("content")

    <style>

        @media (max-width: 768px) {
            .padding-about-lg{
                display: none;
            }

            .padding-about-sm{
                display: flex;
            }

            html{
                font-size: 12px;
            }

            .dropsm{
                display: flex;
                width: 100%; 
                justify-content: center;
            }

            .expandlg{
                display: none;
            }

        }

        @media (max-width: 425px) {
            html{
                font-size: 8px;
            }
        }

    </style>

      <div class="slider_brand" style="position:relative; z-index: -1;">
            <div class="flex w-100   items-center justify-center " 
                style="background-image: url('img/librarie.jpg'); height: 90vh;  background-position: center;
                background-size: cover; display:flex; flex-direction:column; justify-content: center; align-items:center;">
                <div style="width: 60vw; display:flex; flex-direction:column; justify-content: center; align-items:center;" >
                    <h1 class="text-white text-center font-bold"  style="font-size: 4.5rem" >Telecharger des Miliers de livre</h1>
                    <p class="text-white text-justify text-lg" style="font-size: 1.5rem">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam iusto aliquam odit quidem perspiciatis, nemo harum culpa
                         soluta praesentium reprehenderit minus! Aspernatur similique rerum quo sit vel, accusantium iste sapiente.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam iusto aliquam odit quidem perspiciatis, nemo harum culpa
                         soluta praesentium reprehenderit minus! Aspernatur similique rerum quo sit vel, accusantium iste sapiente.</p>
                    <div>
                        <button class="bg-yellow-500 text-white text-xl p-2 rounded shadow-md mt-4" style="font-size: 1.8rem; padding: .5em .5em;">Explorer Maintenant</button>
                    </div>
                </div>
            </div>
            <div class="grid pb-10 w-100 mx-auto  items-center justify-items-center " 
            style="background-image: url('img/events.png'); height: 90vh; background-position: center;
            background-size: cover; display:flex; flex-direction:column; justify-content: center; align-items:center;">
                    <div  style="width: 60vw; display:flex; flex-direction:column; justify-content: center; align-items:center;" >
                        <h1 class="text-white text-center font-bold" style="font-size: 4.5rem">Participer à des évenements autour du livre</h1>
                        <p class="text-white text-justify text-lg " style="font-size: 1.5rem">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Nam iusto aliquam odit quidem perspiciatis, nemo harum culpa
                            soluta praesentium reprehenderit minus! Aspernatur similique rerum quo sit vel, 
                            accusantium iste sapiente.
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam iusto aliquam odit quidem perspiciatis, nemo harum culpa
                         soluta praesentium reprehenderit minus! Aspernatur similique rerum quo sit vel, accusantium iste sapiente.</p>
                        <div>
                            <button class="bg-yellow-500 text-white text-xl p-2 rounded shadow-md mt-4" style="font-size: 1.8rem; padding: .5em .5em;">Participer Maintenant</button>
                        </div>
                    </div>
                </div>
            
                <div class="grid pb-10 w-100 mx-auto  items-center justify-items-center " 
                style="background-image: url('img/association.jpg'); height: 90vh; background-position: center;
                background-size: cover; display:flex; flex-direction:column; justify-content: center; align-items:center;">
                        <div  style="width: 60vw; display:flex; flex-direction:column; justify-content: center; align-items:center;" >
                            <h1 class="text-white text-center  font-bold" style="font-size: 4.5rem">Rejoindre notre association</h1>
                            <p class="text-white text-justify text-lg" style="font-size: 1.5rem">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                Nam iusto aliquam odit quidem perspiciatis, nemo harum culpa
                                soluta praesentium reprehenderit minus! Aspernatur similique rerum quo sit vel, 
                                accusantium iste sapiente.
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam iusto aliquam odit quidem perspiciatis, nemo harum culpa
                         soluta praesentium reprehenderit minus! Aspernatur similique rerum quo sit vel, accusantium iste sapiente.</p>
                            <div>
                                <button class="bg-yellow-500 text-white text-xl p-2 rounded shadow-md mt-4" style="font-size: 1.8rem; padding: .5em .5em;" >Nous rejoindre</button>
                            </div>
                        </div>
                    </div>
                </div>
        

        <div class="grid grid-cols-2 mx-10 py-10 mt-4 padding-about-lg ">
            <div class="flex flex-col justify-center items-center  " style="width: 70%; margin: 0 auto;">
                <h1 class="text-center py-8 mx-auto text-[#000050] font-bold" style="font-size: 3rem">Take care about your book</h1>
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
                <img src="img/about.jpg" alt="brand image" style="width: 80%; margin: 0 auto;" />
            </div>
        </div>

        <div class="grid grid-cols-2 mx-10 py-10 mt-4 hidden padding-about-sm ">
            <div class="flex flex-col justify-center items-center ">
                <h1 class="text-center py-8 mx-auto text-[#000050] font-bold"  style="font-size: 4rem">Take care about your book</h1>
                <div class="mx-auto" style="width: 70%; margin: 0 auto;">
                    <img src="img/about.jpg" alt="brand image"  style="width: 100%"  />
                </div>
                <p class="text-slate-500 text-justify text-lg w-90" style="font-size: 1.5rem">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Repellendus omnis amet blanditiis hic ratione corporis 
                    fuga excepturi ut? Provident cupiditate 
                    nobis porro quaerat velit voluptatibus eius odio error ex. Blanditiis!
                    Repellendus omnis amet blanditiis hic ratione corporis 
                    fuga excepturi ut? Provident cupiditate 
                    nobis porro quaerat velit voluptatibus eius odio error ex. Blanditiis!
                </p>
            </div>
            
        </div>

        <section class="bg-slate-50">
            <h1 class="text-center py-8 mx-auto text-[#000050] font-bold" style="font-size: 4rem">Nos Caregories</h1>
                <div class="dropsm hidden mb-5">
                    <div class="dropdown relative">
                        <button
                          class="
                            dropdown-toggle
                            px-6
                            py-2.5
                            bg-blue-600
                            text-white
                            font-medium
                            text-md
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
                        Choisir une categorie
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
                              >Recommended</a
                            >

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
                              >Motivation</a
                            >

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
                              >Art</a
                            >

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
                              >Religion</a
                            >

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
                              >Roman</a
                            >

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
                              >Poesy</a
                            >

                          </li>
                          
                        </ul>
                      </div>    

                </div>
            <div class="grid grid-cols-6 gap-10 padding py-8 expandlg">
                <button class="bg-yellow-500 hover:bg-yellow-600 text-xl text-white p-2 rounded shadow-md mt-4">Recommended</button>
                <button class="bg-yellow-500 hover:bg-yellow-600 text-xl text-white p-2 rounded shadow-md mt-4">Motivation</button>
                <button class="bg-yellow-500 hover:bg-yellow-600 text-xl text-white p-2 rounded shadow-md mt-4">Art</button>
                <button class="bg-yellow-500 hover:bg-yellow-600 text-xl text-white p-2 rounded shadow-md mt-4">Religion</button>
                <button class="bg-yellow-500 hover:bg-yellow-600 text-xl text-white p-2 rounded shadow-md mt-4">Roman</button>
                <button class="bg-yellow-500 hover:bg-yellow-600 text-xl text-white p-2 rounded shadow-md mt-4">Poesy</button>
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
                            <div class="justify-center grid items-start shadown-lg  bg-gray-100 rounded" >
                                <a href="#">
                                <img src="img/1.jpg" class="mx-auto w-full h-60 rounded-t-lg " width="250" height="250" alt="kffl">
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
            <button class="bg-yellow-500 text-xl  hover:bg-yellow-600 text-white p-2 rounded shadow-md mt-4">Voir plus</button>
        </div>
    </section>
     

    <section  class="mt-4" style="width: 100%; margin: 0 auto;" >
        <h1 class="text-center mx-auto text-[#000050] font-bold" style="font-size: 4rem">Nouveau événement</h1>
        <div style="display: flex; flex-wrap:wrap; width: 100%; justify-content: center;">
            <div class="flex flex-col justify-center items-center rounded-t-lg bg-white max-w-sm"  style="background-image: url('img/events.png'); width: 100%; min-height: 300px;  background-position: center;
                background-size: cover; position: relative; z-index: 1; margin: 1rem;">
           
                <p class="text-white text-4xl font-medium mb-2"  style="position: abolute; z-index: 2;">Festival du livre</p>
                <button class="bg-blue-500  hover:bg-blue-700 text-white p-2 rounded shadow-md mt-4">Suivre l evenement</button>
            </div>
            <div class="flex flex-col justify-center items-center rounded-t-lg bg-white max-w-sm"  style="background-image: url('img/events.png');  width: 100%; min-height: 300px;  background-position: center;
                background-size: cover; position: relative; z-index: 1;  margin: 1rem;">
                <p class="text-white text-4xl font-medium mb-2"  style="position: abolute; z-index: 2;">Dedicace speciale</p>
                <button class="bg-blue-500  hover:bg-blue-700 text-white p-2 rounded shadow-md mt-4">Suivre l evenement</button>
            </div>

            <div class="flex flex-col justify-center items-center rounded-t-lg bg-white max-w-sm"  style="background-image: url('img/association.jpg');  width: 100%; min-height: 300px;  background-position: center;
                background-size: cover; position: relative; z-index: 1;  margin: 1rem;">
           
                <p class="text-white text-4xl font-medium mb-2"  style="position: abolute; z-index: 2;">Festival du livre</p>
                <button class="bg-blue-500  hover:bg-blue-700 text-white p-2 rounded shadow-md mt-4">Suivre l evenement</button>
            </div>

            <div class="flex flex-col justify-center items-center rounded-t-lg bg-white max-w-sm"  style="background-image: url('img/association.jpg');  width: 100%; min-height: 300px;  background-position: center;
                background-size: cover; position: relative; z-index: 1;  margin: 1rem;">
           
                <p class="text-white text-4xl font-medium mb-2"  style="position: abolute; z-index: 2;">Dedicace speciale</p>
                <button class="bg-blue-500  hhover:bg-blue-700 text-white p-2 rounded shadow-md mt-4">Suivre l evenement</button>
            </div>
            <div class="flex flex-col justify-center items-center rounded-t-lg bg-white max-w-sm"  style="background-image: url('img/events.png');  width: 100%; min-height: 300px;  background-position: center;
                background-size: cover; position: relative; z-index: 1;  margin: 1rem;">
           
                <p class="text-white text-4xl font-medium mb-2"  style="position: abolute; z-index: 2;">Festival du livre</p>
                <button class="bg-blue-500  hover:bg-blue-700 text-white p-2 rounded shadow-md mt-4">Suivre l evenement</button>
            </div>
            <div class="flex flex-col justify-center items-center rounded-t-lg bg-white max-w-sm"  style="background-image: url('img/events.png');  width: 100%; min-height: 300px;  background-position: center;
                background-size: cover; position: relative; z-index: 1;  margin: 1rem;">
                <p class="text-white text-4xl font-medium mb-2"  style="position: abolute; z-index: 2;">Dedicace speciale</p>
                <button class="bg-blue-500 hover:bg-blue-700 text-white p-2 rounded shadow-md mt-4">Suivre l evenement</button>
            </div>

            <div class="flex flex-col justify-center items-center rounded-t-lg bg-white max-w-sm"  style="background-image: url('img/association.jpg'); width: 100%; min-height: 300px; background-position: center;
                background-size: cover; position: relative; z-index: 1;  margin: 1rem;">
           
                <p class="text-white text-4xl font-medium mb-2"  style="position: abolute; z-index: 2;">Festival du livre</p>
                <button class="bg-blue-500  hover:bg-blue-700 text-white p-2 rounded shadow-md mt-4">Suivre l evenement</button>
            </div>

            <div class="flex flex-col justify-center items-center rounded-t-lg bg-white max-w-sm"  style="background-image: url('img/association.jpg');  width: 100%; min-height: 300px;   background-position: center;
                background-size: cover; position: relative; z-index: 1;  margin: 1rem;">
           
                <p class="text-white text-4xl font-medium mb-2"  style="position: abolute; z-index: 2;">Dedicace speciale</p>
                <button class="bg-blue-500  hover:bg-blue-700 text-white p-2 rounded shadow-md mt-4">Suivre l evenement</button>
            </div>
        </div>
        <div class="mx-auto py-10 flex items-center justify-center">
            <button class="bg-yellow-500 hover:bg-yellow-600 text-xl text-white p-2 rounded shadow-md mt-4">Plus d'événement</button>
        </div>
    </section>
       

    <section class="py-4" >
        <h2 class=" text-[#000050]  font-bold"  style="font-size: 4rem; margin-left:6%;">A paraitre</h2>
        <div style="display: flex; flex-wrap:wrap; width: 100%; justify-content: center;">
            <div class="justify-center flex items-start bg-gray-100 rounded-t-lg" style="margin:1rem;  width: 200px; min-width: 15%;" >
                <a href="#" style="width:100%;">
                    <img src="img/1.jpg" class="w-full  rounded-t-lg " style="width:100%;" alt="kffl">
                    <h4 class="font-bold text-center w-30 text-xl mt-2">Le meutre </h4>
                    <div class="p-2">
                        <p class="text-slate-500 text-sm">Paul Eluad</p>
                        <p class="text-slate-500 text-sm">Romman</p>
                        <p class="text-slate-500 text-sm">2005</p>
                    </div>
                </a>
            </div>
    
           <div class="justify-center flex bg-gray-100 items-start"  style="margin:1rem; width: 200px; min-width: 15%;"  >
                <a href="#"  style="width:100%;">
                    <img src="img/8.jpg" class="mx-auto w-full rounded-t-lg" style="width:100%; " alt="kffl">
                    <h4 class="font-bold text-center w-30 text-xl mt-2">Le meutre</h4>
                    <div class="p-2">
                        <p class="text-slate-500 text-sm">Paul Eluad</p>
                        <p class="text-slate-500 text-sm">Romman</p>
                        <p class="text-slate-500 text-sm">2005</p>
                    </div>
                </a>
            </div>
    
           <div class="justify-center flex bg-gray-100 items-start"   style="margin:1rem; width: 200px; min-width: 15%;" >
                <a href="#"  style="width:100%;">
                    <img src="img/9.jpg" class="mx-auto w-full rounded-t-lg" style="width:100%; " alt="kffl">
                    <h4 class="font-bold text-center w-30 text-xl mt-2">Le meutre</h4>
                    <div class="p-2">
                        <p class="text-slate-500 text-sm">Paul Eluad</p>
                        <p class="text-slate-500 text-sm">Romman</p>
                        <p class="text-slate-500 text-sm">2005</p>
                    </div>
                </a>
            </div>
    
            <div class="justify-center flex  bg-gray-100 items-start"  style="margin:1rem;  width: 200px; min-width: 15%;"  >
                <a href="#"  style="width:100%;">
                    <img src="img/4.jpg" class="mx-auto w-full rounded-t-lg" style="width:100%; " alt="kffl">
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
        responsive: [
            {
            breakpoint: 769,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
                }
            }, 

            {
            breakpoint: 426,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
                }
            }, 
  ]
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