document.addEventListener('DOMContentLoaded', () => {

    const button = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');

    if (!button || !menu) {
        return;
    }

    const links = menu.querySelectorAll('a');

    const setState = (isOpen) => {

        menu.classList.toggle('is-open', isOpen);

        button.classList.toggle('is-open', isOpen);

        button.setAttribute(
            'aria-expanded',
            isOpen ? 'true' : 'false'
        );

        button.setAttribute(
            'aria-label',
            isOpen ? 'Close navigation' : 'Open navigation'
        );

        document.body.classList.toggle(
            'overflow-hidden',
            isOpen
        );

        // Keep the closed menu out of the tab order entirely, otherwise
        // keyboard users tab into links they cannot see.
        menu.setAttribute('aria-hidden', isOpen ? 'false' : 'true');

        links.forEach(link => {
            link.tabIndex = isOpen ? 0 : -1;
        });
    };

    setState(false);

    button.addEventListener('click', () => {

        const isOpen = !menu.classList.contains('is-open');

        setState(isOpen);

        if (isOpen && links.length) {
            links[0].focus();
        }
    });

    // Close the menu after choosing a page.
    links.forEach(link => {
        link.addEventListener('click', () => setState(false));
    });

    document.addEventListener('keydown', (event) => {

        if (event.key !== 'Escape' || !menu.classList.contains('is-open')) {
            return;
        }

        setState(false);

        // Return focus to the control that opened the menu.
        button.focus();
    });

});
