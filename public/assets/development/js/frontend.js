import form from './components/form';
import $ from 'jquery';

var $title = document.getElementById('body-title');

$title.innerHTML = 'Prince Ahmed is alone!';

$(document).ready(function () {
    form.msg('JavaScript is Awesome!');
});
