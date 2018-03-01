<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
</head>
<body>
<h1> EVENTS</h1>
@forelse($ev as $event)
        {{$event}}
        @empty
               pas d evenements
@endforelse
<ul>
    @foreach($ev as $event)
        <li>{{ $event }}</li>
        @endforeach

</ul>
<ul>
<?php foreach($ev as $event):?>
<li><?=$event ?></li>
<?php endforeach;

?>
</ul>
</body>
</html>