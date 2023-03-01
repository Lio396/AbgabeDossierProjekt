<template>
    <div class="outerContainerConversations">
        <div class="iconProfileOfConversations">

        </div> 
        <div class="underContainerConversations">
  
        </div>
    </div>
</template>

<script>

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