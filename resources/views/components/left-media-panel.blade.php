<div>
    <div class="container">
        <div class="row">
            <div class="col my-auto">
                <img class="img-fluid " src='{{ asset("assets/$image") }}'
                style='box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);'>
            </div>
            <div class="col">
                <h1 class="h1-media" style="font-weight: bold;">{{$title}}</h1>
                <p> {{$content}}</p>
            </div>
        </div>
    </div>
</div>