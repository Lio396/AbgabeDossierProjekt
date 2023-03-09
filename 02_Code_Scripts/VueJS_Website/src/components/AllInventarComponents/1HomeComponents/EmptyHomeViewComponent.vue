<template> 
<div class="Postcontainer">
        <div class="Post">
              <h2 class="titel"></h2>
            <div class="postAndTitel">
                <h1 class="titel"></h1>
                <div class="post">
                  <input class="inputForPost" type="text" placeholder="Tippe deine Meinung ein !" v-model="this.msg" >
                </div>
            </div> 
            <div class="postMessageBorder">
              <button class="postMessagebtn" @click="sendmsg()">Post</button> 
            </div>
        </div>
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
                    time: t,
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
    background-color: rgb(238, 166, 79);
}
.inputForPost:focus{
    border:solid rgb(97, 70, 36) 3px;
    background-color: rgb(168, 120, 62);
}
.inputForPost::placeholder {
  color: rgb(20, 20, 20);
  opacity: 1; 
}
.postMessageBorder{
  display: flex;
  justify-content: center;
  width: 100%;
  
}
.postMessagebtn {
    background-color: #e4c777;
    padding: 14px 20px;
    cursor: pointer;
    width: 15%;
    color:black;
    border:solid #ebb521 2px;
    border-radius: 5px;
    text-decoration: none;
    margin-left: auto;
    margin-right: auto;
    margin: 10px;
  }
</style>


