const tags = ['input', 'select', 'textarea'];

const checkIsDirt = e => {
    const el = e.target;
    if (tags.includes(el.tagName.toLowerCase())) {
        const field = el.closest('.form-field');
        if (field) {
            if (field.classList.contains('is-dirt'))
                return;
            field.classList.add('is-dirt');
        }
    }
}
document.addEventListener('focusin',checkIsDirt);
document.addEventListener('input',checkIsDirt);

document.addEventListener('focusout', (e) => {
    const el = e.target;
    if (tags.includes(el.tagName.toLowerCase())) {
        const field = el.closest('.form-field');
        if (el.value === '')
            field.classList.remove('is-dirt');
    }
});

const checkFields = () => {
    const fields = document.querySelectorAll(tags.join(','));
    if (fields.length > 0)
        fields.forEach(el => {
            const field = el.closest('.form-field');
            if (field && el.value !== '')
                field.classList.add('is-dirt');
        });
}
checkFields();
document.addEventListener('checkFields',checkFields);



document.addEventListener('focusin', (e) => {
    const el = e.target;
    if (el.matches('.wpcf7-not-valid')) {
        const parent = el.parentElement;
        parent.querySelector('.wpcf7-not-valid-tip')?.remove();
    }
});