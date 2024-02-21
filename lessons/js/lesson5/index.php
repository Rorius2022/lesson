<!DOCTYPE html>
<html lang="en">

<head>
    <title>Області видимості в JavaScript</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="wrapper">
    <div class="title">
        <h1>Тема: <span style="color: green;">Області видимості в JavaScript</span></h1>
    </div>
    <p>
        Мета уроку:<br>
        Розібратися з концепцією областей видимості в JavaScript для правильного використання змінних та функцій.
    </p>
    <ul>
        <li>
            <h4><b>Глобальна та локальна області видимості</b></h4>
            <p>Глобальна область видимості охоплює весь скрипт, тоді як локальна область видимості обмежується функцією або блоком коду.</p>
            <pre>
                    <code>
    var globalVariable = "Глобальна змінна";

    function globalFunction() {
        var localVariable = "Локальна змінна";
        console.log(globalVariable);  // Має доступ до глобальної змінної
        console.log(localVariable);   // Виведе "Локальна змінна"
    }

    console.log(globalVariable);  // Виведе "Глобальна змінна"
    console.log(localVariable);   // Помилка! localVariable не доступна тут
                    </code>
                </pre>
        </li>
        <li>
            <h4><b>Замикання (Closures)</b></h4>
            <p>Замикання дозволяють функції мати доступ до змінних свого батьківського контексту, навіть після завершення виконання цього контексту.</p>
            <pre>
                    <code>
    function outerFunction() {
        var outerVariable = "Зовнішня змінна";

        function innerFunction() {
            console.log(outerVariable);  // Має доступ до змінної outerVariable
        }

        return innerFunction;
    }

    var closureExample = outerFunction();
    closureExample();  // Виведе "Зовнішня змінна"
                    </code>
                </pre>
        </li>
        <li>
            <h4><b>let, const та блокова область видимості</b></h4>
            <p>let та const мають блокову область видимості, тобто їхні змінні видимі тільки в межах блоку коду, в якому вони були оголошені.</p>
            <pre>
                    <code>
    function blockScopeExample() {
        if (true) {
            var varVariable = "Змінна з var";
            let letVariable = "Змінна з let";
            const constVariable = "Змінна з const";
        }

        console.log(varVariable);    // Працює, бо var не має блокової області видимості
        console.log(letVariable);    // Помилка, бо let має блокову область видимості
        console.log(constVariable);  // Помилка, бо const має блокову область видимості
    }

    blockScopeExample();
                    </code>
                </pre>
        </li>
    </ul>
</div>
<div class="link">
</div>
<div class="summary">
    <p>Області видимості є важливою концепцією в JavaScript, допомагаючи уникнути конфліктів та забезпечуючи правильну роботу програм. Розуміння цих концепцій допоможе вам створювати більш чистий і ефективний код.</p>
</div>
</body>

</html>
