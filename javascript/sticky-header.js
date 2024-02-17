// sticky header

let lastScrollTop = 0;
const header = document.querySelector('.header');
let placeholder = document.createElement('div');

// Function to update placeholder height
function updatePlaceholderHeight() {
    // Update the height of the placeholder to match the header's height
    placeholder.style.height = header.offsetHeight + 'px';
}

// Set the initial height and display style for the placeholder
updatePlaceholderHeight();
placeholder.style.display = 'none';

// Insert the placeholder before the header
header.parentNode.insertBefore(placeholder, header);

// Listen for window resize events to update placeholder height
window.addEventListener('resize', updatePlaceholderHeight);

window.addEventListener('scroll', function() {
    let scrollTop = window.scrollY || document.documentElement.scrollTop;

    if (scrollTop > header.offsetHeight) {
        if (scrollTop > lastScrollTop) {
            // Scrolling down
            header.style.position = '';
            header.classList.remove('slide-down');
            placeholder.style.display = 'none';
        } else {
            // Scrolling up
            header.style.position = 'fixed';
            header.classList.add('slide-down');
            placeholder.style.display = 'block';
        }
    } else {
        header.style.position = '';
        header.classList.remove('slide-down');
        placeholder.style.display = 'none';
    }

    lastScrollTop = scrollTop;
});
