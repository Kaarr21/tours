<div class="bg-background">
    <section class="mx-auto max-w-3xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="text-center">
            <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-primary/10 text-primary">
                <x-site.icon name="calendar" class="h-6 w-6" />
            </div>
            <h1 class="text-4xl font-bold text-foreground md:text-5xl">Book a Ride</h1>
            <p class="mt-4 text-lg text-muted-foreground">
                Need a chauffeur-driven ride in Nairobi or beyond? Share your pickup and drop-off details and we’ll confirm timing, vehicle, and fare.
            </p>
        </div>

        <div class="mt-10 rounded-xl border border-border/50 bg-card p-6 shadow-sm sm:p-8">
            <h2 class="inline-flex items-center gap-2 text-2xl font-bold text-foreground">
                <x-site.icon name="truck" class="h-6 w-6 text-primary" />Ride request
            </h2>

            <form wire:submit="submit" class="mt-6 space-y-5">
                <div class="grid gap-4 sm:grid-cols-2">
                    <div>
                        <label for="firstName" class="mb-1 block text-sm font-medium text-foreground">First Name *</label>
                        <input id="firstName" type="text" wire:model="firstName" placeholder="Enter your first name" class="w-full rounded-md border-border bg-background shadow-sm focus:border-primary focus:ring-primary" required>
                        @error('firstName') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="lastName" class="mb-1 block text-sm font-medium text-foreground">Last Name *</label>
                        <input id="lastName" type="text" wire:model="lastName" placeholder="Enter your last name" class="w-full rounded-md border-border bg-background shadow-sm focus:border-primary focus:ring-primary" required>
                        @error('lastName') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div>
                    <label for="email" class="mb-1 block text-sm font-medium text-foreground">Email Address *</label>
                    <input id="email" type="email" wire:model="email" placeholder="Enter your email" class="w-full rounded-md border-border bg-background shadow-sm focus:border-primary focus:ring-primary" required>
                    @error('email') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="phone" class="mb-1 block text-sm font-medium text-foreground">Phone / WhatsApp</label>
                    <input id="phone" type="text" wire:model="phone" placeholder="e.g. 07XX XXX XXX" class="w-full rounded-md border-border bg-background shadow-sm focus:border-primary focus:ring-primary">
                    @error('phone') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <div>
                        <label for="destination" class="mb-1 block text-sm font-medium text-foreground">Pickup → Destination *</label>
                        <input id="destination" type="text" wire:model="destination" placeholder="e.g. Westlands → JKIA, CBD → Karen" class="w-full rounded-md border-border bg-background shadow-sm focus:border-primary focus:ring-primary" required>
                        @error('destination') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="groupSize" class="mb-1 block text-sm font-medium text-foreground">Passengers *</label>
                        <select id="groupSize" wire:model="groupSize" class="w-full rounded-md border-border bg-background shadow-sm focus:border-primary focus:ring-primary" required>
                            <option value="">Select passengers</option>
                            @foreach (range(1, 9) as $size)
                                <option value="{{ $size }}">{{ $size === 9 ? '9+ passengers' : ($size === 1 ? '1 passenger' : $size.' passengers') }}</option>
                            @endforeach
                        </select>
                        @error('groupSize') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div>
                    <label for="preferredDate" class="mb-1 block text-sm font-medium text-foreground">Pickup Date</label>
                    <input id="preferredDate" type="date" wire:model="preferredDate" class="w-full rounded-md border-border bg-background shadow-sm focus:border-primary focus:ring-primary">
                    @error('preferredDate') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="specialRequests" class="mb-1 block text-sm font-medium text-foreground">Notes</label>
                    <textarea id="specialRequests" wire:model="specialRequests" rows="4" placeholder="Pickup time, flight number, luggage, child seat, safari notes..." class="w-full rounded-md border-border bg-background shadow-sm focus:border-primary focus:ring-primary"></textarea>
                    @error('specialRequests') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <button type="submit" class="inline-flex w-full items-center justify-center gap-2 rounded-md bg-primary px-6 py-3 font-semibold text-primary-foreground transition hover:bg-primary/90" wire:loading.attr="disabled">
                    <span wire:loading.remove wire:target="submit" class="inline-flex items-center gap-2">
                        <x-site.icon name="paper-airplane" class="h-5 w-5" />Request a Ride
                    </span>
                    <span wire:loading wire:target="submit" class="inline-flex items-center gap-2">
                        <x-site.icon name="clock" class="h-5 w-5 animate-pulse" />Submitting...
                    </span>
                </button>

                <p class="inline-flex w-full items-center justify-center gap-2 text-center text-sm text-muted-foreground">
                    <x-site.icon name="phone" class="h-4 w-4 text-primary" />
                    Richard will confirm by call or WhatsApp within 12 hours
                </p>
            </form>
        </div>
    </section>
</div>
