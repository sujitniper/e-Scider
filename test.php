<!DOCTYPE html>
<html>
    <style>
        .tooltip {
            position: relative;
            display: inline-block;
            border-bottom: 1px dotted black;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            margin-left: -60px;
            opacity: 0;
            transition: opacity 1s;
        }

        .tooltip .tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }
    </style>
    <body style="text-align:center;">

        <h2>Tooltip</h2>
        <p>Move the mouse over the text below:</p>
        <br>
        <br>
        <br>
        <br>
        <br><br><br><br><br><br><br><br><br>
        
        
        
        <div class="tooltip" ><img src="images/que1.png" width="50" height="50" style="display: block">
            <span class="tooltiptext">Tooltip textTooltip textTooltip textTooltip textTooltip textTooltip\n 
                textTooltip textTooltip textTooltip textTooltip \ntextTooltip textTooltip textTooltip textTooltip textTooltip textTooltip \ntext
            Tooltip textTooltip textTooltip textTooltip textTooltip \ntextTooltip textTooltip textTooltip text</span>
        </div>

    </body>
</html>

