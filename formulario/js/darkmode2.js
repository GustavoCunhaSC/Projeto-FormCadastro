// JavaScript para alternar o modo escuro
document.addEventListener('DOMContentLoaded', (event) => {
    const checkbox = document.querySelector('.modo-escuro input[type="checkbox"]');
    checkbox.addEventListener('change', function() {
        if (this.checked) {
            document.body.classList.add('dark-mode');
            
        } else {
            document.body.classList.remove('dark-mode');
        }
    });
});
