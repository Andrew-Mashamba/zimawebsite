@extends('layouts.web')

@section('body-section')
    <div class="content content_top_margin_none">
        <div class="content_inner">
            <div class="full_width">
                <div class="full_width_inner">
                    <div data-elementor-type="wp-page" data-elementor-id="6625" class="elementor elementor-6625" style="background-color:#FF5E14">

                        <section id="home"><livewire:frontend.components.welcome /></section>
                        <section id="about"><livewire:frontend.components.about-us /></section>
                        <section id="services"><livewire:frontend.components.service-list /></section>
                        <section id="impact"><livewire:frontend.components.our-work-page /></section>
                        <section id="branches"><livewire:frontend.components.other-work /></section>
                        <section id="contact"><livewire:frontend.components.services /></section>


                    </div>
                </div>
            </div>
        </div>




{{--        <script>--}}
{{--            function scrollToSection(sectionId) {--}}
{{--                const section = document.getElementById(sectionId);--}}
{{--                if (section) {--}}
{{--                    window.scrollTo({--}}
{{--                        top: section.offsetTop,--}}
{{--                        behavior: "smooth"--}}
{{--                    });--}}
{{--                }--}}
{{--            }--}}
{{--        </script>--}}

        <script>
            function scrollToSection(sectionId) {
                // Scroll smoothly to the target section
                const section = document.getElementById(sectionId);
                if (section) {
                    window.scrollTo({
                        top: section.offsetTop,
                        behavior: "smooth"
                    });
                }

                // Remove 'active' class from all menu items
                document.querySelectorAll(".main_menu ul li").forEach(li => li.classList.remove("active"));

                // Add 'active' class to the clicked menu item
                const clickedItem = document.querySelector(`a[onclick="scrollToSection('${sectionId}')"]`).parentElement;
                if (clickedItem) {
                    clickedItem.classList.add("active");
                }
            }
        </script>

    </div>
@endsection
