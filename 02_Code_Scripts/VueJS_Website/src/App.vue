<template>
  <div class="inventarBar">
    <div class="header">
      <LHeader @inventar="inventarEvent" @login="loginEvent" @return="returnEvent"/>
    </div>
    <div id="inventarComponent" class="inventarComponent">
        <InventarComponent :inventar=this.inventar v-if="inventar" @homeClick="homeEvent"/>   
    </div>
    <div class="components">
      <LoginPage  :login=this.login v-if="login"/>
      <SignUpPage :signUp=this.signUp v-if="signUp"/>
    </div>
  </div>
  <div class="view">
    <router-view  v-if="!login" class="modeActivated"/>
  </div>
</template>

<script>
import LHeader from './components/Header/LHeader.vue';
import InventarComponent from './components/Inventar/InventarComponent.vue';
import LoginPage from '@/views/LoginAndSignUp/LoginPage.vue';
import SignUpPage from '@/views/LoginAndSignUp/SignUpPage.vue';

export default {
    data() { 
        return {
          inventar: false,
          login: false,
          signUp: false
        }
    },
    components: {
      LHeader,
      InventarComponent,
      SignUpPage,
      LoginPage
    },
    methods : {
      inventarEvent(inventar){
        this.inventar = inventar;
      },
      loginEvent(login){
        this.login = login;
      },
      returnEvent(login){
        this.login = login;
      },
      homeEvent(login){
        this.login=login;
      }
    }
  }
</script>

<style>
.inventarBar {
  color: white;
}
.header {
  z-index: 2;
}
.inventarComponent {
  z-index: 3;
}
.view {
  margin-top: 50px;
  z-index: 10;
}
.components {
  display: flex;
  justify-content: center;
}
.modeActivated {
  position: static;
}


/*#inventarComponent{
  display: none;
}*/
</style>