<template>
    <div class="conversationContainer">
      <div class="conversationIconBorder">
        <div class="conversationIcon">
          <img :src="conversationsImg" alt="">
        </div>
      </div>
      <div class="conversationComponents" v-for="littleCharacterConversations in characterConversations"  :key="littleCharacterConversations.ID.toFixed">
        <router-link class="routerlinkConversationsViewComponent" to=""><ConversationsViewComponent class="ConversationsViewComponent" :dataCharacterConversations="littleCharacterConversations"/></router-link>
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
      characterConversations: [
              {
              ID:1, 
              Vorname: "Michael",
              Nachname: "Bodenmatter",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (1).jpg"), 
              message: "Häsch dü letsch mal gseh was passiert isch?",
              date: "05.05.2022"
              },
              {
              ID:2, 
              Vorname: "Anton",
              Nachname: "Felix",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (2).jpg"), 
              message: "Hätten Sie mal Zeit eine Diskussion durchzuführen?",
              date: "12.05.2022"
              },
              {
              ID:3,
              Vorname: "Brigitte",
              Nachname: "Geiger",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (3).jpg"), 
              message: "Dü verzählsch mer nur gugus!",
              date: "16.06.2022"
              },
              {
              ID:4,
              Vorname: "Michaela",
              Nachname: "Bodenmatter",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (4).jpg"), 
              message: "Hängesch zit moru?",
              date: "02.08.2022"
              },
              {
              ID:5, 
              Vorname: "Anton",
              Nachname: "Felix",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (5).jpg"), 
              message: "Ja, cool fer dich!",
              date: "12.08.2022"
              },
              {
              ID:6, 
              Vorname: "Tom",
              Nachname: "Fischermann",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (6).jpg"), 
              message: "Hätten Sie mal Zeit eine Diskussion durchzuführen?",
              date: "20.08.2022"
              },
              {
              ID:7,
              Vorname: "Karl",
              Nachname: "Kohlenstrauss",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (7).jpg"), 
              message: "Molestias perferendis dicta reprehenderit sit ratione. Quia animi dicta, id excepturi molestiae fuga laudantium recusandae vel! Unde velit placeat officia consectetur nulla eveniet ullam deserunt eaque at dolor cupiditate, perspiciatis, obcaecati minima asperiores tenetur aliquam quaerat sit repudiandae. Aperiam, quos? Quisquam, officia magnam iusto deleniti expedita, culpa, magni labore quasi asperiores itaque esse sint eligendi voluptatibus temporibus. Dolore deleniti magni velit maiores qui molestias exercitationem blanditiis cumque, consequuntur, facere quos sequi suscipit enim recusandae corrupti a ex magnam, commodi sapiente. Asperiores tenetur voluptatibus officia sunt, reiciendis exercitationem quo quam aperiam iusto! Odit reprehenderit tempora unde! Impedit neque doloribus delectus placeat fuga asperiores dolores. Obcaecati ad debitis sit cupiditate aspernatur dignissimos voluptatem commodi unde ipsam qui molestias nesciunt libero, laudantium beatae impedit voluptate error eligendi ducimus laborum similique esse repellendus. Harum quo itaque quod nisi facere obcaecati doloribus repellat corporis, similique placeat natus adipisci suscipit et neque. Ipsam optio sit, facilis similique, nihil dolorem laborum consequatur voluptatum velit nisi, animi quasi repudiandae delectus enim molestiae? Doloribus repudiandae id ea voluptatem sed debitis iure doloremque totam exercitationem. Minima praesentium nulla debitis quaerat, et unde repudiandae, facere iure impedit id cumque nihil earum neque numquam explicabo tenetur recusandae nesciunt eligendi minus voluptatibus. Dolores voluptate dolore fugit, nesciunt ipsa nostrum qui cum dicta illo culpa itaque ipsam officia quasi excepturi inventore. Minima, deleniti repellendus veniam tenetur beatae perferendis suscipit eveniet ducimus adipisci hic ullam voluptate aliquam quo ratione pariatur aut delectus culpa porro libero autem praesentium similique fugiat molestias rem! Optio delectus reprehenderit itaque in porro, voluptatum molestias! Temporibus ipsum doloribus soluta reiciendis nihil maiores aspernatur? Voluptatem atque ex dicta accusantium nulla illum, et voluptate totam suscipit commodi! Alias consectetur doloremque et aspernatur minima eaque, id rem voluptate labore aliquam quos explicabo odio dolores! Alias, commodi nihil tempore in labore inventore fuga. Eligendi et quae facilis asperiores nemo culpa esse amet, temporibus magnam repellendus neque sequi necessitatibus officiis quam aperiam reiciendis labore accusamus doloribus fugit ratione reprehenderit voluptatem? Rem iusto facilis neque dolorum? Consequatur quibusdam quas asperiores itaque reiciendis. Quo dolore id est magni? Fugiat quod ipsa nam facilis voluptates architecto quaerat dolorem illo tenetur, ipsum labore iusto iste velit modi sint earum laboriosam? Odio voluptatem neque quae quasi possimus fugiat, esse consequatur voluptate nostrum! Possimus deleniti maiores excepturi reiciendis laboriosam nemo, pariatur ipsa sit magnam officiis maxime, itaque animi ea quaerat suscipit nihil illum sapiente, quae incidunt ipsam beatae neque ipsum nostrum porro! Earum, nihil debitis suscipit repellendus nulla quo illo totam, porro harum ducimus nisi odio. Optio officiis eveniet labore, aperiam dolorum recusandae maiores blanditiis sequi error architecto exercitationem in hic. At libero delectus voluptatum blanditiis, autem pariatur error quia, nobis vel consectetur ipsa quisquam repellat beatae reprehenderit velit, unde quas officiis cumque. Aliquid ipsum, nam nulla maxime exercitationem ad itaque repudiandae ratione nemo velit nesciunt corporis atque delectus iure odio! Excepturi nesciunt itaque sunt consequuntur natus?",
              date: "12.09.2022"
              },
              {
              ID:8,
              Vorname: "Roger",
              Nachname: "Steiner",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (8).jpg"), 
              message: "Häsch du än Ahnig, wie die Üfgab geit?",
              date: "15.09.2022"
              },
              {
              ID:9, 
              Vorname: "Miguel",
              Nachname: "Hernandez",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (9).jpg"), 
              message: "Hätten Sie mal Zeit eine Diskussion durchzuführen?",
              date: "18.09.2022"
              },
              {
              ID:10,
              Vorname: "Uan",
              Nachname: "Keiji",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (10).jpg"), 
              message: "Magni ducimus sapiente ipsum amet facere quod molestias perferendis dicta reprehenderit sit ratione. Quia animi dicta, id excepturi molestiae fuga laudantium recusandae vel! Unde velit placeat officia consectetur nulla eveniet ullam deserunt eaque at dolor cupiditate, perspiciatis, obcaecati minima asperiores tenetur aliquam quaerat sit repudiandae. Aperiam, quos? Quisquam, officia magnam iusto deleniti expedita, culpa, magni labore quasi asperiores itaque esse sint eligendi voluptatibus temporibus. Dolore deleniti magni velit maiores qui molestias exercitationem blanditiis cumque, consequuntur, facere quos sequi suscipit enim recusandae corrupti a ex magnam, commodi sapiente. Asperiores tenetur voluptatibus officia sunt, reiciendis exercitationem quo quam aperiam iusto! Odit reprehenderit tempora unde! Impedit neque doloribus delectus placeat fuga asperiores dolores. Obcaecati ad debitis sit cupiditate aspernatur dignissimos voluptatem commodi unde ipsam qui molestias nesciunt libero, laudantium beatae impedit voluptate error eligendi ducimus laborum similique esse repellendus. Harum quo itaque quod nisi facere obcaecati doloribus repellat corporis, similique placeat natus adipisci suscipit et neque. Ipsam optio sit, facilis similique, nihil dolorem laborum consequatur voluptatum velit nisi, animi quasi repudiandae delectus enim molestiae? Doloribus repudiandae id ea voluptatem sed debitis iure doloremque totam exercitationem. Minima praesentium nulla debitis quaerat, et unde repudiandae, facere iure impedit id cumque nihil earum neque numquam explicabo tenetur recusandae nesciunt eligendi minus voluptatibus. Dolores voluptate dolore fugit, nesciunt ipsa nostrum qui cum dicta illo culpa itaque ipsam officia quasi excepturi inventore. Minima, deleniti repellendus veniam tenetur beatae perferendis suscipit eveniet ducimus adipisci hic ullam voluptate aliquam quo ratione pariatur aut delectus culpa porro libero autem praesentium similique fugiat molestias rem! Optio delectus reprehenderit itaque in porro, voluptatum molestias! Temporibus ipsum doloribus soluta reiciendis nihil maiores aspernatur? Voluptatem atque ex dicta accusantium nulla illum, et voluptate totam suscipit commodi! Alias consectetur doloremque et aspernatur minima eaque, id rem voluptate labore aliquam quos explicabo odio dolores! Alias, commodi nihil tempore in labore inventore fuga. Eligendi et quae facilis asperiores nemo culpa esse amet, temporibus magnam repellendus neque sequi necessitatibus officiis quam aperiam reiciendis labore accusamus doloribus fugit ratione reprehenderit voluptatem? Rem iusto facilis neque dolorum? Consequatur quibusdam quas asperiores itaque reiciendis. Quo dolore id est magni? Fugiat quod ipsa nam facilis voluptates architecto quaerat dolorem illo tenetur, ipsum labore iusto iste velit modi sint earum laboriosam? Odio voluptatem neque quae quasi possimus fugiat, esse consequatur voluptate nostrum! Possimus deleniti maiores excepturi reiciendis laboriosam nemo, pariatur ipsa sit magnam officiis maxime, itaque animi ea quaerat suscipit nihil illum sapiente, quae incidunt ipsam beatae neque ipsum nostrum porro! Earum, nihil debitis suscipit repellendus nulla quo illo totam, porro harum ducimus nisi odio. Optio officiis eveniet labore, aperiam dolorum recusandae maiores blanditiis sequi error architecto exercitationem in hic. At libero delectus voluptatum blanditiis, autem pariatur error quia, nobis vel consectetur ipsa quisquam repellat beatae reprehenderit velit, unde quas officiis cumque. Aliquid ipsum, nam nulla maxime exercitationem ad itaque repudiandae ratione nemo velit nesciunt corporis atque delectus iure odio! Excepturi nesciunt itaque sunt consequuntur natus?",
              date: "22.05.2023"
              },
              {
              ID:11,
              Vorname: "Diana",
              Nachname: "Belin",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (11).jpg"), 
              message: "Kein Problem, du kannst mir schreiben wenn du eine weitere Frage hast.",
              date: "23.06.2023"
              },
              {
              ID:12, 
              Vorname: "Alessandro",
              Nachname: "Jonson",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (12).jpg"), 
              message: "Hätten Sie Vorschläge wie man dieses Projekt verbessern könnte?",
              date: "12.08.2023"
              },
              {
              ID:13,
              Vorname: "Brigitte",
              Nachname: "Geiger",
              profilePictureImg: require("@/assets/Profilpictures/profilePicture (13).jpg"), 
              message: "Ora minus magni ducimus sapiente ipsum amet facere quod molestias perferendis dicta reprehenderit sit ratione. Quia animi dicta, id excepturi molestiae fuga laudantium recusandae vel! Unde velit placeat officia consectetur nulla eveniet ullam deserunt eaque at dolor cupiditate, perspiciatis, obcaecati minima asperiores tenetur aliquam quaerat sit repudiandae. Aperiam, quos? Quisquam, officia magnam iusto deleniti expedita, culpa, magni labore quasi asperiores itaque esse sint eligendi voluptatibus temporibus. Dolore deleniti magni velit maiores qui molestias exercitationem blanditiis cumque, consequuntur, facere quos sequi suscipit enim recusandae corrupti a ex magnam, commodi sapiente. Asperiores tenetur voluptatibus officia sunt, reiciendis exercitationem quo quam aperiam iusto! Odit reprehenderit tempora unde! Impedit neque doloribus delectus placeat fuga asperiores dolores. Obcaecati ad debitis sit cupiditate aspernatur dignissimos voluptatem commodi unde ipsam qui molestias nesciunt libero, laudantium beatae impedit voluptate error eligendi ducimus laborum similique esse repellendus. Harum quo itaque quod nisi facere obcaecati doloribus repellat corporis, similique placeat natus adipisci suscipit et neque. Ipsam optio sit, facilis similique, nihil dolorem laborum consequatur voluptatum velit nisi, animi quasi repudiandae delectus enim molestiae? Doloribus repudiandae id ea voluptatem sed debitis iure doloremque totam exercitationem. Minima praesentium nulla debitis quaerat, et unde repudiandae, facere iure impedit id cumque nihil earum neque numquam explicabo tenetur recusandae nesciunt eligendi minus voluptatibus. Dolores voluptate dolore fugit, nesciunt ipsa nostrum qui cum dicta illo culpa itaque ipsam officia quasi excepturi inventore. Minima, deleniti repellendus veniam tenetur beatae perferendis suscipit eveniet ducimus adipisci hic ullam voluptate aliquam quo ratione pariatur aut delectus culpa porro libero autem praesentium similique fugiat molestias rem! Optio delectus reprehenderit itaque in porro, voluptatum molestias! Temporibus ipsum doloribus soluta reiciendis nihil maiores aspernatur? Voluptatem atque ex dicta accusantium nulla illum, et voluptate totam suscipit commodi! Alias consectetur doloremque et aspernatur minima eaque, id rem voluptate labore aliquam quos explicabo odio dolores! Alias, commodi nihil tempore in labore inventore fuga. Eligendi et quae facilis asperiores nemo culpa esse amet, temporibus magnam repellendus neque sequi necessitatibus officiis quam aperiam reiciendis labore accusamus doloribus fugit ratione reprehenderit voluptatem? Rem iusto facilis neque dolorum? Consequatur quibusdam quas asperiores itaque reiciendis. Quo dolore id est magni? Fugiat quod ipsa nam facilis voluptates architecto quaerat dolorem illo tenetur, ipsum labore iusto iste velit modi sint earum laboriosam? Odio voluptatem neque quae quasi possimus fugiat, esse consequatur voluptate nostrum! Possimus deleniti maiores excepturi reiciendis laboriosam nemo, pariatur ipsa sit magnam officiis maxime, itaque animi ea quaerat suscipit nihil illum sapiente, quae incidunt ipsam beatae neque ipsum nostrum porro! Earum, nihil debitis suscipit repellendus nulla quo illo totam, porro harum ducimus nisi odio. Optio officiis eveniet labore, aperiam dolorum recusandae maiores blanditiis sequi error architecto exercitationem in hic. At libero delectus voluptatum blanditiis, autem pariatur error quia, nobis vel consectetur ipsa quisquam repellat beatae reprehenderit velit, unde quas officiis cumque. Aliquid ipsum, nam nulla maxime exercitationem ad itaque repudiandae ratione nemo velit nesciunt corporis atque delectus iure odio! Excepturi nesciunt itaque sunt consequuntur natus?",
              date: "17.09.2023"
              },
             
            ],
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
.routerlinkConversationsViewComponent {
  text-decoration: none;
  color: black;
}

  </style>
