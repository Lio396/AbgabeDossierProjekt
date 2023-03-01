<template>
    <div class="conversationContainer">
      <div class="conversationIconBorder">
        <div class="conversationIcon">
          <img :src="conversationsImg" alt="">
        </div>
      </div>
      <div class="conversationComponents">
        <ConversationsViewComponent/>
        <ConversationsViewComponent/>
        <ConversationsViewComponent/>
        <ConversationsViewComponent/>
      </div>
    </div>
  </template>

<script>
// @ is an alias to /src

import ConversationsViewComponent from '@/components/AllInventarComponents/4ConversationsComponents/ConversationsViewComponent.vue'

export default {
  data(){
    return {
      conversationsImg: require("@/assets/conversationsImg.png"),
    }
  },
  components: {
    ConversationsViewComponent
  }
}
</script>

  <style >
  /*.container*/
  .conversationContainer{
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
.conversationIconBorder {
  display: flex;
  justify-content: center;
  align-items: center;
}
.conversationIcon {
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
