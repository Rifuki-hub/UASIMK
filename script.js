document.addEventListener('DOMContentLoaded', function () {
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // Mobile menu logic
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            const isMenuOpen = !mobileMenu.classList.contains('hidden');
            document.getElementById('menu-icon-open').classList.toggle('hidden', isMenuOpen);
            document.getElementById('menu-icon-close').classList.toggle('hidden', !isMenuOpen);
        });
    }

    // Desktop search logic
    const searchToggleButton = document.getElementById('search-toggle-button');
    const searchInput = document.getElementById('search-input');
    const desktopMenuItems = document.getElementById('desktop-menu-items');
    const searchIconOpen = document.getElementById('search-icon-open');
    const searchIconClose = document.getElementById('search-icon-close');

    if (searchToggleButton) {
        searchToggleButton.addEventListener('click', function() {
            const isSearchHidden = searchInput.classList.contains('w-0');

            if (isSearchHidden) {
                // Show search
                searchInput.classList.remove('w-0', 'opacity-0', 'p-0');
                searchInput.classList.add('w-64', 'opacity-100', 'px-4');
                if(desktopMenuItems) {
                    desktopMenuItems.style.maxWidth = '0';
                    desktopMenuItems.classList.add('opacity-0', 'invisible');
                }
                searchInput.focus();
                if (searchIconOpen) searchIconOpen.classList.add('hidden');
                if (searchIconClose) searchIconClose.classList.remove('hidden');
            } else {
                // Hide search
                searchInput.classList.add('w-0', 'opacity-0', 'p-0');
                searchInput.classList.remove('w-64', 'opacity-100', 'px-4');
                if(desktopMenuItems) {
                    desktopMenuItems.style.maxWidth = '';
                    desktopMenuItems.classList.remove('opacity-0', 'invisible');
                }
                if (searchIconOpen) searchIconOpen.classList.remove('hidden');
                if (searchIconClose) searchIconClose.classList.add('hidden');
            }
        });
    }

    // Dashboard search logic
    const dashboardSearchForm = document.getElementById('dashboard-search-form');
    if (dashboardSearchForm) {
        dashboardSearchForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const searchResults = document.getElementById('dashboard-search-results');
            if (searchResults) {
                searchResults.classList.remove('hidden');
            }
        });
    }
});
