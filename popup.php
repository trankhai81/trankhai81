<!DOCTYPE html>
<html>
<head>
    <title>Pop-up Advertising Window</title>
    <style>
        /* CSS to create the pop-up window */
        #popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 25%;
            height: 100%;
            background-color: white;
            z-index: 9999;
        }
    </style>
</head>
<body>
    <div id="popup"></div>

    <script>
        // JavaScript to close the pop-up window
        function closePopup() {
            document.getElementById("popup").style.display = "none";
        }

        // Close the pop-up window after 10 seconds (adjust as needed)
        setTimeout(closePopup, 10000);
    </script>
</body>
</html>