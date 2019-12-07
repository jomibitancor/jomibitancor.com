const mediaquery = window.matchMedia("(max-width: 766px)");
const john_svg = document.getElementById('john-svg');
const michael_svg = document.getElementById('michael-svg');
const bitancor_svg = document.getElementById('bitancor-svg');


if (mediaquery.matches){
    bitancor_svg.setAttribute('width', '400')
}