<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Abrase')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- boostrap 4 -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link media="all" type="text/css" rel="stylesheet" href="/css/styles.css">
    <link media="all" type="text/css" rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">



    <script src="//cdn.ckeditor.com/4.8.0/basic/ckeditor.js"></script>

    <script src="/js/smooth-scroll.min.js"></script>
    <script type='text/javascript' src='/js/jquery.waypoints.min.js'></script>

    <script>
        var scroll = new SmoothScroll('a[href*="#"]', {
            // Selectors
            ignore: '[data-scroll-ignore]', // Selector for links to ignore (must be a valid CSS selector)
            header: null, // Selector for fixed headers (must be a valid CSS selector)

            // Speed & Easing
            speed: 500, // Integer. How fast to complete the scroll in milliseconds
            offset: 0, // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
            easing: 'easeInOutCubic', // Easing pattern to use
            customEasing: function (time) {}, // Function. Custom easing pattern

            // Callback API
            before: function () {}, // Callback to run before scroll
            after: function () {} // Callback to run after scroll
        });
    </script>

</head>


<body data-spy="scroll" data-target="#navi" id="@yield('id')" >
@yield('content')
</body>

<script>
    var animationend = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    jQuery(document).ready(function () {
        var waypoints = $('#empresa').waypoint({
            handler: function(direction){
                console.log("activado wayp");
                $('.texto2').removeClass('hide');
                $('.texto2').addClass('animated slideInRight');
                $('.texto1').removeClass('hide');
                $('.texto1').addClass('animated slideInLeft');
            }
        });
    }, {offset:'50%'});

    jQuery(document).ready(function () {
        var waypoints = $('#nosotros').waypoint({
            handler: function(direction){
                console.log("activado wayp 0");
                $('.texto0').removeClass('hide');
                $('.texto0').addClass('animated fadeIn fast');
            }
        });
    }, {offset:'50%'});


    jQuery(document).ready(function () {
        var waypoints = $('#corredores').waypoint({
            handler: function(direction){
                console.log("activado wayp 2");
                $('.row').removeClass('hide');
                $('.row').addClass('animated fadeIn');
            }
        });
    }, {offset:'40%'});

    jQuery(document).ready(function () {
        var waypoints = $('#servi').waypoint({
            handler: function(direction){
                console.log("activado wayp 3");
                $('.texto3').removeClass('hide');
                $('.texto3').addClass('animated slideInRight');
            }
        });
    }, {offset:'120%'});



</script>


</html>