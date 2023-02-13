const observer1 = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if(entry.isIntersecting) {
            entry.target.classList.add('show1');
        }else{
            entry.target.classList.remove('show1');
        }
    });
});

const observer2 = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if(entry.isIntersecting) {
            entry.target.classList.add('show2');
        }else{
            entry.target.classList.remove('show2');
        }
    });
});

const observer3 = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if(entry.isIntersecting) {
            entry.target.classList.add('show3');
        }else{
            entry.target.classList.remove('show3');
        }
    });
});

const observer4 = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if(entry.isIntersecting) {
            entry.target.classList.add('show4');
        }else{
            entry.target.classList.remove('show4');
        }
    });
});

const hiddenElements1 = document.querySelectorAll('.hiddenx1');
const hiddenElements2 = document.querySelectorAll('.hiddenx2');
const hiddenElements3 = document.querySelectorAll('.hiddenx3');
const hiddenElements4 = document.querySelectorAll('.hiddenx4');
hiddenElements1.forEach((el) => observer1.observe(el));
hiddenElements2.forEach((el) => observer2.observe(el));
hiddenElements3.forEach((el) => observer3.observe(el));
hiddenElements4.forEach((el) => observer4.observe(el));