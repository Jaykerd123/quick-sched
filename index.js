document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('.hover-grow');
  
    links.forEach(link => {
      link.addEventListener('click', (e) => {
        // Optional: Prevent default if you don’t want page jumps
        // e.preventDefault();
  
        // If the clicked link is not Home, manage active state for non-Home links
        if (!link.hasAttribute('data-home')) {
          // Remove 'active' class from all non-Home links
          links.forEach(l => {
            if (!l.hasAttribute('data-home')) {
              l.classList.remove('active');
            }
          });
  
          // Add 'active' class to the clicked link
          link.classList.add('active');
        }
      });
    });
  });

