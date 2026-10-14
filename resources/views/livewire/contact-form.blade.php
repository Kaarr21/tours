<div class="rounded-xl border border-border/50 bg-card/50 p-6 shadow-sm backdrop-blur-sm sm:p-8">
    <h3 class="text-2xl font-bold text-foreground">Send a Message</h3>

    <form wire:submit="submit" class="mt-6 space-y-5">
        <div class="grid gap-4 sm:grid-cols-2">
            <div>
                <label for="contact-firstName" class="mb-1 block text-sm font-medium text-foreground">First Name</label>
                <input id="contact-firstName" type="text" wire:model="firstName" placeholder="Enter your first name" class="w-full rounded-md border-border/50 bg-background shadow-sm focus:border-primary focus:ring-primary" required>
                @error('firstName') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div>
                <label for="contact-lastName" class="mb-1 block text-sm font-medium text-foreground">Last Name</label>
                <input id="contact-lastName" type="text" wire:model="lastName" placeholder="Enter your last name" class="w-full rounded-md border-border/50 bg-background shadow-sm focus:border-primary focus:ring-primary" required>
                @error('lastName') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
        </div>

        <div class="grid gap-4 sm:grid-cols-2">
            <div>
                <label for="contact-email" class="mb-1 block text-sm font-medium text-foreground">Email</label>
                <input id="contact-email" type="email" wire:model="email" placeholder="your.email@example.com" class="w-full rounded-md border-border/50 bg-background shadow-sm focus:border-primary focus:ring-primary" required>
                @error('email') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div>
                <label for="contact-phone" class="mb-1 block text-sm font-medium text-foreground">Phone</label>
                <input id="contact-phone" type="text" wire:model="phone" placeholder="07XX XXX XXX" class="w-full rounded-md border-border/50 bg-background shadow-sm focus:border-primary focus:ring-primary">
                @error('phone') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
        </div>

        <div>
            <label for="contact-subject" class="mb-1 block text-sm font-medium text-foreground">Subject</label>
            <input id="contact-subject" type="text" wire:model="subject" placeholder="Airport transfer, safari, VIP transport..." class="w-full rounded-md border-border/50 bg-background shadow-sm focus:border-primary focus:ring-primary" required>
            @error('subject') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="contact-message" class="mb-1 block text-sm font-medium text-foreground">Message</label>
            <textarea id="contact-message" wire:model="message" rows="5" placeholder="Pickup location, destination, preferred time, number of passengers, and any luggage needs..." class="w-full rounded-md border-border/50 bg-background shadow-sm focus:border-primary focus:ring-primary" required></textarea>
            @error('message') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="rounded-md bg-primary px-6 py-3 font-semibold text-primary-foreground transition hover:bg-primary/90" wire:loading.attr="disabled">
            <span wire:loading.remove wire:target="submit">Send Message</span>
            <span wire:loading wire:target="submit">Sending...</span>
        </button>
    </form>
</div>
