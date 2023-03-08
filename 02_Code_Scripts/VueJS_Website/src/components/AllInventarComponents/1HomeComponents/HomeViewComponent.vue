<template>
    <div class="Postcontainer">
        <div class="Post">
            <div class="photoAndNamePlacement">
                <div class="photoPlacement">
                    <img class="profilePictureImg" :src="img" alt="">
                </div>
                <div class="namePlacement">
                    <h2 class="titel">{{ datacharacter.name }}</h2>
                    <img :src="datacharacter.flagImg" alt="" class="flagimg">

                </div>
            </div>
            <div class="typeOfPost" v-if="datacharacter.specialPost">
                <img class="profilePictureImg" :src="img" alt="">
            </div>
            <div class="postAndTitel">
                <h1 class="titel">{{ datacharacter.titel }}</h1>
                <iframe :src="datacharacter.url" v-if="url" width="500px" height="200px" frameborder="0"></iframe>
                <div class="post">{{ datacharacter.msg }}</div>
            </div>
            <div class="points" id="pointsi">
                {{ datacharacter.attributedpoints }}
            </div>
            <div class="dateAndHour">
                {{ datacharacter.date }} - {{datacharacter.time}}
            </div>
        </div>
    </div>
</template>

<script>


export default {
    data() {
        return {
            img: require("@/assets/Profilpictures/profilePicture (1).jpg")
        }
    },
    props:
    {
        datacharacter: Object,
    },
    methods: {
        changeColorPoints() {
            if (this.datacharacter.attributedpoints > 70) {
                document.getElementsByClassName("points").varColor.style.color = "blue"
            }
            else {
                document.getElementsByClassName("points").varColor.style.color = "black"
            }
        }
    },
    // mounted(){
    //     if (this.datacharacter.attributedpoints > 70) {
    //             document.getElementsByClassName("points").varColor.style.color = "blue"
    //         }
    //         else {
    //             document.getElementsByClassName("points").varColor.style.color = "black"
    //         }
    // }
}
</script>

<style>
.Post {
    /*div-position*/
    position: relative;
    background-color: rgb(250, 192, 120);
    /*text-position*/
    /*size*/
    min-height: 200px;
    height: auto;
    width: 100%;
    /*margins*/
    margin-top: 20px;
    /*borders*/
    border: solid rgb(75, 66, 66) 1px;
    border-radius: 5px;
}

.photoAndNamePlacement {
    /*div-position*/
    position: absolute;
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
}

.photoPlacement {
    z-index: 20;
    /*div-position*/
    position: absolute;
    /*borders*/
    border: solid black 2px;
    border-radius: 100%;
    /*size*/
    width: 70px;
    height: 70px;
    /*colors*/
    background-color: rgb(148, 144, 141);
}

.namePlacement {
    z-index: 15;
    position: absolute;
    display: flex;
    justify-content: left;
    align-items: center;
    width: 300px;
    height: 30px;
    font-size: 10px;
    top: 10px;
    left: 50px;
    border: solid black 2px;
    border-radius: 5px;
    background-color: rgb(189, 129, 83);
}

.flaggeborder:hover {
    opacity: 0.7;
}

.flagimg {
    position: absolute;
    top: -20px;
    left: 270px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 60px;
    width: auto;

}

.profilePictureImg {
    height: 100%;
    width: 100%;
    border-radius: 100%;
}

.postAndTitel {}

.titel {
    display: block;
    width: 100%;
    margin: 30px;
}

.post {
    display: flex;
    justify-content: left;
    margin: 40px;
}

.typeOfPost {
    /*div-position*/
    position: absolute;
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
    position: absolute;
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
    position: absolute;
    /*text-position*/
    display: flex;
    align-items: center;
    justify-content: center;
    /*borders*/
    border-top: solid rgb(75, 66, 66) 1px;
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