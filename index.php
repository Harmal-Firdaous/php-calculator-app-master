<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Calculator by Sathira Sri Sathsara</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .calculator {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 400px;
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .calculator-title {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
            font-size: 24px;
            font-weight: 300;
        }

        .display {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: inset 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .output {
            color: #ecf0f1;
            font-size: 2.5rem;
            font-weight: 300;
            text-align: right;
            min-height: 60px;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            word-break: break-all;
            line-height: 1.2;
        }

        .input-section {
            margin-bottom: 25px;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-label {
            display: block;
            color: #555;
            font-weight: 500;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .number-input {
            width: 100%;
            padding: 15px;
            border: 2px solid #e0e6ed;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        .number-input:focus {
            outline: none;
            border-color: #667eea;
            background: white;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .button-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 15px;
        }

        .calc-button {
            padding: 18px;
            border: none;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .calc-button::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            transition: all 0.6s ease;
            transform: translate(-50%, -50%);
        }

        .calc-button:active::before {
            width: 300px;
            height: 300px;
        }

        .operator-btn {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
        }

        .operator-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
        }

        .control-buttons {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .clear-btn {
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            color: white;
        }

        .clear-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 107, 107, 0.3);
        }

        .reset-btn {
            background: linear-gradient(135deg, #ffa726, #ff7043);
            color: white;
        }

        .reset-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 167, 38, 0.3);
        }

        .calc-button:active {
            transform: translateY(0);
        }

        .signature {
            text-align: center;
            margin-top: 20px;
            color: #666;
            font-size: 12px;
            opacity: 0.8;
        }

        @media (max-width: 480px) {
            .calculator {
                padding: 20px;
                margin: 10px;
            }
            
            .output {
                font-size: 2rem;
                min-height: 50px;
            }
            
            .calc-button {
                padding: 15px;
                font-size: 16px;
            }
        }

        /* Hover effects for better UX */
        .number-input:hover {
            border-color: #c8d6e5;
        }

        /* Success animation for result */
        .result-animation {
            animation: pulse 0.6s ease-in-out;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h1 class="calculator-title">Modern Calculator</h1>
        
        <form method="post">
            <div class="display">
                <div class="output" id="display">
                    <?php 
                    include './app/logic.php';
                    echo $result;
                    if(isset($_POST["allClear"])){
                        $result = '0';
                        echo $result;
                    }
                    ?>
                </div>
            </div>

            <div class="input-section">
                <div class="input-group">
                    <label class="input-label">First Number</label>
                    <input type="number" name="numb01" class="number-input" placeholder="Enter first number" step="any">
                </div>
                
                <div class="input-group">
                    <label class="input-label">Second Number</label>
                    <input type="number" name="numb02" class="number-input" placeholder="Enter second number" step="any">
                </div>
            </div>

            <div class="button-grid">
                <button type="submit" name="addition" value="+" class="calc-button operator-btn">
                    <span>+</span>
                </button>
                <button type="submit" name="subtraction" value="-" class="calc-button operator-btn">
                    <span>−</span>
                </button>
                <button type="submit" name="multiplication" value="x" class="calc-button operator-btn">
                    <span>×</span>
                </button>
            </div>

            <div class="button-grid" style="grid-template-columns: 1fr; margin-bottom: 15px;">
                <button type="submit" name="division" value="/" class="calc-button operator-btn">
                    <span>÷</span>
                </button>
            </div>

            <div class="control-buttons">
                <button type="submit" name="allClear" value="AC" class="calc-button clear-btn">
                    <span>All Clear</span>
                </button>
                <button type="reset" class="calc-button reset-btn">
                    <span>Clear</span>
                </button>
            </div>
        </form>

        <div class="signature">
            Created by Sathira Sri Sathsara
        </div>
    </div>

    <script>
        // Add some interactive feedback
        document.querySelectorAll('.calc-button').forEach(button => {
            button.addEventListener('click', function() {
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
            });
        });

        // Add result animation when calculation is performed
        const display = document.getElementById('display');
        if (display.textContent.trim() !== '' && display.textContent.trim() !== '0') {
            display.classList.add('result-animation');
        }

        // Input validation and formatting
        document.querySelectorAll('.number-input').forEach(input => {
            input.addEventListener('input', function() {
                if (this.value !== '') {
                    this.style.borderColor = '#27ae60';
                } else {
                    this.style.borderColor = '#e0e6ed';
                }
            });
        });
    </script>
</body>
</html>
