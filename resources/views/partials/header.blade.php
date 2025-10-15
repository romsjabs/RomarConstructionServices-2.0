<header>

    <div class="contact-details">

        <div class="contact-details-container">

            <a href="{{ route('redirect.facebook') }}" target="_blank" rel="noopener noreferrer">

                <div class="contact-item">

                    <span>
                        <i class="fa-brands fa-facebook"></i>
                    </span>
                    
                    <span>
                        Facebook
                    </span>

                </div>
                
            </a>

        </div>

        <div class="contact-details-container">

            <a href="mailto:contact@romarconstructionph.com?subject=Inquiries" target="_blank" rel="noopener noreferrer">

                <div class="contact-item">

                    <span>
                        <i class="fa-solid fa-envelope"></i>
                    </span>
                    
                    <span>
                        contact@romarconstructionph.com
                    </span>

                </div>

            </a>
            
            <a href="tel:+639120901718" target="_blank" rel="noopener noreferrer">

                <div class="contact-item">

                    <span>
                        <i class="fa-solid fa-phone"></i>
                    </span>
                    
                    <span>
                        (+63) 912-090-1718
                    </span>

                </div>

            </a>

        </div>

    </div>

    <div class="main-header">

        <div class="logo">
            <a href="{{ url('/') }}">
                <img class="img-resize" src="{{ asset('assets/img/logo/logo.webp') }}" alt="Romar Construction Services Logo">
            </a>
        </div>

        <div class="nav-buttons">

            <a href="{{ route('pages.index') }}">
                <span class="nav-item selected">
                    Home
                </span>
            </a>
            
            <a href="{{ route('pages.projects') }}">
                <span class="nav-item">
                    Our Projects
                </span>
            </a>
            
            <a href="{{ route('pages.blog') }}">
                <span class="nav-item">
                    Blog
                </span>
            </a>

            <a href="{{ route('pages.about') }}">
                <span class="nav-item">
                    About
                </span>
            </a>

        </div>

        <div class="contact-button">

            <a href="{{ route('') }}">
                <button type="button"></button>
            </a>

        </div>

    </div>

</header>