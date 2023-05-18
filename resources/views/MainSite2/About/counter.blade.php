
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter';
        }
        
        body {
            height: 100vh;
            display: grid;
            place-items: center;
            background: #fafafa;
        }
        
        .flex {
            width: 80%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        
        .flex div {
            width: 150px;
            height: 150px;
            padding: 50px 0;
            margin: 10px;
            text-align: center;
            border-radius: 5px;
            background: #19f;
            color: #fff;
            box-shadow: 2px 3px 5px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <div class="flex">
        <div>
            <h1 id="num1">250</h1>
            <h3>Projects</h3>
        </div>
        <div>
            <h1 id="num2">435</h1>
            <h3>Projects Done</h3>
        </div>
        <div>
            <h1 id="num3">220</h1>
            <h3>Happy Clients</h3>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="res/countMe/countMe.min.js"></script>
    <script>
    window.onload = ()=>{
        // $(selector).countMe(delay,speed)
        $("#num1").countMe(40,65);
        $("#num2").countMe(30, 30);
        $("#num3").countMe(40, 50);
        $("#num4").countMe(100,200);
     }
    </script>
    <script type="text/javascript">

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

