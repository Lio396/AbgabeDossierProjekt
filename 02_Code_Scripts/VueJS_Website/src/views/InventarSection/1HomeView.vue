<template>
  <div class="BFOtitel">
    BFO Schule
    <div class="flaggeborder">
      <img :src="flagImg" alt="" class="flagimg">
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
      <div class="HomeViewComponent" >
        <div class="home" v-for="littlepoints in points"  :key="littlepoints.point_id">      
          <HomeViewComponent class="homeComponent" :datapoints="littlepoints"/>
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
       profilePictureImgs : 
                        [ 
                        {profileimgID:1,},
                        {profileimgID:2,},
                        {profileimgID:3,},
                        {profileimgID:4,profilePictureImg: require("@/assets/Profilpictures/profilePicture (4).jpg")},
                        {profileimgID:5,profilePictureImg: require("@/assets/Profilpictures/profilePicture (5).jpg")},
                        ],
                posts : [
                        {postid:1,},
                        {postid:2,},
                        {postid:3,}
                        ],
                points: [
                        {point_id:1, profilePictureImg: require("@/assets/Profilpictures/profilePicture (1).jpg"), post:"Ich habe heute schlecht geschlafen! ", attributedspoints:78},
                        {point_id:2, profilePictureImg: require("@/assets/Profilpictures/profilePicture (2).jpg"), post:"Ich habe heute ausreichend geschlafen! ", attributedspoints:235},
                        {point_id:3, profilePictureImg: require("@/assets/Profilpictures/profilePicture (3).jpg"), post:"Ich habe heute gut geschlafen! ", attributedspoints:35}
                        ],

                        date : "17.12.2009 15:34",
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
  justify-content: space-evenly;
  align-items: center;
  font-size: 60px;
  color: aliceblue;
  margin : 15px 15px 15px 15px;
}
.flaggeborder {
  display:flex;
  justify-content: center;
  align-items: center;
  width: 100px;
  height: 100px;
  border:solid black 2px;
  border-radius: 100%;
  background-color: rgb(148, 144, 141);
}
.flaggeborder:hover {
  opacity: 0.7;
}
.flagimg{
  height: 70%;
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

}
.home {
  display: block;
  width: 100%;
  margin-left: auto;
  margin-right: auto;
}
.homeComponent {
  
  width: 100%;
  margin-top: 80px;
  
}
</style>
