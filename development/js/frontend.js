import $ from 'jquery';

import form from './components/form';

var $title = document.getElementById('body-title');

$title.innerHTML = '<em class="text-danger">Hello World</em>';

$(document).ready(function () {
    form.msg('JavaScript is Awesome!');
});
