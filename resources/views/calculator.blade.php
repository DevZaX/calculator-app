<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .calculator {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        input[type="number"], select {
            width: 90%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .message {
            padding: 8px;
            margin-top: 15px;
            margin-bottom: 15px;
            color: #fff;
            text-align: center;
        }

        .success {
            background-color: #28a745; /* Green */
        }

        .error {
            background-color: #dc3545; /* Red */
        }
        .alert {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="calculator">
    <h2> Calculator </h2>
    <!-- Display Validation Errors -->
    @if($errors->any())
    <div class="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/calculator" method="POST">
        @csrf <!-- CSRF protection -->
        <div class="form-group">
            <label for="firstNumber">Number 1:</label>
            <input type="number" id="firstNumber" name="firstNumber" required value="{{ old('firstNumber') }}">
        </div>
        <div class="form-group">
            <label for="secondNumber">Number 2:</label>
            <input type="number" id="secondNumber" name="secondNumber" required value="{{ old('secondNumber') }}">
        </div>
        <div class="form-group">
            <label for="operation">Operation:</label>
            <select id="operation" name="operation" required>
                <option value="plus">Addition (+)</option>
                <option value="minus">Subtraction (-)</option>
                <option value="multiply">Multiplication (*)</option>
                <option value="divide">Division (/)</option>
            </select>
        </div>
        <button type="submit">Calculate</button>
    </form>
    <!-- Result Message -->
    @if(session('status') == 'success')
        <div class="message success">
            {{ session('result') }}
        </div>
    @elseif(session('status') == 'error')
        <div class="message error">
            {{ session('message') }}
        </div>
    @endif
</div>

</body>
</html>
