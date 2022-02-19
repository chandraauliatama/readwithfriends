<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-slate-200 hover:bg-slate-400 px-5 py-2 font-medium rounded']) }}>
    {{ $slot }}
</button>