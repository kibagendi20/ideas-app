<x-layout>
    <form method="POST" action="/login">
        @csrf
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend">LOgin</legend>

            <label class="label" for="email">Email</label>
            <input  class="input" name="email" type="email" placeholder="Your name" required />
            <x-forms.error name="email"/>
            <label class="label">Password</label>
            <input type="password" name="password" class="input" placeholder="Password" required  />
            <x-forms.error name="password"/>
            <button class="btn btn-primary mt-6">Login</button>
        </fieldset>
    </form>
</x-layout>
