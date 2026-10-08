@include('templates.Header')

<body class="min-h-screen bg-gray-100">

 @include('templates.notification')

    <div class="flex min-h-screen items-center justify-center px-4 py-8">

        <div class="w-full max-w-md">

            <!-- Register Card -->
            <div class="rounded-2xl bg-white p-6 shadow-xl sm:p-8">

                <form action="{{url('store_candidates')}}" method="POST">
                    @csrf

                    <!-- Name -->
                    <div class="mb-3">
                        <label
                            for="name"
                            class="mb-2 block text-sm font-medium text-gray-700"
                        >
                            Name
                        <span class='text-danger h5'>*</span></label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Enter your name"
                            required
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm
                                   outline-none transition
                                   focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100"
                        >

                        @error('name')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label
                            for="email"
                            class="mb-2 block text-sm font-medium text-gray-700"
                        >
                            Email
                        <span class='text-danger h5'>*</span></label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Enter your email"
                            required
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm
                                   outline-none transition
                                   focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100"
                        >

                        @error('email')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Mobile -->
                    <div class="mb-3">
                        <label
                            for="mobile"
                            class="mb-2 block text-sm font-medium text-gray-700"
                        >
                            Mobile
                        <span class='text-danger h5'>*</span></label>

                        <input
                            type="tel"
                            id="mobile"
                            name="mobile"
                            value="{{ old('mobile') }}"
                            placeholder="Enter your mobile number"
                            required
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm
                                   outline-none transition
                                   focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100"
                        >

                        @error('mobile')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-6">
                        <label
                            for="password"
                            class="mb-2 block text-sm font-medium text-gray-700"
                        >
                            Password
                        <span class='text-danger h5'>*</span></label>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Enter your password"
                            required
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm
                                   outline-none transition
                                   focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100"
                        >

                        @error('password')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit -->
                    <button
                        type="submit"
                        class="w-full rounded-lg bg-indigo-600 px-4 py-3
                               text-sm font-semibold text-white
                               transition hover:bg-indigo-700
                               focus:outline-none focus:ring-2
                               focus:ring-indigo-500 focus:ring-offset-2"
                    >
                        Create Account
                    </button>
                </form>

                <!-- Login -->
                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-500">
                        Already have an account?

                        <a
                            href=""
                            class="font-semibold text-indigo-600 hover:text-indigo-700"
                        >
                            Login
                        </a>
                    </p>
                </div>

            </div>

            <!-- Footer -->
            <p class="mt-6 text-center text-xs text-gray-400">
                © {{ date('Y') }} Your Store. All rights reserved.
            </p>

        </div>

    </div>

</body>
</html>
