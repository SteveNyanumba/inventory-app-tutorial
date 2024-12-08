<div>
    <x-slot:header>Users</x-slot:header>

    <div class="card">
        <div class="card-header bg-inv-secondary text-inv-primary border-0">
            <h5>Edit this User</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input wire:model='user.name' type="text" class="form-control" name="name" id="name" aria-describedby=""
                            placeholder="Enter your User's Name" />
                        @error('user.name')
                            <small id="" class="form-text text-danger">{{ $messages }}</small>
                        @enderror
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input wire:model='user.email' type="email" class="form-control" name="email" id="email"
                            aria-describedby="" placeholder="Enter your User's Email Address" />
                        @error('user.email')
                            <small id="" class="form-text text-danger">{{ $messages }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <button onclick="confirm('Are you sure you wish to create this user')||event.stopImmediatePropagation()" wire:click='save' class="btn btn-dark text-inv-primary">Save</button>
        </div>
    </div>
</div>
