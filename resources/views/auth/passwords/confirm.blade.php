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
<x-template.base content-full title="Confirm your password">
    <x-template.form subtext="Please confirm your password before continuing" :action="route('password.confirm')" method="POST">
        <x-form.input autofocus required name="password" type="password" label="Password" placeholder="••••••••" />

        <div class="flex items-center justify-between">
            @if (Route::has('password.request'))
                <x-link class="text-sm font-semibold" :href="route('password.request')" text="Forgot password?" />
            @endif

            <button class="btn px-5 py-2 text-sm">Confirm</button>
        </div>
    </x-template.form>
</x-template.base>