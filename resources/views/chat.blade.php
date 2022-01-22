<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        .list-group{
            overflow: scroll;
            height: 200px;
        }
    </style>
</head>
<body>
    

    <div class="container" >
        <div class="row" id="app">

            <div class="offset-4 col-4">
                <li class="list-group-item active">chat Room</li>

                <ul class="list-group" v-chat-scroll>
                    <message 
                    v-for="value in chat.message"
                    :key=value.index
                    color='success'>
                @{{ value }}</message>
                </ul>
                    <input type="text" class="form-control"
                     placeholder="type here ..." v-model='message' @keyup.enter='send'>
    

            </div>


        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

    <script src="{{ mix('js/app.js') }}"></script>

    


</body>
</html>

{{-- <li class="list-group-item">Dapibus ac facilisis</li>
<li class="list-group-item">Morbi leo risus</li>
<li class="list-group-item">porta ac consectetur</li>
<li class="list-group-item">Vestibulum at eros</li> --}}