<?php 
session_start();
if(!isset($_SESSION["counter"])) $_SESSION["counter"]=0;
?>

<!DOCTYPE html>
<html>
<header>
  <title>Welcome</title>
  <script>
    //This script sets up the AJAX infrastructure for requesting
    //date, time and random display color updates from the server.
    var request = null;
    function getMessage()
    {
      request = new XMLHttpRequest();
      var url = "counter.php";
      request.open("GET", url, true);
      request.onreadystatechange = updatePage;
      request.send(null);
    }

    function sendMessage() {
        var msg_obj = document.getElementById("message");
        var msg = msg_obj.value;
        var url = "counter.php?message=" + encodeURIComponent(msg);
        console.log(url);
        var xhr = new XMLHttpRequest();
        xhr.open("GET", url, true);
        xhr.onreadystatechange = updatePage;
        xhr.send(null);
    }

    function updatePage()
    {
        if (request.readyState == 4)
        {
            var counter = document.getElementById("counter");
            console.log(request.responseText);
            counter.innerHTML = "The total received feedback messages are "+request.responseText;
        }
    }
    </script>
</header>

<body>

  <form onsubmit="sendMessage()">
    please leave your message:
    <input type="text" name="message" id="message">
    <input type="submit">
  </form>

  <br>
  <div id="counter"> The total received feedback messages are 0 </div>

  <script>
    getMessage();
    setInterval('getMessage()', 100)
  </script>

</body>
</html>
