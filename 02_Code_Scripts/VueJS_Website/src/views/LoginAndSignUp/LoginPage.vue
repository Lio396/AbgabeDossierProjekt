<template>
  <div class="login">
    <div class="externdiv"></div>
    <div class="containerLogin">
      <div class="uppercontainer">
        <h2>Login Form</h2>
      </div>
      <div class="inputgroup">
        <label for="uname"><b>Username or Email</b></label>
        <input type="text" placeholder="Enter Username or Email" name="uname" required v-model="this.loginUsername">
      </div>

      <div class="inputgroup">
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required v-model="this.loginUserpassword">
      </div>
      

      <div class="inputgroup">
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
        <button class="loginbtn" type="submit" @click="signin()">Login</button >
      </div>

      <div class="undercontainer">
        <routerLink to="/signUp" class="newaccountbtn">
          Ich habe kein Account!
        </routerLink>
        <button class="forgotbtn">Passwort vergessen?</button>
      </div>
    </div>
    <div class="externdiv"></div>
  </div>
</template>
  
<script>
export default {
  data() {
    return {
      logedIn:false,
      loginUsername: undefined,
      loginUseremail: undefined,
      loginUserpassword: undefined,
      logindataDB:[]
    }
  },

  methods: {

    signin() {
      fetch("http://localhost:8000/api/users")
        .then((response) => response.text())
        .then((data) => {
          this.logindataDB = JSON.parse(data);
          this.logindataDB.forEach((element) => {
          
            if (
              element.user_name == this.loginUsername ||
              element.user_email == this.loginUseremail &&
              element.user_pw == this.loginUserpassword
            ) { 
              window.location.href = "/home";
              sessionStorage.setItem("username", this.loginUsername);
              sessionStorage.setItem("userid", element.id);
              this.logedIn=true;
              
            }
          });
        });
    },
  }
}

</script>
  
  <!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
:root {
  --colorgradient1: rgba(180, 107, 58, 0.979);
  --colorgradient2: rgb(106, 112, 148);
  --colorgradient3: rgb(192, 140, 92);
}

template {
  color: black;
}

.login {
  display: flex;
  justify-content: center;
}

.externdiv {
  width: 33%;
}

input[type=text],
input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 20px 0;
  display: inline-block;
  border: 2px solid black;
  box-sizing: border-box;
  border-radius: 5px;
}

.inputgroup {
  margin-top: 20px;
}

.button:hover {
  opacity: 0.8;
}

.uname {
  width: 100px;
}

.containerLogin {
  height: 500px;
  width: 300px;
  padding: 20px;
  border: solid black 3px;
  border-radius: 50px;
  background-image: linear-gradient(90deg, var(--colorgradient2), var(--colorgradient1));
  margin-top: 100px;
}

.uppercontainer {
  background-color: none;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-left: 10px;
}

.undercontainer {
  display: flex;
  justify-content: space-evenly;
  margin-top: 20px;
}

.loginbtn {
  background-color: #e4c777;
  padding: 14px 20px;
  margin: 20px 0;
  cursor: pointer;
  width: 100%;
  color: black;
  border: solid #ebb521 2px;
  border-radius: 5px;
}

.loginbtn:hover {
  border: solid #000000 2px;
}

.forgotbtn {
  padding: 5px;
  width: 40%;
  background-color: #f47c36;
  border: solid #834b16 2px;
  border-radius: 5px;
  opacity: 0.3;
}

.forgotbtn:hover {
  opacity: 1;
}

.newaccountbtn {
  padding: 5px;
  width: 40%;
  background-color: #378d14;
  border: solid #19501d 2px;
  border-radius: 5px;
  opacity: 0.3;
  text-decoration: none;
  text-align: center;
}

.newaccountbtn:hover {
  opacity: 1;
  color: #000000;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }

  .cancelbtn {
    width: 100%;
  }
}</style>