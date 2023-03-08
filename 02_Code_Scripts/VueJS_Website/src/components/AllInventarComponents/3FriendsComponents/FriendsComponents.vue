<template>
    <div class="outerContainerFriends">
        <div class="iconProfileOfFriends">
            <img class="profilePictureImg" :src="dataCharacterFriends.profilePictureImg" alt="">
        </div> 
        <div class="underContainerFriends">
            <div>{{dataCharacterFriends.Vorname}} - {{dataCharacterFriends.Nachname}}</div>
        </div>
    </div>
       
</template>

<script>
export default{
            props: 
            {
            dataCharacterFriends:Object,   
            },
        }
</script>

<style>
.outerContainerFriends{
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 10px;
}
.outerContainerFriends:hover {
    opacity: 0.7;
}
.iconProfileOfFriends:hover {
    top: -20px;
    left: -20px;
    height: 120px;
    width: 120px; 
}
.iconProfileOfFriends {
    border: solid black 2px;
    height : 50px;
    width: 50px;
    border-radius: 100%;
    background-color: rgb(148, 144, 141);
}
.profileOfFriends {
    height: 30px;
}
.underContainerFriends{
    
    display: flex;
    justify-content: left;
    align-items: center;
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