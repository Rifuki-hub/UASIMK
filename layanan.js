document.addEventListener('DOMContentLoaded', function () {
    const serviceCards = document.querySelectorAll('.service-card');
    const modal = document.getElementById('service-modal');
    const closeModalButton = document.getElementById('close-modal-button');
    const modalTitle = document.getElementById('modal-title');
    const modalContent = document.getElementById('modal-content');

    const serviceDetails = {
        'Layanan Importasi': {
            title: 'Layanan Importasi',
            content: `
                <p>Informasi detail mengenai layanan importasi, termasuk:</p>
                <ul class="list-disc pl-5 mt-2 space-y-1">
                    <li>Pemberitahuan Pengangkutan RKSP</li>
                    <li>Pemberitahuan Pengangkutan Manifest</li>
                    <li>Operasional Kawasan Pabean dan TPS</li>
                </ul>
                <p class="mt-4">Untuk rincian lengkap, silakan unduh dokumen resmi kami.</p>
            `
        },
        'Layanan Ekspor': {
            title: 'Layanan Ekspor',
            content: '<p>Informasi detail untuk layanan ekspor akan segera tersedia.</p>'
        },
        'Fasilitas Kepabeanan': {
            title: 'Layanan Fasilitas Kepabeanan',
            content: '<p>Informasi detail untuk layanan fasilitas kepabeanan akan segera tersedia.</p>'
        },
        'Layanan Cukai': {
            title: 'Layanan Cukai',
            content: '<p>Informasi detail untuk layanan cukai akan segera tersedia.</p>'
        }
    };

    serviceCards.forEach(card => {
        card.addEventListener('click', function (e) {
            e.preventDefault();
            const serviceName = this.querySelector('.service-card-title').textContent;
            const details = serviceDetails[serviceName];

            if (details) {
                modalTitle.textContent = details.title;
                modalContent.innerHTML = details.content;
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            }
        });
    });

    if (closeModalButton) {
        closeModalButton.addEventListener('click', function () {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        });
    }

    if (modal) {
        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }
        });
    }
});
