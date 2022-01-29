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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  crossorigin="anonymous">

</head>
<body>


    <div class="container" >
        <div class="row" id="app">

            <div class="offset-4 col-4 offset-sm-1 col-sm-10">
                <li class="list-group-item active">chat Room
                    <span class="badge badge-pill badge-danger">@{{ numberOfUsers }}</span></li>
                <div class="badge badge-pill badge-primary">@{{ typing }}</div>
                <ul class="list-group" v-chat-scroll>
                    <message
                    v-for="value ,index in chat.message"
                    :key=value.index
                    :color=chat.color[index]
                    :user = chat.user[index]
                    :time = chat.time[index]>

                        @{{ value }}</message>
                </ul>
                    <input type="text" class="form-control"
                     placeholder="type here ..." v-model='message' @keyup.enter='send'>

                <br>
                <a href="" class="btn btn-warning btn-sm" @click="deleteSession">Delete Chats</a>


            </div>


        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

    <script src="{{ mix('js/app.js') }}"></script>

    <style>
        #time{
            font-size:8px;
            margin-top: 10px;
            color: black;

        }
    </style>



</body>
</html>
