document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('toggleCV');
    const preview = document.getElementById('cvPreview');

    btn.addEventListener('click', () => {
        // Alterne entre cacher et montrer
        preview.classList.toggle('hidden');
        
        // Change le texte du bouton selon l'état
        if (preview.classList.contains('hidden')) {
            btn.innerHTML = '<i class="fas fa-file-pdf"></i> Afficher mon CV';
        } else {
            btn.innerHTML = '<i class="fas fa-eye-slash"></i> Masquer mon CV';
        }
    });
});