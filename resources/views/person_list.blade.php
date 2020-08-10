@foreach ($fakedPersons as $fakedPerson)
    <li> {{$fakedPerson->first_name}} {{$fakedPerson->last_name}} </li>
@endforeach
