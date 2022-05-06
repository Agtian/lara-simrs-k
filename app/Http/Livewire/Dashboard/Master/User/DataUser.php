<?php

namespace App\Http\Livewire\Dashboard\Master\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class DataUser extends Component
{
    public $ids;
    public $name;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function resetInputFields()
    {
        $this->ids = '';
        $this->name = '';
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name'      => 'required',
        ]);

        User::create($validatedData);
        session()->flash('message', 'User created successfully!');
        $this->resetInputFields();
        $this->emit('userAdded');
    }

    
    public function edit($id)
    {
        $data = User::where('id', $id)->first();
        $this->ids = $data->id;
        $this->name = $data->name;
    }

    public function update()
    {
        $this->validate([
            'name'      => 'required',
        ]);

        if ($this->ids) {
            $user = User::find($this->ids);
            $user->update([
                'name'      => $this->name,
            ]);
            session()->flash('message', 'User updated successfully!');
            $this->resetInputFields();
            $this->emit('userUpdated');
        }
    }

    public function render()
    {
        return view('livewire.dashboard.master.user.data-user', [
            'users' => User::orderBy('id', 'DESC')->paginate(10),
        ]);
    }
}
