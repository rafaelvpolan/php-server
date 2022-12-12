<?php 

$pass =  "<script>

if(window.location.href.indexOf('#')>-1){
    window.location.href = encodeURIComponent(window.location.href)
}

    </script>"; 

$url = urldecode($_SERVER["REQUEST_URI"]);

print_r($url);





?>
