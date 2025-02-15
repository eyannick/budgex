/*!
    * Start Bootstrap - SB Admin v7.0.4 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2021 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    // 
// Scripts

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
             document.body.classList.toggle('sb-sidenav-toggled');
        }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

    // Enable tooltips globally
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Enable popovers globally
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });

    // Activate Bootstrap scrollspy for the sticky nav component
    const navStick = document.body.querySelector('#navStick');
    if (navStick) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#navStick',
            offset: 150,
        });
    }

    // Toggle the side navigation
    const drawerToggle = document.body.querySelector('#drawerToggle');
    if (drawerToggle) {
        drawerToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('drawer-toggled');
        });
    }

    // Close side navigation when width < LG
    const drawerContent = document.body.querySelector('#layoutDrawer_content');
    if (drawerContent) {
        drawerContent.addEventListener('click', event => {
            const BOOTSTRAP_LG_WIDTH = 992;
            if (window.innerWidth >= 992) {
                return;
            }
            if (document.body.classList.contains("drawer-toggled")) {
                document.body.classList.toggle("drawer-toggled");
            }
        });
    }


    // Add active state to sidbar nav links
    let activatedPath = window.location.pathname.match(/([\w-]+\.php)/, '$1');

    if (activatedPath) {
        activatedPath = activatedPath[0];
    } else {
        activatedPath = 'accueil';
    }

    const targetAnchors = document.body.querySelectorAll('[href="' + activatedPath + '"].nav-link');

    targetAnchors.forEach(targetAnchor => {
        let parentNode = targetAnchor.parentNode;
        while (parentNode !== null && parentNode !== document.documentElement) {
            if (parentNode.classList.contains('collapse')) {
                parentNode.classList.add('show');
                const parentNavLink = document.body.querySelector(
                    '[data-bs-target="#' + parentNode.id + '"]'
                );
                parentNavLink.classList.remove('collapsed');
                parentNavLink.classList.add('active');
            }
            parentNode = parentNode.parentNode;
        }
        targetAnchor.classList.add('active');
    });

});

// start fade out in one second, take 300ms to fade
$('#toast').delay(5000).fadeOut(300); 

