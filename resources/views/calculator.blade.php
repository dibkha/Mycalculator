<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dib Calculator</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .calculator { max-width: 300px; margin: auto; }
        input, select, button { width: 100%; padding: 10px; margin: 5px 0; }
        .result { margin-top: 20px; font-size: 1.5em; }
    </style>
</head>
<body>

<div>
    <h2>Dib Calculator</h2>
    <form method="POST" action="{{ route('calculate') }}">
        @csrf
        <input type="number" name="number1" required>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="number2" required>
        <button type="submit">Calculate</button>
    </form>

    @if(session('result'))
        <p>Result: {{ session('result') }}</p>
    @endif
</div>

</body>
</html>