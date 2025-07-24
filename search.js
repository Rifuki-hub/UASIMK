document.addEventListener('DOMContentLoaded', function () {
    const searchContainer = document.getElementById('search-container');
    const searchForm = document.getElementById('search-form');
    const searchInput = document.getElementById('search-input');
    const searchToggleButton = document.getElementById('search-toggle-button');
    const searchIconOpen = document.getElementById('search-icon-open');
    const searchIconClose = document.getElementById('search-icon-close');

    const dashboardSearchForm = document.getElementById('dashboard-search-form');
    const dashboardSearchInput = document.getElementById('dashboard-search-input');

    // Header search toggle
    if (searchToggleButton) {
        searchToggleButton.addEventListener('click', function () {
            searchInput.classList.toggle('hidden');
            searchIconOpen.classList.toggle('hidden');
            searchIconClose.classList.toggle('hidden');
            if (!searchInput.classList.contains('hidden')) {
                searchInput.focus();
            }
        });
    }

    // Header search submit on Enter
    if (searchForm) {
        searchForm.addEventListener('submit', function (event) {
            const keyword = searchInput.value.trim();
            if (!keyword) {
                event.preventDefault();
            }
        });
    }

    // Dashboard search
    if (dashboardSearchForm) {
        dashboardSearchForm.addEventListener('submit', function (event) {
            const keyword = dashboardSearchInput.value.trim();
            if (!keyword) {
                event.preventDefault();
            }
        });
    }
});
