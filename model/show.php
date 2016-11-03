<html>
<head>
<script>
function showUser(str, typeSearch) {
	console.log(str);
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;

              if(typeSearch == "answer"){
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
              }
            }
        };
        xmlhttp.open("GET","model/getuser.php?q="+str+"&type="+typeSearch,true);
        xmlhttp.send();
    }
}
</script>
  <style>
    body{
      text-align: center;
    }

    input[type=text] {
      width: 130px;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      background-color: white;
      background-image: url('http://www.myframingstore.com/wp-content/uploads/search-icon.png');
      background-position: 10px 10px;
      background-repeat: no-repeat;
      padding: 12px 20px 12px 40px;
      -webkit-transition: width 0.4s ease-in-out;
      transition: width 0.4s ease-in-out;
    }

    input[type=text]:focus {
      width: 40%;
    }

    p{
      margin: 0;
    }
  </style>
</head>
<body>
  <p>Country:</p>
  <input type="text" name="users" autocomplete="off" onkeyup="showUser(this.value)">
<br>
<div id="txtHint"></div>

</body>
</html>