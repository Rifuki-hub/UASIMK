document.addEventListener('DOMContentLoaded', function () {
    const searchToggleButton = document.getElementById('search-toggle-button');
    const searchInput = document.getElementById('search-input');
    const searchIconOpen = document.getElementById('search-icon-open');
    const searchIconClose = document.getElementById('search-icon-close');
    const searchForm = document.getElementById('search-form');

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

    if (searchForm) {
        searchForm.addEventListener('submit', function (event) {
            const keyword = searchInput.value.trim();
            if (keyword === '') {
                event.preventDefault();
            }
        });
    }

    const dashboardSearchForm = document.getElementById('dashboard-search-form');
    if (dashboardSearchForm) {
        dashboardSearchForm.addEventListener('submit', function(event) {
            const keyword = document.getElementById('dashboard-search-input').value.trim();
            if (keyword) {
                window.location.href = `search-results.php?keyword=${encodeURIComponent(keyword)}`;
            }
            event.preventDefault();
        });
    }
});
