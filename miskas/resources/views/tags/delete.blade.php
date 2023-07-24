{{-- @extends('layouts.app')
@section('content')

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Confirm delete</h5>
                                <form method="post" action="{{route('tags-destroy', $tag)}}">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    <a href="{{route('tags-index')}}" class="btn btn-secondary">Cancel</a>
                                    @method('delete')
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
</div>

@endsection --}}
<div class="modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm delete</h5>
                <button type="button" class="btn-close"
                data-tag-action 
                data-tag-action-type="remove"
                data-tag-target="#delete-modal" 
                ></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <p>Are you sure you want to delete this tag?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                data-tag-action 
                data-tag-action-type="remove"
                data-tag-target="#delete-modal"
                >Close</button>
                <button type="button" class="btn btn-danger"
                data-tag-action 
                data-tag-action-type="destroy"
                data-url="{{route('tags-destroy', $tag)}}"
                data-tag-target="#delete-modal"
                >Delete</button>
            </div>
        </div>
    </div>
</div>