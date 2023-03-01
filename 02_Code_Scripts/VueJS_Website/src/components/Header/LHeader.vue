<template>
  <div class="menubar">
    <div v-if="login">
      <!--div for getting the loginbtn to the right-->
    </div>
    <div class="loginbtnApp" v-if="!login" @click="inventarClick()">
      Inventar
    </div>
    <routerLink to="/" class="loginbtnApp">
    <div>
      Login 
    </div>
  </routerLink>
    <div class="returnbtn" v-if="login" @click="returnClick()">
      <img class="returnImg" v-bind:src=returnImg alt="">
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      returnImg: require("@/assets/return.png")
    }
  },
 
  methods: {
    inventarClick:function () {
      if(this.inventar == true){
        this.inventar = false
        this.$emit("inventar",this.inventar)
        
      }else{
        this.inventar = true
        this.$emit("inventar",this.inventar)
        
      }
    },
    loginClick:function() {
      this.login = true;
      this.$emit("login",this.login) 
    },
    returnClick:function() {
      this.login = false;
      this.$emit("login",this.login)
      }  
    }
  }
</script>
<style>
.menubar {
  z-index: 500;
  background-image: linear-gradient(90deg, var(--colorgradient2), var(--colorgradient1));
  border-bottom: solid black 2px;
  top: 0;
  left: 0;
  right: 0;
  width: 100%;
  height: 50px;
  position: fixed;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.loginbtnApp {
  text-decoration: none;
  background-color: #e4c777;
  padding: 5px;
  margin: 40px;
  cursor: pointer;
  width: 100px;
  color: black;
  border: solid #ebb521 2px;
  border-radius: 5px;
}

.loginbtnApp:hover {
  opacity: 0.8;
}

.returnbtn {
  width: 35px;
  height: 35px;
  border-radius: 100%;
  background-color: #838181;
  border: solid #000000 2px;
  margin: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  vertical-align: center;
  text-align: center;
  font-size: 20px;
}

.returnImg {
  width: 20px;
  height: 20px;
}

.returnbtn:hover {
  opacity: 0.8;
}
</style>