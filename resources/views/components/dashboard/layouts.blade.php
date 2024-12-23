    @php
        $LIST_ADMIN_MENU = [
            ['href' => '/dashboard/reports', 'icon' => 'bookmark', 'title' => 'Pantau Pinjaman'],
            ['modal' => 'modals_tambah_data_buku', 'icon' => 'plus', 'title' => ''],
            ['href' => '/dashboard/users', 'icon' => 'user', 'title' => 'User Data'],
        ];
    @endphp

    <x-layouts :title="$title" class="p-5 gap-10">
        @if (session('success'))
            <div class="bg-success/60 text-white px-4 py-2 rounded-xl w-full">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="bg-error/60 text-white px-4 py-2 rounded-xl w-full">
                {{ session('error') }}
            </div>
        @endif

        @role('admin')
            <section class="grid grid-cols-[repeat(auto-fit,minmax(200px,1fr))] gap-5">
                @foreach ($LIST_ADMIN_MENU as $i => $item)
                    <a href="{{ $item['href'] ?? '#' }}" onclick="{{ $item['modal'] ?? '' }}.showModal()"
                        class="flex items-center cursor-pointer justify-center gap-4 whitespace-nowrap px-5 {{ $item['icon'] == 'plus' ? '' : '' }} py-2 h-fit font-semibold rounded-lg border {{ $item['icon'] == 'plus' ? 'bg-purple' : 'bg-custom text-white' }}">
                        <x-dynamic-component :component="'lucide-' . $item['icon']"
                            class="size-5 {{ $item['icon'] == 'plus' ? 'stroke-custom' : 'stroke-white' }} flex-shrink-0" />
                        <h1>{{ $item['title'] }}</h1>
                    </a>
                @endforeach
            </section>
        @endrole

        {{ $slot }}
    </x-layouts>
