// Contact form handling
export function initContactForm() {
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', handleFormSubmit);
    }
}

function handleFormSubmit(e) {
    e.preventDefault();

    // Get form data
    const formData = new FormData(e.target);
    const data = Object.fromEntries(formData.entries());

    // Initialize EmailJS (make sure the user ID is correct)
    emailjs.init('user_-oOH0V8M1l_4odq3O'); // Replace with your EmailJS user ID

    // Send email using EmailJS service
    emailjs.send('service_hnt20yh', 'template_8njwlle', {
        name: data.name,
        email: data.email,
        subject: data.subject,
        message: data.message
    })
    .then((response) => {
        console.log('SUCCESS!', response);
        alert('Thank you for your message! I will get back to you soon.');
    })
    .catch((error) => {
        console.error('FAILED...', error);
        alert('Oops! Something went wrong. Please try again.');
    });

    e.target.reset();
}
