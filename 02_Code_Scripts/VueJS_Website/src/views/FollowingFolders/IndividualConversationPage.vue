<template>
    <div class="conversationContainer">
      <div class="conversationIconBorder">
        <div class="conversationIcon">
          <img :src="conversationsImg" alt="">
        </div>
      </div>
      <div class="conversationComponents" v-for="littleCharacterConversations in characterConversations"  :key="littleCharacterConversations.ID.toFixed">
        <ConversationsViewComponent class="ConversationsViewComponent" :dataCharacterConversations="littleCharacterConversations"/>
      </div>
    </div>
  </template>

<script>
// @ is an alias to /src

import ConversationsViewComponent from '@/components/AllInventarComponents/4ConversationsComponents/ConversationsViewComponent.vue'

export default {
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
.conversationComponents{
    border: solid rgba(143, 143, 143, 0.267) 1px;
    border-radius: 10px;
    height: 100%;
    margin-top: 30px;
    background-color: rgba(148, 144, 141, 0.185);
}
.conversationComponents:hover {
  opacity: 0.7;
}

  </style>
