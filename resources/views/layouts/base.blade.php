<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    {{-- JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <div class="container">
        <h1>T94 - Olá Mundo</h1>
        @yield('content')
        <hr>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus atque adipisci veniam sed fugiat ipsam unde id vel ipsa, ea quo velit. Dignissimos a blanditiis amet ex expedita numquam? Neque?</p>
        <p>Modi esse natus deserunt aspernatur, quidem molestiae neque consequuntur autem sequi pariatur hic quo dignissimos accusantium iste ex veritatis consectetur assumenda doloribus blanditiis perferendis placeat unde dolores. Asperiores, neque iste?</p>
        <p>Quisquam architecto accusamus nisi delectus officia soluta qui impedit ea aut natus saepe velit unde quibusdam voluptates ab placeat, incidunt dicta ex amet ad animi quam aliquid fuga. Quaerat, laboriosam!</p>
        <p>Beatae natus consectetur voluptate, eveniet ducimus harum suscipit quaerat at reprehenderit distinctio voluptatem eum aspernatur dolorum sint animi laborum rem dolor fugiat similique placeat maiores et doloribus? Voluptate, atque ullam.</p>
        <p>Quidem, nobis odio reiciendis distinctio nihil totam veniam quibusdam rerum, obcaecati minus ipsam corrupti necessitatibus doloremque quia eligendi similique dolor aut et fugit quis. Omnis earum reprehenderit molestias ex odit.</p>

    </div>
</body>
</html>
