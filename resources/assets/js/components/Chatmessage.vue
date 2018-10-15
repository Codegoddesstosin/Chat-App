<template>
	<div>
     <p>{{ message.message }} </p>
     <small>{{ message.user.name }} </small>
   </div>

</template>

<script>

	export default {

	   //accept message properties from message in message
       props: ['message']
	
	}


</script>

<style lang="css">

.chat-message {
	padding: 1rem;
}

.chat-message > p {
	margin-bottom: .5rem;
}

</style>