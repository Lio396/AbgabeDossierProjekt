<template>
    <div class="gameContainer">
      <div class="gameIconBorder">
        <div class="gameIcon">
          <img :src="gameImg" alt="">

        </div>
      </div>
      <div class="games">
        <GameViewComponent/>  
      </div>
    </div>
  </template>

<script>
// @ is an alias to /src

import GameViewComponent from '@/components/AllInventarComponents/9GameComponents/GameViewComponent.vue'

export default {
  data(){
    return {
      gameImg: require("@/assets/gameImg.png")
    }
  },
  components: {
    GameViewComponent
  }
}
</script>

<style >
/*.container*/
.gameContainer{
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
.gameIconBorder {
display: flex;
justify-content: center;
align-items: center;
}
.gameIcon {
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