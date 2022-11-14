<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('gestionbriefs.update',$brief->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name='NomBrief'value="{{$brief->NomBrief}}">
        <input type="datetime-Local" name='DateLivraison' value="{{$brief->DateLivraison}}">
        <input type="datetime-Local" name='DateRecuperation'value="{{$brief->DateRecuperation}}">
        <button type="submit" name='add'>Modifier brief</button>
    </form>
    {{-- <a href="{{Route('gestiontaches.create')}}">Ajouter Tache</a> --}}
    <form action="{{Route('gestiontaches.create')}}" method="get">
        
        <input type="hidden" name="brief_id" value="{{$brief->id}}">
        <button>ajouter tache</button>

    </form>

   <table>
    <thead>
        <tr>
        <th>Nom de tache</th>
        <th>Date de Debut</th>
        <th>Date de Fin</th>
        <th>Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($taches as $tache)
        <tr>
            
            <td>{{$tache->NomTache}}</td>
            <td>{{$tache->DateDebut}}</td>
            <td>{{$tache->DateFin}}</td>
            <td>{{$tache->Description}}</td>
            <input type="hidden" value="{{$brief->id}}">
            <td><a href="{{route('gestiontaches.edit',$tache->id)}}">modifier</a></td>
            <td>
                <form action="{{route('gestiontaches.destroy',$tache->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>supprimer</button>

                </form>
            </td>
        </tr>

            
          
        @endforeach
    </tbody>


   </table>



</body>
</html>