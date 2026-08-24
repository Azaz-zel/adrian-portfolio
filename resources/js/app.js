document.addEventListener('DOMContentLoaded', () => {

    const button = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');

    if (!button || !menu) {
        return;
    }

    button.addEventListener('click', () => {

        const isOpen = menu.classList.toggle('is-open');

        button.classList.toggle('is-open', isOpen);

        button.setAttribute(
            'aria-expanded',
            isOpen ? 'true' : 'false'
        );

        document.body.classList.toggle(
            'overflow-hidden',
            isOpen
        );

    });


    // Tutup menu setelah memilih halaman
    const links = menu.querySelectorAll('a');

    links.forEach(link => {

        link.addEventListener('click', () => {

            menu.classList.remove('is-open');

            button.classList.remove('is-open');

            button.setAttribute(
                'aria-expanded',
                'false'
            );

            document.body.classList.remove(
                'overflow-hidden'
            );

        });

    });

});