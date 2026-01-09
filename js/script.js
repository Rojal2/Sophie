console.log("Sophie App Script Loaded");

// Component Loading Logic
async function loadComponent(elementId, filePath) {
    try {
        const response = await fetch(filePath);
        if (!response.ok) throw new Error(`Failed to load ${filePath}`);
        const html = await response.text();
        document.getElementById(elementId).innerHTML = html;
    } catch (error) {
        console.error('Error loading component:', error);
        document.getElementById(elementId).innerHTML = `<div class="alert alert-danger">Error loading content: ${error.message}</div>`;
    }
}

async function loadAllComponents() {
    const components = [
        { id: 'navbar-placeholder', file: 'components/navbar.html' },
        { id: 'home', file: 'components/home.html' },
        { id: 'about', file: 'components/about.html' },
        { id: 'services', file: 'components/services.html' },
        { id: 'test-prep', file: 'components/test-prep.html' },
        { id: 'destinations', file: 'components/destinations.html' },
        { id: 'contact', file: 'components/contact.html' },
        { id: 'footer-placeholder', file: 'components/footer.html' }
    ];

    try {
        await Promise.all(components.map(c => loadComponent(c.id, c.file)));
        // Initialize Bootstrap components if needed after loading (like tooltips usually, but here just Collapse maybe)
        // Re-highlight active nav if needed, though default is Home active.
        highlightCurrentNav();
    } catch (err) {
        console.error("Critical error loading components", err);
    }
}

// Navigation Logic
function navigateTo(pageId) {
    // Prevent default anchor behavior if event exists
    if (window.event) window.event.preventDefault();

    // Hide all sections
    const sections = document.querySelectorAll('.page-section');
    sections.forEach(section => {
        section.classList.remove('active');
    });

    // Show target section
    const target = document.getElementById(pageId);
    if (target) {
        target.classList.add('active');
        window.scrollTo(0, 0); // Scroll to top
    }

    // Update Active Nav State
    highlightCurrentNav(pageId);

    // Close mobile menu if open
    const navbarCollapse = document.getElementById('navbarNav');
    if (navbarCollapse && navbarCollapse.classList.contains('show')) {
        const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse) || new bootstrap.Collapse(navbarCollapse, { toggle: false });
        bsCollapse.hide();
    }
}

function highlightCurrentNav(pageId = 'home') {
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.classList.remove('active');
    });

    // Highlight current nav item
    // The ID logic in navbar.html is 'nav-' + pageId
    const activeNav = document.getElementById('nav-' + pageId);
    if (activeNav) {
        activeNav.classList.add('active');
    }
}

// Initialize on DOM Ready
document.addEventListener('DOMContentLoaded', () => {
    loadAllComponents();
});
