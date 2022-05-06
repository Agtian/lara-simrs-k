<div wire:ignore.self class="modal fade" id="updateModal" aria-hidden="true" tabindex="-1" aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal"> 
                    <input type="hidden" name="id" wire:model="ids">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" wire:model="name">
                            @error('name') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Kembali</button>
                <button type="button" class="btn btn-primary" wire:click="update()">Perbarui User</button>
            </div>
        </div>
    </div>
<div>
