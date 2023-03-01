<template>
    <div class="QaAContainer">
      <div class="QaAIconBorder">
        <div class="QaAIcon">
          <img :src="qnaImg" class="QaAImage" alt="">

        </div>
      </div>
      <QNAsViewComponent/>
    </div>
</template>

<script>
// @ is an alias to /src

import QNAsViewComponent from '@/components/AllInventarComponents/6QNAsComponents/QNAsViewComponent.vue'

export default {
  data(){
    return {
      qnaImg: require("@/assets/qnaImg.png"),
    }
  },
  components: {
    QNAsViewComponent
  }
}
</script>

<style >
/*.container*/
.QaAContainer{
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
.QaAIconBorder {
display: flex;
justify-content: center;
align-items: center;
}
.QaAIcon {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: rgb(148, 144, 141);
  height: 150px;
  width: 150px;
  border: solid black 2px;
  border-radius: 100%;
}
.QaAImage {
  height: 50%;
  width: 50%;
}
</style>