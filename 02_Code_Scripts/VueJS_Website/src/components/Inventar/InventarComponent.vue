<template>
    <div class="inventarContainer" >
      <table class="inventarBar" >
        <tr> 
        <router-link to="/home" @click="homeClick" class="icon" >
          <td class="icons" >
            <img class="iconImg"  v-bind:src=homeImg>
          </td>
        </router-link>
        <router-link to="/profile" class="icon">
          <td class="icons">
            <img class="iconImg" v-bind:src=profileImg>
          </td>
        </router-link>
        <router-link to="/myfriends" class="icon">
          <td class="icons">
            <img class="iconImg" v-bind:src=friendsImg>
          </td>
        </router-link>
        <router-link to= /myconversation class="icon">
          <td class="icons">
            <img class="iconImg" v-bind:src=conversationsImg>
          </td>
        </router-link>
        <router-link to="/myprojects" class="icon">
          <td class="icons">
            <img class="iconImg" v-bind:src=projectsImg>
          </td>
        </router-link>
        <router-link to="/myqnas" class="icon">
          <td class="icons">
            <img class="iconImg" v-bind:src=qnaImg>
          </td>
        </router-link>
        <router-link to="/mylearnmaterial" class="icon">
          <td class="icons">
            <img class="iconImg" v-bind:src=learnmaterialImg>
          </td>
        </router-link>
        <router-link to="/mytodolist" class="icon">
          <td class="icons">
            <img class="iconImg" v-bind:src=todolistImg>
          </td>
        </router-link>
        <router-link to="/mygames" class="icon">
          <td class="icons">
            <img class="iconImg" v-bind:src=gameImg>
          </td>
        </router-link>
        </tr>
      </table>
    </div>  
</template>

<script>
export default {
  data(){
    return {
      homeImg: require("@/assets/homeImg.png"),
      profileImg: require("@/assets/profileImg.png"),
      friendsImg: require("@/assets/friendsImg.png"),
      conversationsImg: require("@/assets/conversationsImg.png"),
      projectsImg: require("@/assets/projectsImg.png"),
      qnaImg: require("@/assets/qnaImg.png"),
      learnmaterialImg: require("@/assets/learnmaterialImg.png"),
      todolistImg: require("@/assets/todolistImg.png"),
      gameImg: require("@/assets/gameImg.png"),
            }
          },
   methods: {
    homeClick(){
      this.login = false;
      this.$emit('homeClick',this.login)  
    }
  },
  props: 
    {
        datacharacter:Object,   
    },
}
</script>

<style scoped>

.inventarContainer{
  display: flex;
  justify-content: left;
  align-items: center;
  position: absolute; 
}

.inventarBar{
  border-radius: 5px;
  background-color: none;
  left:0;
  overflow: auto;
  margin-top: 50px;
  margin-bottom: 50px;
}

.icon {
  height: 100%;
  width: 100%;
  background-color: #838181;
  border:solid #000000 3px;
  border-radius: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 5px;
}

.icons{
  height: 100%;
  width: 100%;
  display:flex;
  justify-content: center;
  align-items: center;
}

.icon:hover {
  background-color: #ce8c4a;
  border:solid #6b461b 3px;
}

.iconImg {
  height: 70%;
  width: 70%;
}

/* Active-class in router file*/ 
.iconActive{
  border:solid #ee8a17 3px;
  background-color: rgb(236, 170, 109);
}
@media screen and (max-height: 199px) {
  .icon {
    height: 30px;
    width: 30px;
  }
}
@media screen and (min-height: 200px) {
  .icon {
    height: 50px;
    width: 50px;
  }
}
@media screen and (min-height:400px) {
  .icon{
    height: 55px;
    width: 55px;
  }
}
@media screen and (min-height:600px) {
  .icon{
    height: 60px;
    width: 60px;
  }
}
@media screen and (min-height: 800px) {
  .icon{
    height: 80px;
    width: 80px;
  }
}
@media screen and (min-height: 800px) {
  .icon{
    height: 120px;
    width: 120px;
  }
}

::-webkit-scrollbar{ 
  width:0px;
}
</style>