<script setup>
import { ref,onMounted } from 'vue';
import { Carousel, Navigation, Pagination, Slide } from 'vue3-carousel';
import 'vue3-carousel/dist/carousel.css';
import { useRoute, useRouter } from 'vue-router';
import axios from 'axios';

const route = useRoute();
const router = useRouter();

const slides = ref([]); 

const loadData = async () =>{
      const response = await axios.get(`/api/spoofed_domains_details/${route.params.spoof_id}/screenshots`);
      slides.value = response.data.data.screenshots
};


onMounted(() => {
  loadData()
});
</script>

<template>
    <div class="card bg-white">
        <div class="card-header">
            <h3 class="card-title">Domain Screenshots</h3>
        </div>
        <div class="card-body" style="padding: 2px;">
          <Carousel>
            <Slide v-for="slide in slides" :key="slide">
              <div class="carousel__item">
                <img :src="slide" alt="Image" width="100%" height="50%">
              </div>
            </Slide>
            <template #addons>
              <Navigation />
              <Pagination />
            </template>
          </Carousel>
        </div>
    </div>
</template>

<style scoped>
.card {
    margin-top: 0px;
    margin-bottom: 5px;
    margin-left: 0px;
}
.card-header {
    display: flex;
    padding: 4px;
}
.carousel__item {
  min-height: 200px;
  width: 100%;
  background-color: var(--vc-clr-primary);
  color: var(--vc-clr-white);
  font-size: 20px;
  border-radius: 8px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.carousel__slide {
  padding: 10px;
}

.carousel__prev,
.carousel__next {
  box-sizing: content-box;
  border: 5px solid white;
}
</style>
