<div>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h1 class="display-4" style="font-weight: bold;">{{$title}}</h1>
                <p> {{$content}}</p>
            </div>
            <div class="col-sm my-auto">
                <img class="img-fluid" src='{{ asset("assets/$image") }}'
                style='box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);'>
            </div>
        </div>
    </div>
</div>