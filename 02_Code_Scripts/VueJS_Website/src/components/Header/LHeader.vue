<template>
  <div class="menubarcontainer">
    <div class="menubar">
    <div v-if="login">
      <!--div for getting the loginbtn to the right-->
    </div>
    <div class="InventarbtnApp" v-if="!login" @click="inventarClick()">
      Inventar
    </div>
    
    <div class="languageAndLoginButton">
        <img class="languageFlag" :src="languageimg1" alt="">
        <routerLink to="/" class="noTextDecoration">
          <p v-if="logedIn"> eingeloggt als {{this.username}}</p>
          <div class="loginbtnApp" v-if="!login">
            Login 
          </div>
        </routerLink>
      </div>
    </div>
        <div class="languageMenu">
          sdfe
        </div>
  </div>
  
  
</template>

<script>
export default {
  data() {
    return {
      username:sessionStorage.getItem("username"),
      languageimg1 : require("@/assets/languages/german.png"),
      language: [
        {languageID:1,languageimg:require("@/assets/languages/german.png")},
        {languageID:2,languageimg:require("@/assets/languages/french.png")},
        {languageID:3,languageimg:require("@/assets/languages/english.png")},
        {languageID:4,languageimg:require("@/assets/languages/italian.png")}
    ],
      returnImg: require("@/assets/return.png")
    }
  },
 
  methods: {
    inventarClick:function() {
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
.menubarcontainer {
  position: relative;
}
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
.InventarbtnApp {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #e4c777;
  cursor: pointer;
  width: 90px;
  height: 80%;
  color: black;
  margin: 20px;
  border: solid #ebb521 2px;
  border-radius: 5px;
}
.noTextDecoration {
  text-decoration: none;
}
.languageAndLoginButton {
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  margin: 40px;
  width: 150px;
  height: 100%;
}
.languageFlag {
  height: 30px;
}
.languageFlag:hover {
  opacity: 0.7;
}
.loginbtnApp {
  display: flex;
  justify-content: center;
  align-items: center;
  text-decoration: none;
  background-color: #e4c777;
  cursor: pointer;
  width: 90px;
  height: 90%;
  color: black;
  margin: 20px;
  padding: 10px;
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
.languageMenu {
  position: absolute;
  top: 0;
  left: 0;
  background-color: #838181;
  width: 150px;
  height: 20px;
  border: solid #000000 2px;
}
</style>