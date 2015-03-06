<!DOCTYPE html>
<html>
    <head>
        {{ Theme::partial('seostuff') }}    
        {{ Theme::partial('defaultcss') }}  
        <!-- Google Webfont -->
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
        {{ Theme::asset()->styles() }}  
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->        
    </head>
    <body class="wrapper">
        {{ Theme::partial('header') }}  
        <!-- Mid Section Starts -->
        <section class="content data-content">
            {{ Theme::place('content') }}   
            {{-- Theme::partial('subscribe') --}}   
        </section>
        {{ Theme::partial('footer') }}  
        {{ Theme::partial('defaultjs') }}   
        {{-- Theme::asset()->scripts() --}} 
        {{-- Theme::asset()->container('footer')->scripts() --}}    
        {{ Theme::partial('analytic') }}    
    </body>
</html>