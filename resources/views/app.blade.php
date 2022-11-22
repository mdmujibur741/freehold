<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <meta name="description" content="bootstrap" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="https://demos.creative-tim.com/soft-ui-design-system/assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="https://demos.creative-tim.com/soft-ui-design-system/assets/css/nucleo-svg.css" rel="stylesheet" />
         <link rel="stylesheet" href="{{asset('frontend/css/loopple.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/theme.css')}}"> 
      
        <!-- Scripts -->
        <script type="text/javascript" src="{{resource_path('asset/js/loopple.js')}}"></script>
        @routes
        @vite(['resources/js/app.js',"resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia





        <script src="{{asset('frontend/js/loopper.js')}}"></script>
    <script src="https://loopple.s3.eu-west-3.amazonaws.com/soft-ui-design-system/js/core/bootstrap.min.js" type="text/javascript"></script>
        <script src="https://demos.creative-tim.com/soft-ui-design-system/assets/js/soft-design-system.min.js?v=1.0.5" type="text/javascript"></script>
        <script src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/js/plugins/countup.min.js" type="text/javascript"></script>
        <script src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/js/plugins/flatpickr.min.js"></script>
        <script src="{{asset('frontend/js/custom.js')}}">  </script>  
    </body>
</html>
