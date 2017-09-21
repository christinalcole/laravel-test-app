<ul>
  @foreach ($people as $person)
  <li>
    <a href="/people/{{$person->id}}">
    {{ $person->name }}
  </li>
  @endforeach
</ul>
