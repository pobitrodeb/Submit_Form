<div>

    <div class="container p-4">
        <h1 class="text-center"> Student Register Form </h1>

        <form wire:submit.prevent="submit">
            <input type="text" class="form-control my-2" placeholder="Enter Name " wire:model="name">
            <input type="number" class="form-control my-2" placeholder="Enter Roll Number" wire:model="roll_number">
            <input type="email" class="form-control my-2" placeholder="Enter Email Address" wire:model="email">
            <button type="submit" class="btn btn-primary"> Save </button>
        </form>
    </div>

</div>
