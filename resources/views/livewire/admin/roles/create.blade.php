<div>
    <x-slot:header>Roles</x-slot:header>

    <div class="card">
        <div class="card-header bg-inv-secondary text-inv-primary border-0">
            <h5>Create a new Role</h5>
        </div>
        <div class="card-body">

            <div class="mb-3">
                <label for="name" class="form-label">Role Title</label>
                <input wire:model.live='role.title' type="text" class="form-control" name="name" id="name"
                    aria-describedby="" placeholder="Enter your Role Title" />
                @error('role.title')
                    <small id="" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>



            <button onclick="confirm('Are you sure you wish to create this Role')||event.stopImmediatePropagation()"
                wire:click='save' class="btn btn-dark text-inv-primary">Save</button>
        </div>
    </div>
</div>
