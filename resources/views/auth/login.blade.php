<x-layout>
    <div class="auth-container">
        <div class="floating-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>

        <div class="auth-card">
            <form action="" method="">
                @csrf

                <div class="text-center mb-8">
                    <h2 class="auth-title text-3xl font-bold mb-2">Welcome Back</h2>
                    <p class="text-gray-600">Sign in to your account</p>
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

                <button type="submit" class="auth-btn mb-6">
                    Sign In
                </button>

                <p class="text-center text-gray-600">
                    Don't have an account?
                    <a href="{{ route('show.register') }}" class="text-blue-600 hover:text-blue-800 font-medium">Sign up</a>
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