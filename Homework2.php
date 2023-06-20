<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="prism.css" />
    <title><?="Homework2"?></title>
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
            /* width: 800px; */
            /* padding: 10px;
            width: 800px; */
            /* display: block; */
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
            <a href="/index.php">Homework1</a>
            <a href="/homework2.php" class="active">Homework2</a>
        </div>
    </div>

    <div class="answer-information first-color-background   ">
        <span class="quation"><i>#Quation 1</i>
            <p>Write a PHP function that accepts an array of integers and return a new array afther removing odd numbers</p>
        </span>
        <div>
            <p>Test Your Code By The Following Examples:</p>
            <span class="reslut">
                <ul>
                    <li>input [1,2,3,4,5] <i class="fas fa-arrow-circle-right"></i>reslut [2,4]</li>
                    <li>input [5,4] <i class="fas fa-arrow-circle-right"></i>reslut [4]</li>
                    <li>input [3,5,7] <i class="fas fa-arrow-circle-right"></i>reslut []</li>
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
        function removeOddNumberFromArray(array $int)
        {
            return array_filter($int, function ($val) {
                if ($val % 2 == 0) {
                    return $val;
                }
            });
        } 
        removeOddNumberFromArray([2,4,6]); // return [2,4,6]
    ?&gt;
                </code>
            </pre>
        </div>
    </div>
    <div class="answer-information second-color-background   ">
        <span class="quation"><i>#Quation 2 </i>
            <p style="width:80%;">Write a PHP function that accepts an array of strings and return the longest string found in the
                array the function should have a 2nd argument the will hold the index of the item that have the longest string in the input array</p>
        </span>
        <div>
            <p>Test Your Code By The Following Examples:</p>
            <span class="reslut">
                <ul>
                    <li>input ['welcome','hello','hi'] <i class="fas fa-arrow-circle-right"></i>reslut welcome</li>
                    <li>input ['go to home','go to school'] <i class="fas fa-arrow-circle-right"></i>reslut go to school</li>
                    <li>input ['Hi I am Ahmed','Hello Iam Ali'] <i class="fas fa-arrow-circle-right"></i>reslut Hi I am Ahmed</li>
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
    function longetStringFromArray($array, &$len = 0)
    {
        $count = 0;
        foreach ($array as $key => $value) {
            if ($count < strlen($value)) {
                $count = strlen($value);
                $len = $key;
            }
        }
        return $array[$len];
    }

    longetStringFromArray(['hello', 'hi', 'go'], $index); // return hello
    ?&gt;
                </code>
            </pre>
        </div>
    </div>
    <div class="answer-information first-color-background">
        <span class="quation"><i>#Quation 3</i>
            <p>Write a function that accepts 2 arrays and return a new array that holds the value
                of muliplying each item in the first array by the corresponding item in the second array</p>
        </span>
        <div>
            <p>Test Your Code By The Following Examples:</p>
            <span class="reslut">
                <ul>
                    <li>input [1,3,4],[2,1,1] <i class="fas fa-arrow-circle-right"></i>reslut [2,3,4]</li>
                    <li>input [1,2],[1,5,6,7] <i class="fas fa-arrow-circle-right"></i>reslut [1,10,6,7]</li>
                    <li>input [2,2],[1,1] <i class="fas fa-arrow-circle-right"></i>reslut [2,2]</li>
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
    function multiplayTowArrayToggter(array $arry1, array $array2)
    {
        $count = count($arry1) > count($array2) ? count($arry1) : count($array2);
        for ($i = 0; $i < $count; $i++) {
            if (isset($arry[$i]) && isset($array2)) {
                $reslut[] = $arry1[$i] * $array2[$i];
            } elseif (isset($arry1[$i])) {
                $reslut[] = $arry1[$i];
            } elseif (isset($array2[$i])) {
                $reslut[] = $array2[$i];
            }
        }
        return $reslut;
    }
    multiplayTowArrayToggter([1,2,4],[2,3,2]); // return [2,6,8]
    ?&gt;
                </code>
            </pre>
        </div>
    </div>
    <div class="answer-information second-color-background   ">
        <span class="quation"><i>#Quation 4</i>
            <p>Write a function to calculate the factorial of a number (a non-negative integer). The function accepts the number as argument</p>
        </span>
        <div>
            <p>Test Your Code By The Following Examples:</p>
            <span class="reslut">
                <ul>
                    <li>input 0 <i class="fas fa-arrow-circle-right"></i>reslut 1</li>
                    <li>input 5 <i class="fas fa-arrow-circle-right"></i>reslut 120</li>
                    <li>input -7 <i class="fas fa-arrow-circle-right"></i>reslut error</li>
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
    function factorial($number)
    {
        if ($number < 0) {
            return  'error';
        }
        if ($number == 0 || $number == 1) {
            return 1;
        }
        return $number * factorial($number - 1);
    }
    factorial(3); // return 6
    ?&gt;
                </code>
            </pre>
        </div>
    </div>
    <div class="answer-information first-color-background   ">
        <span class="quation"><i>#Quation 5</i>
            <p>Write a function to check whether a number is prime or not</p>
        </span>
        <div>
            <p>Test Your Code By The Following Examples:</p>
            <span class="reslut">
                <ul>
                    <li>input 11 <i class="fas fa-arrow-circle-right"></i>reslut the number 11 is prime</li>
                    <li>input 1 <i class="fas fa-arrow-circle-right"></i>reslut the number 1 is not prime</li>
                    <li>input 12 <i class="fas fa-arrow-circle-right"></i>reslut the number 12 is not prime</li>
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
    function prime($number)
    {
        if ($number <= 1) {
            return "the number $number is not prime";
        }
        for ($i = 2; $i < $number - 1; $i++) {
            if ($number % $i == 0) {
                return "the number $number is not prime";;
            }
        }
        return "the number $number is prime";
    }
    prime(6); // return 'the number 6 is not prime'
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
