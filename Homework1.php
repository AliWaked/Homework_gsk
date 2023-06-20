<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="prism.css" />
    <title>Homework2</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            outline: none;
            text-decoration: none;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        body {
            overflow-x: hidden;
        }

        nav {
            display: flex;
            align-items: center;
            margin-left: auto;
            margin-right: auto;
            background-color: blue;
            padding: 20px 60px;
            justify-content: space-between;
            color: #fff;
            font-size: 20px;
        }

        nav .name {
            font-weight: bold;
            cursor: default;
            user-select: none;
        }



        nav .links a:hover {
            color: red;
        }

        nav .menu i {
            cursor: pointer;
            transition: 0.5s;
            font-size: 20px;
        }

        nav .menu i:hover {
            opacity: 0.5;
        }

        .menubar {
            min-height: 100vh;
            position: absolute;
            width: 25%;
            background-color: blue;
            right: -100%;
            opacity: 0.5;
            top: 65px;
            transition: 0.5s;
        }

        .right {
            right: 0;
        }

        .container {
            width: 90%;
            margin-right: auto;
            margin-left: auto;
        }

        .first-color-background {
            padding: 80px 80px 50px;
            background-color: #eee;
        }

        .second-color-background {
            padding: 80px 80px 50px;
            background-color: #ddd;
        }

        .answer-information span {
            font-size: 20px;
            color: #666;
        }


        .answer-information span.quation {
            display: flex;
        }

        .answer-information span.quation p {
            line-height: 1.6;
            width: 85%;
        }

        .answer-information i {
            font-weight: bold;
            font-size: 25px;
            margin-right: 20px;
            color: #222;
        }

        .answer-information div {
            margin-top: 20px;
            margin-left: 150px;
        }

        .answer-information div p {
            font-size: 20px;
            font-weight: 500;
            color: #333;
        }

        .answer-information div ul {
            margin-left: 50px;
        }

        .answer-information div ul li {
            margin-top: 10px;
            list-style: none;
            position: relative;
        }

        .answer-information div ul li::after {
            content: '';
            position: absolute;
            border: #0000ff96 10px solid;
            top: 5px;
            left: -30px;
            border-right-color: transparent;
            border-bottom-color: transparent;
            border-top-color: transparent;
        }

        .answer-information div ul li i {
            color: #673ab7bf;
            font-size: 18px;
            margin-left: 8px;
        }

        .show-code {
            text-align: center;
        }

        button[type='button'] {
            font-size: 18px;
            margin-top: 10px;
            background-color: transparent;
            border-radius: 10px;
            width: 180px;
            height: 55px;
            cursor: pointer;
            color: #0000ff3b;
            text-transform: capitalize;
            border: 3px solid #0000ff3b;
            transition: 0.5s;
            font-weight: 500;
        }

        button[type='button']:hover {
            border-color: #0000ff96;
            color: #0000ff96;
        }

        .code {
            text-align: center;
        }

        .code pre {
            transition: 0.5s;
            /* width: 800px; */
            width: 800px;
            margin-left: auto;
            margin-right: auto;
            /* padding: 0; */
            padding: 0;

        }

        .hidden-code {
            padding: 0;
            height: 0px;
        }

        .display-code {
            height: 300px;

        }

        .menubar .links {
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding-top: 30px;
        }

        .menubar .links a {
            display: inline-block;
            padding-left: 40px;
            margin-right: 15px;
            color: #fff;
            transition: 0.5s;
            font-size: 20px;
            padding-bottom: 20px;
            border-bottom: 2px solid #fff;
            transition: 0.5s;
            user-select: none;
        }

        .menubar .links a.active {
            /* cursor: default; */
            pointer-events: none;
            color: #03A9F4;
            border-bottom-color: #03A9F4;
        }

        .menubar .links a:hover {
            color: #03A9F4;
            border-bottom-color: #03A9F4;
        }
    </style>
</head>

<body>
    <nav>
        <div class="name">Ali Ibrahim Abu Waked</div>
        <div class="menu">
            <i class="fas fa-bars" id="menu"></i>
        </div>
    </nav>
    <div class="menubar" id="menubar">
        <div class="links">
            <a href="/homework1.php" class="active">Homework1</a>
            <a href="/homework2.php">Homework2</a>
        </div>
    </div>

    <div class="answer-information first-color-background   ">
        <span class="quation"><i>#Quation 1</i>
            <p>Write a PHP program to check whether the first two characters and last two characters of a given string are same</p>
        </span>
        <div>
            <p>Test Your Code By The Following Examples:</p>
            <span class="reslut">
                <ul>
                    <li>input 'my name is ali' <i class="fas fa-arrow-circle-right"></i>reslut the string start with my and end with li "not equal"</li>
                    <li>input 'i am not gooing to school' <i class="fas fa-arrow-circle-right"></i>reslut the string start with i and end with ol "not equal"</li>
                    <li>input 'i do not like school' <i class="fas fa-arrow-circle-right"></i>reslut the string start with i and end with ol "not equal"</li>
                </ul>
            </span>
        </div>
        <div class="show-code">
            <button type="button" class="button-show-code-1">show the code</button>
        </div>
        <div class="code language-php">
            <pre class="hidden-code pre-1">
            <code>
    &lt;?php
    $string = 'go to home go';
        if ($string[0] . $string[1] == $string[-2] . $string[-1]) {
            echo 'the string start and end with ' . $string[0] . $string[1] . ' "equal"';
        }else {
            echo 'the string start with ' . $string[0] . ' and end with '. $string[1] . ' "not equal"';
        }
        // the string start and end with go "equal"
    ?&gt;
                </code>
            </pre>
        </div>
    </div>
    <div class="answer-information second-color-background   ">
        <span class="quation"><i>#Quation 2 </i>
            <p style="width:80%;">Write a PHP program to check if a given string starts with 'Go' or not.(Don't use "str_starts_with" function)</p>
        </span>
        <div>
            <p>Test Your Code By The Following Examples:</p>
            <span class="reslut">
                <ul>
                    <li>input 'Go to school' <i class="fas fa-arrow-circle-right"></i>reslut yes start with Go</li>
                    <li>input 'hellp my' <i class="fas fa-arrow-circle-right"></i>reslut not start with Go</li>
                    <li>input 'go to universty'<i class="fas fa-arrow-circle-right"></i>reslut not start with Go</li>
                </ul>
            </span>
        </div>
        <div class="show-code">
            <button type="button" class="button-show-code-2">show the code</button>
        </div>
        <div class="code language-php">
            <pre class="hidden-code pre-2">
            <code>
    &lt;?php
        $string = 'go to home go';
        if ($string[0] . $string[1] === 'Go') {
        echo 'yes start with Go';
        } else {
            echo 'not start with Go';
        }
        // not start with Go
    ?&gt;
                </code>
            </pre>
        </div>
    </div>
    <div class="answer-information first-color-background">
        <span class="quation"><i>#Quation 3</i>
            <p>Write a PHP program to check if a given positive number is a mulltiple of 3 or a multiple of 7</p>
        </span>
        <div>
            <p>Test Your Code By The Following Examples:</p>
            <span class="reslut">
                <ul>
                    <li>input 11 <i class="fas fa-arrow-circle-right"></i>reslut this number is not valid</li>
                    <li>input 12 <i class="fas fa-arrow-circle-right"></i>reslut this number is valid</li>
                    <li>input 7 <i class="fas fa-arrow-circle-right"></i>reslut this number is valid</li>
                </ul>
            </span>
        </div>
        <div class="show-code">
            <button type="button" class="button-show-code-3">show the code</button>
        </div>
        <div class="code language-php">
            <pre class="hidden-code pre-3">
            <code>
    &lt;?php
        $num = 21;
        if ($num > 0 && ($num % 3 == 0 || $num % 7 == 0)) {
            echo 'this number is valid';
        }else {
            echo 'this number is not valid';
        }
        // this number is valid
    ?&gt;
                </code>
            </pre>
        </div>
    </div>
    <div class="answer-information second-color-background   ">
        <span class="quation"><i>#Quation 4</i>
            <p>Write a PHP program to check the largest number among three iven numbers</p>
        </span>
        <div>
            <p>Test Your Code By The Following Examples:</p>
            <span class="reslut">
                <ul>
                    <li>input 5,8,6 <i class="fas fa-arrow-circle-right"></i>reslut 8</li>
                    <li>input 10,20,30 <i class="fas fa-arrow-circle-right"></i>reslut 30</li>
                    <li>input -11,12,0 <i class="fas fa-arrow-circle-right"></i>reslut 12</li>
                </ul>
            </span>
        </div>
        <div class="show-code">
            <button type="button" class="button-show-code-4">show the code</button>
        </div>
        <div class="code language-php">
            <pre class="hidden-code pre-4">
            <code>
    &lt;?php
        $num1 = 3;
        $num2 = 4;
        $num3 = 7;
        $temp;
        echo max($num1, $num2, $num3);
        // other solution
        if ($num1 > $num2) {
            $temp = $num1;
            if ($temp < $num3) {
                $temp = $num3;
            }
        } else {
            $temp = $num2;
            if ($num3 > $temp) {
                $temp = $num3;
            }
        }
        echo $temp;
    ?&gt;
                </code>
            </pre>
        </div>
    </div>
    <div class="answer-information first-color-background   ">
        <span class="quation"><i>#Quation 5</i>
            <p>Write a PHP program to check which number nearest to the value 100 among two given integers return 0 if the two numbers are equal</p>
        </span>
        <div>
            <p>Test Your Code By The Following Examples:</p>
            <span class="reslut">
                <ul>
                    <li>input 10,190 <i class="fas fa-arrow-circle-right"></i>reslut 0</li>
                    <li>input 90,190 <i class="fas fa-arrow-circle-right"></i>reslut 90</li>
                    <li>input 80,150 <i class="fas fa-arrow-circle-right"></i>reslut 80</li>
                </ul>
            </span>
        </div>
        <div class="show-code">
            <button type="button" class="button-show-code-5">show the code</button>
        </div>
        <div class="code language-php">
            <pre class="hidden-code pre-5">
            <code>
    &lt;?php
        $num1 = 20;
        $num2 = 30;
        $result;
        $val1 = $num1 - 100;
        $val2 = $num2 - 100;
        $val1 > 0 ?: $val1 = -$val1;
        $val2 > 0 ?: $val2 = -$val2;
        if ($val1 == $val2) {
            $reslut = 0;
        } else {
            $reslut = min($val1, $val2);
        }
        echo $reslut;
    ?&gt;
                </code>
            </pre>
        </div>
    </div>
    <div class="answer-information second-color-background   ">
        <span class="quation"><i>#Quation 6</i>
            <p>Write a PHP program to find the larger value from two positive integer values that is in the range 20..30 inclusive, or return 0 if neither is in that range</p>
        </span>
        <div>
            <p>Test Your Code By The Following Examples:</p>
            <span class="reslut">
                <ul>
                    <li>input 30,30 <i class="fas fa-arrow-circle-right"></i>reslut 30</li>
                    <li>input 25,11 <i class="fas fa-arrow-circle-right"></i>reslut 25</li>
                    <li>input 11,5 <i class="fas fa-arrow-circle-right"></i>reslut 0</li>
                </ul>
            </span>
        </div>
        <div class="show-code">
            <button type="button" class="button-show-code-6">show the code</button>
        </div>
        <div class="code language-php">
            <pre class="hidden-code pre-6">
            <code>
    &lt;?php
        $num1 = 20;
        $num2 = 40;
        if ($num1 >= $num2 && ($num1 >= 20 && $num1 <= 30)) {
            echo $num1;
        } else if ($num2 >= 20 && $num2 <= 30) {
            echo $num2;
        } else {
            echo 0;
        }
    ?&gt;
                </code>
            </pre>
        </div>
    </div>
    <div class="answer-information first-color-background   ">
        <span class="quation"><i>#Quation 7</i>
            <p>Write a PHP program to count the number of occurrences of any digit in a string</p>
        </span>
        <div>
            <p>Test Your Code By The Following Examples:</p>
            <span class="reslut">
                <ul>
                    <li>input 'my phone number is 020202022' <i class="fas fa-arrow-circle-right"></i>reslut 'number 0 repeted 4 count,number 2 repeted 5 count'</li>
                    <li>input 'my address is gaza street 10' <i class="fas fa-arrow-circle-right"></i>reslut 'number 1 repeted 1 count,number 0 repeted 1 count'</li>
                    <li>input 'my name is ali' <i class="fas fa-arrow-circle-right"></i>reslut 'no number of string'</li>
                </ul>
            </span>
        </div>
        <div class="show-code">
            <button type="button" class="button-show-code-7">show the code</button>
        </div>
        <div class="code language-php">
            <pre class="hidden-code pre-7">
            <code>
    &lt;?php
        $number = 'my number is 20200';
        $number_count = [];
        for ($i = 0; $i < strlen($number); $i++) {
            if (is_numeric($number[$i])) {
                if (in_array($number[$i], array_keys($number_count)) === true) {
                    $number_count[$number[$i]] += 1;
                    continue;
                }
                $number_count[$number[$i]] = 1;
            }
        }
        foreach ($number_count as $num => $count) {
            echo "number $num repeted $count count";
        }
        count($number_count)>0 ?: print'no number of string';
    ?&gt;
                </code>
            </pre>
        </div>
    </div>
    <div class="answer-information second-color-background ">
        <span class="quation"><i>#Quation 8</i>
            <p>Write a PHP program to return the sum of digits of an integer number</p>
        </span>
        <div>
            <p>Test Your Code By The Following Examples:</p>
            <span class="reslut">
                <ul>
                    <li>input 2020 <i class="fas fa-arrow-circle-right"></i>reslut 4</li>
                    <li>input 8888 <i class="fas fa-arrow-circle-right"></i>reslut 32</li>
                    <li>input 10210 <i class="fas fa-arrow-circle-right"></i>reslut 4</li>
                </ul>
            </span>
        </div>
        <div class="show-code">
            <button type="button" class="button-show-code-8">show the code</button>
        </div>
        <div class="code language-php">
            <pre class="hidden-code pre-8">
            <code>
    &lt;?php
        $number = 202020;
        $reslut = 0;
        $number = "$number";
        for ($i = 0; $i < strlen($number); $i++) {
            $reslut += $number[$i];
        }
        echo $reslut;
    ?&gt;
                </code>
            </pre>
        </div>
    </div>
    <div class="answer-information first-color-background   ">
        <span class="quation"><i>#Quation 9</i>
            <p>Write a PHP program to reverse any string.(Dont't user "strrev" function)</p>
        </span>
        <div>
            <p>Test Your Code By The Following Examples:</p>
            <span class="reslut">
                <ul>
                    <li>input 'string' <i class="fas fa-arrow-circle-right"></i>reslut 'gnirts'</li>
                    <li>input 'my name is ali' <i class="fas fa-arrow-circle-right"></i>reslut 'ila is eman ym'</li>
                    <li>input 'hi' <i class="fas fa-arrow-circle-right"></i>reslut 'hi'</li>
                </ul>
            </span>
        </div>
        <div class="show-code">
            <button type="button" class="button-show-code-9">show the code</button>
        </div>
        <div class="code language-php">
            <pre class="hidden-code pre-9">
            <code>
    &lt;?php
        $str_len = strlen($string);
        $strrev = '';
        for ($i = $str_len - 1; $i >= 0; $i--) {
            $strrev .= $string[$i];
        }
        echo $strrev;
    ?&gt;
                </code>
            </pre>
        </div>
    </div>

</body>
<script src="prism.js"></script>
<script>
    document.getElementById('menu').onclick = function() {
        document.getElementById('menubar').classList.toggle('right')
    }
    buttons = document.querySelectorAll('button[type="button"]');
    numberOfButton = buttons.length;
    console.log(numberOfButton);
    for (let i = 1; i <= numberOfButton; i++) {
        document.getElementsByClassName(`button-show-code-${i}`)[0].onclick = function() {
            document.getElementsByClassName(`pre-${i}`)[0].classList.toggle('display-code')
            document.getElementsByClassName(`pre-${i}`)[0].classList.toggle('hidden-code')
            if (document.getElementsByClassName(`pre-${i}`)[0].classList.contains('display-code')) {
                document.getElementsByClassName(`button-show-code-${i}`)[0].innerHTML = 'hidden code';
            } else {
                document.getElementsByClassName(`button-show-code-${i}`)[0].innerHTML = 'show the code';
            }
        }
    }
</script>

</html>