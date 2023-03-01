<template>
    <div class="projectContainer">
      <div class="projectIconBorder">
        <div class="projectIcon">
          <img :src="projectsImg" alt="">

        </div>
      </div>
      <ProjectsViewComponent/>
    </div>
  </template>

<script>
// @ is an alias to /src

import ProjectsViewComponent from '@/components/AllInventarComponents/5ProjectsComponents/ProjectsViewComponent.vue'

export default {
  data(){
    return {
      projectsImg: require("@/assets/projectsImg.png"),
    }
  },
  components: {
    ProjectsViewComponent
  }
}
</script>

  <style >
  /*.container*/
  .projectContainer{
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
.projectIconBorder {
  display: flex;
  justify-content: center;
  align-items: center;
}
.projectIcon {
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