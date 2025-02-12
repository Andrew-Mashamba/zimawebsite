<div>


    <style>


        input#searchBox {
            margin-top: 15px;
            padding: 12px;
            width: 80%;
            max-width: 400px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            outline: none;
        }

        /* Branches Grid */
        .branches-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 40px;
            max-width: 1200px;
            margin: auto;
        }

        /* Branch Cards */
        .branch {
            background: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .branch:hover {
            transform: translateY(-5px);
        }

        .branch i {
            font-size: 30px;
            color: #FF5E14;
            margin-bottom: 10px;
        }

        .branch h4 {
            margin: 10px 0;
            color: #333;
        }

        .branch p {
            font-size: 14px;
            color: #666;
        }

        .image-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
            width: 90%;
            max-width: 1200px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .image-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .image-item:hover {
            transform: scale(1.05);
        }

        .image-item img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
            border-radius: 8px;
        }



    </style>




    <div class="parent gradient-container2 "
         style="display: flex; gap: 1px;"
         data-id="22f03b9" data-element_type="container"
         data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
         data-core-v316-plus="true" style="width:100%">

















        <div style="width: 24%; height: 1000px; display: flex; justify-content: center; align-items: center;">
            <div class="image-grid" style="margin: auto;">
                <div class="image-item">
                    <img src="{{ asset('/vf/f1.png') }}" alt="Image 1">
                </div>
                <div class="image-item">
                    <img src="{{ asset('/vf/f2.png') }}" alt="Image 2">
                </div>
                <div class="image-item">
                    <img src="{{ asset('/vf/f3.png') }}" alt="Image 3">
                </div>
                <div class="image-item">
                    <img src="{{ asset('/vf/f4.png') }}" alt="Image 4">
                </div>
                <div class="image-item">
                    <img src="{{ asset('/vf/f5.png') }}" alt="Image 5">
                </div>
                <div class="image-item">
                    <img src="{{ asset('/vf/f6.png') }}" alt="Image 6">
                </div>
            </div>
        </div>


        <div class="child full_width_inner" style="width: 76%; background-color:redx" >




            <div data-elementor-type="wp-page" data-elementor-id="6815" class="elementor elementor-6815" >


                <div style=" padding-left:40px;" class="elementor-element elementor-element-d704a67 e-con-full qode_elementor_container_innerx e-flex parallax_section_no e-con e-parent"
                     data-id="d704a67" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}" data-core-v316-plus="true">
                    <div class="elementor-element elementor-element-520da8e elementor-widget elementor-widget-text-editor" data-id="520da8e" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">

                            <h1>Our Branches</h1>
                        </div>
                    </div>
                </div>

            <div style="display : flex; margin-left : 121px;">
                <div style="width: 4px; height: 100px; background-color: #F55C00;"></div>

                <div style="display: flex; gap: 1px;  width: 100%; padding-right: 120px" class="elementor-element elementor-element-d722861 e-con-full qode_elementor_container_inner e-flex
                               parallax_section_no e-con e-parent" data-id="d722861" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}" data-core-v316-plus="true">

                    <div class="elementor-widget-containerx">

                        <h4 class="elementor-heading-title elementor-size-default">
                            Find a Vision Fund branch near you.
                        </h4>
                        <p class="mkdf-st-titlez" style="padding: 6px;">
                            Across Tanzania, women like Amina, Neema, and Joyce are challenging traditional norms and forging their own paths to financial independence. From poultry farming in Dodoma to cassava processing in Mbeya and fish trading in Mwanza,
                            these resilient women are proving that determination and hard work can break the cycle of dependency, uplift families, and inspire communities.
                        </p>
                    </div>

                </div>

            </div>

                <section class="branches-container">
                    <!-- Example Branches -->
                    <div class="branch" data-region="Dar es Salaam">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>Dar es Salaam Branch</h4>
                        <p>Samora Avenue, City Centre</p>
                        <p><strong>Phone:</strong> +255 22 123 456</p>
                    </div>

                    <div class="branch" data-region="Arusha">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>Arusha Branch</h4>
                        <p>Sokoine Road, Arusha City</p>
                        <p><strong>Phone:</strong> +255 27 234 567</p>
                    </div>

                    <div class="branch" data-region="Mwanza">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>Mwanza Branch</h4>
                        <p>Post Street, Mwanza</p>
                        <p><strong>Phone:</strong> +255 28 765 432</p>
                    </div>

                    <div class="branch" data-region="Dodoma">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>Dodoma Branch</h4>
                        <p>Jamatini Street, Dodoma</p>
                        <p><strong>Phone:</strong> +255 26 987 654</p>
                    </div>

                    <div class="branch" data-region="Mbeya">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>Mbeya Branch</h4>
                        <p>Njia Panda, Mbeya</p>
                        <p><strong>Phone:</strong> +255 25 543 210</p>
                    </div>

                    <div class="branch" data-region="Tanga">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>Tanga Branch</h4>
                        <p>Independence Road, Tanga</p>
                        <p><strong>Phone:</strong> +255 23 400 567</p>
                    </div>

                    <div class="branch" data-region="Zanzibar">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>Zanzibar Branch</h4>
                        <p>Stone Town, Zanzibar</p>
                        <p><strong>Phone:</strong> +255 24 567 890</p>
                    </div>

                    <div class="branch" data-region="Shinyanga">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>Shinyanga Branch</h4>
                        <p>Old Bus Stand, Shinyanga</p>
                        <p><strong>Phone:</strong> +255 25 423 678</p>
                    </div>

                    <div class="branch" data-region="Singida">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>Singida Branch</h4>
                        <p>Mzunguko Street, Singida</p>
                        <p><strong>Phone:</strong> +255 26 341 234</p>
                    </div>

                    <div class="branch" data-region="Kigoma">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>Kigoma Branch</h4>
                        <p>Lake Tanganyika Road, Kigoma</p>
                        <p><strong>Phone:</strong> +255 23 556 789</p>
                    </div>

                    <div class="branch" data-region="Mtwara">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>Mtwara Branch</h4>
                        <p>Mtandire Street, Mtwara</p>
                        <p><strong>Phone:</strong> +255 23 400 123</p>
                    </div>

                    <div class="branch" data-region="Ruvuma">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>Ruvuma Branch</h4>
                        <p>Ruvuma Street, Mbinga</p>
                        <p><strong>Phone:</strong> +255 25 678 900</p>
                    </div>
                </section>



            </div>














        </div>

    </div>

</div>











