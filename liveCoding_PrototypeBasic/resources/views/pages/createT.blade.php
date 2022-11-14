<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="{{Route('gestiontaches.store')}}" method="POST">
        @csrf
        <input type="text" name='NomTache'>
        <input type="datetime-Local" name='DateDebut'>
        <input type="datetime-Local" name='DateFin'>
        <input type="text" name='Description'>
        <input type="text" value="{{$id}}" name='briefs_id'>
        <button type="submit" name='addtache'>Ajouter Tache</button>
    </form>
</body>
</html>