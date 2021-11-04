<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu mt-4">
                <li>
                    <a href="{{ route('dashboard.index') }}">
                        <i class="metismenu-icon pe-7s-monitor"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('tests.index') }}">
                        <i class="metismenu-icon pe-7s-file"></i>
                        Tests
                    </a>
                </li>
                <li>
                    <a href="{{ route('plans.index') }}">
                        <i class="metismenu-icon pe-7s-file"></i>
                        Planes
                    </a>
                </li>
                <li>
                    <a href="{{ route('flashcards.index') }}">
                        <i class="metismenu-icon pe-7s-file"></i>
                        Flashcard
                    </a>
                </li>
                <li>
                    <a href="{{ route('flashcards.show') }}">
                        <i class="metismenu-icon pe-7s-file"></i>
                        Flashcard show
                    </a>
                </li>
                <li>
                    <a href="{{ route('flashcards.finish') }}">
                        <i class="metismenu-icon pe-7s-file"></i>
                        Flashcard finish
                    </a>
                </li>
                <li>
                    <a href="{{ route('cards.index') }}">
                        <i class="metismenu-icon pe-7s-file"></i>
                        Cards
                    </a>
                </li>
                <li>
                    <a href="{{ route('questions.index') }}">
                        <i class="metismenu-icon pe-7s-file"></i>
                        Preguntas
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>