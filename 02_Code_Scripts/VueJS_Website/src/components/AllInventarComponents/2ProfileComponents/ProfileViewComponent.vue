<template>
       <div class="outerbiography">
        <div class="biography">
            <div class="underbiography">
                <div class="inf1">Name : {{ Name }}</div>
                <br>
                <div class="inf1">Vorname :  {{ Vorname }} </div>
                <br>
                <div class="inf1">Schule : {{Schule}}</div>
                <br>
                <div class="inf1">Geschlecht : {{Geschlecht}}</div>
                <br>
                <div class="inf1">Eintrittsdatum : {{ Eintrittsdatum }}</div>
            </div>
        </div>
       </div> 
    
</template>

<script>


export default {
  data(){
    return {
        Name : "Mustermann",
        Vorname: "Max",
        Schule: "Bfo",
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
.biography {
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
.inf1 {
    margin: 10px;
}


</style>