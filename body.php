<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>duplicate body</title>
  <style>
    @import url("https://cdn-uicons.flaticon.com/2.1.0/uicons-brands/css/uicons-brands.css");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .main {
      width: 100%;
      height: 650px;
      display: flex;
      gap: 20px;
      align-items: center;
      justify-content: center;
      background-color: rgb(30, 27, 27);
      box-sizing: border-box;
    }

    .maincont1,
    .maincont2 {
      display: flex;
      height: 500px;
      /* width: 45%; */
      flex-direction: column;
      /* border: 2px solid white; */
    }

    .maincont1 {
      width: 60%;
      margin-left: 50px;
      padding-left: 30px;
    }

    .maincont2 {
      width: 500px;
      height: 500px;
      border-radius: 51% 49% 50% 50% / 50% 44% 56% 50%;
      /* background-color: rgb(250, 188, 4); */
      /* background-color: white; */
      /* background-color: rgb(255, 191, 101); */
      display: flex;
      justify-content: center;
      align-items: center;
      margin-right: 40px;
      margin-bottom: 30px;
    }

    .circlemyimg {
      width: 380px;
      height: 650px;
      /* position: absolute; */
      filter: drop-shadow(40px 35px 30px black);
    }

    .mainbdheading {
      font-size: 80px;
      color: white;
      margin-top: 80px;
      letter-spacing: 5px;
      font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS",
        sans-serif;
      text-transform: uppercase;
      font-weight: bolder;
      text-shadow: 2px 10px 30px black;
    }
    .slide-right {
        animation: 2s slide-right;
        /* animation-delay: 1s; */
      }
      @keyframes slide-right {
        from {
          margin-left: -150%;
        }
        to {
          margin-left: 0%;
        }
      }
    .headingdis {
      color: white;
      margin-top: 20px;
      margin-left: 10px;
      font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS",
        sans-serif;
      font-size: 20px;
      word-spacing: 2px;
    }

    .iconbox {
      height: 60px;
      width: 700px;
      display: flex;
      gap: 50px;
      align-items: center;
      margin-top: 30px;
      margin-left: 10px;
    }

    .sociallink {
      text-decoration: none;
      font-size: 30px;
      color: rgb(193, 171, 171);
      transition: 0.3s;
    }

    .sociallink:hover {
      color: white;
    }
    .fade-in {
        animation: fadeIn ease 3s ;
      }
      @keyframes fadeIn {
        0% {
          opacity: 0;
        }
        100% {
          opacity: 1;
        }
      }

    .scrollbox {
      height: 40px;
      width: 150px;
      color: black;
      background-color: white;
      margin-top: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-left: 10px;
      font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS",
        sans-serif;
      cursor: pointer;
      transition: 0.5s;
    }

    .scrollbox:hover {
      background-color: red;
      color: white;
    }
  </style>
</head>

<body>
  <div class="main">
    <div class="maincont1">
      <div class="mainbdheading slide-right">om chaudhari</div>
      <div class="headingdis slide-right">
        I am a frontend developer, and i trying to explore new things in
        <br />
        web development .
      </div>
      <div class="iconbox">
        <a href="#" class="sociallink fade-in"><i class="fi fi-brands-instagram"></i></a>
        <a href="#" class="sociallink fade-in"><i class="fi fi-brands-facebook"></i></a>
        <a href="#" class="sociallink fade-in"><i class="fi fi-brands-github"></i></a>
        <a href="#" class="sociallink fade-in"> <i class="fi fi-brands-linkedin"></i></a>
      </div>
      <div class="scrollbox fade-in">Explore Me</div>
    </div>
    <div class="maincont2">
      <img src="om2.png" alt="om WD" class="circlemyimg fade-in">

    </div>
  </div>
</body>

</html>