var mask1 = IMask(document.getElementById('name'), {
    mask: /^[a-zA-Zа-яА-Я\-]{0,25}$/
});
var mask2 = IMask(document.getElementById('phone'), {
    mask: '+{7}(000)000-00-00'
});