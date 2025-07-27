// пропишем функцию random
const random = (min, max) => {
    const rand = min + Math.random() * (max - min + 1);
    return Math.floor(rand);
}

// найдем кнопку
const btn = document.querySelector('#aim');
// повесим обработчик событий
btn.addEventListener('mouseenter', () => {
    btn.style.left = `${random(0, 85)}%`;
    btn.style.top = `${random(0, 80)}%`;
});

// в случае победы выведем:
// btn.addEventListener('click', () => {
//     document.querySelector('#board').style.display = "none"; 
//     document.querySelector('#aimform').style.display = "block"; 
//     document.body.style.backgroundImage='../images/iphone.jpg'
// });
