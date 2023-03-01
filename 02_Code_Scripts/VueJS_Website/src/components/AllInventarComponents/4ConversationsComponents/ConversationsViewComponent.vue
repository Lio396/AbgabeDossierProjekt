<template>
    <div class="outerContainerConversations">
        <div class="iconProfileOfConversations">
            <img class="profilePictureImg" :src="profilePictureImg3" alt="">
        </div> 
        <div class="underContainerConversations">
            {{ conv }}
        </div>
    </div>
</template>

<script>
export default {
 data() {
            return {
                profilePictureImg1: require("@/assets/Profilpictures/profilePicture (1).jpg"),
                profilePictureImg2: require("@/assets/Profilpictures/profilePicture (2).jpg"),
                profilePictureImg3: require("@/assets/Profilpictures/profilePicture (3).jpg"),
                profilePictureImg4: require("@/assets/Profilpictures/profilePicture (4).jpg"),
                profilePictureImg5: require("@/assets/Profilpictures/profilePicture (5).jpg"),

                projectsImg: require("@/assets/projectsImg.png"),
                conv : "Häsch du letsch mal gseh was passiert isch",
                points: 78,
                date : "17.12.2009 15:34",
                }
            }
        }
</script>

<style>

.outerContainerConversations{
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 10px;
}
.outerContainerConversations:hover {
    opacity: 0.7;
}

.iconProfileOfConversations {
    border: solid black 2px;
    height : 50px;
    width: 50px;
    border-radius: 100%;
    background-color: rgb(148, 144, 141);
}
.underContainerConversations{
    /*borders*/ 
    margin-left: 10px;
    border: solid black 2px;
    border-radius: 5px;
    /*size*/ 
    height: 50px;
    width: 400px;
    /*colors*/
    background-color: rgb(148, 144, 141);
}

</style>