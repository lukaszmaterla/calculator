$(function () {

    var buttons = $('button.number');
    var display = $('#output');
    var clearOne = $('#clearOne');
    var clearAll = $('#clearAll');
    var plusMinus = $('#plusMinus');
    var sum = $('#sum');
    var PI = $('#pi');
    var modulo = $('#modulo');
    var toPower = $('#x2');
    var toPowe3 = $('#x3');
    var root2 = $('#root2');
    var root3 = $('#root3');
    var rootx = $('#rootx');
    var silnia = $('#sil');
    var tenTox = $('#toTen');
    var oneX = $('#x1');
    
    buttons.on('click', function () {
        var curr = display.val();

        if ($(this).val() == '(' && curr[curr.length - 1] != '*' && curr[curr.length - 1] != '') {
            curr += ('*' + $(this).val());
        } else {
            curr += $(this).val();
        }
        display.val(curr);
    });

    sum.on('click', function () {
        var curr = display.val();
        curr = eval(curr);
        display.val(curr);
    });

    plusMinus.on('click', function () {
        var curr = display.val();
        curr = -(curr);
        display.val(curr);
    });
    PI.on('click', function () {
        var curr = display.val();
        curr += Math.PI;
        display.val(curr);
    });

    clearOne.on('click', function () {
        var curr = display.val();
        curr = curr.slice(0, -1);
        display.val(curr);
    });
    modulo.on('click', function () {
        var curr = display.val();
        curr += $(this).val();
        display.val(curr);
    });
    clearAll.on('click', function () {
        var curr = display.val();
        display.val("");

    });

    toPower.on('click', function () {
        toThePower(2);
    });

    toPowe3.on('click', function () {
        toThePower(3);
    });
    root2.on('click', function () {
        toThePower((1 / 2));
    });
    root3.on('click', function () {
        toThePower((1 / 3));
    });
    rootx.on('click', function () {
        var curr = display.val();
        display.val('');
        var suma = 0;

        buttons.on('click', function () {
            var power = display.val();
            suma = Math.pow(curr, (1 / power));
        });

        sum.on('click', function () {
            display.val(suma);
        });

    });
    tenTox.on('click', function () {
        var curr = display.val();
        display.val(Math.pow(10, curr));
    });
    oneX.on('click', function () {
        var curr = display.val();
        curr = 1 / curr;
        display.val(curr);
    });
    silnia.on('click', function () {
        var curr = display.val();
        curr = parseFloat(curr, 10);
        var sum = 1;
        for (var i = 1; i <= curr; i++) {
            sum = sum * i;
        }
        display.val(sum);

    });
    function  toThePower(a) {
        var curr = display.val();

        if (curr == '') {
            return  display.val('Math.pow(' + a + ',');

        } else {
            return  display.val(Math.pow(curr, a));
        }
    }
});

