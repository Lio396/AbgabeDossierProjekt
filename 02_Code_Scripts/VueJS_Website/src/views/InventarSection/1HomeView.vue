<template>
  <div class="BFOtitel">
    BFO Schule
  </div>
   
    <div class="homeContainer">
       <select name="custom-select" class="dropdown">
        <option value="0">Projekte</option>
        <option value="1">Alles</option>
        <option value="2">Hilfe</option>
        <option value="3">Schule</option>
       </select>
       
      <br>
      
      <div class="homeViewComponent" >  
        <div class="input">
          <EmptyHomeViewComponent class="inputHomeComponent"/>
        </div>
        <div class="home" v-for="littlecharacter in character"  :key="littlecharacter.ID">  
          <HomeViewComponent class="homeComponent" :datacharacter="littlecharacter" urlIsEmptyProp="urlIsEmpty"/>
        </div>
      </div>
    </div>
</template>

<script>
// @ is an alias to /src

import HomeViewComponent from '@/components/AllInventarComponents/1HomeComponents/HomeViewComponent.vue'
import EmptyHomeViewComponent from '@/components/AllInventarComponents/1HomeComponents/EmptyHomeViewComponent.vue'

export default {
  data(){
    return {
      urlIsEmpty:true,
      character: [
              {
              ID:6, 
              Vorname: "Michael",
              Nachname: "Bodenmatter",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (1).jpg"), 
              titel : "Schlaf",
              post:"Ich habe heute schlecht geschlafen !", 
              attributedpoints: 78, 
              date : "17.12.2022 15:34",
              projectsImg: null,
              specialPost:false,
              flagImg: require("@/assets/Flaggen/Brig_flag.png"),
              url: null
              },
              {
              ID:5, 
              Vorname: "Melanie",
              Nachname: "Felix",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (2).jpg"), 
              titel : "Beschwerde",
              post:"Ich habe heute ausreichend geschlafen !", 
              attributedpoints: 235, 
              date : "18.12.2022 12:19",
              projectsImg: null,
              specialPost:false,
              flagImg: require("@/assets/Flaggen/Brig_flag.png"),
              url: null
              },
              {
              ID:4,
              Vorname: "Hans",
              Nachname: "Geiger",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (3).jpg"), 
              titel : "Frage",
              post:"Ich habe heute gut geschlafen! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dolore itaque atque debitis exercitationem amet deleniti dolores quae unde, inventore sequi cum maiores in sed impedit pariatur ut dolorem quam nemo culpa. Facilis ea voluptatibus corrupti officiis, quo quod ipsa voluptate illum, quae omnis numquam facere similique explicabo. Sunt nihil cupiditate fugit? Distinctio, nam modi! Quas, sed reiciendis esse aut iste repellat eius, quis veniam impedit aspernatur porro adipisci minus quaerat laborum culpa mollitia totam omnis aperiam laudantium, hic beatae quae corporis. Adipisci eius molestiae odit atque magni explicabo facilis eos debitis aliquam consectetur voluptate excepturi consequatur, illum repudiandae animi tempora iusto laudantium deserunt tenetur. Nulla sunt, rerum animi atque iure sit a, aspernatur ratione veritatis qui, est numquam officia! Doloribus doloremque ducimus, deserunt rerum eveniet aliquam natus facere tenetur quos laborum eos saepe explicabo dignissimos labore aperiam ipsa fugit, beatae vitae error commodi. Hic laudantium sunt labore aut unde non autem nam. Delectus dolores, mollitia voluptatem unde praesentium doloribus. Aspernatur sunt, animi dolor amet quia, itaque magnam eligendi omnis iste voluptates nulla earum dolorum, obcaecati rem architecto distinctio asperiores qui voluptatem exercitationem explicabo perspiciatis quos voluptate. Corrupti labore maxime deleniti, voluptas nemo velit aliquid quaerat! Mollitia impedit odio in facilis rem fugiat est, accusantium molestiae neque debitis quis. Nam est consequuntur eligendi odio, quam vitae laudantium magni ut at tempore debitis aliquam id nulla illum expedita non eos earum beatae nobis, laborum repellat modi aliquid labore? Alias, porro praesentium recusandae voluptatum sint nisi? Quas voluptates esse corporis optio reiciendis ex velit facere sunt a, beatae eligendi, deserunt neque at totam. Nobis repellat sint delectus, officiis maxime odio autem nostrum explicabo natus aspernatur! Deleniti, ab quam possimus veritatis aspernatur nobis molestias. Quis enim ut, optio obcaecati nisi eum illo perspiciatis officia odit, magni dicta modi inventore aliquam. Sit at perspiciatis, consequatur illo tempore reiciendis provident ad possimus dolor, et aut dicta rem libero mollitia quasi sapiente! Voluptas magni quis, culpa laborum eos itaque explicabo facilis corrupti accusamus, doloribus numquam tempora? Vitae voluptatem aut delectus sit fugit, accusamus, ipsa doloribus quo nihil in sapiente a accusantium earum molestiae et hic libero quasi eligendi dolor, atque error perspiciatis corrupti ad. Eius facere earum cupiditate sed minus nesciunt esse! Dicta laboriosam sapiente molestiae, enim alias facere reiciendis, eligendi tempora, pariatur hic quam sit itaque iste. Molestias ad nesciunt nulla maxime laudantium mollitia praesentium pariatur eius esse nobis eligendi quo perferendis fuga exercitationem, atque quis debitis illum corrupti accusantium, architecto rerum voluptas ut soluta magni! Sunt quas debitis, optio nostrum quibusdam necessitatibus delectus dolore tempora! Ad perferendis quam nulla eaque ex possimus totam similique, minus odit vitae exercitationem molestiae. Aut odit voluptatibus ipsa repudiandae magnam fugit ducimus sunt nisi quibusdam assumenda, dignissimos maxime, a, inventore quod suscipit repellat explicabo accusantium aperiam? Quaerat necessitatibus mollitia natus magni, iure neque qui, repellat modi unde dicta possimus, quibusdam vero eaque impedit consectetur animi similique molestiae a aliquam minima officiis illo nostrum! Consequuntur porro repudiandae officia neque corporis excepturi voluptate quaerat, vero vel! Repellat cupiditate soluta eaque nemo?", 
              attributedpoints: 35, 
              date : "20.12.2022 17:07",
              projectsImg: require("@/assets/qnaImg.png"),
              specialPost:true,
              flagImg: require("@/assets/Flaggen/Visp_flag.png"),
              url: null
              },
              {
              ID:3, 
              Vorname: "Michael",
              Nachname: "Bodenmatter",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (1).jpg"), 
              titel : "Projekt",
              post:"Ich möchte eure Meinung über mein Projekt wissen!",
              attributedpoints: 758, 
              date : "17.12.2022 11:47",
              projectsImg: require("@/assets/projectsImg.png"),
              specialPost:true,
              flagImg: require("@/assets/Flaggen/Brig_flag.png"),
              url:"https://www.youtube.com/embed/watch?v=xJAfLdUgdc4&list=PLjcjAqAnHd1EIxV4FSZIiJZvsdrBc1Xho&ab_channel=WaelYasmina"
              },
              {
              ID:2, 
              Vorname: "Miguel",
              Nachname: "Hernandez",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (9).jpg"), 
              titel : "Schulfragebogen",
              post:"Könnt ihr mir sagen was für wir morgen für Hausaufgaben haben?", 
              attributedpoints: 8, 
              date : "17.02.2023 07:13",
              projectsImg: require("@/assets/qnaImg.png"),
              specialPost:true,
              flagImg: require("@/assets/Flaggen/Visp_flag.png"),
              url:null
              },
              {
              ID:1, 
              Vorname: "Uan",
              Nachname: "Keiji",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (10).jpg"), 
              titel : "Focus",  
              post:"Ich denke wir müssten uns mehr auf die Mathematik Theorien focusieren!", 
              attributedpoints: 78, 
              date : "07.03.2023 00:00",
              projectsImg: null,
              specialPost:false,
              flagImg: require("@/assets/Flaggen/Visp_flag.png"),
              url:null
              }
              ],
             
    }
  },
  components: {
    HomeViewComponent,
    EmptyHomeViewComponent
  },
  props: 
    {
        datacharacter:Object,   
    },
}
</script>

<style>
.BFOtitel{
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  font-size: 60px;
  color: aliceblue;
  margin : 15px 15px 15px 15px;
}


.homeContainer{
  z-index: 1;
  position: relative;
  /*items-position*/
  display: flex;
  justify-content: center;
  /*borders*/ 
  border: solid black 2px;
  border-radius: 25px;
  /*size*/ 
  height: 100%;
  width: 50%;
  /*colors*/
  background-image: linear-gradient(90deg, var(--colorgradient2), var(--colorgradient1));
  /*Margin and Padding*/ 
  padding: 50px;
  z-index: 11;
  margin-left: auto;
  margin-right: auto;
}
.dropdown {
  position: absolute;
  /*Size*/
  width: 120px;
  /*margin*/
  /*colors */ 
  background-color: rgb(216, 216, 216);
  
}
.homeViewComponent {
  width: 100%;

}
.input {
  display: block;
  width: 100%;
  margin-left: auto;
  margin-right: auto;
}
.inputHomeComponent {
  margin: 50px;
}
.home {
  display: block;
  width: 100%;
  margin-left: auto;
  margin-right: auto;
}
.homeComponent {
  
  width: 100%;
  margin-top: 80px;
  
}
</style>
