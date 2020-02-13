
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jquery-multi-select Plugin Demo</title>
  
    <link rel="stylesheet" type="text/css" href="https://www.jqueryscript.net/demo/jQuery-Plugin-For-Multiple-Select-With-Checkboxes-multi-select-js/style.css">
	 <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script type="text/javascript" src="https://www.jqueryscript.net/demo/jQuery-Plugin-For-Multiple-Select-With-Checkboxes-multi-select-js/src/jquery.multi-select.js"></script>
    <style>
    .container { margin:150px auto; max-width:640px;}
    h2 { font-size:24px; margin:20px auto;}
    </style>
</head>
<body>
<div id="jquery-script-menu">
<div class="jquery-script-center">
<ul>


</ul>
<div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>

</script></div>
<div class="jquery-script-clear"></div>
</div>
</div>
<div class="container">
<h1>jquery-multi-select Plugin Demo</h1>
<h2>Before</h2>
<form>


        <select id="languages-regular" name="languages-regular" multiple>
            <option value="JavaScript">JavaScript</option>
            <option value="C++">C++</option>
            <option value="Python">Python</option>
            <option value="Ruby">Ruby</option>
            <option value="PHO">PHP</option>
            <option value="Pascal">Pascal</option>
        </select>
    </form>
    <h2>After</h2>
    <form>

        <select id="languages" name="languages" multiple>
            <option value="JavaScript">JavaScript</option>
            <option value="C++">C++</option>
            <option value="Python">Python</option>
            <option value="Ruby">Ruby</option>
            <option value="PHO">PHP</option>
            <option value="Pascal">Pascal</option>
        </select>
    </form>

   
    <script type="text/javascript">
    $(function(){
        $('#languages').multiSelect();
    });
    </script>
</div><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
