<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex items-center justify-center px-4 py-2 bg-blue-600 border border-transparent rounded-md w-auto font-semibold text-xs text-center text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
