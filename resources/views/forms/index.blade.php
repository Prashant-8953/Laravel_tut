<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Styled Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            margin-bottom: 8px;
            display: block;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Styled Form</h1>
        <form action="{{url('/')}}/register" method="POST">
            @csrf
<div>

    <x-input_form type="text"/>
    <x-input_form type="email"/>
    <x-input_form type="password"/>
    <x-input_form type="password"/>
    <x-input_form type="Checkbox"/>
</div>
           
            
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

</body>
</html>
