<template>
    <div class="friendsContainer">
      <div class="filter">
        <input class="inputFriendsComponent" type="text" placeholder="search">
        <img :src="loupeIcon" class="loupeIcon" alt="">
      </div>
      <div class="friendsIconBorder">
        <div class="friendsIcon">
          <img :src="friendsImg" alt="">
        </div>
      </div>
      <div class="friendsComponents" v-for="littleCharacterFriends in characterFriends" :key="littleCharacterFriends.ID">
        <FriendsComponents :dataCharacterFriends="littleCharacterFriends"/>
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
          loupeIcon: require("@/assets/loupe.png"),
          characterFriends: [
              {
              ID:1, 
              Vorname: "Michaela",
              Nachname: "Bodenmatter",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (1).jpg"), 
              },
              {
              ID:2, 
              Vorname: "Anton",
              Nachname: "Felix",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (2).jpg"), 
              },
              {
              ID:3,
              Vorname: "Brigitte",
              Nachname: "Geiger",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (3).jpg"), 
              },
              {
              ID:4, 
              Vorname: "Michaela",
              Nachname: "Bodenmatter",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (4).jpg"), 
              },
              {
              ID:5, 
              Vorname: "Anton",
              Nachname: "Felix",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (5).jpg"), 
              },
              {
              ID:6,
              Vorname: "Brigitte",
              Nachname: "Geiger",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (6).jpg"), 
              },
            ]  
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
  .filter {
    position : absolute;
    display: flex;
    justify-content: right;
    align-items: center;
    padding-right: 10px;
    right: 30px;
    background-color: rgb(148, 144, 141);
    height: 50px;
    width: 150px;
    border: solid black 2px;
    border-radius: 10px;
  }
 .loupeIcon {
  height: 30px;
  width: 30px;
  opacity: 0.5;
 }
 .FriendsComponent{
  height: 100%;
 }
 .inputFriendsComponent {
  background-color: rgb(148, 144, 141);
  border: none !important;
  outline: none; 
 }
 .inputFriendsComponent::placeholder {
  color: rgb(20, 20, 20);
  opacity: 1; 
}
    </style>