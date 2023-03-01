<template>
    <div class="learnMaterialContainer">
      <div class="learnMaterialIconBorder">
        <div class="learnMaterialIcon">
          <img :src="learnmaterialImg" alt="">

        </div>
      </div>
      <LearnMaterialViewComponent/>
    </div>
  </template>

<script>
// @ is an alias to /src

import LearnMaterialViewComponent from '@/components/AllInventarComponents/7LearnMaterialComponents/LearnMaterialViewComponent.vue'

export default {
  data(){
    return {
      learnmaterialImg: require("@/assets/learnmaterialImg.png"),
    }
  },
  components: {
    LearnMaterialViewComponent
  }
}
</script>

<style >
/*.container*/
.learnMaterialContainer{
position: relative;
/*items-position*/
/*borders*/ 
border: solid black 2px;
border-radius: 25px;
/*size*/ 
height: 500px;
width: 30%;
/*colors*/
background-image: linear-gradient(90deg, var(--colorgradient2), var(--colorgradient1));
/*Margin and Padding*/ 
padding: 50px;
z-index: 11;
margin-left: auto;
margin-right: auto;
}
.learnMaterialIconBorder {
display: flex;
justify-content: center;
align-items: center;
}
.learnMaterialIcon {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: rgb(148, 144, 141);
  height: 150px;
  width: 150px;
  border: solid black 2px;
  border-radius: 100%;
}
</style>