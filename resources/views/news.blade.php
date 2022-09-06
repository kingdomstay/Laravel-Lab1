<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <title>Новости</title>
</head>
<body>
@include("components.header")
<div class="container">
    <h1 class="mt-5 pb-2">Новости</h1>
    @foreach($news as $newsItem)
        <div class="card w-100 mb-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$newsItem['title']}}</h5>
                <p class="card-text">{{$newsItem['content']}}</p>
                <a href="/news/{{$newsItem['id']}}" class="btn btn-primary">Читать</a>
            </div>
        </div>
    @endforeach
</div>
@include("components.footer")
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
