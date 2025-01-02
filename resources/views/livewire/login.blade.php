<div>
    <form wire:submit.prevent="authenticate">
        <input type="email" wire:model="email" placeholder="Email">
        <input type="password" wire:model="password" placeholder="Password">
        <input type="checkbox" wire:model="remember"> Remember Me
        <button type="submit">Login</button>
    </form>
</div>
