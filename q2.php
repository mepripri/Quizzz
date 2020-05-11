<html>
    <head>
        <title>Ques2</title>
        <style>
            .two
            {
                background-color:hsl(300, 40%, 20%);
                padding-bottom: 20%;
                height: 60%;
                width: 99.5%;
                transform: translate(0%,-50%);
                border-radius:3px;
                border:5px solid hsl(300, 40%, 20%);
                text-align:left;
            } 
            .three
            {
                background-color:hsl(300, 65%, 20%);
                height: 30%;
                width: 98.5%;
                border:4px solid #330033;
                transform: translate(0.5%,3%);
                border-radius:3px;
                color:white;
                font-size:50;
                text-align:center;
            }
            .one
            {
                background-color:#330033;
                height:50px;
                transform: translate(0%,-5%);
            }
            p.p1
            {
                font-size:50pt;
                font-family:'Lilita One', cursive;
            }
            p
            {
                font-size:20pt;
                font-family:'Satisfy', cursive;
            }
            table,td
            {
                border:5px solid black;
                padding:2px;
                background-color:slateblue;
            }
            table
            {
                border-radius:20px;
            }
            td
            {
                border-radius:40px;
                font-size:20pt;
                width:50%;
            }
            input[type=radio]
            {
                border:10px;
                width:5%;
                height:1.5em;
            }
            div
            {
                top:50%;
                left:50%;
                transform:translate(00%,50%);
                text-align: right;
            }
            button.bu1
            {
                background-color:#2e5cb8;
                margin-top:12%;
                margin-left:6%;
                border-radius:10px; 
                border:10px solid#2e5cb8;
                width:310px;
                height:350px;
                text-align:center;
                color:white;
                font-size:35;
            }
            button.bu2
            {
                background-color: rgb(31, 138, 173) ;
                border-radius:10px; 
                margin-left:6%;
                border:10px solid rgb(31, 138, 173) ;
                width:310px;
                margin-top:-370px;
                height:350px;
                text-align:center;
                color:white;
                font-size:35; 
            }
            button.bu3
            {
                background-color:   rgb(255, 163, 26);
                width:310px;
                margin-top:-350px;
                height:350px;
                border-radius:10px; 
                margin-left:6%;
                border:10px solid   rgb(255, 163, 26);
                color:white;
                font-size:35;
                text-align: center;
            }
            button.bu4
            {
                background-color:   rgb(255, 77, 148);
                width:310px;
                margin-top:-350px;
                height:350px;
                border-radius:10px; 
                border:10px solid   rgb(255, 77, 148);
                margin-left:6%;
                text-align:center;
                color:white;
                font-size:35;
            }
        </style>
        <script>
                var score = decodeURIComponent(window.location.search);
                score = parseInt(score.substring(1));
                function check(pr)
                {
                    if(pr == "Rohit Sharma")
                    {
                        var t=document.getElementById("bu");
                        t.style.backgroundColor="green";
                        t.style.borderColor="green";
                        var r=document.getElementById("bue");
                        r.style.backgroundColor="transparent";
                        r.style.borderColor="transparent";
                        r.style.color="transparent";
                        var s=document.getElementById("buf");
                        s.style.backgroundColor="transparent";
                        s.style.borderColor="transparent";
                        s.style.color="transparent";
                        var u=document.getElementById("bug");
                        u.style.backgroundColor="transparent";
                        u.style.borderColor="transparent";
                        u.style.color="transparent";
                        score+=1;
                        setTimeout(function(){window.location.href='q3.html?'+score},2000);
                    }
                    else if(pr == "Martin Guptill")
                    {
                        var t=document.getElementById("bu");
                        t.style.backgroundColor="green";
                        t.style.borderColor="green";
                        var r=document.getElementById("bue");
                        r.style.backgroundColor="red";
                        r.style.borderColor="red";
                        r.style.color="white";
                        var s=document.getElementById("buf");
                        s.style.backgroundColor="transparent";
                        s.style.borderColor="transparent";
                        s.style.color="transparent";
                        var u=document.getElementById("bug");
                        u.style.backgroundColor="transparent";
                        u.style.borderColor="transparent";
                        u.style.color="transparent";
                        setTimeout(function(){window.location.href='q3.html?'+score},2000);
                    }
                    else if(pr == "Chris Gayle")
                    {
                        var t=document.getElementById("bu");
                        t.style.backgroundColor="green";
                        t.style.borderColor="green";
                        var r=document.getElementById("bue");
                        r.style.backgroundColor="transparent";
                        r.style.borderColor="transparent";
                        r.style.color="transparent";
                        var s=document.getElementById("buf");
                        s.style.backgroundColor="red";
                        s.style.borderColor="red";
                        s.style.color="white";
                        var u=document.getElementById("bug");
                        u.style.backgroundColor="transparent";
                        u.style.borderColor="transparent";
                        u.style.color="transparent";
                        setTimeout(function(){window.location.href='q3.html?'+score},2000);
                    }
                    else if(pr == "Virender Sehwag")
                    {
                        var t=document.getElementById("bu");
                        t.style.backgroundColor="green";
                        t.style.borderColor="green";
                        var r=document.getElementById("bue");
                        r.style.backgroundColor="transparent";
                        r.style.borderColor="transparent";
                        r.style.color="transparent";
                        var s=document.getElementById("buf");
                        s.style.backgroundColor="transparent";
                        s.style.borderColor="transparent";
                        s.style.color="transparent";
                        var u=document.getElementById("bug");
                        u.style.backgroundColor="red";
                        u.style.borderColor="red";
                        u.style.color="white";
                        setTimeout(function(){window.location.href='q3.html?'+score},2000);
                    }
                } 
                function end()
                {
                    window.location.href='index1.php';
                }
        </script>
    </head>
    <body>
        <div class="one"><button style="margin-top:10px;margin-right:10px;" onclick="end()"><img src="cross-red-512.png" width="30px" height="30px"></button></div>
        <div>
            <div class="two">
                <div class="three"><br>Q2.Which cricketer had scored highest individual score in ODI cricket?</div>
                <br>
                <button id="bug" class="bu1" onclick="check('Virender Sehwag',)">Virender Sehwag</button>
                <button id="buf" class="bu2" onclick="check('Chris Gayle')">Chris Gayle</button>
                <button id="bue" class="bu3" onclick="check('Martin Guptill')">Martin Guptill</button>
                <button id="bu"  class="bu4" onclick="check('Rohit Sharma')">Rohit Sharma</button>
            </div>
        </div>
    </body>
</html>