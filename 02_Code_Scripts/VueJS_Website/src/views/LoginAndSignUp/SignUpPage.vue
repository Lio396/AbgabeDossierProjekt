<template>
  <div class="accountErstellen">
    <div class="containersignUp">
      <div class="uppercontainer">
        <h2>Account erstellen</h2>
      </div>
      <div class="inputgroup">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required v-model="this.RegisterUsername">
      </div>
  
      <div class="inputgroup">
        <label for="psw"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="psw" required  v-model="this.RegisterUseremail">
      </div>

      <div class="inputgroup">
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required v-model="this.RegisterUserpassword">
      </div>

      <div class="inputgroup">
        <label for="psw"><b>Confirm Password</b></label>
        <input type="password" placeholder="Reenter Password" name="psw" required v-model="this.RegisterUserpassword">
      </div>
  
      <div class="undercontainer">
        <div class="btnborder">
          <button class="signUpbtn" @click="signup()">
            Account erstellen
          </button>
        </div>
        <routerLink to="/" class="btnborder">
          <button class="forgotbtn">Zurück zum Login

          </button>
        </routerLink>
      </div>
    </div>
  </div>
     
  </template>
  <script>
  export default {
    data() {
      return {
        RegisterUsername:undefined,
        RegisterUseremail:undefined,
        RegisterUserpassword:undefined
      }
    },
    methods:{
      signup(){
        const data = {
        users: {
          user_name: this.RegisterUsername,
          user_email: this.RegisterUsername,
          user_pw: this.RegisterUserpassword,
        },
      };
        fetch("http://localhost:8000/api/user/store", {
        method: "POST", // or 'PUT'
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(data),
      })
        .then((response) => response.json())
        .then((data) => {
          //Funktion nach erfolgreiches registrieren
          window.location.reload()
          console.log(data)
        })
        .catch((error) => {
          console.error("Error:", error);
        });
      },
    }
  }
  </script>
  
  <!-- Add "scoped" attribute to limit CSS to this component only -->
  <style>

  template {
    color: black;
  }

  .accountErstellen {
    display: flex;
    justify-content: center;
  }
  
  input[type=text],input[type=email], input[type=password] {
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
  
  .containersignUp {
    height: 100%;
    width: 300px;
    padding: 20px;
    border: solid black 3px;
    border-radius: 50px;
    background-image: linear-gradient(90deg,var(--colorgradient2),var(--colorgradient1));
    margin-top: 100px;
  }
  
  .uppercontainer {
    background-color: none;
    display: flex;
    justify-content:space-between;
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
    color:black;
    border:solid #ebb521 2px;
    border-radius: 5px;
    text-decoration: none;
  }
  .signUpbtn {
    background-color: #e4c777;
    padding: 14px 20px;
    cursor: pointer;
    width: 100%;
    color:black;
    border:solid #ebb521 2px;
    border-radius: 5px;
    text-decoration: none;
  }

  .loginbtn:hover {
    border:solid #000000 2px;
  }
  
  .forgotbtn {
    cursor: pointer;
    padding: 14px 20px;
    width: 100%;
    background-color: #f47c36;
    border:solid #834b16 2px;
    border-radius: 5px;
    opacity: 0.3;
  }
  .forgotbtn:hover {
    opacity: 1;
  }
  .btnborder {
    width:40%;
  }
  .btnborder:hover {
    opacity: 0.8;
  }
  </style>