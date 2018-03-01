
  @extends ('layouts/master',['title'=>'home'])

@section('content')
    <h2>LARAVEL</h2>
   {!!$name!!}
@endsection
 @include ('shared.weekend')
  @section('foot')
      <h1>good luck</h1>
  @stop


