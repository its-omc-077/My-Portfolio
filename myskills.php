<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my-skills</title>
    <style>
        *
        {
             margin: 0; 
             padding: 0;
             box-sizing: border-box;
        }
        .skillsbody
        {
            display: flex;
            justify-content: center;
            align-items: center;
             width: 100%;
             height: 550px;
             background-color: rgb(30, 27, 27);
        }
        .skillbox
        {
             display: flex;
             justify-content: space-between;
                  padding: 100px 40px;
                width: 87%;
                height:500px;
                gap: 150px;
                background-color: rgb(30, 27, 27);

        }
        .skilltitle
        {
            display: flex;
            align-items: center;
            gap: 20px;
            width: 200px;
            transform: rotate(270deg);
            margin-right: -120px;
            margin-top: -30px;
        }
        .skilltext
        {
            color: white;
           font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
           text-transform: uppercase;

        }
        .skillline
        {
            width: 80px;
            height: 2px ;
            background-color: white;
        }
        .skillheadingbox
        {
            width: 45%;
            height: 250px;
            padding: 50px 0 0 30px;
        }
        .skillheading
        {
            color: white;
            font-size: 40px;
            font-weight: bold;
            letter-spacing: 2px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .skilldis
        {
            font-size: 12px;
            margin-top: 15px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            line-height: 17px;
            text-align: left;
            letter-spacing: 1px;
            color: white;
            font-weight: 100;

        }
        .skilliconbox
        {
            padding: 50px 30px;
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            width: 50%;
            height: 350px;
        }
        .skillicon
        {
            width: 50px;
            height: 50px;
            margin-right: 50px;
            line-height: 20px;
            color: white;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 13px;
            cursor: pointer;
        }
        .skillicon 
        {
             filter: invert(100%);
        -webkit-filter: invert(100%);
        }
        .sicon
        {
            width: 50px;
        }

    </style>
</head>
<body>
    <div class="skillsbody">
        <div class="skilltitle">
            <div class="skillline"></div>
            <div class="skilltext">my skills</div>
        </div>
            <div class="skillbox">
                <div class="skillheadingbox">
                   <div class="skillheading"> My Programming  <br> Skills</div>
                    <div class="skilldis">
                    Familiar with java and JavaScript, and have built basic projects such as a to-do list app and a simple calculator.   Comfortable using Git for version control and have a foundational understanding of HTML and CSS. <br> <br>Eager to expand skills in web development and explore frameworks like React and Django.
                    </div>
                </div>
                <div class="skilliconbox">
                    <img src="htmlskill.png" alt="" class="skillicon">
                    <img src="cssskill.png" alt="" class="skillicon">
                    <img src="jsskill.png" alt="" class="skillicon">
                    <img src="mysql.png" alt="" class="skillicon">
                    <img class="sicon skillicon" src="c++.png" alt="">
                    <img class="sicon skillicon" src="php.png" alt="">
                    <img class="sicon skillicon" src="java.png" alt="">
                    <img class="sicon skillicon" src="jsreact.png" alt="">
                    <img class="sicon skillicon" src="msword.png" alt="">
                    <img class="sicon skillicon" src="msexcel.png" alt="">
                </div>
            </div>
    </div>
</body>
</html>