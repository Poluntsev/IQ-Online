<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Bank</title>

    <link rel="stylesheet" href="css/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/script.js"></script>
</head>
<body>

    <div class="Own">

        <div class="Logo">
            <a href="1"><img src="img/logo.PNG" alt="World Bank"></a>
            <div class="phone">
                <a href="1">8-800-100-5005</a>
                <a href="1">+7 (3452) 522-000</a>
            </div>
        </div>

        <div class="menu">
            <a href="1">
                <div class="title">Кредитные карты</div>
            </a>

            <a href="1" class="active">
                <div class="title">Вклады</div>
            </a>

            <a href="1">
                <div class="title">Дебетовая карта</div>
            </a>

            <a href="1">
                <div class="title">Страхование</div>
            </a>

            <a href="1">
                <div class="title">Друзья</div>
            </a>

            <a href="1" class="int">
                <div class="title">Интернет-банк</div>
            </a>
        </div>

        <div class="bread">
            <a href="1">Главная</a> — <a href="1">Вклады</a> — <a class="calc0">Калькулятор</a>
        </div>

        <div class="calc">
            <h1>Калькулятор</h1>

            <div class="var">
                <div class="date">
                    <p>Дата оформления вклада</p>
                    <input type="text" id="date" placeholder="дд.мм.гггг" title="Дата должна быть выбрана в формате дд.мм.гггг">
                </div>

                <div class="slider">
                    <p>Сумма вклада</p>
                    <input type="number" id="oneType" min="1000" max="3000000" value="1000" oninput="document.getElementById('rangeType').value = this.value;costCalculator();">
                    <input id="rangeType" type="range" min="1000" max="3000000" value="1000" oninput="document.getElementById('oneType').value = this.value;costCalculator();">
                    <span>
                        <small>3 000 000</small>
                    </span>
                </div>
                    
                <div class="year">
                    <p>Срок вклада</p>
                    <select>
                        <option>1 год</option>
                        <option>2 года</option>
                        <option>3 года</option>
                        <option>4 года</option>
                        <option>5 лет</option>
                    </select>
                </div>

                <div class="radio">
                    <p>Пополнение вклада</p>
                    <input type="radio" checked name="1"><label>Нет</label>
                    <input type="radio" name="1"><label>Да</label>
                </div>

                <div class="summplus">
                    <p>Сумма пополнения</p>
                    <input type="number" id="twoType" min="1000" max="3000000" value="1000" oninput="document.getElementById('rangeType').value = this.value;costCalculator();">
                    <input id="rangeType" type="range" min="1000" max="3000000" value="1000" oninput="document.getElementById('twoType').value = this.value;costCalculator();">
                    <span>
                        <small>3 000 000</small>
                    </span>
                </div>

                <div class="sub">
                    <input type="submit" value="Рассчитать">
                    <p>Результат:</p>
                </div>
            </div>
        </div>

        <div class="foot">
            <a href="1">Кредитные карты</a>
            <a href="1">Вклады</a>
            <a href="1">Дебетовая карта</a>
            <a href="1">Страхование</a>
            <a href="1">Друзья</a>
            <a href="1">Интернет-банк</a>
        </div>
        
        <script>
            function costCalculator() {
                var oneType = document.getElementById("oneType");
                var oneType = document.getElementById("twoType");
            }
         </script>

    </div>
    
</body>
</html>