document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('faq-search-input');
    const faqList = document.getElementById('faq-list');
    const noResults = document.getElementById('no-results');
    const faqItems = Array.from(faqList.querySelectorAll('.faq-item'));

    if (searchInput) {
        searchInput.addEventListener('input', function () {
            const searchTerm = this.value.toLowerCase().trim();

            // Show loading effect
            faqList.style.display = 'none';
            noResults.classList.add('hidden');

            let loadingSpinner = document.getElementById('loading-spinner');
            if (!loadingSpinner) {
                loadingSpinner = document.createElement('div');
                loadingSpinner.id = 'loading-spinner';
                loadingSpinner.className = 'flex justify-center items-center py-8';
                loadingSpinner.innerHTML = `
                    <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-gray-900"></div>
                    <p class="ml-4 text-gray-600">Mencari...</p>
                `;
                faqList.parentNode.insertBefore(loadingSpinner, noResults);
            }
            loadingSpinner.classList.remove('hidden');

            setTimeout(() => {
                let found = false;
                faqItems.forEach(item => {
                    const question = item.querySelector('.faq-question span').textContent.toLowerCase();
                    const answer = item.querySelector('.faq-answer').textContent.toLowerCase();

                    if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                        item.style.display = '';
                        found = true;
                    } else {
                        item.style.display = 'none';
                    }
                });

                loadingSpinner.classList.add('hidden');
                faqList.style.display = '';

                if (found) {
                    noResults.classList.add('hidden');
                } else {
                    noResults.classList.remove('hidden');
                    noResults.innerHTML = `<p>Tidak ada hasil yang ditemukan untuk "<strong>${searchTerm}</strong>"</p>`;
                }

                if (searchTerm === '') {
                    faqItems.forEach(item => {
                        item.style.display = '';
                    });
                    noResults.classList.add('hidden');
                }
            }, 500); // 500ms delay to simulate loading
        });
    }
});
