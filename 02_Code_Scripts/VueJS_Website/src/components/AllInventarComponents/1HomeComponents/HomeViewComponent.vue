<template> 
<div class="Postcontainer">
    <div class="Post">
        <div class="photoPlacement">
            <img class="profilePictureImg" :src="profilePictureImg1" alt="">
        </div>
        <div class="typeOfPost">
            <img class="profilePictureImg" :src="projectsImg" alt="">
        </div>
        <div class="post" >
            {{ datapoints.post }}
        </div>
        <div class="points">
            {{ datapoints.attributedspoints }}
        </div>
        <div class="dateAndHour">
           
        </div>
    </div>  
</div>
    
</template>

<script>
    export default {
       data() {
            return {
                profilePictureImg1: require("@/assets/Profilpictures/profilePicture (1).jpg"),
                post1:"Ich habe heute gut geschlafen! ",
                projectsImg: require("@/assets/projectsImg.png"),
                }
            },
            props: {
                datapoints:Object
            },
            methods: {
                changeColorPoints() {
                    if (this.attributedspoints == 235) {
                        document.getElementsByClassName("points").style.color = "blue";
                    }
                    if (this.datapoints.attributedspoints > 70) {
                        document.getElementsByClassName("points").style.color = "red";
                    }
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