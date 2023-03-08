<template> 
<div >
  <input class="inputForPost" type="text" placeholder="Tippe deine Meinung ein !" v-model="this.msg" >
  <button @click="sendmsg()">send</button>
</div> 
</template>

<script>
    export default {
      data(){
        return{
          msg:"",
          
        }
      },
      methods:{
        sendmsg(){
          let date = new Date()
          let t =date.getHours()+":"+date.getMinutes()
          let d = date.getDay()+"."+date.getMonth()+"."+date.getFullYear()
          const data = {
        msg: {
          userid: parseInt(sessionStorage.getItem("userid")),
          message: this.msg,
         time:t ,
         date: d
        },
      };
        fetch("http://localhost:8000/api/message/store", {
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
        }
      }
        }
</script>
<style>
.inputForPost {
    background-color: rgb(250, 192, 120);
}
.inputForPost:focus{
    border:solid rgb(97, 70, 36) 3px;
    background-color: rgb(168, 120, 62);
}
.inputForPost::placeholder {
  color: rgb(20, 20, 20);
  opacity: 1; 
}
</style>


