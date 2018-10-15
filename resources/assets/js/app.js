
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('Chatmessage', require('./components/Chatmessage.vue'));
Vue.component('Chatlog', require('./components/Chatlog.vue'));
Vue.component('Chatcomposer', require('./components/Chatcomposer.vue'));
Vue.component('Powered', require('./components/Powered.vue'));

const app = new Vue({
    el: '#app',

     data : {

     	messages: [],
      usersInRoom: []

     },
     methods: {

     	addMessage(message) {

     		//Add to existing messages
     		this.messages.push(message);
     		console.log('message added');


     		//persist to the database
            
        axios.post('/messages', message)
        .then(response => {
          console.log('persisted');
        })

          //.catch(error => {

          //})
     	}
     },

     created () {

          //when created get messages 
          axios.get('/messages')
          .then(response => {
             this.messages = response.data;
          });

           //presence channel
          Echo.join('chatroom')
           .here((users) => {
               this.usersInRoom = users;
           })
              
              //who joins
            .joining((user) => {
                this.usersInRoom.push(user);

           })

          //who leaves
          .leaving((user) => {
             this.usersInRoom = this.usersInRoom.filter(u => u!=user )
          })
               //listen for the message posted event
           .listen('Messageposted', (e) => {
                this.messages.push({
                    message: e.message.message,
                    user: e.user

                });
               ///handle event
              
           });
     },

    

});
