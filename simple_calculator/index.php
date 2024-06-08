<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form {
            width: 300px;
            margin: 30px auto;
            background-color: crimson;
            padding: 10px;
            color: white;
            font-weight: bold;
            border-radius: 5px;
        }

        .form button {
            position: relative;
            bottom: 50%;
            left: 50%;
            transform: translate(-50%,-20%);
            margin-top:10px;
        }

        p {
            text-align:  center;
            font-weight: bold;
            font-size: 30px;
            background-color: royalblue;
            color:white;
            margin: 0 auto;
            width: 300px;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <h1 class="text-center mt-3">Simple Calculator</h1>
    <div class="container">
    <div class="form">
        <form method="post">
            <div class="mb-3">
                <label for="num1" class="form-label">First Number:</label>
                <input type="number" name="num1" id="num1" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="operator" class="form-label">Operation:</label>
                <select name="operator" id="operator" class="form-control" required>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Second Number:</label>
                <input type="number" name="num2" id="num2" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>

            
        </form>
        
    </div>
        <?php
        if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operator'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];
    
            // Perform the calculation based on the operator
            switch ($operator) {
                case '+':
                    $result = $num1 + $num2;
                    break;
                case '-':
                    $result = $num1 - $num2;
                    break;
                case '*':
                    $result = $num1 * $num2;
                    break;
                case '/':
                    // Handle division by zero
                    if ($num2 == 0) {
                        $error = "Error: Cannot divide by zero!";
                    } else {
                        $result = $num1 / $num2;
                    }
                    break;
            }
        }
        ?>
    
        <?php if (isset($result)) : ?>
            <p>Result: <?php echo $result; ?></p>
        <?php elseif (isset($error)) : ?>
            <p class="text-danger"><?php echo $error; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
