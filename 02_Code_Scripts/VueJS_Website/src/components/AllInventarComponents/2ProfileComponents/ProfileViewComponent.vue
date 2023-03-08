<template>
       <div class="outerbiography">
        <div class="biography">
            <div class="profileIMGBorder">
                <img class="profileIMG" :src="profilePictureImg" alt="">
            </div>
            <div class="underbiography">
                <div class="inf1">Name : {{ Name }}</div>
                <br>
                <div class="inf1">Vorname :  {{ Vorname }} </div>
                <br>
                <div class="inf1">Schule : {{Schule}} </div>
                <br>
                <div class="inf1">Geschlecht : {{Geschlecht}}</div>
                <br>
                <div class="inf1">Eintrittsdatum : {{ Eintrittsdatum }}</div>
            </div>
            <div class="infIMG">
                <img class="flagInProfile" :src="flagImg" alt="">
            </div>
        </div>  
       </div> 
    
</template>

<script>


export default {
  data(){
    return {
        profilePictureImg: require("@/assets/Profilpictures/profilePicture (1).jpg"),
        flagImg: require("@/assets/Flaggen/Visp_flag.png"),
        Name : "Mustermann",
        Vorname: "Max",
        Schule: "Bfo Visp",
        Geschlecht: "Mann",
        Eintrittsdatum: "12.05.2024"

    }
  }
}
</script>

<style>

.pictureborder {
    display:block;
    width: 100%;
    height: 200px;
    display : flex; 
    justify-content: center;
    align-items: center;
}
.profileIcon{
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgb(148, 144, 141);
    height: 150px;
    width: 150px;
    border: solid black 2px;
    border-radius: 100%;
}
.outerbiography {
    display: flex;
    justify-content: center;
    align-items: center;
    
}
.profileIMGBorder{
    margin: 20px;
}
.profileIMG {
    border: solid black 1px;
    border-radius: 20px;
    width: 150px;
    height: 150px;
}
.biography {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgb(148, 144, 141);
    float: bottom;
    height: 100px;
    width: 90%;
    margin: 5px 5px 5px 5px;
    border: solid black 2px;
    border-radius: 5px;
    height: 300px;
}
.flagInProfile{
    height: 35px;
    width: 35px;
}
.inf1 {
    display: flex;
    align-items: center;
    margin: 10px;
    
}
.infIMG {
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
    width: 50px;
    border:solid black 1px;
    border-radius: 100%;
    top: -30px;
    left: 95%;
    background-color: rgb(148, 144, 141);
}



</style>