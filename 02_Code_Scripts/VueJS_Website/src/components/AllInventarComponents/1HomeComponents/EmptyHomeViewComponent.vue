<template> 
<div >
  <input class="inputForPost" type="text" placeholder="Tippe deine Meinung ein !">
</div> 
</template>

<script>
    export default {
        }
</script>
<style>
.inputForPost {
    background-color: rgb(250, 192, 120);
}
.inputForPost:focus{
    border:solid rgb(97, 70, 36) 3px;
    background-color: rgb(168, 120, 62);
}
.inputForPost::placeholder {
  color: rgb(20, 20, 20);
  opacity: 1; /* Firefox */
}
</style>


