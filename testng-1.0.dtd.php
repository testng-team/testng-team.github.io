<?

print '<html><head><title>TestNG DTD</title>

        <link rel="stylesheet" href="testng.css" type="text/css" />
        <link type="text/css" rel="stylesheet" href="https://beust.com/beust.css"  />
        <script type="text/javascript" src="https://beust.com/prettify.js"></script>
        <script type="text/javascript" src="banner.js"></script>

      <script type="text/javascript" src="https://beust.com/scripts/shCore.js"></script>
      <script type="text/javascript" src="https://beust.com/scripts/shBrushJava.js"></script>
      <script type="text/javascript" src="https://beust.com/scripts/shBrushXml.js"></script>
      <script type="text/javascript" src="https://beust.com/scripts/shBrushBash.js"></script>
      <script type="text/javascript" src="https://beust.com/scripts/shBrushPlain.js"></script>
      <link type="text/css" rel="stylesheet" href="https://beust.com/styles/shCore.css"/>
      <link type="text/css" rel="stylesheet" href="https://beust.com/styles/shThemeCedric.css"/>
      <script type="text/javascript">
        SyntaxHighlighter.config.clipboardSwf = "scripts/clipboard.swf";
        SyntaxHighlighter.defaults["gutter"] = false;
        SyntaxHighlighter.all();
      </script>

        <style type="text/css">
            /* Set the command-line table option column width. */
            #command-line colgroup.option {
                 width: 7em;
            }
        </style>
</head>
<body>

<h1>
<p align="center">
DTD for TestNG
</p>
</h1>

<pre class="brush: xml">
'
;

function http_get_contents($url)
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_TIMEOUT, 1);
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  if(FALSE === ($retval = curl_exec($ch))) {
    error_log(curl_error($ch));
  } else {
    return $retval;
  }
}

print(htmlentities(http_get_contents("https://testng.org/testng-1.0.dtd")));

print "</pre>";

?>
