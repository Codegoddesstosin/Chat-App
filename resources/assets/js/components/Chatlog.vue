<template> 
	<div class="chat">

		<img class ="profile-img" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a3fa46375259c39d07d0227e8ade6daa&auto=format&fit=crop&w=500&q=60"> 

		<Chatmessage v-for="message in messages" v-bind:message="message"></Chatmessage>

		<div class="empty" v-show="messages.length === 0"> Nothing here yet</div>
	
	</div>

</template>

<script>
  export default {
    //accept messages from message properties from App.js 
  	props: ['messages']

  }

</script>


<style>

  .chat {
    background: url("/img/pic.png");
    background-repeat: repeat;
    background-position: left top;
  }

  .profile-img {
      max-width:100px;
      border:5px solid #fff;
      border-radius:100%;
       position: relative;
      box-shadow: 0 2px 2px rgba(0, 0, , 0.3);
  }

/* Agent Bio */
.agentBio {
  font-size: .93em;
  opacity: .7;
  text-align: center;
  margin-right: 50%; 
  text-shadow: 0 1px 1px rgba(0,0,0,.2);
}

</style>