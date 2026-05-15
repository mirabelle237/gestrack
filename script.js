document.addEventListener('DOMContentLoaded', () => {
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        form.addEventListener('submit', (e) => {
            let valid = true;
            const inputs = form.querySelectorAll('input[required]');
            
            inputs.forEach(input => {
                if (input.value.trim() === "") {
                    input.style.border = "2px solid red";
                    valid = false;
                } else {
                    input.style.border = "1px solid #ddd";
                }
            });

            if (!valid) {
                e.preventDefault();
                alert("Veuillez remplir tous les champs obligatoires.");
            }
        });
    });
});

function confirmerCommande(fournisseur) {
    return confirm("Voulez-vous ouvrir votre application de messagerie pour contacter " + fournisseur + " ?");
}