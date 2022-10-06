<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home page</title>
</head>
<body>

  <h1>Ciao {{ $nome }} {{ $cognome }}</h1>

  <h2>Studenti:</h2>
  @if(count($lista_studenti) > 0)
    <p>
      @foreach ($lista_studenti as $studente)
          {{ $studente }} 

          @if (!$loop->last)
            -
          @endif
      @endforeach
    </p>
  @else
    <p>nessuno studente</p>
  @endif


  @forelse ($lista_vuota as $studente)
      <p>
        {{ $studente }}
      </p>
  @empty
      <p>Nessuno studente</p>
  @endforelse

</body>
</html>