<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo - WS-ScroLi</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script
        src="http://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
        crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet"/>

</head>
<body style="margin:0;">
    <section id="header">
        <h1>Demo - WS-ScroLi</h1>
    </section>
    <section id="description">
        <p>WS-ScroLi is a scroll line customizable</p>
    </section>
    <div id="WS-SL--content">
        <section id="aaa" style="height:800px; background-color:wheat"></section>
        <section id="222" style="height:400px; background-color:lightgrey"></section>
        <section id="c3c3"style="height:600px; background-color:aliceblue"></section>
        <section id="d4" style="height:500px; background-color:aquamarine"></section>
    </div>

    <section style="height:50px; background-color:black">
    <p style="color:white">Footer</p>
    </section>
    
    <script src="js/ws-scroli.js"></script>
    <script>
        $('#WS-SL--content').WS_ScroLi({
            validEnd : {
                status  : true,
                icon    : 'fas fa-check'
            },
            // you can enter any selector you want and assign it an icon from fontawesome
            sections : [
                [ '#aaa', 'fas fa-info' ],
                [ '#222', 'fas fa-stream' ],
                [ '#c3c3', 'far fa-user' ],
                [ '#d4', 'fas fa-exclamation' ]
            ],
            position : {
                x : ['left', 10],
                y : ['top', 20]
            },
        });
        
    </script>
</body>
</html>