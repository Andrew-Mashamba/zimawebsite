<div>

    @switch($this->page_id)
        @case(0)

        <livewire:dashboard.dashboard />

            @break

            @case(2)
                <livewire:audit.dashboard />
            @break

        @default

    @endswitch


</div>
