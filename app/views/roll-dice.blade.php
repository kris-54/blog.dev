<!DOCTYPE html>
<html lang="en">
<head>
    <title>Roll Dice</title>
</head>
<body>
    <h1>Roll Dice!!</h1>
    <h2>you rolled {{{ $random }}}</h2>
    <h2>you guessed {{{ $guess }}}</h2>


    @if($guess == $random)
    	{{{ "you guessed the roll." }}}
    @else
    	{{{ "you didn't guess the roll!!" }}}
    @endif


</body>
</html>