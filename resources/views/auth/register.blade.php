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
<x-template.base content-full title="Sign up">
    <x-template.form subtext="Create a new account" :action="route('register')" method="POST">
        <div class="space-y-6">
            <x-form.input autofocus required type="text" name="name" label="Name" placeholder="Your Name" />
            <x-form.input required type="email" name="email" label="Email" placeholder="you@example.com" />
            <x-form.input required type="password" name="password" label="Password" placeholder="••••••••" />
            <x-form.input required type="password" name="password_confirmation" label="Confirm Password" placeholder="••••••••" />
        </div>

        <div class="flex items-center justify-between">
            <div class="text-sm">
                Have an account?

                <x-link class="ml-3 p3-6 text-lg underline py-3 font-semibold" :href="route('login')" text="Sign in" />
            </div>

            <button class="btn bg-green-500 rounded-full px-6 py-3 text-sm">Sign up</button>
        </div>
    </x-template.form>
</x-template.base>