<!DOCTYPE html>
<html lang="en" >
   
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPENAI</title>
</head>

<body>

    <h1> Truth Collectives</h1>
    <form method="POST" action="{{ route('result') }}"  accept-charset="UTF-8">
         @csrf
        <label>
              Talk to AI
        </label><br><br>
        <input type="text" name="topic" placeholder="Chat">
            <button>ENTER</button>
</form >

@if(isset($result))
<h3>Output:</h3>
<div style="white-space: pre-line">{{$result}}</div>

@endif

</body>

</html>