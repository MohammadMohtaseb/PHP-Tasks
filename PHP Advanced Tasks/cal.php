<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: #f0f0f0;
        }
        .calculator-container {
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .calculator-container input[type="number"],
        .calculator-container input[type="text"],
        .calculator-container select,
        .calculator-container input[type="submit"] {
            margin: 0.5rem;
            padding: 0.5rem;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <div class="calculator-container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" name="num1" required pattern="[0-9]*\.?[0-9]+" title="Enter a valid number">
            <select name="operation">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <input type="text" name="num2" required pattern="[0-9]*\.?[0-9]+" title="Enter a valid number">
            <input type="submit" value="Calculate">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = filter_var($_POST['num1'], FILTER_VALIDATE_FLOAT);
            $num2 = filter_var($_POST['num2'], FILTER_VALIDATE_FLOAT);
            $operation = $_POST['operation'];

            if ($num1 === false || $num2 === false) {
                echo "Please enter valid numbers.";
            } else {
                switch ($operation) {
                    case 'add':
                        $result = $num1 + $num2;
                        break;
                    case 'subtract':
                        $result = $num1 - $num2;
                        break;
                    case 'multiply':
                        $result = $num1 * $num2;
                        break;
                    case 'divide':
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                        } else {
                            $result = "Cannot divide by zero!";
                        }
                        break;
                    default:
                        $result = "Invalid operation.";
                }

                echo "Result: " . htmlspecialchars($result);
            }
        }
        ?>
    </div>
</body>
</html>
