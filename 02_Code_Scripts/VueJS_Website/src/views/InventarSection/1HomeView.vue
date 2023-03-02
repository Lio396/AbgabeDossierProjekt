<template>
  <div class="BFOtitel">
    BFO Schule
    <div class="Flagge">
      <img :src="flagImg" alt="">
    </div>
  </div>
  
    <div class="homeContainer">
       <select name="custom-select" class="dropdown">
        <option value="0">Projekte</option>
        <option value="1">Alles</option>
        <option value="2">Hilfe</option>
        <option value="3">Schule</option>
       </select>
      <br>
      <div class="HomeViewComponent">
        <div class="home">
          <HomeViewComponent class="homeComponent"/>
          <HomeViewComponent class="homeComponent"/>
          <HomeViewComponent class="homeComponent"/>
        </div>
      </div>
    </div>
</template>

<script>
// @ is an alias to /src

import HomeViewComponent from '@/components/AllInventarComponents/1HomeComponents/HomeViewComponent.vue'

export default {
  data(){
    return {
      flagImg: require("@/assets/Flaggen/Brig_flag.png")
    }
  },
  components: {
    HomeViewComponent
  }
}
</script>

<style>
.BFOtitel{
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 60px;
  color: aliceblue;
  margin : 15px 15px 15px 15px;
}
.Flagge:hover {
  opacity: 0.7;
}
.homeContainer{
  z-index: 1;
  position: relative;
  /*items-position*/
  display: flex;
  justify-content: center;
  /*borders*/ 
  border: solid black 2px;
  border-radius: 25px;
  /*size*/ 
  height: 100%;
  width: 50%;
  /*colors*/
  background-image: linear-gradient(90deg, var(--colorgradient2), var(--colorgradient1));
  /*Margin and Padding*/ 
  padding: 50px;
  z-index: 11;
  margin-left: auto;
  margin-right: auto;
}
.dropdown {
  position: absolute;
  /*Size*/
  width: 120px;
  /*margin*/
  /*colors */ 
  background-color: rgb(216, 216, 216);
  
}
.HomeViewComponent {
  width: 100%;
  display: flex;
  justify-content: center;
}
.home {
  width: 100%;
  margin-left: auto;
  margin-right: auto;
}
.homeComponent {
  display: block;
  width: 100%;
  margin-top: 80px;
  
}
</style>
