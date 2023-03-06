<template>
    <div class="outerContainerConversations">
        <div class="vornameAndNachnameConversations">
            {{ dataCharacterConversations.Vorname }}  {{ dataCharacterConversations.Nachname }}
        </div>
        <div class="profileAndMessageConversations">
            <div class="iconProfileOfConversations">
                <img class="profilePictureImg" :src="dataCharacterConversations.profilePictureImg" alt="">
            </div> 
            <div class="underContainerConversations">
                {{ dataCharacterConversations.message }}
            </div>
        </div> 
            <div class="dateConversations">
                {{ dataCharacterConversations.date }}
            </div>
    </div>
</template>

<script>
export default {
            props: 
            {
                dataCharacterConversations:Object,   
            }
        }
</script>

<style>

.outerContainerConversations{
    margin: 10px;
}

.vornameAndNachnameConversations {
    display: block;
    width: 150px;
    border: solid black 2px;
    border-radius: 5px;
    background-color: rgb(148, 144, 141);
}
.profileAndMessageConversations{
    display: flex;
    align-items: center;
}
.iconProfileOfConversations {
    border: solid black 2px;
    height : 50px;
    width: 50px;
    border-radius: 100%;
    background-color: rgb(148, 144, 141);
    margin: 10px;
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
    overflow: hidden;
}
.dateConversations {
    width: 100px;
    border: solid black 1px;
    border-radius: 5px;
    background-color: rgb(148, 144, 141);
    margin-left: 80%;
}

</style>