<div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalComponent-{{$id}}">
        Saiba Mais
    </button>

    <!-- Modal -->
    <div class="modal fade" id="ModalComponent-{{$id}}" tabindex="-1" role="dialog" aria-labelledby="ModalComponent-{{$id}}Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalComponent-{{$id}}Label">{{$titulo}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{$slot}}
                </div>
            </div>
        </div>
    </div>
</div>