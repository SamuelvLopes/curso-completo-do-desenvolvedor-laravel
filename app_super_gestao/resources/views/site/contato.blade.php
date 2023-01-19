<pre>
<?php

var_dump(
    [
    'GET'=>$_GET,
    'REQUEST'=>$_REQUEST,
    'POST'=>$_POST
    ]);



?>
</pre>
<form action="{{route('site.contato')}}" method="post">
    @csrf
<input name='ok' type='text'/>
<button type='submit'>sasdsad</button>
</form>