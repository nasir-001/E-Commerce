<style>
    input[type=text], input[type=password], input[type=email], input[type=number], input[type=select] {
        background-color: #f6f6f6;
        height: 60px;
        border: none;
        color: #0d0d0d;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 5px;
        width: 100%;
        border: 2px solid #f6f6f6;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
    }
</style>
<x-template.base content-full title="Reset your password">
    <x-template.form subtext="Reset your password" :action="route('password.request')" method="POST">
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="space-y-4">
            <x-form.input autofocus required name="email" type="email" label="Email" :value="request('email')" placeholder="you@example.com" />
            <x-form.input required type="password" name="password" label="Password" placeholder="••••••••" />
            <x-form.input required type="password" name="password_confirmation" label="Confirm Password" placeholder="••••••••" />
        </div>

        <div class="text-right">
            <button class="btn px-5 py-2 text-sm">Reset password</button>
        </div>
    </x-template.form>
</x-template.base>