<html>

<head>
    <title>Simplle Calculator</title>


    <link rel="icon" href="resources/images/calculator.png" />
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="card py-3">
        <h1 class="h1">Calculator</h1>
        <input type="text" class="input py-3" value="0" readonly/>
        <div class="col-9 py-3">

            <button class="btn1 btn-operator me-3" type="button" onclick="cal(this);">1</button>
            <button class="btn1 btn-operator me-3" type="button" onclick="cal(this);">2</button>
            <button class="btn1 btn-operator me-3" type="button" onclick="cal(this);">3</button>
            <button class="btn1 btn-operator me-3" type="button" onclick="cal(this);">+</button>

        </div>
        <div class="col-9 py-3">

            <button class="btn1 btn-operator me-3" type="button" onclick="cal(this);">4</button>
            <button class="btn1 btn-operator me-3" type="button" onclick="cal(this);">5</button>
            <button class="btn1 btn-operator me-3" type="button" onclick="cal(this);">6</button>
            <button class="btn1 btn-operator me-3" type="button" onclick="cal(this);">-</button>

        </div>
        <div class="col-9 py-3">

            <button class="btn1 btn-operator me-3" type="button" onclick="cal(this);">7</button>
            <button class="btn1 btn-operator me-3" type="button" onclick="cal(this);">8</button>
            <button class="btn1 btn-operator me-3" type="button" onclick="cal(this);">9</button>
            <button class="btn1 btn-operator me-3" type="button" onclick="cal(this);">×</button>

        </div>

        <div class="col-9 py-3">

            <button class="btn1 btn-operator me-3" type="button" onclick="cal(this);">0</button>
            <button class="btn1 btn-operator me-3" type="button" onclick="cal(this);">=</button>
            <button class="btn1 btn-operator me-3" type="button" onclick="cal(this);" disabled>%</button>
            <button class="btn1 btn-operator me-3" type="button" onclick="cal(this);">/</button>

        </div>

        <div class="col-9 py-3">

            <button class="btn1 btn-operator me-3" type="button" onclick="cal(this);">CE</button>
            <button class="btn1 btn-operator me-3" type="button" onclick="cal(this);">√</button>
            <button class="btn1 btn-operator me-3" type="button" onclick="cal(this);">.</button>
            <button class="btn1 btn-operator me-3" type="button" onclick="cal(this);">←</button>

        </div>

    </div>

    <script src="script.js"></script>
</body>

</html>