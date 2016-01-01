<!doctype html>
<html lang="de" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @section('title')
        {{{Lang::get('common.titleheadertext')}}}
        @show
    </title>
    <!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->
    {{ HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css') }}
<!--    {{ HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css') }}-->
    {{ HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css') }}
    {{ HTML::script('js/jquery-1.11.1.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/gcweb.js') }}
    
    <!-- Ladda Button CSS & JS -->
    {{ HTML::style('css/ladda/ladda-themeless.min.css'); }}    
    {{ HTML::script('js/ladda/spin.min.js'); }}
    {{ HTML::script('js/ladda/ladda.min.js'); }}
    
    @section ('head')
    @show

</head>
<body onload="javascript: try { custSubViewLoad();} catch(e){}">
@include('includes.navbar')
<div class="container-fluid">
    @yield('content')
</div>


<!-- JS scripts-->

<!-- Ladda Button Funktionalität in jedem View -->
                <script> //in die entsprachende custSubViewLoad function...
                   Ladda.bind( 'section:not(.progress-button) button', { timeout: 2000 } );
                   Ladda.bind( 'section.progress-button button', {
                   callback: function( instance ) {
                      var progress = 0;
                      var interval = setInterval( function() {
                         progress = Math.min( progress + Math.random() * 0.2, 1 );
                         instance.setProgress( progress );
                         if( progress === 1 ) {
                            instance.stop();
                            clearInterval( interval );
                         }
                         }, 200 );
                   }
                   });
                </script>
<!-- Ladda Ende -->                

</body>
</html>