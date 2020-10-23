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
<x-template.base content-full title="Sign in">
    <x-template.form subtext="Sign in to your account" :action="route('login')" method="POST">
        <div class="space-y-6">
            <x-form.input autofocus required name="email" type="email" label="Email" placeholder="you@example.com" />
            <x-form.input required name="password" type="password" label="Password" placeholder="••••••••" />
        </div>
        
        <div class="flex items-center justify-between">
            <x-form.checkbox class="form-checkbox" checked name="remember" label="Remember me" />
            
            <button class="btn px-6 py-3 bg-blue-500 rounded-full text-sm">Sign in</button>
            
        </div>
        <div class="col-md-8 offset-md-4">
            <a class="bg-green-500 rounded-lg py-3 px-4" href="{{ route('guestCheckout.index') }}">Checkout as a Guest</a>
        </div>

        <div class="text-sm text-center">
            @if (Route::has('register'))
                <x-link class="font-semibold" :href="route('register')" text="Create account" />
            @endif

            @if (Route::has('register') and Route::has('password.request'))
                <span class="mx-1 text-gray-500">&middot;</span>
            @endif

            @if (Route::has('password.request'))
                <x-link :href="route('password.request')" text="Forgot password?" />
            @endif
        </div>
    </x-template.form>
</x-template.base>
