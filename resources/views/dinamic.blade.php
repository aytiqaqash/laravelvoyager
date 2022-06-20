<!DOCTYPE html>
<html lang="{{ $locale }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>{{$page->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</title>

</head>
<body class="antialiased">
<div class="container-fluid">
    <h1>{{$locale}} | {{$page->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</h1>
{{--    <img src="{{asset('storage/'.$page->image)}}" alt="test">--}}
    <p>{{$page->getTranslatedAttribute('excerpt', $locale, 'fallbackLocale')}}</p>
    {!! $page->getTranslatedAttribute('body', $locale, 'fallbackLocale') !!}

    <div class="row">

        <?php
            switch ($locale){
                case "en": $imageUrl = Storage::url($page->image_en); break;
                case "ru": $imageUrl = Storage::url($page->image_ru); break;
                default: $imageUrl = Storage::url($page->image);
            }
        ?>

        <div class="col-3"></div>
        <div class="col-6"> <img src="{{asset($imageUrl)}}" alt=""></div>
        <div class="col-3"></div>
    </div>
</div>

{{--Bootstrapın js əlavələri--}}
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
