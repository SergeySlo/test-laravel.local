<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/main.css')}}">
    <title>Создать профиль</title>
</head>
<body>
    <div class="wrapper">
        <main class="main-content">
          <div class='edit-profile'>
            <h2 class="heading">Создать профиль</h2>
            <form class='form' id='form' method='POST' enctype='multipart/form-data' action="{{route('login.store')}}">
              <ul class="form__list">
                <li class="form__item">
                  <label class='form__label' for="nickname">Никнейм:</label>
                  <input class='form__input' id='nickname' type="text" name="nickname">
                </li>
                <li class="form__item">
                  <label class='form__label' for="name">Имя:</label>
                  <input class='form__input' id='name' type="text" name="name"> 
                </li>
                <li class="form__item">
                  <label class='form__label' for="surname">Фамилия:</label>
                  <input class='form__input' id='surname' type="text" name="surname">
                </li>
                <li class="form__item">
                  <label class='form__inline-label' for="avatar">Аватар:</label>
                  <input class='form__inline-input' id='avatar' type="file" name="avatar">
                </li>
                <li class="form__item">
                  <label class='form__label' for="phone">Телефон:</label>
                  <input class='form__input' id='phone' type="text" name="phone">
                </li>
                <li class="form__item">
                  <div class="form__title">Пол:</div>
                  <label class='form__inline-label' for="male">Мужской</label>
                  <input class='form__inline-input' name='sex' id='male' type="radio" value="1" checked>
                  <label class='form__inline-label' for="female">Женский</label>
                  <input class='form__inline-input' name='sex' id='female' type="radio" value="0">
                </li>

                <li class="form__item">
                  <label class='form__inline-label' for="showPhone">Я согласен получать email-рассылку</label>
                  <input class='form__inline-input' id='showPhone' type="checkbox" name="mailing" value="1" checked>
                </li>
                <li class="form__item">
                    @csrf
                  <button class='form__button' type="submit">Отправить</button>
                </li>
              </ul>
            </form>
          </div>
        </main>
      </div>
</body>
</html>
