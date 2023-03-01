<template> 
<div class="Postcontainer">
    <div class="Post">
        <div class="photoPlacement">
            <img class="profilePictureImg" :src="profilePictureImg4" alt="">
        </div>
        <div class="typeOfPost">
            <img class="profilePictureImg" :src="projectsImg" alt="">
        </div>
        <div class="post" >
            {{posts.post1}}
        </div>
        <div class="points">
            {{points}}
        </div>
        <div class="dateAndHour">
            {{date}}
        </div>
    </div>  
</div>
    
</template>

<script>
    export default {
       data() {
            return {
                profilePictureImgs : [ 
                        {profileimgID:1,profilePictureImg1: require("@/assets/Profilpictures/profilePicture (1).jpg")},
                        {profileimgID:2,profilePictureImg2: require("@/assets/Profilpictures/profilePicture (2).jpg")},
                        {profileimgID:3,profilePictureImg3: require("@/assets/Profilpictures/profilePicture (3).jpg")},
                        {profileimgID:4,profilePictureImg4: require("@/assets/Profilpictures/profilePicture (4).jpg")},
                        {profileimgID:5,profilePictureImg5: require("@/assets/Profilpictures/profilePicture (5).jpg")},
                        ],

                        projectsImg: require("@/assets/projectsImg.png"),

                posts : [
                        {postid:1,post1:"Ich habe heute gut geschlafen! "},
                        {postid:2,post2:"Ich habe heute schlecht geschlafen! "},
                        {postid:3,post3:"Ich habe heute ausreichend geschlafen! "}
                        ],

                        points: 78,

                        date : "17.12.2009 15:34",
                }
            }
        }
</script>

<style>

.Post{
    /*div-position*/
    position: relative;
    background-color: rgb(250, 192, 120);
    /*text-position*/
    display: flex;
    align-items: center;
    justify-content: center;
    /*size*/
    height: 200px;
    width: 100%;
    /*margins*/ 
    margin-top:20px;
    /*borders*/ 
    border: solid rgb(75, 66, 66) 1px;
    border-radius: 5px;
}

.photoPlacement {
    /*div-position*/
    position:absolute;
    /*text-position*/
    display: flex;
    align-items: center;
    justify-content: center;
    /*margins*/
    top: -45px;
    left: -45px;
    /*borders*/ 
    border: solid black 2px;
    border-radius: 100%;
    /*size*/ 
    width: 70px;
    height: 70px;
    /*colors*/
    background-color: rgb(148, 144, 141);
}
.profilePictureImg {
    height:100%;
    width:100%;
    border-radius: 100%;
}
.post {

}

.typeOfPost {
    /*div-position*/
    position:absolute;
    /*text-position*/
    display: flex;
    align-items: center;
    justify-content: center;
    /*margins*/
    top: -20px;
    right: -20px;
    /*borders*/ 
    border: solid black 2px;
    border-radius: 100%;
    /*size*/ 
    width: 30px;
    height: 30px;
    /*colors*/
    background-color: rgb(148, 144, 141);
}

.points {
    /*div-position*/
    position:absolute;
    /*text-position*/
    display: flex;
    align-items: center;
    justify-content: center;
    /*margins*/
    bottom: -20px;
    left: -20px;
    /*borders*/ 
    border: solid black 2px;
    border-radius: 100%;
    /*size*/ 
    width: 30px;
    height: 30px;
    /*colors*/
    background-color: rgb(148, 144, 141);
    color: black;
}

.dateAndHour {
    /*div-position*/
    position:absolute;
    /*text-position*/
    display: flex;
    align-items: center;
    justify-content: center;
    /*borders*/
    border-top :solid rgb(75, 66, 66) 1px;
    border-left: solid rgb(75, 66, 66) 1px;
    border-top-left-radius: 5px;
    /*margins*/
    bottom: 0;
    right: 0;
    /*size*/ 
    width: 200px;
    height: 20px;
}


</style>