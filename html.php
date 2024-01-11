<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUESTION A</title>
    
<!--creating the interface refer to picture stated in question -->
    <style> 
        body {
            font-family: 'Times New Roman', Times, serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .border {
            border: 2.5px solid #000;
            padding: 20px;
            width: 350px;
            box-sizing: border-box;
        }
        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .form-group label {
            white-space: nowrap; 
            padding-right: 10px; 
        }
        .form-group input[type="text"] {
            flex: 1; 
            padding: 10px;
            margin-left: 10px; 
            min-width: 0; 
        }
        .button-container {
            display: flex;
            justify-content: flex-end;
        }
        .button {
            padding: 10px;
            background-color: green;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }
        #result {
            color: red;
            font-size: 1.2em;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="border">
        <div class="form-group">
            <label for="username">User Name:</label>
            <input type="text" id="username">
        </div>
        <div class="button-container">
            <button class="button" id="submitButton">Submit</button>
        </div>
        <p id="result"></p>
        </div>
    <!-- AJAX function starts here -->
    <script src="verify_ajax.js"></script> 
</body>
</html>


