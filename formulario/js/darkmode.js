const $html = document.querySelector('html')
const $checkbox = document.querySelector('#switch')

var theme = localStorage.getItem("dark")
$html.classList.add(theme)

if( theme == 'dark-mode'){
    $checkbox.checked = true
}

$checkbox.addEventListener('change', function(){
    if(theme != 'dark-mode'){
        $html.classList.remove(theme)
        localStorage.setItem("dark", "dark-mode")
        theme = localStorage.getItem("dark")
        $html.classList.add(theme)
    }else{
        $html.classList.remove(theme)
        localStorage.setItem("dark", "linear-mode")
        theme = localStorage.getItem("dark")
        $html.classList.add(theme)
    }
})