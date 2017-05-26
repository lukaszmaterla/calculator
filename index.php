<html>
<head>
    <title>Calculatro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .operator {
            width: 100%;
            margin-bottom: 5px;
        }

        .width {
            width: 30%;

        }

        .work {
            width: 45%;
        }

        div {
            margin-bottom: 5px;
            text-align: center;
        }

        .control-form {
            padding: 0;
            width: 100;
        }

        input {
            text-align: right;
        }

        .rightAlign {
            text-align: right;
        }
    </style>
</head>
<body>
<header class="align-center">
    <h2 style="text-align: center;">Calculator</h2>
    <ul>
    </ul>
</header>
<div class="container">
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6  col-mid-6  col-lg-6">
            <div class="col-sm-10" style="margin-bottom: 10px; padding: 0;">
                <input class="form-control " type="text" name="number" id="output"/>
            </div>
            <div class="col-sm-2" style=" padding-right:0 ;">
                <button id="clearOne" class="btn btn-info" style=" width:100%;">&#8629;</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6  col-mid-6  col-lg-6">
            <div class="col-sm-2 " style="padding-left: 0px;">
                <button id="clearAll" class="btn btn-danger operator">C</button>
                <button id="mul" value="*" class="btn operator number">*</button>
                <button id="div" value="/" class="btn operator number">/</button>
                <button id="minus" value="-" class="btn operator number">-</button>
                <button id="plus" value="+" class="btn operator number">+</button>
            </div>
            <div class="col-sm-6 align-center">
                <div>
                    <button id="lBrac" value="(" class="btn width number">(</button>
                    <button id="coma" value="," class="btn width number">,</button>
                    <button id="rBrac" value=")" class="btn width number">)</button>
                </div>
                <div>
                    <button value="7" class="btn width number">7</button>
                    <button value="8" class="btn width number">8</button>
                    <button value="9" class="btn width number">9</button>
                </div>
                <div>
                    <button value="4" class="btn width number">4</button>
                    <button value="5" class="btn width number">5</button>
                    <button value="6" class="btn width number">6</button>
                </div>
                <div>
                    <button value="1" class="btn width number">1</button>
                    <button value="2" class="btn width number">2</button>
                    <button value="3" class="btn width number">3</button>
                </div>
                <div>
                    <button value="0" class="btn width number">0</button>
                    <button id="dot" value="." class="btn width number">.</button>
                    <button id="plusMinus" class="btn width">&#8723;</button>
                </div>
            </div>
            <div class="col-sm-4" style="padding: 0px;">
                <div class="rightAlign">
                    <button id="pi" class="btn work">PI</button>
                    <button id="modulo" value="%" class="btn work">modulo</button>
                </div>
                <div class="rightAlign">
                    <button id="root2" class="btn work">&#8730;x</button>
                    <button id="x2" class="btn work">x<sup>2</sup></button>
                </div>
                <div class="rightAlign">
                    <button id="root3" class="btn work"><sup>3</sup>&#8730;x</button>
                    <button id="x3" class="btn work">x<sup>3</sup></button>
                </div>
                <div class="rightAlign">
                    <button id="rootx" class="btn work"><sup>y</sup>&#8730;x</button>
                    <button id="sil" class="btn work">!</button>
                </div>
                <div class="rightAlign">
                    <button id="toTen" class="btn work">10<sup>x</sup></button>
                    <button id="x1" class="btn work"><sup>1</sup>/<sub>x</sub></button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6  col-mid-6  col-lg-6">
            <button id="sum" class="btn btn-primary" style="width:100%">=</button>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>

