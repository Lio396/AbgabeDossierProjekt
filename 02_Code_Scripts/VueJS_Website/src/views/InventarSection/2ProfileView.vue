<template>
  <div class="profileContainer">
    <div class="profileIconBorder">
        <div class="profileIcon">
          <img :src="profileImg" alt="">
        </div>
      </div>
    <ProfileViewComponent/>
  </div>
</template>

<script>
// @ is an alias to /src

import ProfileViewComponent from '@/components/AllInventarComponents/2ProfileComponents/ProfileViewComponent.vue'

export default {
  data(){
    return {
      profileImg: require("@/assets/profileImg.png")
    }
  },
  components: {
    ProfileViewComponent
  }
}
</script>

<style>
/*.container*/
.profileContainer{
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
.profileIconBorder{
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .profileIcon {
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

