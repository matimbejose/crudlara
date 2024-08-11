<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:title" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:image" content="https://w3crm.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EP SISTEMAS</title>

    <!-- <title>@yield('title', 'My App')</title> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">

    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/tagify/dist/tagify.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!--/ Inclua o CSS diretamente da pasta public -->
</head>

<body>
    <div id="config" data-web-root="{{ url('/') }}/"></div>`
    <header>
        <!-- Adicione o cabeçalho do seu site aqui -->
        @include('layouts.header')
    </header>

    <main>
        @include('layouts.sidebar')
        @yield('content')
    </main>

    <footer>
        <!-- Adicione o rodapé do seu site aqui -->
        @include('layouts.footer')
    </footer>

    <!-- Inclua o JS diretamente da pasta public -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/scripts/crud.js') }}"></script>
</body>

</html>