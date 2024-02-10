
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths no-parallax">
    <head>
        <title>@yield('title')</title>

        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="keywords" content="Leh Ladakh, hotels in Ladakh, Guest houses in Ladakh, guest houses in India, Travel Agents of ladakh, Tour Operators in Ladakh, ladakh, Trekking in Ladakh, Travel in ladakh, Zanskar in ladakh, tours in ladakh, adventure tours in ladakh">
        <meta name="description" content="Complete travel information of Ladakh, Tourism in Ladakh, Travel Agents, Trekking, Rafting, Biking, Monasteries, Sightseeing, Mountaineering">

        <script src="https://cdn.tailwindcss.com"></script>
        <style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}</style>
        <style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}</style>
        <link href="css/css.css" rel="stylesheet" type="text/css">
        <style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style>
        <style type="text/css">.gm-style{font-family:Roboto,Arial,sans-serif;font-size:11px;font-weight:400;text-decoration:none}</style>

        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="http://themes.vsart.me/odiss/img/fav-icon/fav-icon-16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="http://themes.vsart.me/odiss/img/fav-icon/fav-icon-32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="http://themes.vsart.me/odiss/img/fav-icon/fav-icon-72.png" sizes="72x72">
        <link rel="icon" type="image/png" href="http://themes.vsart.me/odiss/img/fav-icon/fav-icon-144.png" sizes="144x144">

        <script src="js/jquery-1.9.1.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/modernizr.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css">
        <script src="js/skdslider.js"></script>
        <link href="css/skdslider.css" rel="stylesheet">
        <script type="text/javascript">
            jQuery(document).ready(function(){
            	jQuery('#demo1').skdslider({delay:5000, animationSpeed: 2000,showNextPrev:true,showPlayButton:true,autoSlide:true,animationType:'fading'});
            
            	
            	jQuery('#responsive').change(function(){
            	  $('#responsive_wrapper').width(jQuery(this).val());
            	  $('#responsive_wrapper').height(jQuery(this).val());
            	});
            	
            });
        </script>
        
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
        <body class="antialiased" data-colortheme="" onload="createCaptcha()">


        @yield('contend')
        
        @livewireScriptConfig 
        <script type="text/javascript" src="js/custom.js"></script>

    </body>
</html>
