<div class="container py-5">
    <div class="card shadow-lg border-0 rounded-3">
        <div class="card-body">
            <h2 class="text-center text-primary fw-bold">Contact Admin</h2>
            <p class="text-center text-muted">Have a question? Send us a message.</p>

            @if(session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form wire:submit.prevent="sendEmail">
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" wire:model="name" class="form-control" placeholder="Enter your name">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" wire:model="email" class="form-control" placeholder="Enter your email">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea wire:model="message" class="form-control" rows="4" placeholder="Enter your message"></textarea>
                    @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100">Send Message</button>
            </form>
        </div>
    </div>
</div>
