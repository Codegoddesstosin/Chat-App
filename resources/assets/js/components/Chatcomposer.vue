<template>
   <div class ="chat-composer">
     <input class="windowb" type ="text" placeholder="start typing something...." v-model="messageText" @keyup.enter="sendMessage">
     
     <button class="btn btn-primary" @click="sendMessage"><i class="fa fa-send" style="font-size:36px"></i></button>	
     
    </div>
</template>

<script>

export default {

	data () {
		 return {
		 	 messageText: ''
		 }
	},

	methods: {
		sendMessage() {
			this.$emit('messagesent', {
               message: this.messageText,
               user: {

               	name: $('.navbar-right .dropdown-toggle').text()
               }

               	 

			});
			console.log(this.messageText);
			this.messageText = '';
		}
	}
}

	
</script>


<style>



.btn-primary {
    color: #f0f0f0;
    background: #0c7c80;
    border: 1px solid #0c7c80;
}
.btn-primary:focus, .btn-primary:hover {
    background: #339fd9;
    border: 1px solid #339fd9;
}







/* Text Area in Input Area */



.windowb {
  height: 30px;
  max-height: 50px;
  min-height: 50px;


   background-color: transparent;


  padding: 8px 75px 8px 10px;
}



</style>