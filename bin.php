<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <style type='text/css'>
    body,
    html {
      margin: 0;
      padding: 0;
    }

    body {
      color: black;
      display: table;
      font-family: Georgia, serif;
    }

    .contain {
      margin-left: 20%;
      border: 20px solid rgb(194, 196, 211);
      width: 750px;
      height: 563px;
      vertical-align: middle;
    }

    .aimg {
      height: 7%;
      width: 7%;
    }

    .aone {
      display: flex;
    }

    .afateh {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-left: 30%;
    }

    .atwo {
      color: brown;
      font-size: 50px;
      margin-left: 7%;
    }

    .athree {
      border: 2px solid black;
      border-radius: 25px;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 40%;
      margin-left: 30%;
    }

    .afour {
      font-size: 20px;
      /* font-weight: bold; */
      margin-top: 20px;
      margin-left: 20px;
      display: flex;
      justify-content: space-between;
    }
    .f2{
      margin-right: 20px;
    }
    .headig{
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: x-large ;

    }
    .afive{
        margin: 5vh;
        letter-spacing: 1px;
        /* font-weight: 700; */
    }
    .asix{
        margin-right: 20px;
        display: flex;
        justify-content: right;
        align-items: center;
    }
  </style>
</head>

<body>
  <div class="contain">
    <div class="aone">
      <img src="https://th.bing.com/th/id/OIP.P_SOypkXqwk-a4aYjr2JZwHaHa?w=189&h=189&c=7&r=0&o=5&dpr=1.2&pid=1.7"
        alt="img" class="aimg">
      <div class="afateh">ਵਾਹਿਗੁਰੂ ਜੀ ਦੀ ਫ਼ਤਿਹ</div>
      <img src="https://th.bing.com/th/id/OIP.P_SOypkXqwk-a4aYjr2JZwHaHa?w=189&h=189&c=7&r=0&o=5&dpr=1.2&pid=1.7"
        alt="img" class="aimg" style="margin-left: 30%;">
    </div>

    <div class="atwo">ਗੁਰਦੁਆਰਾ ਸ੍ਰੀ ਫਤਹਿਗੜ੍ਹ ਸਾਹਿਬ</div>
    <div class="athree">ਜਿਲ੍ਹਾ ਸ੍ਰੀ ਫਤਹਿਗੜ੍ਹ ਸਾਹਿਬ(ਸ਼੍ਰੋਮਣੀ ਗੁ: ਪ੍ਰ: ਕਮੇਟੀ) </div>

    <center style="color:brown;">
      phone n.625377652,653572756 | E-mail: gurudwara@gmail.com
      <div style="font-size: xx-large;color: rgb(33, 33, 141);">GURUDWARA SRI FATEHGRAH SAHIB</div>
      <div style="color:brown;">Distt. Fatehgrah Sahib. (S.G.P.C)</div>
    </center>

    <div class="afour"><div class="f">Sr num: <u><span id="random-id"></span></u></div>
    <div class="f2">Date.<span id="current-date"></span></div>
    </div>
    <div class="headig"><u>ਅੰਮ੍ਰਿਤ ਸੰਚਾਰ ਦਾ ਸਰਟੀਫਿਕੇਟ</u></div>
    <div class="afive"><p>ਇਹ ਸਰਟੀਫਿਕੇਟ ਇਹ ਗਵਾਹੀ ਦਿੰਦਾ ਹੈ ਕਿ <b><?php echo $name; ?></b> ਪੁੱਤਰ/ਪੁੱਤਰੀ <b><?php echo 'jashan'; ?></b>
        ਨਿਵਾਸੀ <b><?php echo $address; ?></b> ਨੇ <b><?php echo $date; ?></b> ਨੂੰ ਗੁਰੂ ਮਹਾਰਾਜ ਦੀ ਹਜ਼ੂਰੀ ਵਿੱਚ ਅੰਮ੍ਰਿਤ ਛਕਿਆ।</p>
        
        <p>ਇਸ ਨੂੰ ਪੰਜ ਕਕਾਰ ਦੇ ਨਾਲ ਰਹਿਣੀ-ਬਹਿਣੀ ਅਨੁਸਾਰ ਜੀਵਨ ਬਿਤਾਉਣ ਦੀ ਕਸਮ ਦਿਵਾਈ ਗਈ।
        ਇਹ ਸਿੰਘ/ਸਿੰਘਣੀ ਹੁਣ ਗੁਰੂ ਵਾਲਾ ਜੀਵਨ ਬਿਤਾਉਣ ਦੀ ਸਉਣ ਚੁੱਕੀ ਹੈ।</p></div>
    <div class="asix">ਗੁਰੂ-ਪੰਥ ਦਾ ਦਾਸ<br>ਦਸਤਖਤ: __________<br>
        (ਸੇਵਾ ਦਰ: ਗੁਰਦੁਆਰਾ ਸ੍ਰੀ ਫਤਹਿਗੜ੍ਹ ਸਾਹਿਬ)</div>
  </div>

  <script>
    function generateRandomString() {
      const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
      let result = '';
      const length = 6; // Change this for longer/shorter ID

      for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * characters.length);
        result += characters[randomIndex];
      }

      document.getElementById('random-id').textContent = result;
    }
    function displayCurrentDate() {
  const today = new Date();
  const formattedDate = today.toLocaleDateString(); // Format: MM/DD/YYYY (default) or change based on locale
  document.getElementById('current-date').textContent = formattedDate;
}

// Generate and insert random string & date on page load
window.onload = function () {
  generateRandomString();
  displayCurrentDate();
};
  </script>

  <?php
  // //if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //     $name = $_POST["lname"];
  //     $fatherName = $_POST["fname"];
  //     $address =$_POST["uadd"];
  //     $date=$POST["udate"];
  // } else {
  //     // Redirect to form if accessed directly
  //     header("Location: form.php");
  //     exit();
  // }
?> 
</body>

</html>