<template>
    <div class="outerContainerFriends">
        <div class="iconProfileOfFriends">
            <img class="profilePictureImg" :src="profilePictureImg5" alt="">
        </div> 
        <div class="underContainerFriends">
            {{ message }}
        </div>
    </div>
       
</template>

<script>
export default{
        data() {
            return {
                profilePictureImg1: require("@/assets/Profilpictures/profilePicture (1).jpg"),
                profilePictureImg2: require("@/assets/Profilpictures/profilePicture (2).jpg"),
                profilePictureImg3: require("@/assets/Profilpictures/profilePicture (3).jpg"),
                profilePictureImg4: require("@/assets/Profilpictures/profilePicture (4).jpg"),
                profilePictureImg5: require("@/assets/Profilpictures/profilePicture (5).jpg"),

                projectsImg: require("@/assets/projectsImg.png"),
                message : "Ich hätte eine Frage bezihungsweise der Rechnung vonasefjweriaogfhaoigrigheqaioghjroiegajhiogharüeäoigharoiehgarueihgbpiuorhreöoiughaseoighraudksöfrghnbaüosduighasdoghasdkpiughbnasdoiguhadsogöia ",
                points: 78,
                date : "17.12.2009 15:34",

                }
            }
        }
</script>

<style>
.outerContainerFriends{
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 10px;
}
.outerContainerFriends:hover {
    opacity: 0.7;
}

.iconProfileOfFriends {
    border: solid black 2px;
    height : 50px;
    width: 50px;
    border-radius: 100%;
    background-color: rgb(148, 144, 141);
}
.underContainerFriends{
    /*borders*/ 
    margin-left: 10px;
    border: solid black 2px;
    border-radius: 5px;
    /*size*/ 
    height: 50px;
    width: 400px;
    /*colors*/
    background-color: rgb(148, 144, 141);
    overflow: hidden;
}

</style>