




<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token ()}}">
         <script>window.Laravel = {csrfToken:'{{ csrf_token()}}' }</script>

        <title>Laravel</title>

        <!-- Fonts -->
         <link rel="stylesheet" href="css/app.css">

       <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
          <link rel="shortcut-icon" type="image/png" href="img/favicon.png">
        <!-- Fonts -->
        

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>
    <body> 

     <div class="container">
        <div class="chatwindow">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card card-default">
                    <div class="top-bar">
                      <h1>chat</h1>

                      <img class="" src="">
                    </div>

                    <div class="card-body">

                              <div id="app">

          <div>
     

        
         </div>

        <Chatlog :messages="messages"></Chatlog>
        <Chatcomposer v-on:messagesent="addMessage"></Chatcomposer>
        <Powered></Powered>
        
      </div>
                       
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>















  




 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
     <script src=" {{ asset('js/app.js') }}">
     </script>
    

    </body>

<style>
.top-bar {
  background: #666;
  background: url("/img/pexels-photo-126297178.png");
  position: relative;
  overflow: hidden; 
  
}


.top-bar::before {
  content: "";
  position: absolute;
  top: -100%;
  left: 0;
  right: 0;
  bottom: -100%;
  opacity: 0.25;
  background: radial-gradient(white, black);
}



.top-bar > * {
  position: relative;
}

.top-bar::before {
  animation: pulse 1s ease alternate infinite;
}
@keyframes pulse {
  from { opacity: 0; }
  to { opacity: 0.5; }
}

.chatwindow {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  justify-content: space-between;
  background-color: #fff;
  width: 100%;
  height: 100%;
}

</style>
</html>

