<div class="card">
    <div class="card-body">
        <h4 class="card-title">Categorie</h4>
        <hr>
        <ul class="list-group">
            <a class="text-dark" href="{{route("home")}}">
                <li class="list-group-item">TUTTE</li>
            </a>
            @foreach($categories as $category)
                <a class="text-dark" href="{{route("home",["category" => $category->id])}}">
                    <li class="list-group-item @if(Request::get("")) @endif">{{$category->name}}</li>
                </a>
            @endforeach
        </ul>
    </div>
</div>