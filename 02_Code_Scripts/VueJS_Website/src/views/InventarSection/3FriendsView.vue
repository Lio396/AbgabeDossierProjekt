<template>
    <div class="friendsContainer">
      <div class="friendsIconBorder">
        <div class="friendsIcon">
          <img :src="friendsImg" alt="">
        </div>
      </div>
      <div class="friendsComponents">
        <FriendsComponents/>
        <FriendsComponents/>
        <FriendsComponents/>
        <FriendsComponents/>
        <FriendsComponents/>
      </div>
    </div>
  </template>

<script>
// @ is an alias to /src

import FriendsComponents from '@/components/AllInventarComponents/3FriendsComponents/FriendsComponents.vue'

export default {
  data(){
    return {
      friendsImg: require("@/assets/friendsImg.png"),
    }
  },
  components: {
    FriendsComponents
  }
}
</script>

  <style >
  /*.container*/
  .friendsContainer{
  position: relative;
  /*items-position*/
  /*borders*/ 
  border: solid black 2px;
  border-radius: 25px;
  /*size*/ 
  height: 100%;
  width: 30%;
  /*colors*/
  background-image: linear-gradient(90deg, var(--colorgradient2), var(--colorgradient1));
  /*Margin and Padding*/ 
  padding: 50px;
  z-index: 11;
  margin-left: auto;
  margin-right: auto;
}
  .friendsIconBorder{
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .friendsIcon {
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