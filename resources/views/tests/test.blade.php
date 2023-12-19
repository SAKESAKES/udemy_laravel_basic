test<br>

@foreach($values as $value)
{{ $value->id }}<br> //データベースの情報取得
{{ $value->text }}<br>
@endforeach

