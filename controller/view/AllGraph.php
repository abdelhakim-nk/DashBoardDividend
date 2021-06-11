<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Graph Count By Dividend Yield</title>
    <script src="../../assets/jquery/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.1.0/chart.min.js" integrity="sha512-RGbSeD/jDcZBWNsI1VCvdjcDULuSfWTtIva2ek5FtteXeSjLfXac4kqkDRHVGf1TwsXCAqPTF7/EYITD0/CTqw==" crossorigin="anonymous"></script>-->
</head>
<body>

<div id="container" style="display: flex; justify-content: space-around">
    <div id="container_canvas" style="width: 40em">
        <h3>Graph Count By Dividend Yield</h3>
        <canvas id="graph1"></canvas>
    </div>
    <div id="container_canvas2" style="width: 40em">
        <h3>Graph Count By Dividend Yield</h3>
        <canvas id="graph2"></canvas>
    </div>
</div>

<script src="jquery/GraphCountByDividendYield.js"></script>
<script src="jquery/DividendGivenPerMonthByCompany.js"></script>
</body>
</html>