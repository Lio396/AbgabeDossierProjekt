<template>
    <div class="todolistContainer">
      <div class="todolistIconBorder">
        <div class="todolistIcon">
          <img :src="todolistImg" alt="">

        </div>
      </div>
      <ToDoListViewComponent/>
    </div>
  </template>

<script>
// @ is an alias to /src

import ToDoListViewComponent from '@/components/AllInventarComponents/8ToDoListComponents/ToDoListViewComponent.vue'

export default {
  data(){
    return {
      todolistImg: require("@/assets/todolistImg.png"),
    }
  },
  components: {
    ToDoListViewComponent
  }
}
</script>

<style >
/*.container*/
.todolistContainer{
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
.todolistIconBorder {
display: flex;
justify-content: center;
align-items: center;
}
.todolistIcon {
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