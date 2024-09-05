// Smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Scroll animation for perks
window.addEventListener('scroll'), function(){
    const perks = document.querySelectorAll('.benefit');
    perks.forEach(perk => {
        const position = perk.getBoundingClientRect().top;
        const screenPosition = window.innerHeight}
    )
}