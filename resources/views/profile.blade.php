<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/main.css')}}">
    <title>Профиль пользователя {{$user->nickname}}</title>
</head>
<body>
    <div class="wrapper">
        <main class="main-content">
            <div class="my-profile">
                <h2 class="heading">Мой профиль</h2>
                <div class="profile">
                  <div class="avatar">
                    <img src="{{asset($user->avatar)}}" alt="Аватар" class="avatar__pic">
                  </div>
                  <div class="information">
                    <div class="nickname">{{$user->nickname}}</div>
                    <div class="user-name">
                      <span class="name">{{$user->name}}</span>
                      <span class="surname">{{$user->surname}}</span>
                    </div>
                    <a href='tel:{{$phoneLink}}' class="phone">{{$user->phone}}</a>
                  </div>
                </div>
              </div>
        </main>
      </div>
</body>
</html>