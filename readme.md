

## Laravel

### Тестовое задание от Мультимедиа Холдинг

Используя laravel 5.8, angularjs 1.7.8 и swiperjs.com 
Реализовать горизонтальный слайдер на странице в форме директивы angularjs с изображениями из базы данных. 
- "+" модель для изображений 
- "+" изначальное количество изображений в слайдере 10 
- "+" размер каждого изображения 300x300 
(реализовано с помощью пакета при загрузке изображения на сервер)
- "+" ленивая подгрузка из api при свайпе влево 
- "+" подгрузка не должна ощущаться 
- "+" сборка стилей и скриптов с помощью gulp (laravel elixir + mix) 
(пришлось помучаться с реализацией, устаревший вариант сборки и несовместим node.js 12+ , 
решение: https://timonweb.com/javascript/how-to-fix-referenceerror-primordials-is-not-defined-error/)
- "+" подключение с помощью
elixir ```<link rel="stylesheet" href="{{ elixir('css/all.css') }}"> <script src="{{ elixir('js/app.js') }}"></script>```

Дамп базы для демонстрации в папке sql
