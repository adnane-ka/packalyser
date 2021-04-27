var current = 'fa-sun';
var switch_to = 'fa-moon';

function switchTheme(button)
{
    var body = document.querySelector("body");
    body.classList.toggle("dark-theme");
    button.classList.toggle("is-on-dark");
    
    var icon = button.children[0];
    setCurrentClass(icon);

    icon.classList.remove(current);
    icon.classList.add(switch_to);
}    
    
function setCurrentClass(icon)
{
    if(icon.classList.contains('fa-sun'))
    {
        current = 'fa-sun';
        switch_to = 'fa-moon';
    }
    else
    {
        current = 'fa-moon';
        switch_to = 'fa-sun';
    }
}