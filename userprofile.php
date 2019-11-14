<html>
    <head>
        <style>
            body{
                background: url("backimg.jpg");
                background-size: 100% 100%;
                background-repeat: no-repeat;
            }
        #head{
            font-family:sans-serif;
            font-size:30px;
            height:120px;
            color: #82caff;
        }
        #pi{
            width:40%;
            height:100%;
            font-family: Arial, Helvetica, sans-serif;
            color: #b6b6b4;
            
        }
        #img1{
            height:300px;
            width:60%;
            border: 2px #e5e4e2;
            border-radius: 8px;
        }
        #prodet{
            width:80%;
            float:right;
            height:100%;
            position: relative;
            top:-690px;
            left:80px;
        }
        input#i1{
            width:350px;
            padding:12px 20px;
            margin:8px 2px;
            border: 2px solid #d1d0ce;
            border-radius: 4px;
            color: #848482;
        }
        input#i2{
            width:350px;
            padding:12px 20px;
            margin:8px 2px;
            border: 2px solid #d1d0ce;
            border-radius: 4px;
            color: #848482;
        }
        input#i3{
            width:350px;
            padding:12px 20px;
            margin:8px 2px;
            border: 2px solid #d1d0ce;
            border-radius: 4px;
            color: #848482;
        }
        input#i4{
            width:350px;
            padding:12px 20px;
            margin:8px 2px;
            border: 2px solid #d1d0ce;
            border-radius: 4px;
            color: #848482;
        }
        textarea#ta1{
            border-radius: 4px;
            padding:12px 20px;
            margin:8px 2px;
            border: 2px solid #d1d0ce;
            width:350px;
            height:100px;
            color:#848482;
            background-color: aliceblue;
        }
        #prodet1{
            position: relative;
            left:55px;
            top:50px;
            width: 40%;
            color:#82caff;
        }
        #prodet2{
            position: relative;
            left:600px;
            top:-370px;
            width:40%;
            color:#82caff;
        }
        input#i5{
            width:350px;
            padding:12px 20px;
            margin:8px 2px;
            border: 2px solid #d1d0ce;
            border-radius: 4px;
            color: #848482;
        }
        #but1{
            width:200px;
            height:45px;
            padding: 0 20px;
            font-size: 1rem;
            text-align: center;
            text-shadow: 1px 1px 1px #b6b6b4;
            border: 2px solid #659ec7;
            border-radius: 10px;
            color: #e5e4e2;
            background-color:#3090c7;
        }
        </style>
        <script>
        function toenable(){
            document.getElementById("i1").disabled = false;
            document.getElementById("i2").disabled = false;
            document.getElementById("i3").disabled = false;
            document.getElementById("i4").disabled = false;
            document.getElementById("i5").disabled = false;
        }
        </script>
    </head>
    <body>
        <div id = "head"><h1><strong>Profile & Settings</strong></h1></div><br><br>
        <div id = "pi"><img id = "img1" src = "profileimg.jpg"><br><br>
            Choose a profile picture:
        <form><input type = "file" id = "b1" name = "image" value="" accept="image/png, image/jpeg"></form></div>
        <div id = "prodet">
            <div id = "prodetd1"><form id = "prodet1">
                First Name<br>
                <input type="text" id = "i1" value = "First Name" name = "fn1" required disabled><br><br>
                Last Name<br>
                <input type = "text" id = "i2" value="Last Name" name = "ln1" required disabled><br>
                Email<br>
                <input type="email" value = "abc@gmail.com" id = "i3" name = "e1" required disabled><br>
                Biography<br>
                <textarea id = "ta1">Add bio here....</textarea>
            </form></div>
            <div id = "prodet2">
                <form>
                    Website<br>
                    <input type="url" id = "i4" name = "u1" value = "url" disabled><br>
                    Mobile Number<br>
                    <input type = "tel" id = "i5" name = "m1" value = "Enter 10 digit mobile number" disabled><br>
                    Interests<br>
                    <textarea id = "ta1">Add something about your interests!!</textarea><br><br><br>
                    <p><button id = "but1" onclick="toenable()">Edit</button>      <button type="submit" id = "but1">Save</button></p>
                </form>
            </div>
        </div>
    </body>
</html> 