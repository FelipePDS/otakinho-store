const close = document.querySelector('.notification img');
const notification = document.querySelector('.notification');

notification.animate([
    { opacity: '0' },
    { transform: 'translateY(-210px)' }, 
    { opacity: '0' },
    { transform: 'translateY(-10px)' },
    { transform: 'translateY(0px)' },
    { opacity: '50%' },
    { opacity: '100%' },
    { opacity: '50%' },
    { opacity: '100%' },
    { opacity: '50%' },
    { opacity: '100%' }
], {
    duration: 1000
})

close.addEventListener('click', () => {
    notification.style.padding = '0px';
    notification.style.fontSize = '0px';
    close.style.display = 'none';
    notification.animate([
        { height: '50px' },
        { height: '40px' },
        { height: '20px' },
        { height: '0px' },
    ], {
        duration: 350
    })
    
    setTimeout(function() {
        notification.style.display = 'none';
        notification.style.removeProperty('padding');
        notification.style.fontSize = '14px';
        close.style.display = 'block';
    }, 350)
})


/*function buttonLogin() {
    const inputs = document.querySelectorAll('input');

    if (inputs[0].value === '' || inputs[1].value === '' || inputs[2].value === '') {
        document.querySelector('.empty-field').style.display = 'block';

        document.querySelector('.empty-field').animate([
            { opacity: '0' },
            { transform: 'translateY(-210px)' }, 
            { opacity: '0' },
            { transform: 'translateY(-10px)' },
            { transform: 'translateY(0px)' },
            { opacity: '50%' },
            { opacity: '100%' },
            { opacity: '50%' },
            { opacity: '100%' },
            { opacity: '50%' },
            { opacity: '100%' }
        ], {
            duration: 1000
        })
        
        document.querySelector('.error').style.display = 'none';
    } else {
        document.querySelector('.empty-field').style.display = 'none';
    };
};*/