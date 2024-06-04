<form wire:submit.prevent="login">
    @csrf

    <div>
        <label for="email">Email</label>
        <input wire:model="email" type="email" id="email">
        @error('email') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div>
        <label for="password">Password</label>
        <input wire:model="password" type="password" id="password">
        @error('password') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div>
        <label for="remember">Remember Me</label>
        <input wire:model="remember" type="checkbox" id="remember">
    </div>

    <button type="submit">Login</button>
</form>

