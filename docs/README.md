# Sophie International Education Website Documentation

## Project Overview
This project is a static website for Sophie International Education. It uses a component-based architecture where HTML sections are separated into individual files and loaded dynamically via JavaScript.

## Directory Structure

```
/
├── components/          # Contains HTML fragments for each section
│   ├── navbar.html
│   ├── home.html
│   ├── about.html
│   ├── services.html
│   ├── test-prep.html
│   ├── destinations.html
│   ├── contact.html
│   └── footer.html
├── css/
│   └── style.css        # Main stylesheet
├── js/
│   └── script.js        # Logic for loading components and navigation
├── docs/                # Project documentation
└── index.html           # Main entry point (shell)
```

## Component System

### How it Works
The `index.html` file serves as a layout shell. It contains empty placeholder `div`s with specific IDs (e.g., `<div id="home">`). When the page loads, `js/script.js` fetches the corresponding HTML files from the `components/` directory and injects them into these placeholders.

### Adding a New Component or Page
1.  Create a new HTML file in the `components/` directory (e.g., `new-page.html`).
2.  Add a placeholder div in `index.html`:
    ```html
    <div id="new-page" class="page-section"></div>
    ```
3.  Update `js/script.js` to include the new component in the `components` array:
    ```javascript
    { id: 'new-page', file: 'components/new-page.html' }
    ```
4.  Add a navigation link in `components/navbar.html` if reachable via menu.

## Technologies
-   **HTML5 / CSS3**
-   **Bootstrap 5** (via CDN)
-   **Vanilla JavaScript** (ES6+) for dynamic loading and interactions.

## Local Development
**Important**: Because this project uses the `fetch()` API to load components, it cannot be run directly by opening `index.html` in a file browser (due to CORS policy).
You must use a local server.
-   **VS Code**: Right-click `index.html` and select "Open with Live Server".
-   **Python**: Run `python -m http.server` in the project root.
