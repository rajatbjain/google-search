
<!DOCTYPE html>

  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Google</title>
    <style>
    h1
    {
      font-family:"Verdana, sans-serif";
      font-size: 3em;
      font-color: #FFF;
    }
    </style>
    <script src="https://www.google.com/uds"
        type="text/javascript"></script>
    <script language="Javascript" type="text/javascript">
 
    google.load('search', '1');

    function OnLoad() {
 
      var searchControl = new google.search.SearchControl();
      searchControl.addSearcher(new google.search.WebSearch());      
      searchControl.addSearcher(new google.search.ImageSearch());


      searchControl.draw(document.getElementById("searchcontrol"));

 
      searchControl.execute("");
    }
    google.setOnLoadCallback(OnLoad);

    </script>
<meta http-equiv="x-dns-prefetch-control" content="off"/>
</head>
  <body>
    <center><!-- <img src="http://media.t3.com/img/resized/ei/xl_einstein_doodle-1.jpg"/> -->
    <h1>Google</h1><hr /><br /> 
    <div id="searchcontrol">Loading</div>
    </center>
  </body>
</html>