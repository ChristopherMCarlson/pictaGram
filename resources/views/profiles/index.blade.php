@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-sea1-1.xx.fbcdn.net/v/t1.0-9/s960x960/42441887_1401290713337656_4404062038003810304_o.jpg?_nc_cat=110&_nc_ohc=MPyXDImwYY4AX98P_h1&_nc_ht=scontent-sea1-1.xx&oh=b07139456d3042379c15e923f1eb56fc&oe=5EC84600" alt="" class="rounded-circle" height='150px'>
        </div>
        <div class="col-9 pt-5">
            <div class='d-flex justify-content-between align-items-baseline'>
                <h1>{{$user->username}}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
        <div class='pt-4'><strong>{{$user->profile->title}}</strong></div>
        <div>{{$user->profile->description}}</div>
        <div><a href="http://www.christophermcarlson.com">{{$user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4"><img src="https://scontent-sea1-1.xx.fbcdn.net/v/t1.0-9/486260_223996674400405_443447232_n.jpg?_nc_cat=108&_nc_ohc=8qKy5E3FjMYAX_W8XAw&_nc_ht=scontent-sea1-1.xx&oh=45683fe0c2d5a6cf478196d773a14100&oe=5ED84A27" alt="" class='w-100'></div>
        <div class="col-4"><img src="https://scontent-sea1-1.xx.fbcdn.net/v/t1.0-9/p960x960/32105355_1270253843108011_693731484246212608_o.jpg?_nc_cat=101&_nc_ohc=DzjKw3mYNg0AX8TfUw5&_nc_ht=scontent-sea1-1.xx&_nc_tp=6&oh=3f72327a0a193fc6ae041fd01ab1d93b&oe=5EC2339B" alt="" class='w-100'></div>
        <div class="col-4"><img src="https://scontent-sea1-1.xx.fbcdn.net/v/t31.0-8/p960x960/774515_249515095181896_77874835_o.jpg?_nc_cat=103&_nc_ohc=UcdvNAdZvQ4AX9bOl07&_nc_ht=scontent-sea1-1.xx&_nc_tp=6&oh=789eae8ebcd48f55aaaf842a7a9d623a&oe=5EDAD283" alt="" class='w-100'></div>
    </div>
</div>
@endsection
