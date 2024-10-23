@include('pages.header')



<section class="hero-section">

    <div class="container-fluid hero-content py-5">


        <div class="row justify-content-around">

            <div class="order-2 right-form  col-12 col-md-4 pl-3  wow fadeInUp p-0"
                style="visibility: visible; animation-name: fadeInUp;">

                <div class="form-space py-5">
                    {{-- <h6 class="text-center"><img src="{{ asset('image/google-23.jpg') }}" class="w-50" alt=""></a
                        h6> --}}
                    <h2 class="text-center">One click away from your personal workspace ..</h2>

                    <div class="row" style="padding: 40px 50px">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('send.email') }}" method="POST" class="contact-form">
                            @csrf
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label for="name" class="form-label">Name <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="fa-regular fa-user"
                                                style="color: rgb(37 98 174);"></i></div>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ old('name') }}" required>

                                    </div>
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label for="workmail" class="form-label">Work Email <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="fa-solid fa-envelope"
                                                style="color: rgb(37 98 174);"></i></div>
                                        <input type="email" name="workmail" class="form-control"
                                            value="{{ old('workmail') }}" required>

                                    </div>
                                    @error('workmail')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label for="mobileno" class="form-label">Mobile No.<span
                                            class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="fa-solid fa-phone"
                                                style="color: rgb(37 98 174);"></i></div>
                                        <input type="number" name="mobileno" class="form-control"
                                            value="{{ old('mobileno') }}" required>

                                    </div>
                                    @error('mobileno')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label for="nooflicense" class="form-label">No. of Licenses <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="fa-solid fa-list-ol"
                                                style="color: rgb(37 98 174);"></i></div>
                                        <input type="number" name="nooflicense" class="form-control"
                                            value="{{ old('nooflicense') }}" required>

                                    </div>
                                    @error('nooflicense')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="text-center">
                                    <input type="submit" name="submit" value="Get Started" class="theme-btn-1 mt-2">
                                </div>
                            </div>
                        </form>


                    </div>
                </div>



            </div>

            <div class="order-1 hero-heading col-12 col-md-7 mb-5 background-image">

                {{-- <picture class="d-block">
                    <img class="w-100" src="{{ asset('image/hero-new.png') }}" alt="" decoding="async"
                        loading="" data-loaded="true">
                </picture> --}}
                <div class="hero4-img2 aniamtion-key-2">
                    <img src="{{ asset('image/hero4-shape1.svg') }}" alt="">
                </div>
                <div class="hero4-img3 aniamtion-key-3">
                    <img src="{{ asset('image/hero4-shape3.svg') }}" alt="">
                </div>
                <h1 class="text-capitalize">Hungry Bird</h1>
                <p class="display-text">
                    Your top Google partner <span class="text-capitalize">Hungry Bird,</span>
                    <br>
                    Transform Your Workspace with
                    <br><span class="text-capitalize">Google Workspace Solutions.</span>
                </p>

                <p class="mb-5"> <img src="{{ asset('image/gmail.svg') }}" alt="">
                    <img src="{{ asset('image/google.svg') }}" alt="">
                    <img src="{{ asset('image/google-drive.svg') }}" alt="">
                    <img src="{{ asset('image/google-sheet.svg') }}" alt="">
                    <img src="{{ asset('image/google-meet.svg') }}" alt="">
                </p>
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="img-cri">
                                    <img src="{{ asset('image/integrated.png') }}" alt="integrated tools"
                                        style="width: 50px">
                                    <h5 class="mt-3">Integrated
                                        Tools</h5>

                                </div>

                            </div>
                            <div class="col-12 col-md-4">
                                <div class="img-cri">
                                    <img src="{{ asset('image/cloud-storage-1.png') }}" alt="integrated tools"
                                        style="width: 50px">
                                    <h5 class="mt-3">Cloud
                                        Storage</h5>

                                </div>

                            </div>

                            <div class="col-12 col-md-4">
                                <div class="img-cri">
                                    <img src="{{ asset('image/advanced-security.png') }}" alt="integrated tools"
                                        style="width: 50px">
                                    <h5 class="mt-3">Advance Security</h5>

                                </div>

                            </div>

                        </div>
                        <div class="row pt-5">
                            <div class="col-12 col-md-4">
                                <div class="img-cri">
                                    <img src="{{ asset('image/video-conferencing-1.png') }}" alt="integrated tools"
                                        style="width: 50px">
                                    <h5 class="mt-3">Video Conferencing</h5>

                                </div>

                            </div>
                            <div class="col-12 col-md-4">
                                <div class="img-cri">
                                    <img src="{{ asset('image/team-spirit.png') }}" alt="integrated tools"
                                        style="width: 50px">
                                    <h5 class="mt-3">Smart
                                        Collaboration</h5>

                                </div>

                            </div>
                            <div class="col-12 col-md-4">
                                <div class="img-cri">
                                    <img src="{{ asset('image/email-custom.png') }}" alt="integrated tools"
                                        style="width: 50px">
                                    <h5 class="mt-3">Email
                                        Customization</h5>

                                </div>

                            </div>

                        </div>

                    </div>



                </div>


            </div>



        </div>

    </div>



</section>

{{-- banner section --}}

<section class="wrap-sec1">
    <div class="container-fluid">

        <div class="row banner-row">
            <div class="col-lg-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="row">

                    <h2 class="text-black" style="color: #000;">Unlock the Full Potential of Google Workspace Today!
                        <span class="api">Just
                            a Few Clicks! </span>
                    </h2>
                    <p class="mt-3 mb-5 wow fadeInUp para1 cld"
                        style="visibility: visible; animation-name: fadeInUp;">
                        Discover how <span class="text-capitalize">Hungry Bird</span> can transform your business.
                        Effortlessly streamline your workflows, enhance
                        team collaboration, and supercharge productivity—all in just a few simple steps.</p>
                </div>

                <div class="row">
                    <div class="col-md-6 p-0">
                        <div class="m-origin align-items-center d-flex">
                            <div><img class="clm" src="{{ asset('image/24-hour.png') }}" alt=""></div>
                            <div>
                                <h4>
                                    27 x 7</h4>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 p-0">
                        <div class="m-origin align-items-center d-flex">
                            <div><img class="clm" src="{{ asset('image/optimization.png') }}" alt="">
                            </div>
                            <div>
                                <h4>
                                    Consultancy and optimization</h4>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 p-0">
                        <div class="m-origin align-items-center d-flex">
                            <div><img class="clm" src="{{ asset('image/real-time.png') }}" alt=""></div>
                            <div>
                                <h4> Real-Time Collaboration
                                </h4>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 p-0">
                        <div class="m-origin align-items-center d-flex">
                            <div><img class="clm" src="{{ asset('image/intelligent.png') }}" alt="">
                            </div>
                            <div>
                                <h4>
                                    Intelligent Tools</h4>
                            </div>
                        </div>

                    </div>
                </div>



            </div>
            <div class="col-lg-5 fadeInUp">
                <div class="gemini-image">
                    <video width="500" height="500" autoplay muted loop>
                        <source src="{{ asset('image/video/my_workspace_homepage_animation_revised.webm') }}"
                            type="video/webm">
                        Your browser does not support the video tag.
                    </video>
                    <!-- <img src="" class="w-100"> -->
                </div>
            </div>
        </div>
    </div>

</section>

{{-- end banner section --}}

<section class="about-section">
    <div class="container-fluid">
        <div class="text-center">
            <h2 class="mb-4">Why People Choose <span style="color: #4285F4;font-size:85px;">G</span><span
                    style="color: #EA4335;font-size:85px">o</span><span
                    style="color: #FBBC04;font-size:85px;">o</span><span
                    style="color:#4285F4 ;font-size:85px">g</span><span
                    style="color: #34A853;font-size:85px;">l</span><span
                    style="color:#EA4335 ;font-size:85px">e</span> Workspace?</h2>
            <p class="col-lg-8 work mb-5 wow fadeInUp">Google Workspace is more than just a suite of tools—it's a
                complete ecosystem designed to enhance productivity and foster innovation. Here’s why businesses are
                choosing Google Workspace:</p>
        </div>
        <div class="row justify-content-evenly">
            <div class="order-2 col-12 col-md-4 order-1 pt-3">

                <img src="{{ asset('image/about-3.jpeg') }}" class="w-100 h-100">

            </div>
            <div class="order-1 bg-white col-12 col-md-7 pl-3  wow fadeInUp p-0">
                <div class="row align-items-center justify-content-center">



                    <div class="col-md-6">
                        <div class="m-origin">
                            <div class="img-cri">
                                <i class="fa-solid fa-file-shield"></i>
                                <h3 class="mt-3">Secured Data Administration</h3>
                                <p class="mt-3">
                                <ul>
                                    <li>Your company's data is valuable, and Google Workspace makes sure it's
                                        always safe and available.</li>
                                    <li>You can relax knowing that your files are safe from theft
                                        or loss thanks to strong security measures.</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="m-origin">
                            <div class="img-cri">
                                <i class="fa-solid fa-users-viewfinder"></i>
                                <h3 class="mt-3">Unified Experience</h3>
                                <p class="mt-3">
                                <ul>
                                    <li>Combine email, documents, storage, and video conferencing in a single
                                        platform, reducing the need to switch between multiple applications.</li>
                                    <li>This cohesive environment enhances productivity and collaboration by minimizing
                                        the need to switch between multiple applications.</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6">
                        <div class="m-origin">
                            <div class="img-cri">
                                <i class="fa-solid fa-user-shield"></i>
                                <h3 class="mt-3">Robust Security</h3>
                                <p class="mt-3">
                                <ul>
                                    <li>Protect your sensitive information with advanced security measures,
                                        including data loss prevention, encryption, and customizable access controls.
                                    </li>
                                    <li>Google continuously updates its security protocols to address emerging threats,
                                        ensuring that users benefit from the latest protective measures.</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="m-origin">
                            <div class="img-cri">
                                <i class="fa-solid fa-screwdriver-wrench"></i>
                                <h3 class="mt-3">Intelligent Tools</h3>
                                <p class="mt-3">
                                <ul>
                                    <li>Leverage built-in AI features such as Smart Reply, Google Assistant,
                                        and data insights to enhance decision-making and streamline tasks.</li>
                                    <li>Tools like Google Data Studio enable users to create visual reports and
                                        dashboards, transforming complex data into clear, actionable insights.</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
</section>




<section class="content-section bg-light">
    <div class="container-fluid">
        <div class="row content-row justify-content-evenly">
            <div class="col-12 col-md-5">
                <h2 class="text-justify">Maximize Your Team’s Potential with <span>Google Workspace.</span></h2>
                <p class="col-lg-12 work pt-5 pb-5"> <span>Google Workspace</span>, formerly known as G Suite, is a
                    cloud-based
                    productivity suite that includes a variety of tools designed to facilitate collaboration,
                    communication, and
                    productivity for businesses and organizations of all sizes.</p>

                <div class="smart-features">
                    <h4 class="text-justify">Unleash Enhanced Productivity and Collaboration with <span>Google
                            Workspace's</span> Advanced Features</h4>

                    <ul class="workspace-features">
                        <li><img src="{{ asset('image/google-bg.svg') }}"alt="">Smart Suggestions with AI</li>
                        <li><img src="{{ asset('image/google-bg.svg') }}"alt="">Customizable App Integration</li>
                        <li><img src="{{ asset('image/google-bg.svg') }}"alt="">Shared Drives for Team Collaboration
                        </li>
                        <li><img src="{{ asset('image/google-bg.svg') }}"alt="">Offline Access</li>
                        <li><img src="{{ asset('image/google-bg.svg') }}"alt="">Data Loss Prevention </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-image align-content-center"><img src="{{ asset('image/gmail.svg') }}"
                                    alt=""></div>
                            <div class="card-body">
                                <p class="card-text"><span>Gmail</span> provides a powerful email platform with
                                    features such as
                                    smart
                                    categorization, integrated chat, and enhanced security.
                                    <br>
                                    Gmail offers a clean, intuitive layout that makes it easy for users to navigate
                                    their inbox
                                    and manage emails efficiently.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-image justify-content-center align-content-center"><img
                                    src="{{ asset('image/google-slides.svg') }}" alt=""></div>
                            <div class="card-body">
                                <p class="card-text"> <span>Google Sheets</span> is part of Google Workspace and is
                                    widely used for data
                                    analysis, budgeting, and project tracking.
                                    <br>
                                    Google Slides offers a variety of pre-designed templates and themes to give your
                                    presentation a polished look.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-image justify-content-center align-content-center"><img
                                    src="{{ asset('image/google-docs.svg') }}" alt=""></div>
                            <div class="card-body">
                                <p class="card-text"> <span>Google Docs</span> provide Real-time editing and commenting
                                    make teamwork more efficient,
                                    whether for
                                    business projects or group assignments.
                                    <br>
                                    Changes are saved automatically, reducing the risk of data loss and ensuring the
                                    latest
                                    version is always available.
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-image justify-content-center align-content-center"><img
                                    src="{{ asset('image/google-meet2.svg') }}" alt=""></div>
                            <div class="card-body">
                                <p class="card-text"><span>Google Meet</span> is a video conferencing service developed
                                    by Google, designed
                                    to facilitate high-quality virtual meetings, webinars, and video calls. It is part
                                    of Google
                                    Workspace and offers a user-friendly interface, making it suitable for both
                                    professional and
                                    personal use.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-image justify-content-center align-content-center"><img
                                    src="{{ asset('image/google-calender.svg') }}" alt=""></div>
                            <div class="card-body">
                                <p class="card-text"><span>Google Calendar</span> allows users to set up recurring
                                    events (daily, weekly,
                                    monthly) for regular appointments or meetings.
                                    <br>
                                    Seamless integration with other Google services (like Google Meet) allows for easy
                                    scheduling of meetings and events directly from emails.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-image justify-content-center align-content-center"><img
                                    src="{{ asset('image/google-drive.svg') }}" alt=""></div>
                            <div class="card-body">
                                <p class="card-text"><span>Google Drive</span> is a cloud storage service that allows
                                    users to
                                    store, share,
                                    and collaborate on files securely.
                                    <br>
                                    Users can store and access files from anywhere, making it easy to work remotely or
                                    on the
                                    go.
                                </p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


    {{-- <h3 class="pt-5 pb-3 text-capitalize">Key Components Of Google Workspace</h3> --}}





    <div class="row mt-4 pb-3">



    </div>
    </div>




</section>


@include('pages.footer')
