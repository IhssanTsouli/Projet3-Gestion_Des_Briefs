<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="{{route('gestiontaches.update',$taches->id)}}" method="POST">
        @csrf
        @method('PUT')
        nom de tache: <input type="text" name="NomTache" value="{{$taches->NomTache}}">
        Date de Debut: <input type="text" name="DateDebut" value="{{$taches->DateDebut}}">
        DateFin: <input type="text" name="DateFin" value="{{$taches->DateFin}}">
        Description: <input type="text" name="Description" value="{{$taches->Description}}">
        brief_id: <input type="hidden" name="briefs_id" value="{{$taches->brief_id}}">
        <button>modifier</button>

    </form>
</body>
</html>