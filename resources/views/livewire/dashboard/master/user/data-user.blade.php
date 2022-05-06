<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data User</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-head-fixed text-nowrap">
                <thead>
                    <tr>
                        <th><center>NO</center></th>
                        <th><center>AKSI</center></th>
                        <th>NAME</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td align="center" width="20">{{ ($users->currentpage()-1) * $users->perpage() + $loop->index + 1 }}.</td>
                        <td align="center" width="50">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-sm">AKSI</button>
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <button type="button" class="btn dropdown-item" data-toggle="modal" data-target="#updateModal" wire:click.prevent="edit({{ $user->id }})">Ubah</button>
                                    <button type="button" class="btn dropdown-item" wire:click.prevent="delete({{ $user->id }})">Hapus</button>
                                </div>
                            </div>
                        </td>
                        <td>{{ $user->name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-end">
                {{ $users->links() }}
            </div>
        </div>
    </div>

    @include('livewire.dashboard.master.user.modal-update')
</div>
