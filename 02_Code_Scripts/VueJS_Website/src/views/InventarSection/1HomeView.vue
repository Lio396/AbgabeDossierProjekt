<template>
  <div class="BFOtitel">
    BFO Schule 
    <br>	
  </div>
   
    <div class="homeContainer">
       <select name="custom-select" class="dropdown">
        <option value="0">Projekte</option>
        <option value="1">Alles</option>
        <option value="2">Hilfe</option>
        <option value="3">Schule</option>
       </select>
       
      <br>
      
      <div class="homeViewComponent" >  
        <div class="input">
          <EmptyHomeViewComponent class="inputHomeComponent"/>
        </div>
        <div class="home" v-for="littlecharacter in character"  :key="littlecharacter.ID">  
          <HomeViewComponent class="homeComponent" :datacharacter="littlecharacter" urlIsEmptyProp="urlIsEmpty"/>
        </div>
      </div>
    </div>
</template>

<script>
// @ is an alias to /src

import HomeViewComponent from '@/components/AllInventarComponents/1HomeComponents/HomeViewComponent.vue'
import EmptyHomeViewComponent from '@/components/AllInventarComponents/1HomeComponents/EmptyHomeViewComponent.vue'

export default {
  data(){
    return {
      username: sessionStorage.getItem("username")
    }
  },
  mounted(){
    fetch("http://localhost:8000/api/messages")
        .then((response) => response.text())
        .then((data) => {
          this.character = JSON.parse(data);
          
        });
  },
  components: {
    HomeViewComponent,
    EmptyHomeViewComponent
  },
  props: 
    {
        datacharacter:Object,   
    },
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
.homeViewComponent {
  width: 100%;

}
.input {
  display: block;
  width: 100%;
  margin-left: auto;
  margin-right: auto;
}
.inputHomeComponent {
  margin: 50px;
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
