<x-layout>
    <div class="auth-container">
        <div class="floating-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>

        <div class="auth-card">
            <form action="{{ route('register') }}" method="POST">
                @csrf

                <div class="text-center mb-8">
                    <h2 class="auth-title text-3xl font-bold mb-2">Create Account</h2>
                    <p class="text-gray-600">Join the Alien Network today</p>
                </div>

                <div class="auth-input-group">
                    <input
                        type="text"
                        name="name"
                        class="auth-input"
                        placeholder=" "
                        required
                        value="{{old('name')}}">
                    <label class="auth-label">Full Name</label>
                </div>

                <div class="auth-input-group">
                    <input
                        type="email"
                        name="email"
                        class="auth-input"
                        placeholder=" "
                        required
                        value="{{old('email')}}">
                    <label class="auth-label">Email Address</label>
                </div>

                <div class="auth-input-group">
                    <input
                        type="password"
                        name="password"
                        class="auth-input"
                        placeholder=" "
                        required>
                    <label class="auth-label">Password</label>
                </div>

                <div class="auth-input-group">
                    <input
                        type="password"
                        name="password_confirmation"
                        class="auth-input"
                        placeholder=" "
                        required>
                    <label class="auth-label">Confirm Password</label>
                </div>

                <button type="submit" class="auth-btn mb-6">
                    Create Account
                </button>

                <p class="text-center text-gray-600">
                    Already have an account?
                    <a href="{{ route('show.login') }}" class="text-blue-600 hover:text-blue-800 font-medium">Sign in</a>
                </p>

                <!-- validation errors -->
                @if($errors->any())
                <div class="mt-4 p-4 bg-red-50 border border-red-200 rounded-lg">
                    @foreach ($errors->all() as $error)
                    <p class="text-red-600 text-sm">{{ $error }}</p>
                    @endforeach
                </div>
                @endif
            </form>
        </div>
    </div>
</x-layout>