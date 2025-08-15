@if($name=='sojun')
<h1>you are sojun</h1>
@elseif($name == 'sourov')
<h1>you are sourov</h1>
@else
<h1>you are unknown</h1>
@endif

@foreach($student as $std)
<h2>{{$std}}</h2>
@endforeach