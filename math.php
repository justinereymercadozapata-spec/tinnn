<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Radius Calculator</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #d3d3d3 0%, #a9a9a9 100%);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            padding: 50px;
            border-radius: 25px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            width: 500px;
            text-align: center;
            border: 1px solid rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .container:hover {
            transform: translateY(-5px);
        }
        h1 {
            color: #555;
            margin-bottom: 40px;
            font-size: 2.8em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            font-weight: 800;
            letter-spacing: 3px;
            text-transform: uppercase;
            font-style: italic;
            background: linear-gradient(45deg, #555, #777);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        form {
            margin-bottom: 40px;
        }
        label {
            display: block;
            margin-bottom: 20px;
            font-weight: bold;
            font-size: 1.3em;
            color: #666;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
            font-style: italic;
        }
        input[type="number"] {
            width: 100%;
            padding: 18px;
            margin-bottom: 25px;
            border: 1px solid #ccc;
            border-radius: 12px;
            box-sizing: border-box;
            font-size: 1.1em;
            background-color: #f9f9f9;
            color: #333;
            font-weight: 500;
            transition: box-shadow 0.3s ease;
        }
        input[type="number"]:focus {
            outline: none;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        button {
            background: linear-gradient(45deg, #4CAF50, #66BB6A);
            color: white;
            padding: 18px 35px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            margin: 12px;
            font-size: 1.2em;
            transition: all 0.3s ease;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.3);
        }
        button:hover {
            background: linear-gradient(45deg, #45a049, #5CB85C);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(76, 175, 80, 0.4);
        }
        .reset-btn {
            background: linear-gradient(45deg, #f44336, #e57373);
        }
        .reset-btn:hover {
            background: linear-gradient(45deg, #da190b, #d32f2f);
        }
        .result {
            margin-top: 40px;
            padding: 25px;
            background-color: rgba(0, 0, 0, 0.05);
            border-radius: 15px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            animation: slideIn 0.5s ease-out;
        }
        @keyframes slideIn {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .result p {
            margin: 12px 0;
            font-size: 1.3em;
            font-weight: bold;
            color: #444;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
            letter-spacing: 0.5px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Circle Radius Calculator</h1>
        


        <form method="post">
            <label for="area">Enter the Area of the Circle:</label>
            <input type="number" id="area" name="area" step="0.0001" required>
            <button type="submit" name="calculate">Calculate Radius</button>
            <button type="reset" class="reset-btn">Reset</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calculate'])) {
            define('PI', pi());
            
            $area = $_POST['area'];
            
            $radius = sqrt($area / PI);
            
            $precise_radius = number_format($radius, 5);
            
            echo "<div class='result'>";
            echo "<p>Area of the Circle: $area</p>";
            echo "<p>Computed Radius: $precise_radius</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>