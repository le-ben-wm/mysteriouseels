function main() {
    var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("reservedate")[0].setAttribute('min', today);
};
$(document).ready(main);