<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eric Ogie Aghahowa</title>

    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.css">



</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Eric Ogie Aghahowa</span>
            <span class="d-none d-lg-block">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="/img/ericProfilePic.jpg" alt="..." />
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Projects</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Career History</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#zuri">Zuri/HNG</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact-me">Message Me</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/myname">Composory Task No2</a></li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid p-0">

        <!-- Error Laert -->
        @error('message')
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <span class="text-danger">{{ $message }}.</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror
        @error('name')
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <span class="text-danger">{{ $message }}.</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror
        @error('email')
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <span class="text-danger">{{ $message }}.</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror

        <!-- Message Sent Alert Alert  -->

        @if (session('success'))
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Message Sent!</h4>
            <p>Thank you for reaching out.
                I will do my best to revert as soon as possible. An Automatic
                response mail has been sent with regards to your enquery.</p>
            <hr>
            <p class="mb-0">Please allow me upto 24hours to revert to your message</p>
        </div>
        @endif

        <!-- About-->
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h2 class="mb-0">Eric Ogie Aghahowa</h2>
                <div class="subheading mb-5">
                    Phone: +2347053492875
                    Email: <a href="mailto:name@email.com">ogia.aghahowa@gmail.com</a>
                </div>
                <p class="lead mb-5">I am an analytical and result oriented engineer with experience
                    in Android and Web App developments, Project management and Supply – chain
                    operations. Adroit at putting tiny pieces together to birthing desired finished
                    products within budget and time framework. Eric leverages latest technology trends,
                    design theories, creativity and people to derive value - focused solutions.</p>
                <div class="social-icons">
                    <a class="social-icon" href="https://www.linkedin.com/in/eric-ogie-aghahowa-0038aa11b/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="social-icon" href="https://github.com/EricOgie"><i class="fab fa-github"></i></a>


                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Education-->
        <section class="resume-section" id="education">
            <div class="resume-section-content">
                <h2 class="mb-5">Education</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">University of Applied Science, IUBH</h3>
                        <div class="subheading mb-3">M.Sc</div>
                        <div>Artificial Intelligence</div>
                        <p>Germany</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">Mar 2021</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">University of Benin, UNIBEN</h3>
                        <div class="subheading mb-3">B.Eng</div>
                        <div>Civil Engineering</div>
                        <p>Benin, Edo State, Nigeria</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">Feb 2007 - Mar 2012</span></div>
                </div>
            </div>
        </section>
        <hr class="m-0" />

        <!-- Skills-->
        <section class="resume-section" id="skills">
            <div class="resume-section-content">
                <h2 class="mb-5">Skills</h2>
                <div class="subheading mb-3">Programming Languages & Tools</div>
                <ul class="list-inline dev-icons">
                    <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                    <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                    <li class="list-inline-item"><i class="fab fa-react"></i></li>
                    <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
                    <li class="list-inline-item"><i class="fab fa-vuejs"></i></li>
                    <li class="list-inline-item"><i class="fab fa-android"></i></li>
                    <li class="list-inline-item"></li>
                    <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
                    <li class="list-inline-item"></i><i class="fab fa-java"></i></li>
                    <li class="list-inline-item"></i></li>
                    <li class="list-inline-item"><i class="fab fa-npm"></i></li>
                </ul>
                <div class="subheading mb-3">Workflow</div>
                <ul class="fa-ul mb-0">
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Mobile-First, Responsive Design
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Cross Browser Testing & Debugging
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Cross Functional Teams
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Agile Development & Scrum
                    </li>
                </ul>
            </div>
        </section>
        <hr class="m-0" />

        <!-- Projects -->
        <section class="resume-section" id="projects">
            <div class="resume-section-content">
                <h2 class="mb-5">Projects</h2>
                <div class="subheading mb-3">Recently Completed Projects</div>
                <ol>
                    <li>
                        <div>
                            Develop the backend infrastructure for cryptoex, A commercial/social
                            app where users can trade their gift cards, recharge cards and Bitcoin for FIAT currency.
                            The App was built on PHP/Laravel framework with Postgress and deployed on Heroku. <strong>SEE </strong>
                            <a href="https://github.com/EricOgie/cryptoex-be">GitHub-link</a>, <a href="https://cryptoex.netlify.app/">Live-Link</a>
                        </div>
                    </li>
                    <hr>
                    <li>
                        <div>
                            Collaborated with a Backend dev to build the backend infrastructure for BloodHQ,
                            A web app that makes sourcing and logistics of blood easy and affordable using drone
                            delivery systems. The App was built on PHP/Laravel, Laratrust (For user role management),
                            Flutterwave-payment-gateway and MYSQL. <strong>SEE </strong> <a href="https://github.com/EricOgie/bloodfinder-be-pjt-12">GitHub-link</a>,
                            <a href="https://documenter.getpostman.com/view/15015613/TzkyNfgT#d06157f5-dcd0-4eab-826a-41a93a932a98">API Documentation</a>,
                            <a href="https://blood-hq.netlify.app/#/">Live-Link</a>
                        </div>
                    </li>
                    <hr>
                    <li>
                        <div>
                            Built a microservice for a banking app, EgoBank. The App was built using Goland as the
                            primary language, JWT for authentication, Mux for routing and Sqlx library while adopting
                            HEXAGONAL architecture. <strong>SEE </strong> <a href="https://github.com/EricOgie/egobank">GitHub-link</a>
                        </div>
                    </li>
                    <hr>
                    <li>
                        <div>
                            Design and completely built Oneticha study android app using Model View ViewModel architecture.
                            The app is an O/A level student study app that allow them view video lectures on and offline, take
                            repeated mock exams offline and help them manage their overall preparation for WAEC, and UTME exams.
                            <strong>SEE </strong> <a href="https://github.com/EricOgie/oneTICHA">GitHub-link</a>
                        </div>
                    </li>
                </ol>

            </div>
        </section>
        <hr class="m-0" />

        <!-- Experience-->
        <section class="resume-section" id="experience">
            <div class="resume-section-content">
                <h2 class="mb-5">Career History</h2>

                <!-- one -->
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Backend Developer (PHP/Laravel) </h3>
                        <div class="subheading mb-3">Zuri Intenship</div>
                        <ul>
                            <li>
                                <div>Led a team of twelve, including product designers, Backend,
                                    Frontend and Android mobile developers.
                                </div>
                            </li>
                            <li>
                                <div>
                                    Coordinated project development flow. Monitored project execution
                                    pace and adherence to specifics in adopted standard in project documentation.
                                </div>
                            </li>
                            <li>
                                <div>
                                    Defined and assigned tasks/features using GitHub projects and followed up with
                                    their execution.
                                </div>
                            </li>

                            <li>
                                <div>
                                    Collaborated with other Backend developers to build Application Interfaces,
                                    APIs using PHP and Laravel Framework

                            </li>

                            <li>
                                <div>
                                    Collaborated with Frontend developers to build Frontend Features using Vue.Js
                                </div>
                            </li>
                        </ul>

                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">March 2021 - Present</span></div>
                </div>
                <!-- two -->

                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Depot Superintendent </h3>
                        <div class="subheading mb-3">Cita Petroleum</div>
                        <ul>
                            <li>
                                <div>Sustained a zero-incidence report for twelve months
                                </div>
                            </li>
                            <li>
                                <div>
                                    Maintained a less than 0.3% loading and discharge depot losses
                                </div>
                            </li>
                            <li>
                                <div>
                                    Maintained a zero-pilferage incidence for more than twelve months
                                </div>
                            </li>

                            <li>
                                <div>• Supervised daily stock count for Lagos depot and three other depots outside Lagos state. </div>

                            </li>

                            <li>
                                <div>
                                    Planned and anchored regulatory body’s Inspections [ IATA, DPR, NOSDRA, FAAN NCAA]
                                </div>
                            </li>
                            <li>
                                <div>
                                    Manage all documentations and ensured compliance with company internal policies and regulatory standards.
                                </div>
                            </li>
                        </ul>

                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">March 2021 - Present</span></div>
                </div>
            </div>
        </section>
        <hr class="m-0" />

        <!-- Intenship And Training-->
        <section class="resume-section" id="zuri">
            <div class="resume-section-content">
                <h2 class="mb-5">Internships And Trainings</h2>
                <div>
                    <ul>
                        <li><img style="width: 120px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJUAAAAdCAYAAAC
                        jQS76AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAARDSURBVHgB7ZrBbtNAEIZ
                        /p3Avx0pI3d4qOJBW3GuegPIENU9A+wQ1T9D2CVKeoOUJEu6oLRKquGVvPSZcEAeI8ci2Ml6PHRJ7nTTaTxrVu2uvd3Znd8aT
                        Ag6Hw+FwOBwOh8PhcKwCKpV1RKF53bqxbGIFCGOJ5pAe2uGMvfMIixNiPv1IfNiF63aMZuin/Q2RGNdS6GB1od3GJ/sd1guuW50Nk
                        +FjuhFULB+wJBY1qp+wzzgWzcojrBeaXd+hPtTHmJW/YIVRyLuFIdqLcVQs50jcV9NxQuYq2nTnHIXmdSOXR7o05U6tQUbUZqzRFs
                        s2qrVllvs7Rf5U+hjLwLiHFqSfihkcbrK2/oznuuk1GfF2es8Zu+cQ7SKNPUive8K9NFfDVG4xjWl4H9vsGa5bwOq7rP7KeG/WN71
                        foUjZWvis/oyN95b1mdVLSPplY6ha/wI+im5Pgp9kvtGmjD7KniOFRqycTT4/TQI0y6yTSiE/9lN2zTdI1xg7l1ujvF3y/pDV+8jPe
                        b+kbykMKVuLwHhuWDFeaR6GFWMYme8sO6moox4rUwD4BvagGGAlcisVhEKdQnKa8LGPMQ2Y637WK0yNQwtti8ROClNj1EZbV+izj/I
                        YmuoL61ZmVKcouj0Nu9BCXKTvauPrchEGSMb4KS2b83QSy7NUKAWiUR8dyw4T/qX4FotB43/G+tSs7RW7DpDX7yJ9zotlD3PoF2C+RG
                        cT7k86ygl+9Adolnnd35VwD9chFNp91HN/JOZpd8jaRhXj8Vl9YDyjjOdCyK79f+ao4P6eCDedsrJGcnLY5gI1d/XD/osAnnfgeRj/m
                        UTfnt/cX6JZToQ6xa6vhfYB6kGnt5nD4uVFQgZ6Xht1uuRexa4/C+06lZzhm0bVMzp6D/tuj6iV/HvYf9mLD+SArqN4v2zElhUb2fbW
                        zX2TG0IbZXNBy5KzYyweL46xOpTpUBgjj6nohPJZWUofzPviuoHqTJITSnCNnhc+vN71YQ8ekBN7wj0Kq/8BUgXf7EdCu4KQt+ywxpDVa
                        8gxwiwO2DVN5hksM4kiv6wtmni2jZpPOumqWJn0v8Ljhv/U4yPxZNl/QVC5Lz2UGZUZhCnIeQkpaOMvPsY0OVgWfDeK53nLdBHcvSokeR
                        4ypEx/6ye1ZS6Rd/sBEh3J1ZemGpr4L4VLo+ynLydrtr7gXqdzLdZH3tibRNewywB5wyKd6esswFT/VYqL5iXLT+qSdo0ZMdWiDCDnZL
                        J6q2x9/T6Ij6tcQE4GFW1MTrbufmjYJ4T8QTNAsiCP2agIjSSXRTrSJh2kf2nOKY4s6OehWRSSHarR8mQ+dHfVZONptxP93fw9+XW9c6eXsZiku0Lx33bWFYXEHWYfI5QYfeybyNECZDAUI/pCPcWPVb8bOhwiZgafAnSeubf1i4djjTlHdSag7Ccqh6MSOq0uMU0nkNBpJblF/ANqkrHSvAMviQAAAABJRU5ErkJggg==" alt="Zuri">&emsp;
                            <a href="https://training.zuri.team/"> Zuri Training</a></li>
                    </ul>
                    <hr>
                </div>

                <div>
                    <ul>
                        <li><img style="width: 120px;" src="https://ingressive.org/wp-content/uploads/2020/05/I4G-Logo-Color-Cropped.png" alt="Zuri">
                            &emsp;<a href="https://ingressive.org/"> Ingressive For Good</a></li>
                    </ul>
                </div>
                <hr>

                <div>
                    <ul>
                        <li><img style="width: 30px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJ
                        IAAAAn1BMVEUArv///////f/8//8ArvwAr//+//0Aq//1//8AsP0AsPoApe3P+/9Htuns//8AovBRwu4PqvQWq/Da+f+28Pvd/P1P
                        ve9BtvQIqf///vnv//8AsPcAtP////YAougAofAVqeiv8//j9/+6+P+a7v0orecKouLN+f8hsPBKte4AtPPX//8nseOEy+xYue85uvN
                        Jxe9Ovuj//OpHt+RHs/MMdU7PAAAE5UlEQVR4nO2dC1PbOBRGZVvvvLBTg41JgW2zONuWPtj//9tWcgIN4OukmYnWTr4DMzDgKD65V8p
                        ImbmXMQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA+yP+7xs4GGGUYEpUnRdVlqX+ujYsE5wLofZ6Li5YFfrF4jyrb9xziw78zXHD2l8F62/
                        8xr1IuzHMsPCGgqV32UylXYzuMndhkbbeWmPITOcAG7KUG2GdaFjD2f18/td8B59qd2/td+b+arkZfd41hGP8nbl8Fja04UMky2gRdSAX+
                        VIZIrm8IWMfP3QNsEGvlDUsdAzN3w/lYpGUSSd53WXo7toZdo/g0StWmUIEnofOMEripPvFj6e1qojkMkqtDXeTrFhti9DvO2L0EMcuETt
                        vTfoYcmoEt4yy0V6GE+aylFEDHYvROJI7g5hnSnAyTd3Mmu01DyduFKMCrzTOMIYhDGEIwyMDQxjCEIbHB4ana5i4jfHzjqN0ewtu2w2VM
                        +dir71FvwxjncQLudm6ymld8H8IQ1O5HeLbHXAzhpT9NZRxWUZxksQNUZwvGbMFbXjjDONtem+oIz3Vib7Wa6IvXznnhKGwLlNH94neZhPE
                        /hpG0bfJ4+rx4nLN42XanDe1odw6o3j6/XKbJ93Y9diwjC4K5g9gGgTzJ9rUQY0/4eXs9Zn37TTpeQydITPCWNXAreWcEWdkQqxPXtQ2zjD
                        pu+EPVrlFxMG58Yf6Vqj2jyaE/6/zNJuLuf8x6r1h5GJIBW0PxGwaxdG7MXtnyA8/9oNhUM7a8PCPUIZiiBjSDMXw9GN4+obIUhoYBuWsDT
                        EPaYZiiBjSwDAoyNKDgGFQztoQ85BmKIaIIQ0Mg4IsPQgYBuWsDTEPaYZiiBjSwDAoyNKDgGFQztoQ85BmKIaIIQ0Mg4IsPQgYBuWsDTEPa
                        YZiiBjSwDAoyNKDgGFQztoQ85BmKIaIIQ0Mg4IsPQgYBuWsDTEPaYZiiBjSwDAoyNKDgGFQztoQ85BmKIanHMPYGfraLbxBGKMKxtrr06im
                        JvvzpZsHzK7f2vXNUOofxthqU6BGKadgyIiuC++/+tNt7w0TfVGol7LUillrDWuv9eX8lHpTrUf13zCOLosmdg0+QpseCe8xQinfGGE7S3n
                        /szTSP6vqpdsDt77OFSM6B/gCUm8Xpdvrd8tMzwx18m3y82l1tWYyuZr9rm32BuOS2Nj06hVL3XdD+aupt/dcc0+Pl27VoZYaxW7q2b1+XXO
                        v74a6jDa1D9fC+ZKofMmauvqWD7D25Wt21i89fcMhVmiF4QswhOHRgSEMYQjD4wPDUzCUMop33Fue0QP8mSEzxD7zaKjZuJQ7mpJFcZ5Z4qit
                        MeR7Gq6UKKrQneVENvbt/7q7A8q8rkRKdPI0au8YPnFT0BvNI2Hu5r41QGeayjJPC7eTbx/B74DVfvvDJ2MUD91ZTnycx1InsZSJ+/Lf735Jp
                        M5T5c+jWuHK/ccZUg///YuecN9oL3QPy9E8WvzSWnZQlvnXmuwWy313hNmHrgE2w+h/FSuECBxDe/cpn15Pd/BQV6wgFLl/I5l93jWE48sVtwV
                        17no0lKqzKkvTrJPULfMV0aSEK2YE6378mrvspiK6Ch+VfZ+Sesf/o+cabmtoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABgi/8AIGKne7Rb7XIAA
                        AAASUVORK5CYII=" alt="Zuri">&emsp; <a href="https://hng.tech/"> HNG</a></li>
                    </ul>
                </div>
                <hr>

            </div>

    </div>
    </section>
    <hr class="m-0" />


    <!-- COntact Me Section-->
    <section class="resume-section" id="contact-me">
        <div class="resume-section-content">
            <h2 class="mb-5">Message Me</h2>

            <section class="mb-4">
                <p class="w-responsive mx-auto mb-5">Would you like to reach me? Please do not hesitate to contact me directly. I will revert within
                    a matter of hours to help you.</p>

                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-9 mb-md-0 mb-5">

                        <form id="contact-form" action="/message" method="POST" enctype="multipart/form-data">@csrf

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <label for="name" class="">Your name</label>
                                        <input type="text" id="name" name="name" class="form-control">

                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <label for="email" class="">Your email</label>
                                        <input type="text" id="email" name="email" class="form-control">

                                    </div>
                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <label for="subject" class="">Subject</label>
                                        <input type="text" id="subject" name="subject" class="form-control">

                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-12">

                                    <div class="md-form">
                                        <label for="message">Your message</label>
                                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>

                                    </div>

                                </div>
                            </div>
                            <!--Grid row-->

                            <button class="btn btn-primary" type="submit">Send Message</button>

                        </form>

                        <!-- <div class="text-center text-md-left">
                            <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                        </div> -->
                        <div class="status"></div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-3 text-center">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                <p>Lagos, Nigeria</p>
                            </li>

                            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                <p>*2347054492875</p>
                            </li>

                            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                <p>ogia.aghahowa@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                </div>

            </section>
            <!--Section: Contact v.2-->
        </div>
    </section>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>