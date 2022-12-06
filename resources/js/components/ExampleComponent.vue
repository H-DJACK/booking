<template>
    <swiper
      :slides-per-view="3"
      :space-between="50"
      @swiper="onSwiper"
      @slideChange="onSlideChange"
    >
      <swiper-slide><div class="grid pb-10 w-100 mx-auto  items-center justify-items-center " 
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
    </swiper-slide>
      <swiper-slide> <div class="grid pb-10 w-100 mx-auto  items-center justify-items-center " 
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
                    </div></swiper-slide>
      <swiper-slide>Slide 3</swiper-slide>
      
    </swiper>
  </template>
  <script>
    // Import Swiper Vue.js components
    import { Swiper, SwiperSlide } from 'swiper/vue';
  
    // Import Swiper styles
    import 'swiper/css';
  
    export default {
      components: {
        Swiper,
        SwiperSlide,
      },
      setup() {
        const onSwiper = (swiper) => {
          console.log(swiper);
        };
        const onSlideChange = () => {
          console.log('slide change');
        };
        return {
          onSwiper,
          onSlideChange,
        };
      },
    };
  </script>