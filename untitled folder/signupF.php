<html>
<head>
   <title>form</title>
      <link href="signup.css" rel="stylesheet" type="text/css">
   <script>
    function checkForm() 
    { 
        var fname = document.getElementById("fname1").value;
        var lname = document.getElementById("lname1").value;
        var pass = document.getElementById("pass1").value;
        var user = document.getElementById("user1").value;
        if (fname == '' || lname == ''|| pass == '' || user == '')
        {
            alert("Fill All Fields");
        } 
        else 
        {
            var fname1 = document.getElementById("fname").innerHTML;
            var lname1 = document.getElementById("lname").innerHTML;
            var user1 = document.getElementById("user").innerHTML;
            var pass1 = document.getElementById("pass2").innerHTML;
            if (fname1 == 'Enter First Name' || lname1 == 'Enter Last Name' || user1 == 'Enter username' || pass1 == 'Password too short') 
            {
                alert("Please enter Valid Information");
            } 
            else 
            {
                document.getElementById("myForm").submit();
            }
        }
    }
    function validate(field, query) 
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() 
        {
          if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
          {
              document.getElementById(field).innerHTML = xmlhttp.responseText;
          } 
        }
        xmlhttp.open("GET", "validation2.php?field=" + field + "&query=" + query, true);
        xmlhttp.send();
    }

</script>
</head>
<body> 
  <div class="innerdiv">
   <ul>
      <li><a href="home.html">Home</a></li>
      <li><a href="cricket.html">Quizzes</a></li>
      <li><a href="login.html">Login</a></li>
      <li><a href="signupF.php">Signup</a></li>
   </ul>
   <form action='signup.php' id="myForm" method='POST' name="myForm">
     <table>
        <tr>
          <th><h1 class="s">First Name:</h1></th>
          <td><input id="fname1" type="text" name="fname1" placeholder="Enter alphabets only" onkeyup="validate('fname', this.value)">*
            <div id='fname'></div>
          </td>
        </tr>
        <tr>
          <th><h1 class="s">Last Name:</h1></th>
          <td><input id="lname1" type="text" name="lname1" placeholder="Enter alphabets only" onkeyup="validate('lname', this.value)">*
            <div id='lname'></div>
          </td>
        </tr>
        <tr>
          <th><h1 class="s">Username:</h1></th>
          <td><input id="user1" type="text" name="user1" onkeyup="validate('user', this.value)">*
            <div id='user'></div>
          </td>
        </tr>
        <tr>
          <th><h1 class="s">Password:</h1></th>
          <td><input id="pass1" type="password" name="pass1" onkeyup="validate('pass2', this.value)">*
            <div id='pass2'></div>
          </td>
        </tr>
        <tr>
          <td colspan="2"><input onclick="checkForm()" type="button" value='Create your Account'></pre></td>
      </tr>
      </table>
   </form>
 </div>
</body>
</html>