<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Radius Calculator</title>
    <style>
       
        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            color: #2d3748;
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            width: 100%;
            max-width: 400px;
            padding: 2.5rem;
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            animation: fadeIn 0.6s ease-out;
        }

        h2 {
            margin-top: 0;
            text-align: center;
            font-size: 1.8rem;
            color: #4a5568;
            margin-bottom: 1.5rem;
            letter-spacing: -0.5px;
        }

        .input-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #718096;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        input[type="number"] {
            width: 100%;
            padding: 1rem;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 1.1rem;
            box-sizing: border-box;
            transition: all 0.3s ease;
            background: #f7fafc;
            color: #2d3748;
        }

        input:focus {
            outline: none;
            border-color: #667eea;
            background: white;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
        }

        .btn-main {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(to right, #667eea, #764ba2);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 15px rgba(118, 75, 162, 0.3);
        }

        .btn-main:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(118, 75, 162, 0.4);
        }

       
        .result-container {
            margin-top: 2rem;
            background: #fff;
            border-radius: 16px;
            border: 1px solid #edf2f7;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            animation: slideUp 0.4s ease-out;
        }

        .result-header {
            background: #f7fafc;
            padding: 1rem 1.5rem;
            border-bottom: 1px solid #edf2f7;
            font-size: 0.9rem;
            color: #718096;
            display: flex;
            justify-content: space-between;
        }

        .result-body {
            padding: 1.5rem;
            text-align: center;
        }

        .radius-value {
            font-size: 2.5rem;
            font-weight: 800;
            color: #667eea; 
            line-height: 1.2;
            word-wrap: break-word;
            margin-bottom: 1rem;
            display: block;
        }

        .action-buttons {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            padding: 0 1.5rem 1.5rem 1.5rem;
        }

        .btn-secondary {
            padding: 0.8rem;
            background: #edf2f7;
            color: #4a5568;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
            font-size: 0.9rem;
        }

        .btn-secondary:hover { background: #e2e8f0; }

        .btn-danger {
            padding: 0.8rem;
            background: #fff5f5;
            color: #e53e3e;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
            font-size: 0.9rem;
        }

        .btn-danger:hover { background: #fed7d7; }

        
        @keyframes fadeIn { from { opacity: 0; transform: scale(0.95); } to { opacity: 1; transform: scale(1); } }
        @keyframes slideUp { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body>

<div class="card">
    <h2>Radius Calculator</h2>
    
    <form method="post">
        <div class="input-group">
            <label for="area">Enter Circle Area</label>
            <input type="number" id="area" name="area" step="any" required placeholder="e.g. 154.5" autocomplete="off">
        </div>
        <button type="submit" name="submit" class="btn-main">Calculate Now</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        
        define("PI_VALUE", pi());
        $area = floatval($_POST['area']);
        $raw_radius = sqrt($area / PI_VALUE);

       
        $area_formatted = number_format($area, 2);
        $r_dec = round($raw_radius, 2);  
        $r_whole = round($raw_radius);  
        $r_full = $raw_radius;           
    ?>
        
        <div class="result-container" id="resultBox">
            <div class="result-header">
                <span>Input Area</span>
                <strong><?php echo $area_formatted; ?></strong>
            </div>

            <div class="result-body">
                <small style="color:#a0aec0; text-transform:uppercase; font-size:0.75rem; letter-spacing:1px; font-weight:bold;">Calculated Radius</small>
                <span class="radius-value" id="radiusDisplay"><?php echo $r_dec; ?></span>
            </div>

            <div class="action-buttons">
                <button onclick="cycleView()" class="btn-secondary" id="toggleBtn">
                    Mode: Standard
                </button>

                <button onclick="clearResults()" class="btn-danger">
                    Clear
                </button>
            </div>
        </div>

        <script>
            
            const valDecimal = <?php echo $r_dec; ?>;
            const valWhole = <?php echo $r_whole; ?>;
            const valFull = <?php echo $r_full; ?>; 

            
            let currentState = 0; 

            function cycleView() {
                const display = document.getElementById('radiusDisplay');
                const btn = document.getElementById('toggleBtn');

                if (currentState === 0) {
                    display.innerText = valWhole;
                    btn.innerText = "Mode: Whole";
                    currentState = 1;
                } 
                else if (currentState === 1) {
                    display.innerText = valFull;
                    btn.innerText = "Mode: Full";
                  
                    display.style.fontSize = "1.5rem"; 
                    currentState = 2;
                } 
                else {
                    display.innerText = valDecimal;
                    btn.innerText = "Mode: Standard";
                    display.style.fontSize = "2.5rem"; 
                    currentState = 0;
                }
            }

            function clearResults() {
                const box = document.getElementById('resultBox');
                box.style.opacity = '0';
                setTimeout(() => {
                    box.style.display = 'none';
                }, 300);
            }
        </script>
        
    <?php 
    } 
    ?>
</div>

</body>
</html>