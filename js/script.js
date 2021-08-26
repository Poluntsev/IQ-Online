$(document).ready(function () {
    $('#submit').click(function () {
        event.preventDefault();

        var date = $('#date').val();
        var sum = $('#sum').val();
        var time = $('#time').val();
        var add_money = $('#add_money_1').is(':checked');
        var sum_add = $('#sum_add').val();
        
        var warnTextElem = document.getElementById('valid-date');
        var regular = new RegExp("^([0-9]{2})\\.([0-9]{2})\\.([1-2][0-9]{3})$");
        var errs = [1, 1, 1];

        if (date == 'дд.мм.гггг') {
            warnTextElem.textContent = "Выберите дату";
            document.getElementById("date").classList.add("invalid");
        } else if (!moment(date, 'DD.MM.YYYY').isValid()) {
            warnTextElem.textContent = "Дата введена неверно";
            document.getElementById("date").classList.add("invalid");
        } else if (regular.test(date) === false) {
            warnTextElem.textContent = "Дата введена неверно";
            document.getElementById("date").classList.add("invalid");
        } else {
            errs[0] = 0;
            document.getElementById("date").classList.remove("invalid");
        }

        if (sum > 3000000 || sum < 1000) {
            document.getElementById("sum").classList.add("invalid");
        } else {
            document.getElementById("sum").classList.remove("invalid");
            errs[1] = 0;
        }

        if (sum_add > 3000000 || sum_add < 1000) {
            document.getElementById("sum_add").classList.add("invalid");
        } else {
            document.getElementById("sum_add").classList.remove("invalid");
            errs[2] = 0;
        }

        if (errs[0] || errs[1] || errs[2]) {
            $('#calc-result').html("Исправьте ошибки и попробуйте снова");
        }

        if (!errs[0] && !errs[1] && !errs[2]) {
            warnTextElem.textContent = "";
            $.ajax({
                url: "calc.php",
                type: "POST",
                dataType: "json",
                data: {
                    "date": date,
                    "sum": sum,
                    "time": time,
                    "add_money": add_money,
                    "sum_add": sum_add
                },
                success: function (data) {
                    $('#calc-result').html(data + " руб");
                }
            });
        }
    });

    $.datepicker.regional['ru'] = {
        closeText: 'Закрыть',
        prevText: 'Предыдущий',
        nextText: 'Следующий',
        currentText: 'Сегодня',
        monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
        monthNamesShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
        dayNames: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
        dayNamesShort: ['вск', 'пнд', 'втр', 'срд', 'чтв', 'птн', 'сбт'],
        dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
        weekHeader: 'Не',
        dateFormat: 'dd.mm.yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['ru']);

    $(function () {
        $("#date").datepicker();
    });
});

