<!DOCTYPE html>
<html lang="en">
<head>
    <title>Основні методи для роботи з масивами в JavaScript</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper">
    <div class="title">
        <h1>Тема: <span style="color: green;">Робота з Масивами в JavaScript</span></h1>
    </div>
    <p>
        Масиви є одними з основних структур даних в JavaScript, і вони дозволяють зберігати та обробляти групу значень. У цьому уроці ми розглянемо основні методи для роботи з масивами.
    </p>
    <ul>
        <li>
            <h4><b>push()</b> - Додавання елементу в кінець масиву:</h4>
            <p>Метод `push()` додає новий елемент в кінець масиву.</p>
            <pre>
                    <code>
let fruits = ['яблуко', 'груша', 'банан'];
fruits.push('апельсин');
                    </code>
                </pre>
            <p>fruits тепер містить ['яблуко', 'груша', 'банан', 'апельсин']</p>
        </li>
        <li>
            <h4><b>pop()</b> - Видалення елементу з кінця масиву:</h4>
            <p>Метод `pop()` видаляє останній елемент з масиву.</p>
            <pre>
                    <code>
let myArray = [1, 2, 3, 4, 5];
myArray.pop();
                    </code>
                </pre>
        </li>
        <li>
            <h4><b>unshift()</b> - Додавання елементу в початок масиву:</h4>
            <p>Метод `unshift()` додає новий елемент на початок масиву.</p>
            <pre>
                    <code>
let myArray = [1, 2, 3, 4, 5];
myArray.unshift(0);
                    </code>
                </pre>
        </li>
        <li>
            <h4><b>shift()</b> - Видалення елементу з початку масиву:</h4>
            <p>Метод `shift()` видаляє перший елемент з масиву.</p>
            <pre>
                    <code>
let myArray = [1, 2, 3, 4, 5];
myArray.shift();
                    </code>
                </pre>
        </li>
        <li>
            <h4><b>indexOf()</b> - пошук індексу входження елемента в масив по значенню:</h4>
            <p>Метод indexOf() повертає індекс першого входження елемента в масиві. Якщо елемент не знайдено, повертається -1:</p>
            <pre>
                    <code>
let fruits = ['яблуко', 'груша', 'банан'];
let bananaIndex = fruits.indexOf('банан');
                    </code>
            </pre>
            <p>bananaIndex містить 2</p>
        </li>
        <li>
            <h4><b>includes()</b> - Перевіряє, чи масив містить конкретний елемент. Повертає true або false:</h4>
            <p></p>
            <pre>
                    <code>
let fruits = ['яблуко', 'груша', 'банан'];
let hasBanana = fruits.includes('банан');
                    </code>
            </pre>
            <p>hasBanana дорівнює true</p>
        </li>
        <li>
            <h4><b>splice()</b> - мінює вміст масиву</h4>
            <p>splice(start, deleteCount, item1, ..., itemN): Змінює вміст масиву, видаляючи або замінюючи існуючі елементи та/або додаючи нові.</p>
            <pre>
                    <code>
let fruits = ["яблуко", "груша", "банан", "апельсин"];
fruits.splice(1, 2, "персик", "гранат");
                    </code>
            </pre>
            <p>fruits дорівнює ["яблуко", "персик", "гранат", "апельсин"]</p>
        </li>
        <li>
            <h4><b>slice()</b> - Повертає копію частини масиву </h4>
            <p>slice(start, end): Повертає копію частини масиву від індексу start (включно) до індексу end (не включаючи).</p>
            <pre>
                    <code>
let fruits = ["яблуко", "груша", "банан", "апельсин"];
let slicedFruits = fruits.slice(1, 3);
                    </code>
            </pre>
            <p>slicedFruits дорівнює ['груша', 'банан']</p>
            <p>fruits залишається без змін</p>
        </li>
    </ul>
</div>
<div class="link">
    <a href="#">Повернутися вгору</a>
</div>
<div class="summary">
    <p>Наведені приклади допоможуть вам краще розуміти роботу з масивами в JavaScript. Важливо вивчати та практикувати ці методи для успішного програмування на мові JavaScript.</p>
</div>
<script src="script.js"></script>
</body>
</html>
