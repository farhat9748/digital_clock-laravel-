<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Digital Clock | Laravel</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #141e30, #243b55);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .clock-container {
            width: 90%;
            max-width: 650px;
            padding: 45px 25px;
            text-align: center;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(10px);
        }

        h1 {
            font-size: 32px;
            margin-bottom: 15px;
            letter-spacing: 2px;
        }

        .subtitle {
            color: #cbd5e1;
            margin-bottom: 30px;
        }

        #clock {
            font-size: 55px;
            font-weight: bold;
            letter-spacing: 4px;
            color: #38bdf8;
            margin-bottom: 20px;
        }

        #date {
            font-size: 21px;
            color: #f8fafc;
            margin-bottom: 30px;
        }

        .footer {
            font-size: 14px;
            color: #cbd5e1;
        }

        @media (max-width: 500px) {
            h1 {
                font-size: 25px;
            }

            #clock {
                font-size: 35px;
                letter-spacing: 2px;
            }

            #date {
                font-size: 17px;
            }
        }
    </style>
</head>

<body>

    <div class="clock-container">

        <h1>Digital Clock</h1>

        <p class="subtitle">
            Current Time & Date
        </p>

        <div id="clock">
            00:00:00
        </div>

        <div id="date">
            Loading date...
        </div>

        <p class="footer">
            Built with Laravel & JavaScript
        </p>

    </div>

    <script>
        function updateClock() {

            const now = new Date();

            let hours = now.getHours();
            let minutes = now.getMinutes();
            let seconds = now.getSeconds();

            let ampm = hours >= 12 ? "PM" : "AM";

            hours = hours % 12;
            hours = hours ? hours : 12;

            hours = String(hours).padStart(2, "0");
            minutes = String(minutes).padStart(2, "0");
            seconds = String(seconds).padStart(2, "0");

            document.getElementById("clock").textContent =
                `${hours}:${minutes}:${seconds} ${ampm}`;

            const dateOptions = {
                weekday: "long",
                year: "numeric",
                month: "long",
                day: "numeric"
            };

            document.getElementById("date").textContent =
                now.toLocaleDateString("en-US", dateOptions);
        }

        updateClock();

        setInterval(updateClock, 1000);
    </script>

</body>

</html>